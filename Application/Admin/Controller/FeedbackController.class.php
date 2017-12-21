<?php
namespace Admin\Controller;
use Think\Controller;
class FeedbackController extends BaseController {


	 function _initialize()
    {
        parent::_initialize();//先走父类构造方法 判断是否已经登录
        //$this->config_model=D('Config');//实例化模型
        $this->feedback=M('feedback');
    }
     /*
      * 反馈意见 列表页
      * **/
	public function index(){
            $list=$this->feedback->order('id')->select();
            //dump($list);exit();
            $this->assign('list',$list);
			$this-> display();
	}
    /*
     * 反馈意见 删除
     * **/
    public function del(){
        if(!I('post.id')){
            $r['code']=0;$r['msg']="删除失败！";
            $this->ajaxReturn($r);
        }
        $id = I('post.id');
        $list=$this->feedback->delete($id);
        if(!$list){
            $r['code']=0;$r['msg']="删除失败！";
            $this->ajaxReturn($r);
        }
        $r['code']=1;$r['msg']="删除成功！";
        $this->ajaxReturn($r);
    }

}