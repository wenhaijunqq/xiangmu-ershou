<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use App\Http\Model\seller_log;
use DB;

 class LoginController extends Controller
{
    //显示登录界面
    public function login()
    {
        return view('/home/Login');
    }

    //检查电话号码是否正确
    public function phone(Request $request)
    {
    	$phone = $request->input('phone');
		$res = DB::table('user') -> where('phone',$phone) ->first();

        if($res){
            echo '1';
        }else{
            echo '0';
        }
    }

    //发送验证码
    public function code(Request $request)
    {
    	$phone = $request->input('phone');

           $config = [
               'accessKeyId'    => 'LTAIJ33Rm3OWNv7b',
               'accessKeySecret' => 'ViXzSAUkYRLQC73lCvyVT6waz8FzbS',
           ];

           $client  = new Client($config);
           $sendSms = new SendSms;
           $sendSms->setPhoneNumbers($phone);
           $sendSms->setSignName('飞天科技');
           $sendSms->setTemplateCode('SMS_120365798');
           $num = rand(100000, 999999);
           $sendSms->setTemplateParam(['num' => $num]);
           $sendSms->setOutId('demo');
           $request->session()->put('code', $num);

           dump($client->execute($sendSms));
       }


    //执行登录
    public function dologin(Request $request)
    {
    	$code = $request->input('code');
    	$phone = $request->input('phone');
    	// $id = shop::where('phone',$phone)->id;
    	//session(['shopid'=>$id]);
    	if($code == session('code')){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }



}

