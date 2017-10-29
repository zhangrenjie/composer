<?php
/**
 * Created by PhpStorm.
 * User: zhangrenjie
 * Date: 2017/10/29
 * Time: 下午1:11
 */

namespace web\controller;

use Gregwar\Captcha\CaptchaBuilder;

class Captcha
{
    //生成二维码
    public function show()
    {
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->build();
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->output();
    }

    //获取验证码
    public function getCode(){
        echo $_SESSION['phrase'];
    }
}