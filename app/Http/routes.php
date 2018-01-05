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

Route::get('/', function () {
    return view('index');
});
Route::get('/www/buy', function () {
    return view('PurchaseCar');
});
Route::get('/www/sell', function () {
    return view('SellCar');
});
Route::get('/www/server', function () {
    return view('ServerPro');
});
Route::get('/www/oldcar', function () {
    return view('OldCarCon');
});
Route::get('IndexLogin', function () {
    return view('login');
});
Route::get('/IndexRegister', function () {
    return view('register');
});
