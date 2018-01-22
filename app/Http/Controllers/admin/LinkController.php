<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Link;
use DB;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "加载友情链接显示页面";
        //加载友情链接显示页面
         $res=Link::where('id','>','0')->paginate(3);


          return view('/admin/Link/list',['res'=>$res]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加友情链接页面
        return view('/admin/Link/create');
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


        $Link = new Link;
        $Link->name = $res['name'];
        $Link->url = $res['url'];
        $Link->status = $res['status'];
        // dump($Link);
        // die();
        $i =  $Link->save();
       if($i){
              echo "<script>alert('恭喜，添加成功！');location.href='/admin/Link'</script>";
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
              echo '<script>alert("请您选择要搜索的类别");location.href="/admin/Link"</script>';
        }else{

            $res = DB::table('Link')->where('name','like','%'.$key.'%')->paginate(2);
            $count = DB::table('Link')->where('name','like','%'.$key.'%')->count();

        }

        $res->setPath('/admin/Link/show');

        $res = $res->appends(array('key'=>$key));

        return view('/admin/Link/list',['res'=>$res,'count'=>$count,'check'=>$check]);

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
        $res = Link::find($id);
        return view('/admin/Link/edit',['res'=>$res]);
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
        $res = $request->except(['_token','_method']);
        // dump($res);
         $jieguo = Link::find($id);
        // var_dump($jieguo);

        $jieguo->name = $res['name'];
        $jieguo->url = $res['url'];
        $jieguo->status = $res['status'];

        $aaa =  $jieguo->save();
        if($aaa){
             echo "<script>alert('恭喜，修改成功！');location.href='/admin/Link'</script>";
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
        //
        $res = Link::find($id);
        $jieguo = $res->delete();


       if($jieguo){
            echo  1;
       }else{
            echo  0;
       }

    }

}
