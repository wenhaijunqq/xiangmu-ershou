<?php

namespace App\Http\Controllers\Home\Centerst;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;


class DuibiController extends Controller
{
   
    
        //显示个人中心对比界面
        public function index()
        {
            return view('home/centers/CenterDuibi');
        }
    
}
