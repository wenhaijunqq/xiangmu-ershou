<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('config')->first();
        // dd($data);
        //加载网站配置首页
        return view('admin/config/index',['data'=>$data]);
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
    public function show(Request $request,$id)
    {
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    

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
       
        // if($res){
        //     echo '<script>alert("修改成功");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        // }else{
        //     echo '<script>alert("修改失败");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        // }
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
