<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends CommonController {
  /**
   * *订单显示页面
   * @return [type] [description]
   */
    public function index(){
    	$this->add=M('deliveryaddress');
   		$add = $this->add->select();
   		//dump($info);exit();
   		$this->assign('list', $info);
    	$this->assign('add', json_encode($add));
      $this->display();
    }
    /**
     * [update_address description] 添加地址
     * @return [type] [description]
     */
    public function update_address(){
        
    }
    public function createOrder()
  {
    // 调用父类前置方法
    //parent::_initialize();

    // 登录校验  到时候在方法里调用即可
    $this->Is_Login();
  }
}