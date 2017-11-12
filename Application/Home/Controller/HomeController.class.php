<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller {
	function _initialize()
    {
       // parent::_initialize();//先走父类构造方法 判断是否已经登录
        $this->type=D('type');
    }
    public function index(){
    		$info = $this->type->relation(true)->select();
    		$this->assign('list',$info);
            //dump($info);exit();
            $this->display();
        }
}