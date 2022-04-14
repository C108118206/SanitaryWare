<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fix;
use App\Models\perform;
use App\Models\product;
use App\Models\search;


class customerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about_us()
    {
        $performs =perform::orderBy('created_at', 'desc')->take(8)->get();
        return view('about_us', ['performs' => $performs]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_fix()
    {
        $fixs = fix::orderBy('created_at', 'desc')->get();
        return view('backstage.customer.backstage_customer_fix', ['fixs' => $fixs]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_performance()
    {
        $performances = perform::orderBy('created_at', 'desc')->get();
        return view('backstage.customer.backstage_customer_performance', ['performances' => $performances]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $content = $request;


        if ($content['title'] == "") {
            $search_result = search::all();
            return view('search', ['search_result' => $search_result]);
        } else {
            $search_result = search::where('title', 'LIKE', "%" . $content['title'] . "%")
                ->orwhere('content', 'LIKE', "%" . $content['title'] . "%")
                ->orwhere('url', 'LIKE', "%" . $content['title'] . "%")
                ->get();

            $product_result = product::where('name', 'LIKE', "%" . $content['title'] . "%")
                ->orwhere('content', 'LIKE', "%" . $content['title'] . "%")
                ->orwhere('size', 'LIKE', "%" . $content['title'] . "%")
                ->orwhere('material', 'LIKE', "%" . $content['title'] . "%")
                ->orwhere('details_introduction', 'LIKE', "%" . $content['title'] . "%")
                ->get();

            return view('search', ['search_result' => $search_result, 'product_result' => $product_result]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function performance_store(Request $request)
    {
        //
        $content = $request->validate([
            'id' => 'required',
            'title' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if (isset($content['image'])) {
            $path = $request->file('image')->store('public/uploads/perform'); //上傳圖片
            $content['photo_path'] = $path;
        }

        if ($content['id'] == "0") {
            //空id 進行新增
            $performs = perform::create($content);
        } else {
            //否則進行更新
            $performs = perform::find($content['id'])->update($content);
        }


        return redirect()->route('backstage-customer-performance');
    }

    public function fix_report(Request $request)
    {
        $content = $request->validate([
            'declarer' => 'required',
            'title' => 'required',
            'content' => 'required',
            'phone' => 'required',
        ]);

        fix::create($content);

        return redirect()->route('customer_service')->with('notice', '已成功建立維修通報表單');
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
            'id' => 'required',
            'declarer' => 'required',
            'title' => 'required',
            'content' => 'required',
            'phone' => 'required',
            'status' => 'nullable',
        ]);

        if ($content['id'] == "0") {
            //空id 進行新增
            $fix = fix::create($content);
        } else {
            //否則進行更新
            $fix = fix::find($content['id'])->update($content);
        }


        return redirect()->route('backstage-customer-fix');
    }


    /**
     * Set finished status on fixed item.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fix_finish($id)
    {
        //
        $fix = fix::find($id);
        $fix['status'] = "完工";

        $fix->update();
        
        return redirect()->route('backstage-customer-fix');
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
        $fix = fix::find($id)->delete();
        return redirect()->route('backstage-customer-fix');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function performance_destroy($id)
    {
        //
        $performance = perform::find($id)->delete();
        return redirect()->route('backstage-customer-performance');
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
            ['title', 'like', '%' . $request->name . '%'],
            ['created_at', '>=', $request->start],
            ['created_at', '<=', $request->end],
        ])->orderBy('created_at', 'desc')->get();

        return view('backstage.customer.backstage_customer_fix', ['fixs' => $fixs]);
    }

    //AJAX 讀取perform編輯資料
    public function get_per_value($id)
    {
        //
        $perform = perform::find($id);
        return $perform->toJson();
    }

    //AJAX 讀取perform編輯資料
    public function get_fix_value($id)
    {
        //
        $fix = fix::find($id);
        return $fix->toJson();
    }

    //AJAX 讀取導覽列數量
    public function get_nav_value()
    {
        //
        $myarray['fixesNum'] = fix::all()->where('status', '==' , '回報中')->count();
        $myarray['productsNum'] = product::all()->count();

        return json_encode($myarray);
    }
}
