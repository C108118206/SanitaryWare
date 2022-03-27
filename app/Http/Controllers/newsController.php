<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = news::orderBy('created_at','desc')->paginate(10);
        return view('backstage.backstage_news',['news' => $news]);
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
            'title' => 'required',
            'launch_date' => 'required',
            'takedown_date' => 'required',
            
        ]);
        $news = auth()->user()->news()->create($content);

        return redirect()->route('backstage-news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
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

        $news = news::where([
            ['title','like','%'.$request->name.'%'],
            ['launch_date','>=',$request->start],
            ['takedown_date','<=',$request->end],
        ])->orderBy('created_at','desc')->paginate(10);

        return view('backstage.backstage_news',['news' => $news]);
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
