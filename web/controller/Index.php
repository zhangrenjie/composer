<?php
namespace web\controller;

use core\Controller;

/**
 * Created by PhpStorm.
 * User: zhangrenjie
 * Date: 2017/10/28
 * Time: 下午7:38
 */
class Index extends Controller
{
    public function index()
    {
        return $this->view->make('Index/index')->with('version', 'v1.0');
    }

    public function show()
    {
        $personInfo = [
            'name' => '张三',
            'age' => 18,
            'address' => '北京',
            'phone' => 13260293948,
        ];
        return $this->view->make('Index/show')->withs($personInfo);
    }
}