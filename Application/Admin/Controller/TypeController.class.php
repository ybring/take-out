<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends BaseController {


	 function _initialize()
    {
        parent::_initialize();//先走父类构造方法 判断是否已经登录
        //$this->config_model=D('Config');//实例化模型
        $this ->type=D('type');
    }
     /*
        分类页面管理
     */
	public function index(){
            $list=$this->type ->order('type_id')->select();
            $this->assign('list',$list);
			$this-> display();
	}

    /*
        添加分类页面
     */
    public function type_add(){
            $this->display();
    }
     /*
        添加分类逻辑
     */
     public function type_add_in(){
            $this->type->create();
            $data = $this->type->add();
            $this->ajaxReturn($data);    
    }
     public function type_add_cp(){
            $this->display();
    }
        /*
        添加分类逻辑
     */
     public function type_add_cp_in(){
            $this->type->create();
            //$res = $this->type->add();
            $data =['msg'=>'修改失败'];
            if($this->type->add()){
                $data['msg'] ='修改成功';
            } 
            $this->ajaxReturn($data);
    }
    public function type_edit(){
        $type_id =I('get.type_id');
        $list=$this->type ->find($type_id);
        //dump($list);exit;
        $this->assign('list',$list);
        $this-> display(); 
    }


    public function type_edit_in(){
        $type_id =I('get.type_id');
        $this->type->create();
        
        if ($this->type->save()) {
            echo json_encode(['msg' => '修改成功']);
        } else {
            echo json_encode(['msg' => '修改失败']);
        }
        
    }
    public function type_del(){
        $type_id=I('post.type_id');
        $data =['msg'=>'删除失败', 'code'=>1];
        $res=$this->type->delete($type_id);
        if($res){
            $data['msg'] ='删除成功';
            $data['code'] =0;
        }
        $this->ajaxReturn($data);
    }
    
        
}