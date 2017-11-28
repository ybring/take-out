<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends CommonController {
  /**
   * 继承父类 判断登录
   * @return [type] [description]
   */
  function _initialize(){
    
    $this->Is_Login();
  }
  /**
   * *订单显示页面
   * @return [type] [description]
   */

    public function index(){
      $id=session('user_id');
    	$this->add=M('deliveryaddress');
   		$add = $this->add->where(array('users_id'=>$id))->select();
   		$this->assign('list', $add);
    	$this->assign('add', json_encode($add));
      $this->display();
    }

    /**
     * 添加地址
     */
    public function add_address(){
        $address = M('deliveryaddress');
        $users_id =session("user_id");
        $customer_name=I('post.receiver');
        $customer_phone=I('post.shouji');
        $delivery_address=I('post.dizi');
        $deliveryaddress = array('users_id'=>$users_id,'customer_name' => $customer_name,'customer_phone' =>$customer_phone ,'delivery_address' =>$delivery_address , );
        $info = $address->add($deliveryaddress);
        $r = array('id' => $info);
        $this->ajaxReturn($r);
    }
    /**
     * 修改地址
     */
    public function upda_address(){
        $address = M('deliveryaddress');
        $id=I('post.id');
        $customer_name=I('post.receiver');
        $customer_phone=I('post.shouji');
        $delivery_address=I('post.dizi');
        $deliveryaddress = array('customer_name' => $customer_name,'customer_phone' =>$customer_phone ,'delivery_address' =>$delivery_address , );
        $address->where(array('id'=>$id))->save($deliveryaddress);
        $r = array('msg'=>"稳");
        $this->ajaxReturn($r);
    }
    /**
     * 把购物车的商品写入订单详情表
     * @return [type] [description]
     */
    public function add_order_detail()
    {
        $data = I('post.data');
        // 订单表
        
        // var_dump(json_decode($data));
        foreach ($data as $dat) {
          var_dump($dat);
        }
       
        exit();
    }
}