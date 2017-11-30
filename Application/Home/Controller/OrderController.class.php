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
        if(!session('order_id')){
            $this->redirect('Index/index');
        }
        $order_id = session('order_id');
        $id=session('user_id');
        $users_id=session('user_id');
        //读出 订单详情
        $order_detail=M('order_detail');
        $or = $order_detail->where(array('order_id'=>$order_id ,'users_id'=>$users_id))->select();
        $order=M('order');
        $this->heji=$order->find($order_id);

        $this->assign('or', $or);
        //读出地址
        $this->add=M('deliveryaddress');
   		$add = $this->add->where(array('users_id'=>$id))->select();
   		$this->assign('list', $add);
    	$this->assign('add', json_encode($add));
        $this->assign('ors', json_encode($or));
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
        $users_id=session('user_id');
        if(!$users_id){
            $re['code']=3;$re['msg']="添加失败！";
            $this->ajaxReturn($re);
        }
        $re['code']=0;
        $re['msg']="添加失败！";
        $data = I('post.data');
        // 订单表
        $total = I('post.total');
        $gai =str_replace(",","",$total);
        $order=M('order');
        $order_id=$order->add(array('total' => $gai,'users_id'=>$users_id));
        if(!$order_id){
            $this->ajaxReturn($re);
        }
        // var_dump(json_decode($data));
        $order_detail=M('order_detail');
        foreach ($data as $dat) {
            //添加进 商品详情表
            $dat['users_id']= $users_id;
            $dat['order_id']=$order_id;
            $dd=$order_detail->add($dat);
            if(!$dd){
                return false;
            }
        }
        session('order_id',$order_id);
        $re['code']=1;;
        $this->ajaxReturn($re);
    }
    /*
     * 完善 订单表
     * **/
    public function add_order_detail_do(){
        $id=session('order_id');
        $user_id=session('user_id');
        $address_id=I('address_id');
        $time_of_delivery=I('time_of_delivery');
        $remarks=I('remarks');
        $data =array('address_id'=>$address_id,'time_of_delivery'=>$time_of_delivery,'remarks'=>$remarks);
        $data['order_date']=date('Y-m-d H:i:s',time());//下单时间
        $data['ip'] = get_client_ip();//获取IP
        $order =M('order');
        $order -> where(array('id'=>$id,'users_id'=>$user_id))->save($data);
        $re['msg']="已提交订单！";
        $re['code']=1;
        $this->ajaxReturn($re);
    }
    public function de_or(){
        $this->Is_Login();
        $id=session('order_id');
        $order = D('order');
        $result = $order->relation(true)->delete($id);//select($id);
        $this->ajaxReturn($result);
    }
}