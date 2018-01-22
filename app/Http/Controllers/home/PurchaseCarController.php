<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\partition1;
use App\tool\Common;

class PurchaseCarController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = partition1::orderBy('ping')->get();
        $data1 = partition1::where('tid','0')->orderBy('ping')->get();
        $array = $data1;
        $att = array();
        $uid = array();
        $num = 0;
        foreach ($array as $key => $value) {
            //dump($value['ping']);
            if(array_key_exists($value['ping'],$att) == true){
                $att[$value['ping']]=$att[$value['ping']].",".$value['car_typeName'];
                $uid[]= $value['id'];
            }else{
                $att[$value['ping']]=$value['car_typeName'];
                $uid[]= $value['id'];
            }

        }
         return view('/home/PurchaseCar',['data'=>$data,'att'=>$att,'uid'=>$uid,'num'=>$num]);
    }
    //查询汽车品牌
    public function carModel(Request $request)
    {
            $a = $request->except('_token');
            if($a['tid']>0){
            $data = partition1::where('tid',$a['tid'])->get();
        }else{
            $data = partition1::where('tid','>',0)->get();
        }
        return Response()->json([
          'data' => $data,
          'tid' => $a['tid']
      ]);
    }
    //查询汽车车系
    public function carType(Request $request)
    {

            $a = $request->except('_token');
            $test = partition1::where("id",$a['id'])->get()[0]['tid'];
            if($test>0){
            $data = partition1::where('tid',$test)->get();
            }else{
            $data = partition1::where('tid','>',0)->get();
            }
            return Response()->json([
              'data' => $data,
              'id' => $test,
              'tid'=>$a['id']
          ]);


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
