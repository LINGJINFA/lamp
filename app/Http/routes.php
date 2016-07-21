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

// Route::get('/ss',function(){
// 	abort('404');
// });

Route::get('/login',function(){
	echo "这是用户的登录界面";
});

//控制器
Route::get('/user/add','UserController@add')->middleware('login');

Route::get('/user/del','UserController@del');

Route::get('/user/edit','UserController@edit');

Route::post('/user/insert','UserController@insert');

//控制器带参数的访问
Route::get('/user/show/{id}','UserController@index');


//控制器别名
Route::get('/user/index1',['uses'=>'UserController@index','as'=>'users']);





//隐式控制器  请求可以访问路由以shops开头的控制器里面的方法
Route::controller('/shops','TestController');

//请求
Route::controller('/test','TestController');

Route::post('/insert','TestController@insert');

//文件上传
Route::get('/upload',function(){
    return view('upload');
});

Route::post('/uploadss','TestController@upload');

//写入cookie
Route::get('/writecookie',function(){
    //写入cookie方法
    \Cookie::queue('name','laowang',30);
    return response('fff')->withCookie('id',12,30);
});


//获取cookie信息
Route::get('/getcookie','TestController@cookie');


//响应操作
Route::get('/res','TestController@res');
