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

// Route::get('/', function () {
    // return view('welcome');
    // echo "test";
    // echo date('Y-m-d h:i:s');

    //获取配置文件
    // echo Config::get('app.timezone');
    // echo Config::get('app.url');
    // echo Config::get('app.locale');

	//设置配置信息
	// Config::set('app.timezone','UTC');
	// echo Config::get('app.timezone');
	// echo Config::get('app.lucky');

	//环境系统的信息
	// echo env('DB_HOST');
	// echo env('APP_KEY');	
// });

//路由的基本操作
// Route::get('/text',function(){
// 	echo "111"; 
// });

// Route::get('/test/add',function(){
// 	return "222";

// });
// Route::post('/user/add',function(){
// 	echo "qqq";
// });

// Route::get('/form',function(){

// 	return view('form');
// });

//带参数的路由
// Route::get('/shop/{id}',function($id){
// 	echo "商品的id是".$id;
// })->where('id','\d+');

// Route::get('shops/{name}',function($name){
// 	echo "商品的名字".$name;
// })->where('name','[a-zA-Z]');

//多个参数的路由
// Route::get('/shop/{id}-{name}',function($id,$name){
// 	echo $id."&".$name;
// })->where('id','\d+')->where('name','[a-zA-Z]');

//给路由器别名
// Route::get('admin/user/add/{id}',['as'=>'goods',function($id){
// 	echo route('goods').'<br>';
// 	echo route('goods',['id'=>$id]);
// }]);

// Route::get('/test',function(){

// 	echo route('bie');
// 	//路由函数route 去获取别名或者是路由规则
// });

//路由组的设置
// Route::group(['middleware'=>'login'],function(){

// 	//路由
// 	Route::get('/home/order',function(){
// 		echo "我是前台的订单页面";
// 	});

// 	Route::get('/admin/user/edit',function(){
// 		echo "这是后台用户的修改";
// 	});

// });

// Route::get('/ss',function(){
// 	abort('404');
// });

//Ajax


// Route::get('/ajax',function(){
// 	//加载视图模板
// 	return view('ajax');
// });

// Route::post('/post',function(){
// 	echo "ajax的响应数据";
// });

// Route::get('/login',function(){
// 	return "form";
// });

// Route::get('/home/person',function(){
// 	echo "这是前台的个人中心";
// })->middleware('login');
// Route::get('/',function(){
// 	$url = url('foo');
// 	echo $url;
// });
Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});






