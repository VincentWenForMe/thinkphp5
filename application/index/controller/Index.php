<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\User; //引用user类
class Index extends Controller
{
    public function index()
    {
        $test = new User(); //对象实例化
        dump($test);
    }
}
