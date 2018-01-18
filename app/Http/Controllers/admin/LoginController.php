<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use App\Http\Model\user;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


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

   
       //发送验证码
    public function code(Request $request)
    {
        // $phone = $request->input(phone);
        // $config = [
        //     'accessKeyId'    => 'LTAIoIL9CepmtlBW',
        //     'accessKeySecret' => 'y8cJCQJazGlX1KIhLbNrPw4O3kYomW',
        // ];

        // $client  = new Client($config);
        // $sendSms = new SendSms;
        // $sendSms->setPhoneNumbers($phone);
        // $sendSms->setSignName('冉泽龙');
        // $sendSms->setTemplateCode('SMS_120405864');
        $code = rand(100000, 999999);
        // $sendSms->setTemplateParam(['code' => $code);
        // $sendSms->setOutId('demo');
        session(['code'=>$code]);
        // $client->execute($sendSms);
        echo $code;
    }

    //执行登录
    public function dologin(Request $request)
    {
        $password = $request->input('password');
        $phone = $request->input('phone');
        // $id = shop::where('phone',$phone)->id;
        //session(['shopid'=>$id]);
        if($password == session('password')){
            echo 1;
        }else{
            echo 0;
        }
    }



}

