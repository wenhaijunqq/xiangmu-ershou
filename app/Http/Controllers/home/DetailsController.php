<?php

namespace App\Http\Controllers\home ;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Model\examining;
use App\Http\Model\appointment;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = 2;
        $res = DB::table('user')->find($id);


         $res2 = DB::table('vehicle_information')->where('car_id',4)->first();
        // $res1 = DB::table('examining')->where('car_id',4)->first();
        $res1 = examining::where('car_id',4)->first();

        return view('/home/Xiangqing',['res'=>$res,'res1'=>$res1,'res2'=>$res2]);

    }

}
