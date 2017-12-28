<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends BaseController {

	 function _initialize()
    {
        parent::_initialize();//先走父类构造方法 判断是否已经登录
        //$this->config_model=D('Config');//实例化模型
        $this->users=M('users');
    }
    public function index(){
        $list =$this->users->select();
        $this->assign('list',$list);
        //dump($list);exit;
        $this->display();
    }
    /*
     * 添加用户
     *
     * **/
    public function user_add(){
        //dump($list);exit;
        $this->display();
    }
    /*
     * 添加用户 逻辑
     *
     * **/
    public function user_add_in(){
        $phone = I('post.phone');
        $re = M('users')->where(array('phone'=>$phone))->find();
        if(!$re){
            $password = I('post.password');
            $password=password_hash($password,PASSWORD_DEFAULT);
            $add_time = date('Y-m-d H:i:s',time());
            $data =array('phone'=>$phone,'password'=>$password,'add_time'=>$add_time,'lasttime'=>$add_time);
            $res = M('users')->add($data);
            if($res){
                //插入成功
                $r['code'] = 1;
                $r['msg'] = "添加用户成功";
                $this->ajaxReturn($r);
            }
            $r['code'] = 0;
            $r['msg'] = "添加用户失败！";
            $this->ajaxReturn($r);
        }else{
            $r['code'] = 0;
            $r['msg'] = "添加用户失败，已存在用户！";
            $this->ajaxReturn($r);
        }
    }

    /*
    *    删除  用户
    * **/
    public function user_del(){
        if(!I('post.id')){
            $r['code']=0;$r['msg']="删除失败！";
            $this->ajaxReturn($r);
        }
        $id = I('post.id');
        $list=M('users')->delete($id);
        if($list){
            $r['code']=1;$r['msg']="删除成功！";
            $this->ajaxReturn($r);
        }
        $r['code']=0;$r['msg']="删除失败！";
        $this->ajaxReturn($r);
    }
    /*
     * 管理员 修改 用户密码
     * **/
    public function user_pwd_save(){
        $id = I('post.id');
        $password = I('post.password');
        if(!$password){
            $r['code']=0;$r['msg']="修改密码失败！";
            $this->ajaxReturn($r);
        }
        $password = password_hash($password,PASSWORD_DEFAULT);
        $res = M('users')->where(array('id'=>$id))->save(array('password'=>$password));
        if($res){
            $r['code']=1;$r['msg']="密码修改成功！";
            $this->ajaxReturn($r);
        }
        $r['code']=0;$r['msg']="修改密码失败！";
        $this->ajaxReturn($r);
    }
    /*
     *     启用——用户
     * **/
    public function user_start(){
        $id = I('post.id');
        if(!$id){
            $r['code']=0;$r['msg']="启用失败！";
            $this->ajaxReturn($r);
        }
        $res = M('users')->where(array('id'=>$id))->save(array('is_de'=>0));
        if($res){
            $r['code']=1;$r['msg']="已启用！";
            $this->ajaxReturn($r);
        }
        $r['code']=0;$r['msg']="启用失败！";
        $this->ajaxReturn($r);
    }
    /*
     *     停用——用户
     * **/
    public function user_stop(){
        $id = I('post.id');
        if(!$id){
            $r['code']=0;$r['msg']="启用失败！";
            $this->ajaxReturn($r);
        }
        $res = M('users')->where(array('id'=>$id))->save(array('is_de'=>1));
        if($res){
            $r['code']=1;$r['msg']="已启用！";
            $this->ajaxReturn($r);
        }
        $r['code']=0;$r['msg']="启用失败！";
        $this->ajaxReturn($r);
    }
}