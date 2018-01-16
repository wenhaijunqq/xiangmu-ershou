<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WriteAssessController extends Controller
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
        // 获取数据把基础信息添加到数据库
        // 把数据添加的数据库
        $jg = $request->except(['_token','_method']);
        dd($jg);
        $data = array();
        $data['car_id'] = $id;
        //拆分数据转化成json格式
        // 基础参数
        $basic_parameter  = array("manufacturer"=>$jg['manufacturer'],"grade"=>$jg['grade'],"engine"=>$jg['engine'],"gearbox"=>$jg['gearbox'],"body-structure"=>$jg['body-structure'],"volume"=>$jg['volume'],"wheel-base"=>$jg['wheel-base'],"boot"=>$jg['boot'],"weight"=>$jg['weight']);

        // 发动机参数
        $engine_parameter = array("displacement"=>$jg['displacement'],"air-suction"=>$jg['air-suction'],"air-cylinder"=>$jg['air-cylinder'],"horsepower"=>$jg['horsepower'],"torque"=>$jg['torque'],"Fuel-type"=>$jg['Fuel-type'],"fuel-oil"=>$jg['fuel-oil'],"Oil-drive"=>$jg['Oil-drive'],"emission-standard"=>$jg['emission-standard']);

        //底盘及制动
        $underpan_braking = array("drive"=>$jg['drive'],"assistance"=>$jg['assistance'],"forward-mounting"=>$jg['forward-mounting'],"Rear-Suspension"=>$jg['Rear-Suspension'],"front-brake"=>$jg['front-brake'],"rear-brake"=>$jg['rear-brake'],"parking-braking"=>$jg['parking-braking'],"Front-Tyre"=>$jg['Front-Tyre'],"rear-tire"=>$jg['rear-tire']);

        //安全配置
        $safety_configuration = array("deputy-airbags"=>$jg['deputy-airbags'],"side-airbags"=>$jg['side-airbags'],"Head-Airbag"=>$jg['Head-Airbag'],"tire-pressure"=>$jg['tire-pressure'],"central-locking"=>$jg['central-locking'],"ISO-FIX-LATCH"=>$jg['ISO-FIX-LATCH'],"KEYLESS-GO"=>$jg['KEYLESS-GO'],"ABS"=>$jg['ABS'],"ESP"=>$jg['ESP']);

        //外部配置
        $exterior_configuration = array("power-sunroof"=>$jg['power-sunroof'],"panoramic-sunroof"=>$jg['panoramic-sunroof'],"Electric-suction-door"=>$jg['Electric-suction-door'],"Induction-trunk"=>$jg['Induction-trunk'],"Rain-sensing-Wipers"=>$jg['Rain-sensing-Wipers'],"rear-wiper"=>$jg['rear-wiper'],"AND-POWER-WINDOWS"=>$jg['AND-POWER-WINDOWS'],"power-mirror"=>$jg['power-mirror'],"warm-mirror"=>$jg['warm-mirror']);

        //内容配置
        $interior_configuration = array("MFL"=>$jg['MFL'],"cruise-control"=>$jg['cruise-control'],"air-conditioner"=>$jg['air-conditioner'],"automatic-air-conditioning"=>$jg['automatic-air-conditioning'],"GPS"=>$jg['GPS'],"car-backing-radar"=>$jg['car-backing-radar'],"Back-eye-camera"=>$jg['Back-eye-camera'],"leather-seat"=>$jg['leather-seat'],"seat-heating"=>$jg['seat-heating']);

        //获取检测数据
        // $accident = array("left-frame");


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
        //加载评估报告表
        return view('admin/estimate/writeassess',['id'=>$id]);
    }
}
