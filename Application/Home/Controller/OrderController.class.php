<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends CommonController {
  /**
   * *订单显示页面
   * @return [type] [description]
   */
    public function index(){
    	$this->type=D('type');
   		$info = $this->type->relation(true)->select();
   		//dump($info);exit();
   		$this->assign('list', $info);
    	$this->assign('list2', json_encode($info));
      $this->display();
    }
    public function createOrder()
  {
    // 调用父类前置方法
    //parent::_initialize();

    // 登录校验  到时候在方法里调用即可
    $this->Is_Login();
  }
}