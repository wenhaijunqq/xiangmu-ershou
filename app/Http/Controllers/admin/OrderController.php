<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if($request -> has('id')){
        //     //根据提交id查询商品数据
        //     $res = $request -> input('id');
        //     $data = DB::table('order') -> where('id',$res) -> paginate(1);
        //     //发送数据
        //     return view('admin.order.index',['data'=>$data]);
        // }else{
            //查询商品所有数据
            $data = DB::table('order') -> orderBy('buy_time','desc') -> paginate(5);
            //发送数据
            return view('admin.order.index',['data'=>$data]);
        // }
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
    public function show(Request $request,$key)
    {
        $key = $_GET['key'];
        $check = $_GET['check'];
        // var_dump($check);
        if($check == 1){
              echo '<script>alert("请您选择要搜索的类别");location.href="/admin/order"</script>';
        }else if($check == 'user'){
            $res = DB::table('order')->where('sell_id','like','%'.$key.'%')->orwhere('buy_id','like','%'.$key.'%')->paginate(3);
            $count = DB::table('order')->where('sell_id','like','%'.$key.'%')->orwhere('buy_id','like','%'.$key.'%')->count();
        }else{
            $res = DB::table('order')->where("$check",'like','%'.$key.'%')->get();
            $count = DB::table('order')->where('$check','like','%'.$key.'%')->count();
        }
        $res = $res ->appends(array('key'=>$key));
        $res->setPath('/admin/order/show');
        return view('/admin/order/search',['res'=>$res,'count'=>$count,'check'=>$check]);
    }

    // *
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        $data = DB::table('order') -> where('id',$id) -> first();

        //显示订单列表的详情操作
        return view('admin.order.show',['data'=>$data]);
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
        //执行订单删除的操作
        $res = DB::table('order') -> where('id',$id) -> delete();
        if($res){
            echo '<script>alert("删除成功");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }else{
            echo '<script>alert("删除失败");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }
        
    }

}
