<?php

namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller
{
	// 用户
	protected $user_phone;

	/**
	 * [Is_Login 登录校验]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2016-12-03T12:42:35+0800
	 */
	protected function Is_Login()
	{
		if(empty($_SESSION['user_phone']))
		{
			$this->error(L('您还未登录，不能执行此操作！'), U('Login/index'));
			exit();
		} else {
			// 用户
			$this->assign('user_phone',session('user_phone'));
		}
	}
	public function feedback(){
		$contact=I('post.contact');
		$opinion=I('post.opinion');
		$data['contact']=$contact;
		$data['opinion']=$opinion;
		$data['time']=date('Y-m-d H:i:s',time());
		$d = array('msg' =>'提交失败！' , 'code'=>0 );
		$feedback=M('feedback');
		if($feedback->add($data)){
			$d['msg']=	'提交成功！感谢您的反馈~';
			$d['code'] = 1;
			$this->ajaxReturn($d);exit();
		}
		$this->ajaxReturn($d);exit();
	}



}
?>