<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        // 利用Db方法取数据库中的数据
        $data = Db::name('data')->find();
        // dump($data);
        // 将数据传入V层
        $this->assign('data',$data);
        // 渲染模板
        return $this->fetch();
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
        // 数据查询
        $data = Db::name('data')->where('id',2)->find();
        dump($data);

        // 返回最后一条sql语句
        echo Db::getLastSql();
    }
}
