<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
  /**
   * 继承父类 判断登录
   * @return [type] [description]
   */
  function _initialize(){
    
    $this->Is_Login();
  }
  /**
   * *显示个人用户页面
   * @return [type] [description]
   */
    public function index(){
        $user_id = session('user_id');
        $order = M('order')->where()->select(array('user_id'=>$user_id));
        $this->display();
    }
    /**
     * *修改密码
     * @return [type] [description]
     */
    public function upda_pwd(){
        $this->Is_Login();
        $old_password = I('post.old_password');
        $new_password = I('post.new_password');
        $id = session('user_id');
        $user = M('users')->find(array("id"=>$id));
        $res=password_verify($old_password, $user['password']);
        if($res){
            $password =password_hash($new_password, PASSWORD_BCRYPT);
            M('users')->where(array("id"=>$id))->save(array("password"=>$password));
            $d['status']='ok';
            $this->ajaxReturn($d);
        }


    }
    /*
 * 用户 显示 订单
 * **/
    public function user_order(){
        $this->Is_Login();
        $id =session('user_id');
        $list=D('order')->relation(true)->where("users_id=".$id)->order('id desc')->select();
        //dump($list);exit;
        $this->assign('list',$list);
        $this->display();
    }
    /*
     * 用户 查看 订单详情
     * **/
    public function order_detail(){
        $this->Is_Login();
        $id =I('id');
        $list=D('order')->find("order_id=".$id);
        $this->assign('list',$list);
        $d =$list;
        $d['code']=0;
        $this->ajaxReturn($d);
    }
    /*
     * 用户地址管理
     * **/
    public function user_addr(){

        $users_id=session('user_id');
        $this->add=M('deliveryaddress');
        $add = $this->add->where(array('users_id'=>$users_id))->select();
        $this->assign('list', $add);
        $this->display();

    }
}