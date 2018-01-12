<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询数据并且分页
        $type = array(0,1,2,3);
        $data = DB::table('question')->where('type',$type[0])->paginate(4);
        $data1 = DB::table('question')->where('type',$type[1])->paginate(4);
        $data2 = DB::table('question')->where('type',$type[2])->paginate(4);
        $data3 = DB::table('question')->where('type',$type[3])->paginate(4);
        return view('/home/OldCarCon',['data'=>$data,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3]);
    }

   
    public function create()
    {
        return view('/home/question/ask');
    }

    public function store(Request $request)
    {
        //接受要修改的数据
       $data = $request -> except(['_token','_method']);
       $res=DB::table('question')->insert($data);
        if($res){
            echo '<script>alert("提问成功");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }else{
            echo '<script>alert("提问失败");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
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