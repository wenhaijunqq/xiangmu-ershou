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
//后台UI表单页
Route::get('/admin/fA',function(){
	return view('admin/formAmazeui');
});
//后台线条表单页
Route::get('/admin/fL',function(){
	return view('admin/formLine');
});
//后台表格消息列表页
Route::get('/admin/fN',function(){
	return view('admin/formNews');
});
//后台表格文字列表页
Route::get('/admin/fNL',function(){
	return view('admin/formNewsList');
});
//后台表格文字表格页
Route::get('/admin/font',function(){
	return view('admin/tableFontList');
});
//后台表格图片表格页
Route::get('/admin/images',function(){
	return view('/admin/tableImagesList');
});

