<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Http\Model\user;

class yonghutianjiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查看用户分页
        //return view('admin/UserManagement/tableList');

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

        $data = $request->except(['_token','query_string','head','repass']);
         // $data = $request->all();
        $data['head'] = $filename;
        
        $res = DB::table('user')->insert($data);
        // $password="password";
        // $repass="repass";   
        //     if($repass==$password){
        //         //获取插入返回的id
                

        //     }
        

        //获取position添加info表
        // $info = $request->only('position');
         // $info['head'] = $filename;
        // $info['uid'] = $res;
        // $infos = DB::table('user')->insert($info);

        //判断
        if($res){
            echo '<script>alert("添加成功");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }else{
            echo '<script>alert("添加失败");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
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
