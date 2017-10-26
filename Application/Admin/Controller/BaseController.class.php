<?php
/*
 * 所有后台控制器的父类
 * 用作权限
 *
 * **/
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller {
    /*
     * 构造函数中先判断是否登录
     * **/
    function _initialize()
    {
        $user_info=session("user_info");//从session取出用户信息
        if(empty($user_info))
        {
            $this->error("您还没有登录，请先登录后操作！",U("/Admin/Login/index"));//跳转到登录页面
        }
    }

}