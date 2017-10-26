<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	    /*
     * 使用TP封装的构造方法
     * **/
    function _initialize()
    {
        $this->admin_user=D('admin'); 
        $Verify = new \Think\Verify();
        $Verify->entry();
    }

    public function index(){
            $this->display();
        }
        //生成验证码
        public function verify_c(){  
            $Verify = new \Think\Verify();
            // $Verify->fontSize = 18;  
            // $Verify->length   = 4;  
            // //$Verify->useNoise = false;  
            // //$Verify->codeSet = '0123456789';  
            // $Verify->imageW = 130;  
            // $Verify->imageH = 50;  
            //$Verify->expire = 600; 
            $Verify->entry();
        }  
    public function login_in(){
        //验证码检验
        $code =new I('code');
        $verify =new \Think\Verify();
        if($verify ->check($code)){
            $this->success("验证成功!");exit;
        }else{
            $this->error("验证失败！");exit;
        }
        //验证用户名和密码
        $username=I('post.username');//接收用户名
        $password=I('post.password');//接收密码
        $map['username']=$username;//根据用户名称作为条件
        dump($username);
        $user_info=$this->admin_user->where($map)->find();//查询用户的数据
        dump($user_info,$password);
        if(!$user_info)
        {
            $this->error("用户名不存在！");
            session("user_info",null);
            exit();
        }else{
            //说明用户名已经有了
            if($user_info['password']!=$password)
            {
                //告知用户名 密码错误
                $this->error("密码错误！");
                session("user_info",null);
                exit();
            }
            //此处说明用户名和密码都正确
            session("user_info",$user_info);//将用户信息放入session
            $this->success("登录成功！",U('/Admin/Admin/index'));
        }
    }
     /*
     * 注销方法
     * **/
    public function login_out()
    {
        session("user_info",null);//session清空
        session_destroy();
        $this->success("退出成功！",U('/Admin/Login/index'));//退出到登录页面
    }
}