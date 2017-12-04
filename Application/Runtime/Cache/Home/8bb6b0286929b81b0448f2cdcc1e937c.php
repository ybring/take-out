<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
  
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="wb:webmaster" content="239d3d1dbdde1b2c" />
    <link rel="stylesheet" type="text/css" href="/waimai/Public/Home/css/reset.css" />
    <link rel="stylesheet" href="/waimai/Public/Home/css/common.css" />
    <link rel="stylesheet" href="/waimai/Public/Home/css/login.css" />
    
    <title>注册</title>
    <script type="text/javascript">(function(document, screen) {
        if (screen.width < 760) {
          document.location.href = "/mobile/";
        }
      } (document, screen));</script>
  </head>
  
  <body>
        <header id="header" class="">
        <div class="common-width">
            
                <section class="clearfix">
                    <h1 class="logo" title="沙漏外卖">
                      
                    </h1>
                    <span class="page-name"> | 注册</span>
                </section>
                
            
        </div>
    </header>
    
    <section class="main">
      <div class="common-width" center>
        <div class="log-box" id="registerPageBox">
          <div class="form-group w275">
            <label for="">手机号码</label>
            <input type="hidden" name='send_code' value="<?php echo ($send_code); ?>" />
            <input type="text" name="mobile" id="mobile" maxlength="11" class="form-text" placeholder="请输入你的手机号码" /></div>
          <div class="form-error-message"></div>
           <div class="form-group w275">

              <div class="captcha-item">
                <div class="form-group captcha clearfix">
                  <input type="text" name='mobile_code' id="Captcha" class="form-text" placeholder="短信验证码" />
                 
                  <input  class="form-btn" id="zphone" type="button" value=" 获取手机验证码 " onClick="get_mobile_code();">
                  </div>
                <div class="form-error-message"></div>
              
            </div>
    
          <div class="form-group w275">
            
            <input type="password" name="password" id="rPass" maxlength="18" class="form-text" onpaste="return false" placeholder="输入登录密码 6-18 个字符" /></div>
          <div class="form-error-message"></div>
          <div class="form-group w275">
            <input type="password" name="password2" id="rPass2" maxlength="18" class="form-text" onpaste="return false" placeholder="输入登录密码 6-18 个字符" /></div>
          <div class="form-error-message"></div>
        
          <div class="form-error-message"></div>
          <div>
            <button class="form-btn" id="register">确认注册</button></div>
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
    <script type="text/javascript" src="/waimai/Public/layui/layui.js"></script>
     <script type="text/javascript" src="/waimai/Public/layui/layui.all.js"></script>
   
    <!--<script type="text/javascript" src="/waimai/Public/Home/js/loginVaildate.js"></script>  重要的JS -->

    <script type="text/javascript">
    // 发送验证码 的js
      function get_mobile_code(){
        $.post('send_code', {mobile:jQuery.trim($('#mobile').val()),send_code:<?php echo $_SESSION['send_code'];?> }, function(msg) {

           // alert(jQuery.trim(unescape(msg)));
            //提交成功 提示框
      if(msg=='提交成功'){
      RemainTime();
        layer.msg('已发送验证~'
          , {icon: 6,time: 2000 //2秒关闭（如果不配置，默认是3秒）
            ,skin : 'ayui-layer-lan',shadeClose:true
            }

        );
      }
        });
  };
  var iTime = 59;
  var Account;
  function RemainTime(){
    document.getElementById('zphone').disabled = true;
    var iSecond,sSecond="",sTime="";
    if (iTime >= 0){
      iSecond = parseInt(iTime%60);
      iMinute = parseInt(iTime/60)
      if (iSecond >= 0){
        if(iMinute>0){
          sSecond = iMinute + "分" + iSecond + "秒";
        }else{
          sSecond = iSecond + "秒";
        }
      }
      sTime=sSecond;
      if(iTime==0){
        clearTimeout(Account);
        sTime='获取手机验证码';
        iTime = 59;
        document.getElementById('zphone').disabled = false;
      }else{
        Account = setTimeout("RemainTime()",1000);
        iTime=iTime-1;
      }
    }else{
      sTime='没有倒计时';
    }
    document.getElementById('zphone').value = sTime;
  } 
</script>
<script>
// 注册提交信息  单击事件
$("#register").click(function(){
    var password= $("input[name='password']").val();
    var password2= $("input[name='password2']").val();
    var mobile= $("input[name='mobile']").val();
    var mobile_code= $("input[name='mobile_code']").val();
    if(password==""){   
        $("#demo").remove();
        $("<span id='demo' style='color:red;'></span>").insertAfter($(this)).html('密码不能为空！').fadeOut(6000, function() { $(this).remove(); })
            return false;
    }else if(password.length <6 || password.length >18){
        $("#demo").remove();
        $("<span id='demo' style='color:red;'></span>").insertAfter($(this)).html('密码不能少于6位！').fadeOut(6000, function() { $(this).remove(); })
        return false;
    }else if(password!=password2){
        $("#demo").remove();
        $("<span id='demo' style='color:red;'></span>").insertAfter($(this)).html('两次密码输入不一样！').fadeOut(6000, function() { $(this).remove(); })
        return false;
    }
    $.post('register_in',{'password':password,'mobile':mobile,'mobile_code':mobile_code},function(data){
          if(data.code==1){
            layer.msg('注册成功！', {
                  icon: 6
                  ,time: 2000 //2秒关闭（如果不配置，默认是3秒）
                  ,shadeClose:true
                }, function(){
                  location.href = "<?php echo U('Login/index');?>";//location.href实现客户端页面的跳转
                });   
          }else{
            layer.open({
              content: '注册失败！'
              ,time: 3000
              ,shadeClose:true
              ,icon: 5
              ,skin : 'ayui-layer-lan'
              }); 
          }
          
    });
});
</script>
  
    <script type="text/javascript" src="/waimai/Public/Home/js/angular.min.js"></script>
    <script src="/waimai/Public/Home/js/common.js"></script>
    <script src="/waimai/Public/Home/js/service.js"></script>


</html>