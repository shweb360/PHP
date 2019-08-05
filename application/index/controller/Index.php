<?php

namespace app\index\controller;

use think\Db;
use think\Controller;

class Index extends Controller
{
  //前置操作
  protected $beforeActionList=[
    'first',
    'second'=>['except'=>'hello'],
    'third'=>['only'=>'index,data']
  ];
  protected function first()
  {
    echo 'first<br/>';
  }
  protected function second(){
    echo 'second<br/>';
  }
  protected function third(){
    echo 'thrid<br/>';
  }
  //控制器初始化
  public function _initialize()
  {
    echo 'init<br/>';
  }

  public function index()
  {
    return 'hello,thinkphp!';
  }
  //带参数
  public function hello($name)
  {    
    return 'Hello,' . $name;
  }
  public function data()
    {
        return 'data';
    }

  // 数据库
  public function getUser(){
    $user = Db::table('pmw_admin')->where('id', 1)->find();
    //dump($user);
    if($user){
      $this->success("查询成功",'News/index');
    }
    else {
      $this->error('查询失败','Index/data');
    }
  }
}
