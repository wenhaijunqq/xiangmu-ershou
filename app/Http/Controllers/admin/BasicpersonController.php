<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class BasicpersonController extends Controller
{
    public function index($id)
    {
    	//执行查看的操作
        $data = DB::table('orders') -> where('id',$id) -> get();
        $sell = DB::table('user') -> where('id',$data[0]->sell_id) -> get();
        $buy = DB::table('user') -> where('id',$data[0]->buy_id) -> get();
        $ping = DB::table('assessor') -> where('id',$data[0]->ping_id) -> get();
        // dd($data);
        // dd($sell);
        //将数据带回网页
        return view('/admin/basicperson',['data'=>$data,'sell'=>$sell,'buy'=>$buy,'ping'=>$ping]);
    }

    public function show($id)
    {
        $data = DB::table('vehicle_information') -> where('car_id',$id) -> get();
        // dd($data);
        return view('admin.basiccar',['data'=>$data]);
    }
}
