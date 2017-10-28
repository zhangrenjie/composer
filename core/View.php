<?php
/**
 * Created by PhpStorm.
 * User: zhangrenjie
 * Date: 2017/10/29
 * Time: 上午12:14
 */

namespace core;


class View
{
    //模版文件
    protected $file;
    //模版变量
    protected $vars = [];

    //指定模版文件
    public function make(string $file)
    {
        $this->file = 'web/view/' . $file . '.html';
        return $this;
    }

    //传递模版变量
    public function with(string $name, $value)
    {
        $this->vars[$name] = $value;
        return $this;
    }

    //传递多个变量
    public function withs(array $arr)
    {
        if (!empty($arr)) {
            $this->vars = array_merge($this->vars, $arr);
        }
        return $this;
    }

    public function __toString()
    {
        //将模版变量数组分配给模版变量
        extract($this->vars);
        //加载显示模版
        include $this->file;
        return '';
    }
}