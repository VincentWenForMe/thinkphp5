<?php
namespace app\index\controller;

class Index
{
    public function index($name = 'world')
    {
        return 'hello,' . $name;
    }
}
