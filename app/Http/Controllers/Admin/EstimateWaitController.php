<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\appointment;
use DB;
class EstimateWaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //加载待评估的页面
        // 分页搜索
        //判断是否键名传递过来 并获取
        $key = $request->input('key')? $request->input('key') : "";
        if($key == ""){
            $data = appointment::where('ping_id','>',0)->where('assess_status',0)->paginate(8);
            return view('admin/estimate/wait',['data'=>$data]);
        }else{
            // 获取值
            $val = $request->input('val');
            $reqall = $request->all();
            if($key == "rid"){
                $data = appointment::where('ping_id','>',0)->where('assess_status',0)->where('rid','like','%'.$val.'%')->paginate(8);
            }else if($key == "car_name"){
                $data = appointment::where('ping_id','>',0)->where('assess_status',0)->where('car_name','like','%'.$val.'%')->paginate(8);
            }else if($key == "sell_id"){
                $data = appointment::where('ping_id','>',0)->where('assess_status',0)->where('sell_id','like','%'.$val.'%')->paginate(8);
            }
            // dd($reqall['val']);
            return view('admin/estimate/wait',['data'=>$data,'reqall'=>$reqall]);
        }
        
         
        
        
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //加载评估时间 修改评估状态
        // 获取加载时间
        $date = date('Y-m-d H:i:s',time());
       
        // 修改评估状态
        $res = appointment::where('car_id',$id)->update(['assess_status'=>1,'assess_time'=>$date]);
        if($res){
             echo 1;   
        }else{
            echo  0;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "sda21";

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //接受id执行修改
        $res = appointment::where('car_id',$id)->update(['ping_id'=>'']);
        if($res){
            echo "1";
        }else{
            echo "0";
        }
    }


}
