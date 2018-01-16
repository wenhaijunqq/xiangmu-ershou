<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  varchar $key
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$key)
    {
        //预约页面搜索控制器
        $key = $_GET['key'];
        $check = $_GET['check'];
        if($check == 1){
              echo '<script>alert("请您选择要搜索的类别");location.href="/admin/reserve"</script>';
        }else if($check == 'user'){
            $res = DB::table('reserve')->where('sell_id','like','%'.$key.'%')->orwhere('buy_id','like','%'.$key.'%')->paginate(3);
            $count = DB::table('reserve')->where('sell_id','like','%'.$key.'%')->orwhere('buy_id','like','%'.$key.'%')->count();
        }else{
            $res = DB::table('reserve')->where("$check",'like','%'.$key.'%')->paginate(3);
            $count = DB::table('reserve')->where("$check",'like','%'.$key.'%')->count();
        }
        $res->setPath('/admin/ysearch/show');
        $res = $res->appends(array('key'=>$key));
        return view('/admin/reserve/search',['res'=>$res,'count'=>$count,'check'=>$check]);
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
