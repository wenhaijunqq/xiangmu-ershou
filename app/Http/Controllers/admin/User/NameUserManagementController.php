<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\user;
use DB;
class NameUserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查看用户分页
         $data = user::get();
         return view('admin/UserManagement/tableListImg',['data'=>$data]);
        

    }

     public function CarList($id){

        $type = user::where('id',$id)->get();
        return view('admin/UserManagement/chakanxiangqing',['type'=>$type]);

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
        //$data = user::get();
        $user = user::where('id',$id)->first();
        $status = ($user->status);
        
        if($status==0){ 
            DB::table('user')->where('id', $id)->update(['status' => 1]);
             echo "<script>alert('禁用成功！');location.href='".$_SERVER['HTTP_REFERER']."'</script>";
             // return view('admin/UserManagement/tableListImg',['data'=>$data]);
        }else if($status==1){
            DB::table('user')->where('id', $id)->update(['status' => 0]);
             echo "<script>alert('启用成功！');location.href='".$_SERVER['HTTP_REFERER']."'</script>";
             // return view('admin/UserManagement/tableListImg',['data'=>$data]);
        }



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
           $test = user::destroy($id);
        if($test){
            echo "1";
        }else{
            echo "2";
        }
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
    }
}
