<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\User; //引用user类
class Index extends Controller
{
    public function index()
    {
        //对象实例化
        $User  = new User();
        //取数据
        $users = $User::all();
        // dump($users);

        // 数据传入V层
        $this->assign('users',$users);
        return $this->fetch();
    }

    public function add()
    {
        $user['nickname'] = '看云';
        $user['email']    = 'kancloud@qq.com';
        $user['birthday'] = strtotime('2015-04-02');
        if ($result = User::create($user)) {
            return '用户[ ' . $result->nickname . ':' . $result->id . ' ]新增成功';
        }
        else {
            return '新增出错';
        }
    }
}
