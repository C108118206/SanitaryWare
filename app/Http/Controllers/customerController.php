<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fix;
use App\Models\perform;
use App\Models\product;
use App\Models\search;
use App\Models\story;
use App\Models\business_items;
use App\Models\business_type;
use App\Models\self_info;
use App\Models\business;
use App\Models\diy;
use DB;


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
        $story = story::orderBy('created_at','desc')->first();
        $business = business::all();
        $business_items = business_items::all();
        $business_type = business_type::all();
        return view('about_us', ['performs' => $performs,'story' => $story ,'business' => $business , 'business_items' => $business_items , 'business_types' => $business_type]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_me()
    {
        $self = self_info::find(1);
        return view('backstage.customer.backstage_customer_me',["self" => $self]);
    }

    public function index_business()
    {
        $business_type = business_type::all();

        $business = DB::table("business")
            ->select("business_type.name as business_type_name"
                ,"business.name as business_name"
                ,"business.id as id")
            ->join("business_type","business.business_type_id",'=','business_type.id')->get();

        $business_item = DB::table("business_items")
            ->select("business_items.name as items_name"
                ,"business_items.id as id"
                ,"business_type.name as business_type_name")
            ->join("business_type","business_type.id",'=','business_items.business_type_id')->get();

        return view('backstage.customer.backstage_customer_business',["business" => $business, "business_type" => $business_type , "business_item" => $business_item ]);
    }

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function front_diy()
    {
        $diys = diy::orderBy('created_at', 'desc')->get();
        return view('customer_diy', ['diys' => $diys]);
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_diy()
    {
        $diys = diy::orderBy('created_at', 'desc')->get();
        return view('backstage.customer.backstage_customer_diy', ['diys' => $diys]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_story()
    {
        $stories = story::orderBy('created_at', 'desc')->get();
        return view('backstage.customer.backstage_customer_story', ['stories' => $stories]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function story_store(Request $request)
    {
        //
        $content = $request->validate([
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($content['id'] == "0") {
            //空id 進行新增
            $stories = story::create($content);
        } else {
            //否則進行更新
            $stories = story::find($content['id'])->update($content);
        }


        return redirect()->route('backstage-customer-story');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_me(Request $request)
    {
        $content = $request->validate([
            "phone_number" => 'required',
            "fax" => 'required',
            "mail" => 'required',
        ]);
        self_info::find(1)->update($content);
        return redirect()->route('backstage-customer-me');
    }

    public function store_business(Request $request)
    {
        $content = $request->validate([
            "id" => 'nullable',
            "name" => 'required',
            "business_type_id" => 'required',
        ]);

        if(isset($content['id']) && $content['id'] != 0){
            business::find($content['id'])->update($content);
        }else{
            business::create($content);
        }
        return redirect()->route('backstage-customer-business');
    }

    public function store_business_item(Request $request)
    {
        $content = $request->validate([
            "id" => 'nullable',
            "name" => 'required',
            "business_type_id" => 'required',
        ]);

        if(isset($content['id']) && $content['id'] != 0){
            business_items::find($content['id'])->update($content);
        }else{
            business_items::create($content);
        }
        return redirect()->route('backstage-customer-business');
    }

    public function store_business_type(Request $request)
    {
        $content = $request->validate([
            "id" => 'nullable',
            "name" => 'required',
        ]);

        if(isset($content['id']) && $content['id'] != 0){
            business_type::find($content['id'])->update($content);
        }else{
            business_type::create($content);
        }
        return redirect()->route('backstage-customer-business');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function diy_store(Request $request)
    {
        //
        $content = $request->validate([
            'id' => 'required',
            'launch_date' => 'required',
            'takedown_date' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'file' => 'mimes:doc,pdf|max:2048',
            'video' => 'mimes:avi,flv,wmv,mov,mp4,mpg|max:50000',
        ]);

        if (isset($content['image'])) {
            $path = $request->file('image')->store('public/uploads/diy'); //上傳圖片
            $content['image_path'] = $path;
        }

        if (isset($content['file'])) {
            $path = $request->file('file')->store('public/uploads/diy'); //上傳圖片
            $content['file_path'] = $path;
        }

        if (isset($content['video'])) {
            $path = $request->file('video')->store('public/uploads/diy'); //上傳圖片
            $content['video_path'] = $path;
        }

        if ($content['id'] == "0") {
            //空id 進行新增
            $diy = diy::create($content);
        } else {
            //否則進行更新
            $diy = diy::find($content['id'])->update($content);
        }


        return redirect()->route('backstage-customer-diy');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function diy_destroy($id)
    {
        //
        $diy = diy::find($id)->delete();
        return redirect()->route('backstage-customer-diy');
    }

    public function business_destroy($id)
    {
        //
        $business = business::find($id)->delete();
        return redirect()->route('backstage-customer-business');
    }

    public function business_type_destroy($id)
    {
        //
        $business = business::where("business_type_id",$id)->delete();
        $items = business_items::where("business_type_id",$id)->delete();
        $type = business_type::find($id)->delete();
        return redirect()->route('backstage-customer-business');
    }

    public function business_item_destroy($id)
    {
        //
        $items = business_items::find($id)->delete();
        return redirect()->route('backstage-customer-business');
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
    public function get_story_value($id)
    {
        //
        $story = story::find($id);
        return $story->toJson();
    }

    //AJAX 讀取perform編輯資料
    public function get_fix_value($id)
    {
        //
        $fix = fix::find($id);
        return $fix->toJson();
    }

    //AJAX 讀取DIY編輯資料
    public function get_diy_value($id)
    {
        //
        $diy = diy::find($id);
        return $diy->toJson();
    }

    //AJAX 讀取導覽列數量
    public function get_nav_value()
    {
        //
        $myarray['fixesNum'] = fix::all()->where('status', '==' , '回報中')->count();
        $myarray['productsNum'] = product::all()->count();

        return json_encode($myarray);
    }

    //AJAX 讀取編輯資料
    public function get_business_item_value($id)
    {
        //
        $items = business_items::find($id);
        return $items->toJson();
    }

    //AJAX 讀取編輯資料
    public function get_business_type_value($id)
    {
        //
        $types = business_type::find($id);
        return $types->toJson();
    }

    //AJAX 讀取編輯資料
    public function get_business_value($id)
    {
        //
        $business = business::find($id);
        return $business->toJson();
    }
}
