<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends BaseController {

	 function _initialize()
    {
        parent::_initialize();//先走父类构造方法 判断是否已经登录
        //$this->config_model=D('Config');//实例化模型
        $this->administrator = session('admin_name');
       
        $this->admin=D('admin');
    }
	public function index(){
			$this->display();
		}
	public function welcome(){
		    $this->adminInfo = $this->admin->find(session('id'));

			$this->display();
		}
	public function feedback_list(){
		$this->display();
	}
	public function memberlist(){
		$this->display();
	}
	
}