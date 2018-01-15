<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use App\Http\Model\seller_log;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        //显示个人中心界面
        public function index()
        {
            return view('home/PersonalCenter');
        }
    
}
