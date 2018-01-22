<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\vehicle_information;
use App\Http\Model\appointment;
class BasicInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        
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
        //加载修改基础信息页面
        $data = vehicle_information::where('car_id',$id)->first();
        return view('admin/estimate/updateinformation',['data'=>$data]);
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
        // 获取数据把基础信息添加到数据库
        // 把数据添加的数据库
        $data = $request->except(['_token','_method']);
        $data['car_id'] = $id;
        $res = vehicle_information::insert($data);
        // 查看数据库并且对添加状态字段进行修改
        $jieguo = appointment::where('car_id',$id)->update(['add_status'=>1]);
        if($res){
             echo "<script>alert('添加成功！');location.href='/admin/estimate/wait'</script>";   
        }else{
            echo "<script>alert('添加失败！');location.href='".$_SERVER['HTTP_REFERER']."'</script>";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function indexs($id)
    {
        //加载基础信息添加页面
        return view('admin/estimate/basicinformation',['id'=>$id]);
    }

    public function updates(Request $request, $id)
    {
        //执行修改
        $data = $request->except(['_token','_method']);
        $res = vehicle_information::where('car_id',$id)->update($data);
        if($res){
            echo "<script>alert('修改成功！');location.href='/admin/estimate/wait'</script>";   
        }else{
            echo "<script>alert('修改失败！');location.href='".$_SERVER['HTTP_REFERER']."'</script>";
        }
    }
}
