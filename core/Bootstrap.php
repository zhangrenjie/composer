<?php

/**
 * Created by PhpStorm.
 * User: zhangrenjie
 * Date: 2017/10/28
 * Time: 下午7:15
 */

namespace core;

class Bootstrap
{
    //初始化文件
    public static function run()
    {
        //开启session
        session_start();
        //解析路由并调度
        self::parseUrl();
    }

    //解析url并生成控制器方法
    public static function parseUrl()
    {
        if (isset($_GET['s'])) {
            $url = trim($_GET['s']);
            $info = explode('/', $url);
            $class = '\web\Controller\\' . ucfirst($info[0]);
            $action = isset($info[1]) ? $info[1] : 'index';

        } else {
            $class = '\web\Controller\Index';
            $action = 'index';
        }

        //调度
        echo (new $class)->$action();
    }


}