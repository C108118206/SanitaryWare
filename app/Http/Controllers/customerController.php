<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fix;
use App\Models\diy;


class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_fix()
    {
        $fixs = fix::orderBy('created_at','desc')->paginate(10);
        return view('backstage.customer.backstage_customer_fix',['fixs' => $fixs]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_diy()
    {
        $diys = diy::orderBy('created_at','desc')->paginate(10);
        return view('backstage.customer.backstage_customer_diy',['diys' => $diys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function diy_store(Request $request)
    {
        //
        $content = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'launch_date' => 'required',
            'takedown_date' => 'required',
            'image_path' => 'required',
        ]);
        diy::create($content);

        return redirect()->route('backstage-customer-diy');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fix_store(Request $request)
    {
        //
        $content = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'launch_date' => 'required',
            'takedown_date' => 'required',
            'image_path' => 'required',
        ]);
        fix::create($content);

        return redirect()->route('backstage-customer-fix');
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
    public function fix_destroy($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function diy_destroy($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find_diy(Request $request)
    {
        if (!isset($request->name)) {
            $request->name = "";
        }
        if (!isset($request->start)) {
            $request->start = '1911/1/1';
        }
        if (!isset($request->end)) {
            $request->end = '9999/12/31';
        }

        $diys = diy::where([
            ['title','like','%'.$request->name.'%'],
            ['launch_date','>=',$request->start],
            ['takedown_date','<=',$request->end],
        ])->orderBy('created_at','desc')->paginate(10);

        return view('backstage.customer.backstage_customer_diy',['diys' => $diys]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find_fix(Request $request)
    {
        if (!isset($request->name)) {
            $request->name = "";
        }
        if (!isset($request->start)) {
            $request->start = '1911/1/1';
        }
        if (!isset($request->end)) {
            $request->end = '9999/12/31';
        }

        $fixs = fix::where([
            ['title','like','%'.$request->name.'%'],
            ['launch_date','>=',$request->start],
            ['takedown_date','<=',$request->end],
        ])->orderBy('created_at','desc')->paginate(10);

        return view('backstage.customer.backstage_customer_fix',['fixs' => $fixs]);
    }
}
