<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    public function loginForm()
    {
        return view("login");
    }

    public function loginProcess(Request $request) //這行你會覺得它很奇怪
    {
        $users = DB::select('select * from users where username ="'.$request->input("userName").'"');
        if(empty($users) == 1) {
            echo '<script>alert("登入失敗")</script>';
            return view('login');
        }else {
            $url = "/backstage";
            echo "<script type='text/javascript'>";
            echo "window.location.href='$url'";
            echo "</script>";
        }
    }
}
