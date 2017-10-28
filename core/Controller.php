<?php
/**
 * Created by PhpStorm.
 * User: zhangrenjie
 * Date: 2017/10/29
 * Time: 上午12:33
 */
namespace core;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
}