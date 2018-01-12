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
Route::get('/www/xiangqing', function () {
	return view('/home/Xiangqing');
});

Route::get('IndexLogin', function () {
    return view('/home/login');
});
Route::get('/IndexRegister', function () {
    return view('/home/register');
});
Route::get('/www/xiangqing', function () {
	return view('/home/Xiangqing');
});
//前台问答
Route::resource('/home/question','Home\QuestionController');

//后台模板引入
Route::controller('/admin/login','Admin\LoginController');

Route::get('/admin/index',function(){
	return view('admin/index');
});
//后台注册页
Route::get('/admin/signup',function(){
	return view('admin/signUp');
});
//后台404页
Route::get('/admin/404',function(){
	return view('admin/404');
});
//后台问答管理页

Route::get('/admin/oldcar',function(){
	return view('admin/question/oldcar');
});
Route::get('/admin/question-edit',function(){
	return view('admin/question/edit');
});
Route::get('/admin/question-reply',function(){
	return view('admin/question/reply');
});
Route::get('admin/CarType/add',function(){
	return view('admin/cartype/addCarType');
});
//后台网站车辆管理
Route::resource('admin/CarType/','admin\VehiclInfoController');
//后台网站车辆类型增加

Route::resource('/admin/question','admin\QuestionController');

//人员具体信息页面
Route::get('/admin/basicperson','admin\BasicpersonController@index');
//车辆具体信息页面
Route::get('/admin/basiccar','admin\BasicpersonController@show');


//后台网站配置页
Route::resource('/admin/config','admin\ConfigController');
//后台订单信息页
Route::resource('/admin/order','admin\OrderController');

//后台预约信息页
Route::resource('/admin/reserve','admin\ReserveController');
//后台登陆路由
Route::controller('/admin/login','admin\LoginController');
//后台已经评估路由
Route::resource('/admin/estimate/already','admin\EstimateAlreadyController');
//后台等待评估路由
Route::resource('/admin/estimate/wait','admin\EstimateWaitController');
//后台待审核路由
Route::resource('/admin/examine/wait','admin\ExamineWaitController');
//后台已经审核路由
Route::resource('/admin/examine/already','admin\ExamineAlreadyController');
//后台车辆基本信息

Route::get('/admin/estimate/basicinformation/{id}','admin\BasicInformationController@indexs');
Route::resource('/admin/estimate/basicinformation','admin\BasicInformationController');
//后台用户管理分区,新增用户
Route::resource('/admin/UserManagement/xinzeng','admin\UserManagementController');
//车看用户
Route::resource('/admin/NameUserManagement/chakan','admin\NameUserManagementController');

//后台车辆基本信息查看
Route::get('/admin/seeinformation/{id}','admin\SeeInformationController@index');
//后台评估报告
Route::resource('/admin/estimate/writeassess','admin\WriteAssessController');
Route::resource('/admin/basicinformation','Admin\BasicInformationController');

//后台用户管理分区
Route::get('/admin/xinzeng',function(){
	return view('/admin/UserManagement/tableList');
});
Route::get('/admin/chakan',function(){
	return view('/admin/UserManagement/tableListImg');
});

//轮播图路由器
Route::resource('/admin/Carousel/list','admin\CarouselController');
//广告位路由器
Route::resource('/admin/adsense/list','admin\AdsenseController');
//友情链接路由器
Route::resource('/admin/link/list','admin\LinkController');

//后台表单页
Route::get('/admin/form',function(){
	return view('admin/form');
});
//后台注册页
Route::get('/admin/signup',function(){
	return view('admin/signUp');
});
// 后台文字列表页
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

//后台用户管理分区
//
Route::get('/admin/lists',function(){
	return view('/admin/UserManagement/tableList');
});

Route::get('/admin/imglists',function(){
	return view('/admin/UserManagement/tableListImg');
});

Route::controller('/db','Dbcontroller');
Route::resource('imglists','imglistsController');
//后台用户管理分区
Route::get('/admin/xinzeng',function(){
	return view('/admin/UserManagement/tableList');
});
Route::get('/admin/chakan',function(){
	return view('/admin/UserManagement/tableListImg');
});
//轮播图路由器
Route::resource('/admin/Carousel','admin\CarouselController');
//广告位路由器
Route::resource('/admin/adsense','admin\AdsenseController');
//友情链接路由器

Route::resource('/admin/link','admin\LinkController');
Route::resource('/admin/link/list','admin\LinkController');



//前台

//前台用户登录
Route::get('home/register','admin\LoginController@register');
//前台登录验证
Route::post('home/dotelregister','admin\LoginController@dotelregister');
