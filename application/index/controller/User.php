<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\User as UserModel; //引用user类

/**
*
*/
class User extends Controller
{
    public function index()
    {
        //对象实例化
        $User  = new UserModel();
        //取数据
        $users = $User::all();
        // dump($users);

        // 数据传入V层
        $this->assign('users',$users);
        return $this->fetch();
    }
    // 批量新增
    public function addList()
    {
        $User = new UserModel();
        $list = [
            ['nickname'=>'Meiko','email'=>'123@11.com','birthday'=>strtotime('19990601')],
            ['nickname'=>'Deft','email'=>'132@11.com','birthday'=>strtotime('1999-05-02')],
            ['nickname'=>'Pawn','email'=>'1234@11.com','birthday'=>strtotime('19970701')],
        ];
        if ($User->saveAll($list)) {
            return '用户批量新增成功';
        }
        else{
            return $User->getError();
        }
    }

    public function read()
    {
        $user = UserModel::getByEmail('11@1.com');
        // dump($user);
        echo $user->nickname . '<br/>';
        echo $user->email . '<br/>';
        echo date('Y/m/d', $user->birthday) . '<br/>';
    }

    public function search()
    {
        $list = UserModel::all(['status'=>1]);
        foreach ($list as $user) {
            echo $user->nickname . '<br/>';
            echo $user->email . '<br/>';
            echo date('Y/m/d', $user->birthday) . '<br/>';
            echo '----------------------------------<br/>';
        }
}


}
