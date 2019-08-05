<?php 
namespace app\index\controller;
use think\Db;
use think\Request;
class News {

    public function index(){
        $news=Db::table('pmw_infolist')->select();
        

        $request=Request::instance();
        dump($request);
    }
}