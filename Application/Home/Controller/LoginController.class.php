<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	/**
	 * [index description]登录显示页面
	 * @return [type] [description]
	 */
    public function index(){
        $this->display();
    }

 	/*
        创建验证码
     **/
    public function verify_c(){  
        $Verify = new \Think\Verify();
        $Verify->entry();
    }
    /**
     * [verify_in description]登录逻辑
     * @return [type] [description]
     */
    public function login_in(){  
    	$data =array('msg'=>'验证码错误','code'=>false);
       	$code =I('code');
       	$phone =I('post.phone');
    	$password =I('post.password'); 
        $verify = new \Think\Verify(); 
        $res = $verify->check($code, $id);
        if($res){
        	//验证码正确
        	$users =M('users');
        	$field = 'phone';
        	if (! $this->isMobile($phone)) {
        		$field = 'username';
        	}
        	$res = $users->where(array($field=>$phone))->find();
        	if(!$res){
        		//查不到手机号
   				$data['msg'] ='当前手机号还没注册，快点加入我们吧！';
        		$data['code'] = false;
        		$this->ajaxReturn($data);exit();   
        	}
        	//验证密码 是否 正确
        	if(password_verify($password, $res['password'])){
        		//

        		session("user_id",$res['id']);
                session("user_phone",$res['phone']);
                //将用户信息放入session
                $newtime=date('Y-m-d H:i:s',time());
                $data['lasttime'] =$newtime;
                $data['ip'] = get_client_ip();
                $users->where(array('id'=>$res['id']))->save($data);

        		$data['msg'] ='账号密码正确！';
        		$data['code'] = true;
        		$this->ajaxReturn($data);exit();    
        	}
        	$data['msg'] ='账号密码错误！请重新输入！';
        	$data['code'] = false;
        	$this->ajaxReturn($data);exit();    //账号密码错误！请重新输入！
        }
        $this->ajaxReturn($data);exit();//验证码错误  
    }


    function isMobile($mobile) 
    {
	    if (!is_numeric($mobile)) {
	        return false;
	    }
	    return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
	}

    public function login_out(){

        session_destroy();
        redirect(U('Login/index'));
    
    }

}