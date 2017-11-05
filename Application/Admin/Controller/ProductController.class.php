<?php
namespace Admin\Controller;
use Think\Controller;

class ProductController extends BaseController {
    function _initialize() {
        parent::_initialize(); //先走父类构造方法 判断是否已经登录
        //$this->config_model=D('Config');//实例化模型
       // $this->administrator = session('user_info');
        $this->type = M('type');
        $this->product = D('product');
    }
    public function index() {
        $data=$this->product->relation(true)->select();
       // dump($data);

        $this->assign('list',$data);
        $this->display();
    }
    /*
    添加商品页面
    */
    public function product_add() {
        $type = $this->type->select();
        $this->assign('type', $type);
        $this->display();
    }
    /*
    添加商品页面逻辑
    */
    public function product_add_in() {
    	$product_add_in =D('product');
        $name=I('post.name');
        $type_id=I('post.type_id');
        $price=I('post.price');
        $picture =I('post.picture');
        $picture=strstr($picture, ',');//删除data:image/jpeg;base64  删除逗号之前的
		$picture = ltrim($picture, ",");//删除字符串第一个 逗号
		$picture = base64_decode($picture);

		// 写入文件
		$pictured_name = "./Public/upload/products/".date("Y_m_d").mt_rand(1000,9999).'.jpeg';
			
		file_put_contents($pictured_name, $picture);

        $da=array('name'=>$name,'type_id'=>$type_id,'price'=>$price,'picture'=>$pictured_name);
        
        $data =['msg'=>'添加失败'];
            if($product_add_in->add($da)){
                $data['msg'] ='添加成功';
            } 
        
        $this->ajaxReturn($data);
        
    }


     /*
    添加商品页面
    */
    public function product_add_cp() {
        $type = $this->type->select();
        $this->assign('type', $type);
        $this->display();
    }
     /**
     * 添加商品
     * @return [type] [description]
     */
    public function pictured_add_cp_in()
    {
        $name=I('name');
        $type_id=I('type_id');
        $price=I('price');
        if($name=="" || $price ==""){
             $this->assign('jumpUrl', "javascript:window.parent.location.reload();");
            $this->error('数据不完善','',1);
            exit;
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     'product/'; // 设置附件上传（子）目录
       // $upload->saveName = "time"; //设置文件名
        $upload->autoSub = false;
        //打开的话会生成一个时间 文件夹，真刺激----public/Uploads/6669/2017-11-01/图片名
        //---关闭的话会在-public/Uploads/6669/图片名
        $upload->subName  = array('date','Ymd');
        //再打开的状态下 把时间文件夹改名--public/Uploads/6669/tupian2/图片名
        // 上传文件 
        $info   =   $upload->upload();
       // dump($info);
        if(!$info) 
        {// 上传错误提示错误信息    
            $this->error($upload->getError());
        }
        else{// 上传成功 获取上传文件信息  
            foreach($info as $file)
            {       
                 $picture=$file['savepath'].$file['savename'];
                 $thumb = $file['savepath'].'thumb_'.$file['savename'];
                 //dump($picture);dump($thumb);exit;
                 $picture_url='./Public/Uploads/'.$picture;
                 $thumb_url='./Public/Uploads/'.$thumb;
            }
           $image = new \Think\Image(); 
           $image->open($picture_url); 
           $width = $image->width(); // 返回图片的宽度
           $height = $image->height(); // 返回图片的高度
           $type = $image->type(); // 返回图片的类型
           $mime = $image->mime(); // 返回图片的mime类型
           $size = $image->size(); // 返回图片的尺寸数组 0 图片宽度 1 图片高度
           $image ->thumb(202,202,\Think\Image::IMAGE_THUMB_CENTER)->save($thumb_url);

           //把数据录入 数据库  $thumb = img压缩图  $picture =img原图 $name=I('name') $type_id=I('type_id');$price=I('price');
           $data=array(
            'name'=>$name,
            'price'=>$price,
            'type_id'=>$type_id,
            'picture'=>$picture,
            'thumb'=>$thumb,
            );
           $this->product->add($data);
           $this->assign('jumpUrl', "javascript:window.parent.location.reload();");
            $this->success('添加产品成功','',1);
          
        }

    }
    /*
    *   商品下架
    * 
     **/
    public function product_stop(){
        $id['id']= I('post._id');
        
        $info=$this->product->where($id)->save(array('up_down'=>0));
        $data['msg']="下架失败！";
        $data['code'] =0;
        if($info){
            $data['msg']="下架成功！";
            $data['code'] =1;
        }
        $this->ajaxReturn($data);
    }
    /**
     * 商品上架
     * @return [type] [description]
     */
    public function product_start(){
        $id['id']= I('post._id');
        $info=$this->product->where($id)->save(array('up_down'=>1));
        $data['msg']="上架失败！";
        $data['code'] =0;
        if($info){
            $data['msg']="上架成功！";
            $data['code'] =1;
        }
        $this->ajaxReturn($data);
    }
    /**
     * [product_del description]
     * 商品 删除 连带图片
     * @return [type] [description]
     */
    public function product_del(){
        $id = I('post.id');
        $info=$this->product->find($id);
        $img_url ="./Public/Uploads/".$info['picture'];
        $thumb_url ="./Public/Uploads/".$info['thumb'];
       //删除 图片
        unlink($thumb_url);
        unlink($img_url);
        $this->product->delete($id);
        $$data['msg']="删除成功！";
        $this->ajaxReturn($data);
    }
     /**
     * [product_del description]
     * 商品 删除 连带图片
     * @return [type] [description]
     */
    public function product_del_all(){
        $id = I('id');
        $data =['msg'=>'删除失败', 'code'=>1];
        $info =  $this->product->select($id);
        //dump($info); 
        $res=$this->product->delete($id);
        if($res){
            foreach ($info as $value) {
                $img_url ="./Public/Uploads/".$value['picture'];
                $thumb_url ="./Public/Uploads/".$value['thumb'];          
                //删除 图片
                unlink($thumb_url);
                unlink($img_url);
            }       
            $data['msg']="删除成功！";
            $data['code']=1;
        }
        $this->ajaxReturn($data);
    }

}
