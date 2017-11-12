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
		} else {
			// 用户
			$this->assign('user_phone',session('user_phone'));
		}
	}




}
?>