<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use App\Http\Model\seller_log;


 class LoginController extends Controller
{
    //显示登录界面
    public function login()
    {
        return view('home/Login');
    }

    //检查电话号码是否正确
    public function phone(Request $request)
    {
    	$phone = $request->user('phone');
		if(!preg_match("/^1[34578]{1}\d{9}$/",$phone)){
		    echo "not"; //不是电话号码
		}else{
		     $res = seller_log::where('phone',$phone)->first();
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
    	// $sendSms->setSignName('飞天科技');
    	// $sendSms->setTemplateCode('SMS_120405864');
    	// $code = rand(100000, 999999);
    	// $sendSms->setTemplateParam(['code' => $code);
    	// $sendSms->setOutId('demo');
    	// session(['code'=>$code]);
    	// $client->execute($sendSms);
    	// echo $code;
    }

    //执行登录
    public function dologin(Request $request)
    {   
    	$res = Input::except('_token');
        $user = User::where('phone',$res['phone'])->first();
        $UserDetail = UserDetail::where('id',$user['id'])->first();
        //如果数据库中没有此用户，返回登录页面
        if(!$user)
        {
            return back()->withErrors('没有这个用户') -> withInput();
        }
        //验证密码
        if(user::decrypt($user['password']) != trim($res['password']))
        {
            return back()->withErrors('密码错误') -> withInput();
        }
        // //验证码
        // if(session('code') != $res['captcha'])
        // {
        //     return back()->withErrors('验证码错误') -> withInput();
        // }
        //验证身份
        if($user['position'] != 1)
        {
            return back()->withErrors('您没有管理员权限') -> withInput();
        }
        if ( $UserDetail['status'] == 0) {
            return back()->withErrors(' 当前用户已被禁用，请您联系客服。') -> withInput();
        }
        session(['user'=>$user]);
        return redirect('/admin/index');






        // $code = $request->input('code');
    	// $phone = $request->input('phone');
    	// $id = user::where('phone',$phone)->id;
    	// session(['shopid'=>$id]);
    	// if($code == session('code')){
    	// 	echo 1;
    	// }else{
    	// 	echo 0;
    	// }
    }



}

