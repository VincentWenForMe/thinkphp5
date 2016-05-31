<?php
namespace app\index\controller;

class Index
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
    public function hello()
    {
        return 'hello!';
    }
    // test方法
    public function test()
    {
        return 'test!';
    }
    // hello2方法
    protected function hello2()
    {
        return 'hello2';
    }
    // test2方法
    private function test2()
    {
        return 'test2';
    }
}
