<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/html5shiv.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui.admin/css/style.css" />
<style>

#clipArea {
	margin: 20px;
	height: 300px;
	background-color: #aaa;
}
#file,
#clipBtn {
	margin: 20px;
}
#view {
	margin: 0 auto;
	width: 200px;
	height: 200px;
}
</style>
<!--[if IE 6]>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加管理员 - 管理员管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
<form  action="" method="post" class="form form-horizontal" id="form-product-add">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>产品名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="name">
			</div>
		</div>

	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="type_id" class="select">
					<?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["type_id"]); ?>"><?php echo ($vo["type_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
		</div>

	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">产品价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="price" id="" placeholder="" value="" class="input-text" style="width:90%">
				元</div>
			</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">图片选择：</label>
				<input type="file" name="" id="file" placeholder="" value="选这图片" class="btn btn-primary" >
				<button type="button" class="btn btn-primary radius" id="clipBtn">&nbsp;&nbsp;截取&nbsp;&nbsp;</button>
		</div>

	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">图片上传：</label>
				<div  id="clipArea" class="formControls col-xs-9 col-sm-6">			
				</div>	
				<div id="view"  id="clipArea" style="margin: 20px 0 0 0;" class="formControls col-xs-9 col-sm-6">			
				</div>
				
		</div>
		
		<div class="row cl"></div>
			<div  class="row cl">
				<div   class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
					<input  name="btn" id="btn"  class="btn btn-primary radius" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
					<input type="hidden" name="picture" id="picture">
					<!--图片的base64--> 
				</div>
			</div>
</form>
</article>

<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/waimai/Public/Backstage/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/lib/layer/2.4/layer.js"></script>

<script type="text/javascript" src="/waimai/Public/Backstage/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/waimai/Public/Backstage/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/lib/jquery.validation/1.14.0/messages_zh.js"></script> 

<script src="/waimai/Public/tupian/js/jquery-2.1.3.min.js"></script>


<script src="/waimai/Public/tupian/js/iscroll-zoom.js"></script>
<script src="/waimai/Public/tupian/js/hammer.js"></script>
<script src="/waimai/Public/tupian/js/lrz.all.bundle.js"></script>
<script src="/waimai/Public/tupian/js/jquery.photoClip.js"></script>

<script type="text/javascript">
$('#btn').click(function(){
	//var product_name = $('input[name=product_name]').val();
	//var product_price = $('input[name=price]').val();
	//var type_id =$('select option:selected').val();
	//console.log($('#form-product-add').serialize());
	var data=$('#form-product-add').serializeArray();
	//console.log(data);

	for (var i in data) {
		if (data[i].value == '') {
			layer.msg(data[i].name + "内容为空，已取消！");
			return false;
		}
	}
	$.post('product_add_in',data,function(data){
		layer.msg(data.msg);//成功后输出设置的子
	
		setTimeout(function(){
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}, 1000); 
		parent.location.reload();
		
	});
});
///////////////////////////
var clipArea = new bjj.PhotoClip("#clipArea", {
	size: [260, 260],
	outputSize: [400, 400],
	file: "#file",
	view: "#view",
	ok: "#clipBtn",
	loadStart: function() {
		console.log("照片读取中");
	},
	loadComplete: function() {
		console.log("照片读取完成");
	},
	clipFinish: function(dataURL) {
		$('#picture').val(dataURL);
	}
});

</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>