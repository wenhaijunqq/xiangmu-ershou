<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ConfigeditController extends Controller
{
   public function uconfig(Request $request, $id)
   {
        // 执行修改的操作
        $data = $request -> except('_token');
        $res = DB::table('config')->where("id",$id)->update($data);
        if($res){
        	echo "1";
        }else{
        	echo "0";
        }
       
   }
}
