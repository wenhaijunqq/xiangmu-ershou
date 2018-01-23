<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\user;
use DB;
use Hash;

class AccountUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = user::where('phone',$request->session()->get('phone'))->first();
        //dd($data);
        //账号设置
         return view('admin/Settings/Accountupdate',['data'=>$data]);
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
        $file = $request->file('head');
         // dd($file);
        //获取文件路径
        $filepath = $file->getRealPath();
        // dd($filepath);
        //获取文件后缀名
        $hz = $file->getClientOriginalExtension();

        $filename = md5(time()+rand(0,99999)).'.'.$hz;
        // dd($filename);
        //上传图像七牛
        $disk = \Storage::disk('qiniu');
        $disk->put($filename,file_get_contents($filepath));

        $data = $request->except(['_token' ,'_method','query_string','repass']);
        $data['head'] = $filename;
        ////接受修改的数据
        $res = DB::table('user')->where('id',$id)->update($data);
        //dd($res);
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
        //
    }
}
