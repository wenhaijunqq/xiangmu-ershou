<?php

namespace App\Http\Controllers\Home\Centerst;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;


class MaicheController extends Controller
{
   
    
        //显示个人中心界面
        public function index()
        {
            return view('home/centers/CenterMaiche');
        }
    
}
