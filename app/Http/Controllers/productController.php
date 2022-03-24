<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FixController extends Controller
{
    public function FixCreate(Request $request) //這行你會覺得它很奇怪
    {
        $users = DB::select('insert into fix values("'.$request->input("productId").'", "'.$request->input("productName").'", "'.$request->input("productDetail").'", "'.$request->input("productSize").'", "'.$request->input("productmaterial").'", "'.$request->input("startDate").'", "'.$request->input("endDate").'", "'.$request->input("detail").');');
        echo '<script>'.$users.'</script>';
    }
    public function FixUpdate(Request $request) //這行你會覺得它很奇怪
    {
        $users = DB::select('select * from users where username ="'.$request->input("userName").'"');
        if(empty($users) == 1) {
            echo '<script>alert("登入失敗")</script>';
            return view('login');
        }else {
            echo '<script>alert("登入成功")</script>';
            return view('login');
        }
    }
    public function FixDelete(Request $request) //這行你會覺得它很奇怪
    {
        $users = DB::select('select * from users where username ="'.$request->input("userName").'"');
        if(empty($users) == 1) {
            echo '<script>alert("登入失敗")</script>';
            return view('login');
        }else {
            echo '<script>alert("登入成功")</script>';
            return view('login');
        }
    }
}
