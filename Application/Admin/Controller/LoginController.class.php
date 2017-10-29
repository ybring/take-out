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
    }
    /*
        登录页面显示
     */
    public function index(){
        if (session('oldusername')!=""||session('oldpassword')!=""){
            $this->oldusername=session('oldusername');
            $this->oldpassword=session('oldpassword');
            session('oldusername',null);
            session('oldpassword',null);
        }
        $this->display();
        }
        /*
            创建验证码
         **/
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
        /*
            登录逻辑
         **/
    public function login_in(){
        $username=I('post.username');//接收用户名
        $password=I('post.password');//接收密码
        //验证码检验
        $code =I('code');
        $verify = new \Think\Verify(); 
        $res = $verify->check($code, $id); 
        if($res){
            //  $this->success("验证成功!");
                //验证用户名和密码
                $map['username']=$username;//根据用户名称作为条件
             //   dump($username); id 5
                $user_info=$this->admin_user->where($map)->find();//查询用户的数据
                if(!$user_info)
                {
                   // $this->error("用户名不存在！");
                    session("user_info",null);
                    $this->error("账号密码错误！请重新输入！",U('index'),1);
                    exit();
                }
                    //说明用户名已经有了
                    //验证密码 MD5 加盐
                    //$user_info['password']!=$passwor
                    //第一个是用户输入的 ，第二个是查数据库 查出来的
                if(password_verify($password, $user_info['password']))
                {
                        //此处说明用户名和密码都正确
                        session("user_info",$user_info['username']);
                        session("admin_id",$user_info['id']);

                        //将用户信息放入session
                        $newtime=date('Y-m-d H:i:s',time());
                        $data['lasttime'] =$user_info['newtime'];
                        $data['newtime']=$newtime;
                        $data['ip'] = get_client_ip();
                        $data['login_count'] = ['exp','login_count+1'];// 用户的积分加
                        $this->admin_user->where(array('id'=>$user_info['id']))->save($data);
                    

                        $this->success("登录成功！",U('/Admin/Admin/index'));exit;     
                }
                    //告知用户名 密码错误
                    // $this->error("密码错误！");
                    session("user_info",null);
                    $this->error("账号密码错误！请重新输入！",U('index'),1);exit;
            }
            else
            {
               // session('oldusername',$username);  
               session('oldusername',$username);
               session('oldpassword',$password);
              //  $this->redirect('index', 5, '验证码错误！请重新输入！');
                $this->error("验证码错误！请重新输入！",U('index'),1);exit;
            }
            
        
    }
     /*
     * 注销登录方法
     * **/
    public function login_out()
    {
        session("user_info",null);//session清空
        session_destroy();
        $this->success("退出成功！",U('/Admin/Login/index'));//退出到登录页面
    }
    /*
      更改密码页面
     **/
    public function change_password()
    { 
        $this->display();
    }
    /*
      更改密码  
     **/
    public function change_password_in()
    {
        $username =session('user_info'); //接收保存的对象
        $oldpassword=I('post.oldpassword');//接收密码
        $newpassword=I('post.newpassword');
        $new_password=I('post.new_password');
        if($newpassword != $new_password)
        {
            $this->error("两次输入的密码不一样！",U('change_password'));
        }

        //验证码检验
        $code =I('code');
        $verify = new \Think\Verify(); 
        $res = $verify->check($code, $id); 
        if($res)
        {
            $map['username']=$username['username'];//根据用户名称作为条件
            $user_info=$this->admin_user->where($map)->find();//查询用户的数据
            if(!$user_info)
            {
                $this->error("账号密码为空！请重新输入！",U('index'));
                exit();
            }
                //说明用户名已经有了
                //验证密码 MD5 加盐
                //第一个是用户输入的 ，第二个是查数据库 查出来的
            if(password_verify($oldpassword, $user_info['password']))
            {
                    //此处说明原密码和数据库密码一样
                    $data['password'] =password_hash($newpassword, PASSWORD_DEFAULT );
                   // dump($data);
                    $this->admin_user->where($map)->save($data);
                    $this->success("修改密码成功！，请重新登录！",U('index')); 
            }else{
                 $this->error("密码错误！请重新输入！",U('change_password'));exit;   
            }
        }
        else
        {
            $this->error("验证码错误！请重新输入！",U('change_password'));exit;
        }
    }

}