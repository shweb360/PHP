<?php 
namespace app\index\controller;

class City {

    /**     
     * 空操作是指系统在找不到指定的操作方法的时候，
    * 会定位到空操作（_empty）方法来执行，利用这个机制，
    * 我们可以实现错误页面和一些URL的优化。
     */

    public function _empty($name){
        return $this->showCity($name);
    }
        
     //注意 showCity方法 本身是 protected 方法
    protected function showCity($name){
      return '当前城市'.$name;
    }
}