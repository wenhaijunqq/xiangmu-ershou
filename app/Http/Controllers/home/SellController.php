<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载我要卖车页的操作
        $data = DB::table('orders') -> where('buy_status',1) -> orderBy('buy_time','desc') -> paginate(4);
        $car1 = DB::table('vehicle_information') -> where('car_id',$data[0]->car_id) -> first();
        $car2 = DB::table('vehicle_information') -> where('car_id',$data[1]->car_id) -> first();
        $car3 = DB::table('vehicle_information') -> where('car_id',$data[2]->car_id) -> first();
        $car4 = DB::table('vehicle_information') -> where('car_id',$data[3]->car_id) -> first();
        // dd($car1);
        return view('/home/sell/SellCar',['data'=>$data,'car1'=>$car1,'car2'=>$car2,'car3'=>$car3,'car4'=>$car4]);
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
        //接受要添加的数据
        $data = $request -> except(['_token','_method']);
        // dd($data['phone']);
        $phone = array('phone'=>$data['phone'],'auth'=>0);
        // dd($phone);
        //执行添加的动作
        if(isset($data)){
            $res = DB::table('evaluation') -> insert($data);
            $user = DB::table('user') -> insert($phone);
            if($res){
                echo '<script>alert("提交成功 工作人员会在第一时间联系您");location.href="/home/sell"</script>';
            }else{
                echo '<script>alert("提交失败");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
            }
        }else{
            echo '<script>alert("请添加基础信息");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }
        

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
        //
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
        //
    }
}
