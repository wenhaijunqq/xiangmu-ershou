<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;//导入系统类
class DbController extends Controller
{
    public function getInfo()
    {
    	//创建查询sql语句
    	$data = DB::select('select * from user');
    
    }
}