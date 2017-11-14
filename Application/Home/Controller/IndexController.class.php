<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {

  public function _initialize()
  {
    // 调用父类前置方法
    //parent::_initialize();

    // 登录校验  到时候在方法里调用即可
    //$this->Is_Login();
  }
  // function _initialize()
  //   {
  //       parent::_initialize();//先走父类构造方法 判断是否已经登录
  //      // $this->type=D('type');
  //   }
	/**
	 * [index description]商品详情页 添加商品进购物车并下单
	 * @return [type] [description]
	 */
    public function index(){
      if(($_SESSION['user_phone']))
      {
        $this->assign('user_phone', $_SESSION['user_phone']);
      }
    	$this->type=D('type');
   		$info = $this->type->relation(true)->select();
   		//dump($info);exit();
   		$this->assign('list', $info);
    	$this->assign('list2', json_encode($info));
      //user_phone = session('user_phone');
      $this->display();
    }

/////////////////////////

    /**
     * [index2 description] 测试所用的控制器
     * @return [type] [description]
     */
      public function index2(){
    	$this->type=D('type');
   		$info = $this->type->relation(true)->select();
   		//dump($info);exit();
   		$this->assign('list', $info);
    	$this->assign('list2', json_encode($info));
        $this->display('indexyuanban');
    }
    public function index3(){
     	$res=$_POST;
     	dump($res);
     	dump(json_decode($res['menu_items_data']));
    	echo "6666666";
    	$data ['msg'] ="good";
    	$this -> ajaxReturn($data);exit();
    }
}