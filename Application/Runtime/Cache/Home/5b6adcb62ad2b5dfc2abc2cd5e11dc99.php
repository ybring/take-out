<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><!--/*技术支持，小庄602842076     验证：商城技术支持*/
/*技术支持，小庄602842076    验证：商城技术支持*/
/*技术支持，小庄602842076    验证：商城技术支持*/
/*技术支持，小庄602842076    验证：商城技术支持*/
/*技术支持，小庄602842076    验证：商城技术支持*/
/*https://shop116998991.taobao.com/*/
/*https://shop116998991.taobao.com/*/
/*https://shop116998991.taobao.com/*/-->

<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="wb:webmaster" content="239d3d1dbdde1b2c" />
    <link rel="stylesheet" type="text/css" href="/waimai/Public/Home/css/reset.css" />
    <link rel="stylesheet" href="/waimai/Public/Home/css/common.css"/>
    
    <link rel="stylesheet" href="/waimai/Public/Home/css/login.css"/>

    <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="/waimai/Public/Home/css/frontPage-ie8-fix.css" /><![endif]-->
    <!--[if lte IE 10]><script>document.createElement('footer');document.createElement('header');document.createElement('nav');document.createElement('section');document.createElement('article');</script><![endif]-->
    <!--[if lte IE 7]><script>window.onload=function(){location.href="/ie6warning/"}</script><![endif]-->
    <title>登录</title>
    <script type="text/javascript">
        
        (function(document, screen) {
            if (screen.width < 760) {
                document.location.href="/mobile/";
            }
        }(document, screen));
    </script>
</head>
<body>
    
    <header id="header" class="">
        <div class="common-width">
            
                <section class="clearfix">
                    <h1 class="logo" title="沙漏外卖">
                        <a href="index.html"></a>
                    </h1>
                    <span class="page-name"> | <a href="<?php echo U('Login/idnex');?>">登录</a></span>
                </section>
                
            
        </div>
    </header>
    
    <section class="main">
        <div class="common-width">
            
    <div class="main-inner">
        
            <div class="log-box" id="loginPageBox">
                <div class="form-group w275">
                    <label for="lPhone">手机号码</label>
                    <span class="fs12 fr">没有注册 ？ <a href="/account/register/" class="yo">立即注册</a></span>
                    <input id="lPhone" name="phone" maxlength="11" type="text" class="form-text" placeholder="输入您的手机号码"/>
                </div>
                <div class="form-error-message"></div>
                <div class="form-group w275" id="4">
                    <label  for="lPass" >登录密码</label>
                    <input id="lPass" name="password" maxlength="18" type="password" class="form-text" onpaste="return false" placeholder="请输入登录密码"/>
                </div>
                <div class="form-error-message"></div>
                
                    <div class="form-group w275">
                
                    <input  maxlength="5" id="lCaptcha" name="code" type="text" class="form-text" placeholder="请输入验证码"/>
                    <span><img id="ver" title="点击刷新" src="verify_c" onClick="this.src='<?php echo U("verify_c");?>?'+Math.random()" alt="验证码"/></span>
                </div>
                <div class="form-error-message"></div>
                <div class="form-group checkbox clearfix">
                    <span class="fr fs12"><a class="yo" target="_black" href="/account/password/reset_via_mobile/" >忘记密码</a></span>
                </div>
                <div>
                    <button  class="form-btn" id="denglu" >登录</button>
                </div>
            </div>
        
    </div>

        </div>
    </section>
    <footer id="footer"><!--    页脚   -->
    <div class="footer-first gray">
        <div class="company-info clearfix fs14 gray">
            <a href="about.html" target="_blank"  rel="nofollow">关于我们</a>
            <a href="help.html" target="_blank"  rel="nofollow">帮助中心</a>
            <a href="javascript:;" target="_blank"  rel="nofollow">法律声明</a>
            <a href="jobs.html" target="_blank"  rel="nofollow">人才招聘</a>
            <a href="contact.html" target="_blank"  rel="nofollow">联系我们</a>
            <a href="javascript:;" user-feedback ng-click="userFeedback=true" class="last" rel="nofollow">意见反馈</a>
            
        </div>
    </div>
    <div class="footer-last">
        <a target="_blank" class="foot-logo-1 base-logo" href="<?php echo U('/Home/Index/index');?>"></a>
        <div class="tc fs14 light-gray mb10">
          ©2017 waimaichaoren.com All Rights Reserved - 沪ICP备11019908号
        </div>
    </div>
</footer>
    
    
    <script type="text/javascript" src="/waimai/Public/Home/js/jquery-1.7.2.min.js"></script>
    
<script type="text/javascript" src="/waimai/Public/Home/js/loginVaildate.js"></script>
<script type="text/javascript" src="/waimai/Public/layer/layer.js"></script>

<script type="text/javascript">


$("#denglu").click(function(){
    //单机获取 值
    var phone= $("input[name='phone']").val();
    var password= $("input[name='password']").val();
    var code= $("input[name='code']").val();
    var myreg = /^(((13[0-9]{1})|(14[0-9]{1})|(17[0]{1})|(15[0-3]{1})|(15[5-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if(phone==""){
        //手机号空时提醒
    $("#demo").remove();
    $("<span id='demo' style='color:red;'></span>").insertAfter($(this)).html('手机号码不能为空！').fadeOut(6000, function() { $(this).remove(); })
        return false;
    }else if(phone.length !=11){
        $("#demo").remove();
        $("<span id='demo' style='color:red;'></span>").insertAfter($(this)).html('请输入正确的手机号码！').fadeOut(6000, function() { $(this).remove(); })
        return false;
        }
        else if(!myreg.test(phone)){
        $("#demo").remove();
        $("<span id='demo' style='color:red;'></span>").insertAfter($(this)).html('请输入有效的手机号码！').fadeOut(6000, function() { $(this).remove(); })
        return false;
        }
        //密码空时提醒
    if(password==""){   
        $("#demo").remove();
        $("<span id='demo' style='color:red;'></span>").insertAfter($(this)).html('密码不能为空！').fadeOut(6000, function() { $(this).remove(); })
            return false;
    }else if(password.length <6 || password.length >18){
        $("#demo").remove();
        $("<span id='demo' style='color:red;'></span>").insertAfter($(this)).html('密码不能少于6位！').fadeOut(6000, function() { $(this).remove(); })
        return false;
        }
    //验证码空时提醒
    if(code==""){
        $("#demo").remove();
        $("<span id='demo' style='color:red;'></span>").insertAfter($(this)).html('验证码不能为空！').fadeOut(6000, function() { $(this).remove(); })
            return false;
    }
    //简单验证完毕
    //验证验证码是否正确
    $.post('login_in', {'code':code,'phone':phone,'password':password} ,function(data){
        if(data.code){
            //正确后跳转
           
            
            return false;
        }
        //错误提示+ 自动换验证码
        $("#demo").remove();
        $("<span id='demo' style='color:red;'></span>").insertAfter($('#denglu')).html(data.msg).fadeOut(6000, function() { $(this).remove(); })
        $('#ver').click();
        return false; 
    });

});

 layer.msg("登录成功~",
            {
                icon:6
                ,time : 2000
                
            }
            ,function(){
                location.href="<?php echo U('Index/index');?>";
            });
</script>

</body>
</html>