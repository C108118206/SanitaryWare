<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\product_type;
use DB;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($product_type_id)
    {
        $product_type_table = product_type::find($product_type_id);
        $product_type = !is_null($product_type_table->main_product_type_id) ? $product_type_table->main_product_type_id : $product_type_id;
        $product_type_name = product_type::find($product_type); 
        $product = DB::table('products')
            ->select('products.id as product_id'
            ,'products.name as product_name'
            ,'products.launch_date as product_launch_date'
            ,'products.takedown_date as product_takedown_date'
            ,'products.image_path as image_path'
            ,'products.created_at as product_created_at'
            ,'product_type.id as product_type_id'
            ,'product_type.main_product_type_id as main_product_type_id'
            ,'product_type.name as product_type_name')
            ->join('product_type','products.product_type_id','=','product_type.id')
            ->where('product_type_id',$product_type)->orwhere('main_product_type_id',$product_type)->orderBy('products.created_at','desc')->get();

        return view('backstage.backstage_product',['product' => $product,'product_type' => $product_type_name]);
    }

    public function front_product_index($id = 1){

        if (product_type::find($id)->main_product_type_id !== null){
            $product = product::join('product_type','products.product_type_id','=','product_type.id')
            ->where('product_type.id',$id)->paginate(8);
        }else{
            $product = product::join('product_type','products.product_type_id','=','product_type.id')
            ->where('product_type.id',$id)
            ->orWhere('product_type.main_product_type_id',$id)
            ->paginate(8);
        }
        
        $product_type = product_type::all();
        return view('product',['products' => $product,'product_type' => $product_type,'id' => $id]);
        // $product_types = product_type::all();
        
        // $product = $id === null ?  product::where('product_type_id',1)->paginate(8) : product::where('product_type_id',$id)->paginate(8);

        // $title_type = $id === null ? product_type::find(1)->name : product_type::find($id)->name;
        // return view('product',['product_types' => $product_types , 'product_type' => $id, 'product' => $product, 'title_type' => $title_type]);
    }

    public function front_product_details($id = null){
        $product = product::find($id);

        $product_type = product_type::all();
        return view('product_details',['product' => $product,'product_type' => $product_type,'id' => $id]);
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
            'name' => 'required',
            'content' => 'required',
            'size' => 'required',
            'material' => 'required',
            'launch_date' => 'required',
            'takedown_date' => 'required',
            'product_type_id' => 'required',
            'image_path' => 'required',
        ]);
        product::create($content);

        return redirect()->route('backstage-product');
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
        $product = product::table('products')
                ->join('productType','products.product_type_id','=','product_type.id')
                ->where(function($query) use($Rules,$Rules_product_type){
                    return $query->where($Rules)->where($Rules_product_type[0]);
                })
                ->orWhere(function($query) use($Rules,$Rules_product_type){
                    return $query->where($Rules)->where($Rules_product_type[1]);
                });
        // $product = product::where($Rules)->orderBy('created_at','desc')->get();

        
        return view('backstage.product.backstage_product_'.product_type::find($request->product_type_id)->en_name,['product' => $product]);
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
    }
}
