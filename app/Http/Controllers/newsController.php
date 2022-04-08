<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use Carbon\Carbon;
use Log;

use function PHPUnit\Framework\isNull;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $current_date = Carbon::now('Asia/Taipei');
        $date = Carbon::parse($current_date)->format('Y-m-d');

        //首頁選出三則最新公告
        $news = news::whereDate('launch_date', '<=', $date)->whereDate('takedown_date', '>=', $date)->orderBy('created_at', 'desc')->paginate(3);
        return view('dashboard', ['news' => $news]);
    }

    public function show($id = null)
    {
        $current_date = Carbon::now('Asia/Taipei');
        $date = Carbon::parse($current_date)->format('Y-m-d');

        if (is_null($id)) {
            $news = news::whereDate('launch_date', '<=', $date)->whereDate('takedown_date', '>=', $date)->orderBy('created_at', 'desc')->paginate(5);
            return view('news', ['news' => $news]);
        } else {
            $news = news::findMany($id);
            return view('news', ['news' => $news]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = news::orderBy('created_at', 'desc')->get();
        return view('backstage.backstage_news', ['news' => $news]);
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
            'title' => 'required',
            'description' => 'nullable',
            'launch_date' => 'required',
            'takedown_date' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if (isset($content['image'])) {
            $path = $request->file('image')->store('public/uploads/news'); //上傳圖片
            $content['photo_path'] = $path;
        }

        if ($content['id'] == "0") {
            //空id 進行新增
            $news = auth()->user()->news()->create($content);
        } else {
            //否則進行更新
            $news = news::find($content['id'])->update($content);
        }

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
            ['title', 'like', '%' . $request->name . '%'],
            ['launch_date', '>=', $request->start],
            ['takedown_date', '<=', $request->end],
        ])->orderBy('created_at', 'desc')->get();

        return view('backstage.backstage_news', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($request)
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
        $news = news::find($id)->delete();
        return redirect()->route('backstage-news');
    }

    //AJAX 讀取編輯資料
    public function get_value($id)
    {
        //
        $news = news::find($id);
        return $news->toJson();
    }
}
