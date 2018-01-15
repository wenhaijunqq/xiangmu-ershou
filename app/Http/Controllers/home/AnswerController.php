<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //查询数据并且分页
        $data = DB::table('question')->where('qid',$id)->get();
        // dd($data);
        return view('/home/question/answer',['data'=>$data]);
    }

    public function asklist($type)
    {
         $check = array(0,1);
         $types = array('买车卖车','交易过户','保养维修','金融贷款');
         $res = DB::table('question')->where('type',$type)->where('check',$check[1])->paginate(2);
         return view('/home/question/asklist',['res'=>$res,'type'=>$type,'types'=>$types]);
    }
}
