<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--/*技术支持，小庄602842076 验证：商城技术支持*/ /*技术支持，小庄602842076 验证：商城技术支持*/ /*技术支持，小庄602842076 验证：商城技术支持*/ /*技术支持，小庄602842076 验证：商城技术支持*/ /*技术支持，小庄602842076 验证：商城技术支持*/ /*https://shop116998991.taobao.com/*/ /*https://shop116998991.taobao.com/*/ /*https://shop116998991.taobao.com/*/-->
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
    <!--[if lt IE 9]>
      <link rel="stylesheet" type="text/css" href="/waimai/Public/Home/css/frontPage-ie8-fix.css" />
    <![endif]-->
    <!--[if lte IE 10]>
      <script>document.createElement('footer');
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');</script>
    <![endif]-->
    <!--[if lte IE 7]>
      <script>window.onload = function() {
          location.href = "/ie6warning/"
        }</script>
    <![endif]-->
    <title>注册</title>
    <script type="text/javascript">(function(document, screen) {
        if (screen.width < 760) {
          document.location.href = "/mobile/";
        }
      } (document, screen));</script>
  </head>
  
  <body>
    <header id="header">
                <div class="common-width clearfix">
                    <h1 class="fl">
                        <a class="logo base-logo" href="index.html">外卖超人</a>
                    </h1>
                    
                        <ul class="member logging" ng-init="loginInfo=true">
                            <li><a href="index.html" class="index">首页</a></li>
                            <li class="userName">
                                <a href="member_index.html" rel="nofollow" draw-user>18005151538<em></em></a>
                                <div>
                                    <p><a href="member_index.html"  rel="nofollow">账号管理</a></p>
                                    <p><a href="member_addr.html"  rel="nofollow">地址管理</a></p>
                                    <p class="no-bo"><a id="logout" href="#" referer-url rel="nofollow">退出</a></p>
                                </div>
                            </li>
                            
            <li class="login-register">
                <a href="login.html" referer-url  class="login"  rel="nofollow">登录</a>
                    <span class="cg">/</span>
                <a href="register.html" referer-url  rel="nofollow" class="register">注册</a>
            </li>
                            <li class=""><a href="member_order.html" class="order-center"  rel="nofollow">我的订单</a></li>
                            <li class=""><a href="member_collect.html"  rel="nofollow">我的收藏</a></li>
                            <li class=""><a href="gifts.html"  rel="nofollow">氪星礼品站</a></li>
                            <li class="phone-client "><a href="#"  rel="nofollow" target="_blank"><span>手机客户端</span></a></li>
                        </ul>
                    
                </div>
            </header>
    <section class="main">
      <div class="common-width" center>
        <div class="log-box" id="registerPageBox">
          <div class="form-group w275">
            <label for="">手机号码</label>
            <input type="text" id="rPhone" maxlength="11" class="form-text" placeholder="请输入你的手机号码" /></div>
          <div class="form-error-message"></div>
          <div class="captcha-wrap">
            <div class="captcha-box" id="captchaBox" style="margin-left: -300px">
              <div class="captcha-item">
                <div class="form-group captcha clearfix">
                  <input type="text" id="rCaptcha" class="form-text" placeholder="短信验证码" />
                  <input type="button" id="getCaptcha" class="captcha-btn" value="获取验证码" /></div>
                <div class="form-error-message"></div>
              </div>
              <div class="captcha-item">
                <div class="form-group captcha clearfix">
                  <input type="text" id="imgCaptcha" disabled="disabled" maxlength="4" class="form-text" placeholder="输入验证码" />
                  <span>
                    <img id="captchaImg" _src="/captcha/" src="/captcha/" alt="验证码" />
                    </span>
                </div>
                <div class="form-error-message"></div>
              </div>
            </div>
          </div>
          <div class="form-group w275">
            <label for="">登录密码</label>
            <input type="password" id="rPass" maxlength="10" class="form-text" onpaste="return false" placeholder="输入登录密码 6-10个字符" /></div>
          <div class="form-error-message"></div>
          <div class="form-group w275">
            <input type="password" id="rPass2" maxlength="10" class="form-text" onpaste="return false" placeholder="输入登录密码 6-10个字符" /></div>
          <div class="form-error-message"></div>
          <div class="checkbox form-group clearfix mb5">
            <input type="checkbox" checked="checked" id="rAgree" value="true">
            <label for="rAgree" class="fl fs12">我同意外卖超人</label>
            <span class="fl fs12">
              <a class="yo" target="_blank" href="/terms-and-conditions/">"注册条款"</a></span>
          </div>
          <div class="form-error-message"></div>
          <div>
            <button class="form-btn" id="registerPageBtn">确认注册</button></div>
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
        <a target="_blank" class="foot-logo-1 base-logo" href="index.html"></a>
        <div class="tc fs14 light-gray mb10">
          ©2017 waimaichaoren.com All Rights Reserved - 沪ICP备11019908号
        </div>
    </div>
</footer>
    <script type="text/javascript" src="/waimai/Public/Home/js/jquery-1.7.2.min.js"></script>
    <script>// use new sms code url
      var ajax_customer_user_register_start = '/ajax/customer_user_register_start/';
      var common_sms_code = '/ajax/common_sms_code/';
      var common_validate_sms_code = '/ajax/common_validate_sms_code/';
      var ajax_customer_user_register_register = '/ajax/customer_user_register_register/';</script>
    <script type="text/javascript" src="/waimai/Public/Home/js/loginVaildate.js"></script>
    <!-- Baidu Analytics -->
    <!-- End Baidu Tracking Code -->
    <!-- Baidu Remarketing code -->
    <script type="text/javascript">< !--(function(d) {
        window.bd_cpro_rtid = "rHDzrHT";
        var s = d.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
        var s0 = d.getElementsByTagName("script")[0];
        s0.parentNode.insertBefore(s, s0);
      })(document);
      //-->
      </script>
    <!-- End Baidu Remarketing code -->
    <!-- Google Analytics Code -->
    <script>(function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] ||
        function() { (i[r].q = i[r].q || []).push(arguments)
        },
        i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

      ga('create', 'UA-33138478-1', 'waimaichaoren.com');
      ga('send', 'pageview');
      ga('require', 'ecommerce', 'ecommerce.js');</script>
    <!-- End Google Analytics Code -->
    <script type="text/javascript" src="/waimai/Public/Home/js/angular.min.js"></script>
    <script src="/waimai/Public/Home/js/common.js"></script>
    <script src="/waimai/Public/Home/js/service.js"></script>
    <script>var feedbackUrl = '/ajax/feedback/';
      var app = angular.module("app", ["dh.dialog", "dh.form", 'dh.service', 'dh.other']);</script>
    <!--[if lt IE 9]>
      <script src="js/fix.js"></script>
    <![endif]-->
    <script>var reviewUrl = "/mobile/ajax/order_review/",
      favoriteUrl = "/ajax/restaurant/0/favorite/";</script>
    <script src="/waimai/Public/Home/js/user_center.js"></script>
    <script>angular.bootstrap(document, ["app"]);</script>
    <!-- Baidu Analytics --></body>

</html>