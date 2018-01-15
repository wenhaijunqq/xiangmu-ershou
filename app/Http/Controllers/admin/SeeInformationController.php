<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\vehicle_information;
class SeeInformationController extends Controller
{
    
    public function index($id)
    {
    	//获取对应的数据
    	$data = vehicle_information::where('car_id',$id)->first();
    	
    	//获取基础信息视图
        return view('/admin/seeinformation',['data'=>$data]);
    }

}
