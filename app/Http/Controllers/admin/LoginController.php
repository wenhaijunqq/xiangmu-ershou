<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	    //登录页
    public function register()
    {	
        return view('home.Login');
    }


   public function dotelregister()
   {
   		 $res = Input::except('_token');
        $yzcode = $res['yzcode'];
        unset($res['yzcode']);

        //手机号验证
        $rule = [
            'tel'=>'required|regex:/^1[34578][0-9]{9}$/|unique:user_details,tel',
        ];
        $validator = Validator::make($res,$rule);

        //如果验证失败
        if($validator->fails()){
            return back() -> withErrors($validator) -> withInput();
        }
        if(session('yzcode') != $yzcode)
        {
            return back()->withErrors('验证码错误') -> withInput();
        }

        //存放数据
        $user = new User();
        $user -> phone = $res['tel'];
        $user -> identity = 2;
        $user -> save();
        $id = $user -> uid;

        $userdetail = new UserDetail();
        $userdetail -> uid = $id;
        $userdetail -> tel = $res['tel'];
        $userdetail -> status = 1 ;
        $userdetail -> save();

        return redirect('home.index');
   }
}
