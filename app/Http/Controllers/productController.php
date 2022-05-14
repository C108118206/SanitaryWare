<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\product_type;
use App\Models\product_image;
use DB;
use Illuminate\Support\Facades\Log;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($product_type_id)
    {
        $product_type_sub_table = product_type::where('main_product_type_id',$product_type_id)->get();
        $product_type_table = product_type::find($product_type_id);
        $product_type = !is_null($product_type_table->main_product_type_id) ? $product_type_table->main_product_type_id : $product_type_id;
        $product_type_name = product_type::find($product_type); 
        $product = DB::table('products')
            ->select('products.id as product_id'
            ,'products.name as product_name'
            ,'products.created_at as product_created_at'
            ,'product_type.id as product_type_id'
            ,'product_type.main_product_type_id as main_product_type_id'
            ,'product_type.name as product_type_name')
            ->join('product_type','products.product_type_id','=','product_type.id')
            ->where('product_type_id',$product_type)->orwhere('main_product_type_id',$product_type)->orderBy('products.id','desc')->get();
        foreach ($product as $v) {
            $v->image_path = product_image::where('product_id',$v->product_id)->count() >= 1 ? product_image::where('product_id',$v->product_id)->first()->image_path : '';
        }
        


        return view('backstage.backstage_product',
        [   'product' => $product,
            'product_type' => $product_type_name, 
            'product_type_id' => $product_type_id,
            'product_type_sub' => $product_type_sub_table,
        ]);
    }

    public function front_product_index($id = 1){

        if (product_type::find($id)->main_product_type_id !== null){
            $product = product_type::join('products','products.product_type_id','=','product_type.id')
            ->where('product_type.id',$id)->orderBy('products.id','desc')->paginate(8);
        }else{
            $product = product_type::join('products','products.product_type_id','=','product_type.id')
            ->where('product_type.id',$id)
            ->orWhere('product_type.main_product_type_id',$id)
            ->where('product_type.enabled',1)
            ->orderBy('products.id','desc')->paginate(8);
        }
        foreach ($product as $v) {
            $v->image_path = product_image::where('product_id',$v->id)->count() >= 1 ? product_image::where('product_id',$v->id)->first()->image_path : '';
        }
        
        $product_type = product_type::where('enabled',1)->get();
        return view('product',['products' => $product,'product_type' => $product_type,'id' => $id]);
        // $product_types = product_type::all();
        
        // $product = $id === null ?  product::where('product_type_id',1)->paginate(8) : product::where('product_type_id',$id)->paginate(8);

        // $title_type = $id === null ? product_type::find(1)->name : product_type::find($id)->name;
        // return view('product',['product_types' => $product_types , 'product_type' => $id, 'product' => $product, 'title_type' => $title_type]);
    }

    public function front_product_details($id = null){
        $product = product::find($id);
        $product->image_path = product_image::where('product_id',$id)->count() >= 1 ? product_image::where('product_id',$id)->get() : '';
        $product_type = product_type::all();
        return view('product_details',['product' => $product,'product_type' => $product_type,'id' => $product->product_type_id]);
    }

    public function edit_image($id){
        $product = product::find($id);
        $product->image_path = product_image::where('product_id',$product->product_id)->count() >= 1 ? product_image::where('product_id',$product->product_id)->first()->image_path : '';
        $product_image = product_image::where('product_id',$id)->get();

        return view('backstage.backstage_product_image',['product_image' => $product_image,'product' => $product,'id' => $id]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'details_introduction' => 'nullable',
            'Precautions' => 'nullable',
            'product_type_id' => 'required',
        ]);

        $content['details_introduction'] = !isset($content['details_introduction']) ? "" : $content['details_introduction']; 

        if (isset($content['image'])) {
            $path = $request->file('image')->store('public/uploads/products'); //上傳圖片
            $content['image_path'] = $path;
        }

        if ($content['id'] == "0") {
            //空id 進行新增
            $product = product::create($content);
        } else {
            //否則進行更新
            $product = product::find($content['id'])->update($content);
        }

        $product_type_id = !is_null(product_type::find($content['product_type_id'])->main_product_type_id)
                ? product_type::find($content['product_type_id'])->main_product_type_id
                : $content['product_type_id'];

        return redirect()->route('backstage-product-product_type_id',$product_type_id);
    }

    public function store_type(Request $request)
    {
        $content = $request->validate([
            'type_id' => 'required',
            'type_name' => 'required',
            'main_type_id' => 'required',
        ]);

        $table = array(
            'id' => $content['type_id'],
            'name' => $content['type_name'],
            'main_product_type_id' => $content['main_type_id'],
        );

        if ($content['type_id'] == "0") {
            //空id 進行新增
            $product = product_type::create($table);
        } else {
            //否則進行更新
            $product = product_type::find($content['type_id'])->update($table);
        }
        return redirect()->route('backstage-product-product_type_id',$table['main_product_type_id']);
    }

    public function store_image(Request $request){

        $content = $request->validate([
            'id' => 'required',
            'image-01' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image-02' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image-03' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image-04' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image-05' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image-06' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image-07' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image-08' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        for($i = 1 ; $i <= 8 ; $i++){
            if(isset($content["image-0$i"])){
                $path = $request->file("image-0$i")->store('public/uploads/products');

                if(product_image::where([
                    ["product_id",$content['id']],
                    ["serial_num",$i]
                    ])->count() == 1){
                    $product = product_image::where([
                        ["product_id",$content['id']],
                        ["serial_num",$i]
                        ])->update(['image_path' => $path]);
                }else{ 
                    $product = product_image::create([
                        "product_id" => $content['id'],
                        "image_path" => $path,
                        "serial_num" => $i,
                    ]);
                }
            }
        }
        return redirect()->route("backstage-product-image",$content['id']);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find_product(Request $request)
    {
        $Rules = [];
        $Rules_product_type = [];
        if(isset($request->product_type_id)){
            array_push($Rules_product_type,['id',$request->product_type_id]);
            array_push($Rules_product_type,['main_product_type_id',$request->product_type_id]);
        }
        if (isset($request->name)) {
            array_push($Rules,['products.name','like','%'.$request->name.'%']);
        }
        if (isset($request->start)) {
            array_push($Rules,['products.launch_date','>=',$request->start]);
        }
        if (isset($request->end)) {
            array_push($Rules,['products.takedown_date','<=',$request->end]);
        }
        $product = DB::table('products')
                ->join('product_type','products.product_type_id','=','product_type.id')
                ->where(function($query) use($Rules,$Rules_product_type){
                    return $query->where($Rules)->where($Rules_product_type[0]);
                })
                ->orWhere(function($query) use($Rules,$Rules_product_type){
                    return $query->where($Rules)->where($Rules_product_type[1]);
                })->get();
        // $product = product::where($Rules)->orderBy('created_at','desc')->get();

        
        return view('backstage.backstage_product',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = product::find($id);
        $product_type_id = $product->product_type_id;
        $product->delete();

        return redirect()->route('backstage-product-product_type_id',$product_type_id);
    }

    public function destroy_type($id)
    {
        //
        $product = product_type::find($id);
        $product_type_id = $product->main_product_type_id;
        $product->delete();

        return redirect()->route('backstage-product-product_type_id',$product_type_id);
    }

    //AJAX 讀取編輯資料
    public function get_product_value($id)
    {
        $product = product::find($id);
        return $product->toJson();
    }

    //AJAX 讀取編輯資料
    public function get_product_type_value($id)
    {
        $product = product_type::find($id);
        return $product->toJson();
    }

}
