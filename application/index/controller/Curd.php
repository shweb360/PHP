<?php

namespace app\index\controller;

use think\Db;

/**
 * 
 * 数据库的基本操作
 * 
 */
class Curd
{
    //查询数据
    public function query()
    {
        //支持query（查询操作）和execute（写入操作）方法，并且支持参数绑定。
        $list = Db::query('select * from pmw_infolist where id=?', [8]);
        // $result = Db::execute('insert into pmw_infolist (title, content) values (?, ?)', ['我的测试标题', '测试内容']);

        //基本查询

        // table方法必须指定完整的数据表名        
        // 查询一个数据使用,find 方法查询结果不存在，返回 nul
        $result = Db::table('pmw_infolist')->where('id', 1)->find();

        //查询数据集使用,select 方法查询结果不存在，返回空数组：
        $result = Db::table('pmw_infolist')->where('id', 0)->select();


        //如果设置了数据表前缀参数的话，可以使用name方法
        Db::name('infolist')->where('id', 1)->find();
        Db::name('infolist')->where('id', 1)->select();

        if ($result) {
            echo '有记录';
        } else {
            echo '无记录';
        }
        dump($result);
    }

    public function add(){

        //添加一条数据
    }
}
