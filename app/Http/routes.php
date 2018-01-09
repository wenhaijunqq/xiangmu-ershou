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
Route::get('/www/ask',function(){
	return view('/home/question/ask');
});
Route::get('/www/asklist',function(){
	return view('/home/question/asklist');
});
Route::get('/www/answer',function(){
	return view('/home/question/answer');
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



