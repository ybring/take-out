<?php
namespace Admin\Controller;
use Think\Controller;

 class EmptyController extends Controller
 {
 	public function _empty(){      
 		$this->redirect('Index/index',"", 0, "");//暂时关闭
 	}
} 

	