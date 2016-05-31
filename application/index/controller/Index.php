<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index($name = 'world')
    {
        return 'hello,' . $name;
    }

    /**
     * 测试不同类型方法在浏览器中的可访问性
     * public protect private
     */
    // hello方法
    public function hello($name = 'world')
    {
        $this->assign('name',$name);
        return $this->fetch();
    }
    // test方法
    public function test()
    {
        return 'test!';
    }
}
