<?php

namespace app\index\controller;

use think\Request;


class Testrequest
{

    //获取URL信息
    public function test()
    {
        $request = Request::instance();
        //$request = request();
        //获取当前域名
        echo 'domain: ' . $request->domain() . '<br/>';
        // 获取当前入口文件
        echo 'file: ' . $request->baseFile() . '<br/>';
        // 获取当前URL地址 不含域名
        echo 'url: ' . $request->url() . '<br/>';
        // 获取包含域名的完整URL地址
        echo 'url with domain: ' . $request->url(true) . '<br/>';
        // 获取当前URL地址 不含QUERY_STRING
        echo 'url without query: ' . $request->baseUrl() . '<br/>';

        echo "当前模块名称是" . $request->module() . '<br/>';
        echo "当前控制器名称是" . $request->controller() . '<br/>';
        echo "当前操作名称是" . $request->action() . '<br/>';
    }
}
