<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\product_type;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::where('product_type_id',17)->orderBy('created_at','desc')->paginate(10);
        return view('backstage.backstage_product',['product' => $product]);
    }

    public function index_glass()
    {
        $product = product::where('product_type_id',1)->orderBy('created_at','desc')->paginate(10);
        return view('backstage.product.backstage_product_glass',['product' => $product]);
    }

    public function index_shower()
    {
        $product = product::where('product_type_id',2)->orderBy('created_at','desc')->paginate(10);
        return view('backstage.product.backstage_product_shower',['product' => $product]);
    }

    public function index_toilet()
    {
        $product = product::where('product_type_id',3)->orderBy('created_at','desc')->paginate(10);
        return view('backstage.product.backstage_product_toilet',['product' => $product]);
    }

    public function index_clothes_hanger()
    {
        $product = product::where('product_type_id',4)->orderBy('created_at','desc')->paginate(10);
        return view('backstage.product.backstage_product_clothes-hanger',['product' => $product]);
    }

    public function index_floor()
    {
        $product = product::where('product_type_id',5)->orderBy('created_at','desc')->paginate(10);
        return view('backstage.product.backstage_product_floor',['product' => $product]);
    }

    public function index_VAF()
    {
        $product = product::where('product_type_id',6)->orderBy('created_at','desc')->paginate(10);
        return view('backstage.product.backstage_product_VAF',['product' => $product]);
    }

    public function front_product_index($id = null){
        $product_types = product_type::all();
        
        $product = $id === null ?  product::paginate(8) : product::where('product_type_id',$id)->paginate(8);

        return view('product',['product_types' => $product_types , 'product_type' => $id, 'product' => $product]);
    }

    public function front_product_details($id = null){
        $product = product::find($id);

        return view('product_details',['product' => $product]);
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
    public function show($id)
    {
        //
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
