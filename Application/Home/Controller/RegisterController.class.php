<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
	/**
	 * [index description]注册显示页面
	 * @return [type] [description]
	 */
    public function index(){
			$_SESSION['send_code'] = random(6,1);
			$send_code=$_SESSION['send_code'];
			$this->send_code =$send_code;
            $this->display();
    }
    //发送 验证码到手机
    public function send_code(){
    	$mobile = $_POST['mobile'];
    	$users = M('users');
    	$res=$users->where(array('phone'=>$mobile))->find();
    	if($res){
    		$msg ="该手机号已经注册！";
    		$this->ajaxReturn($msg);exit();
    	}

		 //请求数据到短信接口，检查环境是否 开启 curl init。
		function Post($curlPost,$url){
				$curl = curl_init();
				curl_setopt($curl, CURLOPT_URL, $url);
				curl_setopt($curl, CURLOPT_HEADER, false);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_NOBODY, true);
				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
				$return_str = curl_exec($curl);
				curl_close($curl);
				return $return_str;
		}

		//将 xml数据转换为数组格式。
		function xml_to_array($xml){
			$reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
			if(preg_match_all($reg, $xml, $matches)){
				$count = count($matches[0]);
				for($i = 0; $i < $count; $i++){
				$subxml= $matches[2][$i];
				$key = $matches[1][$i];
					if(preg_match( $reg, $subxml )){
						$arr[$key] = xml_to_array( $subxml );
					}else{
						$arr[$key] = $subxml;
					}
				}
			}
			return $arr;
		}

		//random() 函数返回随机整数。
		function random($length = 6 , $numeric = 0) {
			PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
			if($numeric) {
				$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
			} else {
				$hash = '';
				$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
				$max = strlen($chars) - 1;
				for($i = 0; $i < $length; $i++) {
					$hash .= $chars[mt_rand(0, $max)];
				}
			}
			return $hash;
		}
		//短信接口地址
		$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
		//获取手机号
		$mobile = $_POST['mobile'];
		//获取验证码
		$send_code = $_POST['send_code'];
		//生成的随机数
		$mobile_code = random(6,1);
		if(empty($mobile)){
			exit('手机号码不能为空');
		}
		//防用户恶意请求
		if(empty($_SESSION['send_code']) or $send_code!=$_SESSION['send_code']){
			exit('请求超时，请刷新页面后重试');
		}
		$post_data = "account=C20548523&password=f87ff50b54013cd777657f15afb8038c&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$mobile_code."。请不要把验证码泄露给其他人。");
		//用户名是登录用户中心->验证码短信->产品总览->APIID
		//查看密码请登录用户中心->验证码短信->产品总览->APIKEY
		$gets =  xml_to_array(Post($post_data, $target));
		if($gets['SubmitResult']['code']==2){
			$_SESSION['mobile'] = $mobile;
			$_SESSION['mobile_code'] = $mobile_code;
		}
		echo $gets['SubmitResult']['msg'];
	}
	//加入数据库
	public function register_in(){
		$data =array('msg'=>'注册失败','code'=>0);
		//检验 手机号和 验证码
		if($_POST['mobile']!=$_SESSION['mobile'] 
			or $_POST['mobile_code']!=$_SESSION['mobile_code'] 
			or empty($_POST['mobile']) 
			or empty($_POST['mobile_code'])){
			//不通过通过 验证手机验证码
			$data['msg'] ='手机验证码输入错误。';
			$this->ajaxReturn($data);exit();
		}else{
			$_SESSION['mobile'] = '';
			$_SESSION['mobile_code'] = '';	
			//exit('注册成功。');	
			$phone=$_POST['mobile'];
			$password=$_POST['password'];
			$password=password_hash($password,PASSWORD_DEFAULT);
			$user=array('phone'=>$phone,'password'=>$password);
			$users =M('users');
			$users->add($user);
			$data['msg'] ='注册成功！';$data['code'] =1;
			$this->ajaxReturn($data);exit();
		}
		$this->ajaxReturn($data);exit();
	}
	   
}