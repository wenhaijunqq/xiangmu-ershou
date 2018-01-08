<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//前台模板引入
Route::get('/', function () {
    return view('home/index');
});
Route::get('/www/buy', function () {
    return view('/home/PurchaseCar');
});
Route::get('/www/sell', function () {
    return view('/home/SellCar');
});
Route::get('/www/server', function () {
    return view('/home/ServerPro');
});
Route::get('/www/oldcar', function () {
    return view('/home/OldCarCon');
});
Route::get('IndexLogin', function () {
    return view('/home/login');
});
Route::get('/IndexRegister', function () {
    return view('/home/register');
});

//后台模板引入
// Route::get('/admin',function()
// {
// 	return redirect('/admin/login');
// });

//后台登陆路由
Route::controller('/admin/login','Admin\LoginController');

//后台首页
Route::get('/admin/index',function(){
	return view('admin/index');
});
//后台数据表页
Route::get('/admin/chart',function(){
	return view('/admin/chart');
});
//后台日历页
Route::get('/admin/calendar',function(){
	return view('admin/calendar');
});
//后台表单页
Route::get('/admin/form',function(){
	return view('admin/form');
});
//后台注册页
Route::get('/admin/signup',function(){
	return view('admin/signUp');
});
//后台文字列表页
Route::get('/admin/list',function(){
	return view('admin/tableList');
});
//后台图片列表页
Route::get('/admin/imglist',function(){
	return view('admin/tableListImg');
});
//后台表格页
Route::get('/admin/table',function(){
	return view('admin/tables');
});
//后台404页
Route::get('/admin/404',function(){
	return view('admin/404');
});

