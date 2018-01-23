<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\vehicle_information;
class tuichuController extends Controller
{
    
    public function index(request $request)
    {	$request->session()->put('phone','');
    	//获取基础信息视图
        return view('/admin/login');
    }

}