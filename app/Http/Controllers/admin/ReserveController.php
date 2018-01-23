<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载预约信息首页的操作
        $data = DB::table('reserve') -> orderBy('yutime','desc') -> paginate(5);
        // dd($data);
        //将数据返回
        return view('admin.reserve.index',['data'=>$data]);
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
        //执行查看的操作
        $data = DB::table('reserve') -> where('rid',$id) -> get();
        $sell = DB::table('user') -> where('id',$data[0]->sell_id) -> get();
        $buy = DB::table('user') -> where('id',$data[0]->buy_id) -> get();
        $ping = DB::table('assessor') -> where('id',$data[0]->ping_id) -> get();
        //将数据带回网页
        return view('admin.reserve.show',['data'=>$data,'sell'=>$sell,'buy'=>$buy,'ping'=>$ping]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //加载修改页的操作
        $data = DB::table('reserve') -> where('rid',$id) -> get();
        $ping = DB::table('assessor') -> get();
        // dd($ping);
        //将数据带去修改页
        return view('admin.reserve.edit',['data'=>$data,'ping'=>$ping]);

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
        //执行修改的操作
       $data = $request -> except(['_token','_method']);
       $res = DB::table('reserve')->where('rid',$id)->update();
       if($res){
            echo '<script>alert("修改成功");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }else{
            echo '<script>alert("修改失败");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
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
        //执行删除的操作
        $res = DB::table('reserve') -> where('rid',$id) -> delete();
        if($res){
            echo '<script>alert("删除成功");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }else{
            echo '<script>alert("删除失败");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }
    }
}
