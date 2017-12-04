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

    <link rel="stylesheet" href="/waimai/Public/Home/css/forget_passwd.css"/>

    <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="/waimai/Public/Home/css/frontPage-ie8-fix.css" /><![endif]-->
    <!--[if lte IE 10]><script>document.createElement('footer');document.createElement('header');document.createElement('nav');document.createElement('section');document.createElement('article');</script><![endif]-->
    <!--[if lte IE 7]><script>window.onload=function(){location.href="/ie6warning/"}</script><![endif]-->
    <title>找回密码</title>
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
                    <span class="page-name"> | 找回密码</span>
                </section>
                
            
        </div>
    </header>
    
    <section class="main">
        <div class="common-width">
            
    <div class="main-inner">
        <div class="passwd-nav-box">
            <ol class="passwd-nav">
                <li class="first done">
                    <span><i>1</i><em>身份验证</em></span>
                </li>
                <li class="middle ">
                    <span><i>2</i><em>重设登录密码</em></span>
                </li>
                <li class="last ">
                    <span><i>3</i><em>完成</em></span>
                </li>
            </ol>
        </div>
    
<form action="#" method="post">
    <div class="fill-data-box" id="phoneStep">
        <div class="fill-data">
            <div class="title">手机号码：</div>
            <div class="form-group w275">
                <input type="text" maxlength="11"  id="phone" name="phone" class="form-text" placeholder="输入您常用的手机号码"/>
            </div>
            <div class="form-error-message"></div>
            <div class="captcha-wrap">
                <div class="captcha-box" id="captchaBox" style="margin-left: -300px">
                    <div class="captcha-item">
                        <div class="form-group captcha clearfix">
                            <input type="text" id="imgCaptcha" disabled="disabled" maxlength="6" class="form-text" placeholder="输入验证码"/>
                            <span style="float:left"><img id="phoneCaptchaImg"  src="/waimai/Public/Home/images/yzm.gif" alt="验证码" width="100"/></span>
                        </div>
                        <div class="form-error-message"></div>
                    </div>
                    <div class="captcha-item">
                        <div class="form-group captcha clearfix">
                            <input type="text" id="captcha2" name="captcha2"  class="form-text" placeholder="短信验证码"/>
                            <input style="width: 100px; height: 40px;"  class="form-btn" id="zphone" type="button" value=" 获取验证码 "/>
                        </div>
                        <div class="form-error-message"></div>
                    </div>

                </div>
            </div>
            <div>
                <button class="form-btn" id="xiayibu">下一步</button>
            </div>
            <ul class="other-way">
                <li>其他方式</li>
                <li>联系客服，可以拨打<span>4001 517 577</span></li>
            </ul>
        </div>
    </div>
</form>

    </div>

        </div>
    </section>

    <script type="text/javascript" src="/waimai/Public/Home/js/jquery-1.7.2.min.js"></script>

    <script>
        var mobile_validate_url = '/ajax/common_validate_sms_code/',
            email_validate_url = '',
            finish_send_mail_url = '',
            password_reset_url = '/account/password/reset_page/',

            password_timeout_url = '/account/password/request_timeout/',
            reset_password_url = '/ajax/password_reset_via_mobile_reset/',
            password_reset_done = '/account/password/reset_done/',

            captcha_url = '/captcha/',

            ajax_password_reset_via_mobile_start = '/ajax/password_reset_via_mobile_start/',
            common_sms_code = '/ajax/common_sms_code/'
    </script>
    <script src="/waimai/Public/Home/js/forget_passwd.js"></script>

    <!-- Baidu Analytics -->
    <script type="text/javascript" src="/waimai/Public/Home/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/waimai/Public/layui/layui.js"></script>
    <script type="text/javascript" src="/waimai/Public/layui/layui.all.js"></script>

    <script type="text/javascript">
        // 发送验证码 的js
        $('#zphone').click(function(){
            $.post('send_code2', {mobile:jQuery.trim($('#phone').val()),send_code:<?php echo $_SESSION['send_code'];?>}, function(msg) {

               // alert(jQuery.trim(unescape(msg)));
                //提交成功 提示框
                  if(msg=='提交成功'){
                  RemainTime();
                    layer.msg('验证码已下发您的手机请查看~', {icon: 6,time: 2000 //2秒关闭（如果不配置，默认是3秒）
                             ,skin : 'ayui-layer-lan',shadeClose:true
                    });
                    }else {
                layer.msg('出错了请联系客服', {icon: 5,time: 2000 //2秒关闭（如果不配置，默认是3秒）
                    ,skin : 'ayui-layer-lan',shadeClose:true
                });
            }
            });
        });
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
        $("#xiayibu").click(function(){

            var mobile= $("#phone").val();
            var mobile_code= $("#captcha2").val();
            console.log(mobile_code);
            $.post('register_in2',{'mobile':mobile,'mobile_code':mobile_code},function(data){
                if(data.code==1){
                        location.href = "<?php echo U('Register/pwd_reset');?>";//location.href实现客户端页面的跳转
                }else{
                    layer.open({
                        content: '验证码错误！'
                        ,time: 3000
                        ,shadeClose:true
                        ,icon: 5
                        ,skin : 'ayui-layer-lan'
                    });
                }

            });
        });
    </script>
</body>
</html>