<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
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
}