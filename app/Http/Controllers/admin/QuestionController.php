<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\question;
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
        // $data = DB::table('question')->paginate(1);
        $data = DB::table('question')->get();
        $type = array('买车卖车','交易过户','保养维修','金融贷款');
        return view('admin.question.oldcar',['data'=>$data,'type'=>$type]);
    }
     
     // 查询修改信息并加载修改页
     public function edit($id)
    {
         $data = DB::table('question')->where('qid',$id)->first();
        return view('admin.question.edit',['data'=>$data]);
    }
   
    //执行修改的动作
      public function update(Request $request, $id)
    {
        //接受要修改的数据
       $data = $request -> except(['_token','_method']);
       

    }


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
    public function show($id)
    {
        
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
