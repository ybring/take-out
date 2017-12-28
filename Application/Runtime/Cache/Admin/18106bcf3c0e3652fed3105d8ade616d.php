<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/html5shiv.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>添加用户 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-member-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input  maxlength="11" placeholder="手机号不要弄错了哦" type="text" class="input-text" value="<?php echo ($phone); ?>" placeholder="" id="phone" name="phone">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" placeholder="密码为 6-18 个字符"  maxlength="18" class="input-text" value="<?php echo ($password); ?>" placeholder="" id="password" name="password">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input id="tijiao"  class="btn btn-primary radius" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;" />
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/waimai/Public/Backstage/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->


<script type="text/javascript">
	$('#tijiao').click(function(){
		var phone = $('#phone').val();
		var password = $('#password').val();
		if(!phone || !password ||password==""||phone==""){
            layer.msg('不能为空！');
			return false;
		}
		if(password.length<6){
            layer.msg('密码小于6个字符');
			return false;
		}
        if(phone.length!=11)
        {
            layer.msg('请输入有效的手机号码！');
            return false;
        }
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1})|(17[0-9]{1})|(14[0-9]{1}))+\d{8})$/;
        if(!myreg.test(phone))
        {
            layer.msg('请输入有效的手机号码！');
            return false;
        }
        $.post("/waimai/Admin/User/user_add_in",{'phone':phone,'password':password},function(r){
            if(r.code ==1){
                layer.msg(r.msg,{time: 1000 },function(){
                    var index=parent.layer.getFrameIndex(window.name);
                    window.parent.location.reload();
                    parent.layer.close(index);
                });
                return false;
            }else{
                layer.msg(r.msg,{time: 1000 },function(){
                    var index=parent.layer.getFrameIndex(window.name);
                    parent.layer.close(index);
                });
                return false;
            }
        });
    });

</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>