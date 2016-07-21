<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
  // public function getAdd(){
  //   echo "sssss";
  // }

  // public function postInsert(){
  //   echo 'www';
  // }

  public function getIndex(Request $request){
      //获取rul地址
      $url = $request->path();
      
      //检测路径
      $path=$request->is('shops/inde');

      //获取完整的url地址
      $allpath=$request->url();

      //获取请求的方法
      $method=$request->method();

      //检测方法
      $ismethod=$request->isMethod('get');
      dd($ismethod);
   
  }


  //获取请求报文参数信息
  public function getParams(Request $request){
    //获取参数
    $name=$request->input('name');

    //获取指定类型的参数
    $name1=\Input::get('id');
    
    //获取默认值
    $name2=$request->input('name','ss');
    //检测参数是否存在
    $name3=$request->has('name');

    //获取所有的参数
    $allparams=$request->all();
    //only
    $onlyparam=$request->only(['id','name']);

    //except
    $except=$request->except(['id']);
    dd($except);
  }

  //加载表单的操作
  public function getAdd(){
    return view('forms');


  }

  public function insert(Request $request){
    // echo "sss";
    //获取input参数
    $all = $request->all();
   

    //将所有的参数信息写在闪存里面
    // $request->flash();

    //将部分参数写入闪存里
    // $request->flashOnly('pass');
    //flashExcept
    // $request->flashExcept('email');

    if(!$request->has('username')){
      //阻止表单的提交
      return back()->withInput();
    }
    // dd($all);
  }


  //执行上传
  public function upload(Request $request){

    // $ss=$request->hasFile('photo');

    // dd($ss);

    $s=$request->file('photo')->getClientOriginalExtension();

    // dd($s);
    //随机字符串
    $name=time()+rand(1,999999999);
    // dd($name);
    if($request->hasFile('photo')){
      //移动文件
      $request->file('photo')->move('./uploads/',$name.'.'.$s);

    }
  }

  //获取cookie
  public function cookie(Request $request){
    // echo "ss";
    //获取cookie
    $s=$request->cookie('name');
    $s=\Cookie::get('id');
    dd($s);
  }

  //响应操作
  public function res(){
    // return "sss;";

    // return response("lucky")->withCookie('ids',12,40);

    // return response()->json(['a'=>'ss','b'=>'mmm']);

    // return response()->download('./uploads/test.jpg');
    //页面跳转
    return redirect('/login');

  }
  
}