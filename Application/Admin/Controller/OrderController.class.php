<?php
namespace Admin\Controller;
use Think\Controller;

class OrderController extends BaseController {
    function _initialize() {
     parent::_initialize(); //先走父类构造方法 判断是否已经登录
//        //$this->config_model=D('Config');//实例化模型
//       // $this->administrator = session('user_info');
////        $this->type = M('type');
       $this->order = D('order');
   }
    public function index() {
        $data=$this->order->where("or_state < 2")->relation('address')->select();
        //dump($data);exit();
        $this->assign('list',$data);
        $this->display();
    }
    public function order_show() {
        if(!I('get.id')){
            $this->redirect('index');
        }
        $data=$this->order->where(array('id'=>I('get.id')))->relation('order_detail')->select();
       // dump($data);exit();
        $this->assign('list',$data);
        $this->display();
    }
    /*
    *   送餐取消下架
    * 
     **/
    public function order_stop(){
        $id['id']= I('post._id');
        $info=$this->order->where($id)->save(array('or_state'=>0));
        $data['msg']="送餐取消操作出错！";
        $data['code'] =0;
        if($info){
            $data['msg']="送餐已取消！";
            $data['code'] =1;$data['id'] =$id['id'];
        }
        $this->ajaxReturn($data);
    }
    /**
     * 送餐发出上架
     * @return [type] [description]
     */
    public function order_start(){
        $id['id']= I('post._id');
        $info=$this->order->where($id)->save(array('or_state'=>1));
        $data['msg']="送餐发出操作出错！";
        $data['code'] =0;
        if($info){
            $data['msg']="已送餐！";
            $data['code'] =1;$data['id'] =$id['id'];
        }
        $this->ajaxReturn($data);
    }
    /**
     * 订单 删除
     * @return [type] [description]
     */
    public function de_or(){
        if(!I('post.id')){
            $r['code'] = 0;
            $r['msg'] = "删除失败!";
            $this->ajaxReturn($r);
        }
        $id=I('post.id');
        $order = D('order');
        $result = $order->where("id=$id AND or_de=1")->relation(true)->delete();//select($id);
        if(!$result){
            $r['code'] = 0;
            $r['msg'] = "用户未删除所以删除失败!";
            $this->ajaxReturn($r);
        }
        $r['code'] = 1;
        $r['msg'] = "删除订单成功!";
        $this->ajaxReturn($r);
    }
    public function ordered() {
        $data=$this->order->where("or_state=2")->relation('address')->select();
        //dump($data);exit();
        $this->assign('list',$data);
        $this->display();
    }
}
