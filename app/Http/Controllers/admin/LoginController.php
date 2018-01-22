<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use App\Http\Model\user;


 class LoginController extends Controller
{
    //显示登录界面
    public function login()
    {
        return view('admin/login');
    }

    //检查电话号码是否正确
    public function phone(Request $request)
    {   
       
        $phone = $request->input('phone'); 

        if(!preg_match("/^1[34578]{1}\d{9}$/",$phone)){  
            echo "not"; //不是电话号码
        }else{  
             $res = user::where('phone',$phone)->first();
             if($res){
                echo 'ok'; //电话可用
             }else{
                echo 'no'; //不是商家电话
             }
        }  
    }

    //执行登录
    public function dologin(Request $request)
    {
    	$code = $request->input('password');
    	$phone = $request->input('phone');
    	// $id = user::where('phone',$phone)->id;
    	// user(['id'=>$id]);
    	if($code == session('password')){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }



}

