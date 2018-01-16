<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\partition1;

class VehiclInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = partition1::where('tid','0')->get();
        return view('/admin/cartype/cartype',['data'=>$data]);
    }
    public function ModelIndex($id){
        $data = partition1::where('tid','0')->get();
        return view('/admin/cartype/addCarModel',['data'=>$data,'id'=>$id]);
    }
    public function addModel(Request $request){
        $a = $request->except('_token');
        $test = partition1::insert($a);
        if($test){
            echo "1";
        }else{
            echo "2";
        }
    }
    public function CarList($id){
        $data = partition1::where('tid',$id)->get();
        $type = partition1::where('id',$id)->get();
        return view('/admin/cartype/CarList',['data'=>$data,'type'=>$type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    // 车辆分类的添加
    public function test(Request $request)
    {
        $a = $request->except('_token');
        $test = partition1::insert($a);
        if($test){
            echo "1";
        }else{
            echo "2";
        }
    }
    //车辆分类的修改
    public function editCar($id)
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
        //dd($_POST);
        //获取文件上传的临时文件
         $file = $request->file('pic');
         //验证
         //获取文件路径
         $transverse_pic = $file ->getRealPath();
         //获取后缀名
         $postfix = $file ->getClientOriginalExtension();
         $fileName = md5(time().rand(0,10000)).".".$postfix;

         $disk = \Storage::disk('qiniu');
         $disk->put($fileName,file_get_contents($transverse_pic));
         //$disk->put($fileName,fopen($transverse_pic,'r+'));
         $filePath = $disk->getDriver()->downloadUrl($fileName);
         return Response()->json([
           'filePath' => $filePath,
           'fileName' => $fileName,
           'message' => '恭喜上传成功'
       ]);
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

        $test = partition1::destroy($id);
        if($test){
            echo "1";
        }else{
            echo "2";
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
        $a = $request->except('_token');
        $test = partition1::where('id',$id)->update($a);
        if($test){
            echo "1";
        }else{
            echo "2";
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
        $data = partition1::where('id',$id)->first();
        return view('/admin/cartype/editCar',['data'=>$data]);
    }
}
