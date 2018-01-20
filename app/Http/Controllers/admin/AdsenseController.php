<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\adsense;
use DB;

class AdsenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载到广告浏览页面
        // $res = adsense::get()->simplePaginate(3);
       $res=adsense::where('id','>','1')->paginate(2);

        // dump($res);
         return view('/admin/adsense/list',['res'=>$res]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载到广告添加页面
        return view('/admin/adsense/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except(['_token']);
         if($request->hasFile('pic')){
            // 创建上传对象
            $pic = $request -> file('pic');
            // 获取文件后缀
            $hz = $pic -> getClientOriginalExtension();
            // 随机文件名字
             $temp_name =time()+rand(10000,99999);
            // 拼接
            $filename = $temp_name.'.'.$hz;
            // 上传
            $pic -> move('./uploads',$filename);


        }else{
            dd('没有文件上传');
        }

        $adsense = new adsense;
        $adsense->title = $res['title'];
        $adsense->url = $res['url'];
        $adsense->pic = $filename;

        $i =  $adsense->save();
       if($i){
              echo "<script>alert('恭喜，添加成功！');location.href='/admin/adsense'</script>";
       }else{
              echo "<script>alert('抱歉，添加失败！');location.href='".$_SERVER['HTTP_REFERER']."'</script>";

       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$key)
    {
        //
        $key = $_GET['key'];
        $check = $_GET['check'];


        if($check == 1){
              echo '<script>alert("请您选择要搜索的类别");location.href="/admin/adsense"</script>';
        }else{

            $res = DB::table('adsense')->where('title','like','%'.$key.'%')->paginate(2);
            $count = DB::table('adsense')->where('title','like','%'.$key.'%')->count();

        }

        $res->setPath('/admin/adsense/show');

        $res = $res->appends(array('key'=>$key));

        return view('/admin/adsense/list',['res'=>$res,'count'=>$count,'check'=>$check]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //加载修改页面
        $res = adsense::find($id);

        return view('/admin/adsense/edit',['res'=>$res]);

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

         // echo "update页面";
        $res = $request->except(['_token','_method']);
        if($request->hasFile('pic')){
            // 创建上传对象
            $pic = $request -> file('pic');
            // 获取文件后缀
            $hz = $pic -> getClientOriginalExtension();
            // 随机文件名字
             $temp_name =time()+rand(10000,99999);
            // 拼接
            $filename = $temp_name.'.'.$hz;
            // 上传
            $pic -> move('./uploads',$filename);

        }else{
            dd('没有文件上传');
        }
        // var_dump($res);
        $jieguo = adsense::find($id);
                // var_dump($jieguo);

        $jieguo->title = $res['title'];
        $jieguo->url = $res['url'];
        $jieguo->pic = $filename;

        $aaa =  $jieguo->save();
        if($aaa){
            echo "<script>alert('恭喜，修改成功！');location.href='/admin/adsense'</script>";
        }else{
            echo "<script>alert('抱歉，修改失败！');location.href='".$_SERVER['HTTP_REFERER']."'</script>";

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


        $res = adsense::find($id);
        $jieguo = $res->delete();


       if($jieguo){
            echo  1;
       }else{
            echo  0;
       }


    }

}
