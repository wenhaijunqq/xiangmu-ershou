<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\appointment;
class EstimateWaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载待评估的页面
        $data = appointment::where('ping_id','>',0)->where('assess_status',0)->get();
        return view('admin/estimate/wait',['data'=>$data]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //加载评估时间 修改评估状态
        // 获取加载时间
        $date = date('Y-m-d H:i:s',time());
       
        // 修改评估状态
        $res = appointment::where('car_id',$id)->update(['assess_status'=>1,'assess_time'=>$date]);
        if($res){
             echo "<script>alert('提交成功！');location.href='/admin/estimate/already'</script>";   
        }else{
            echo "<script>alert('提交失败！');location.href='".$_SERVER['HTTP_REFERER']."'</script>";
        }

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
