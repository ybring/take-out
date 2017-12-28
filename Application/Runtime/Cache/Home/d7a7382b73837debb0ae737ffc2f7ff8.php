<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="description" content=" 上海[半价菜][送可乐]樱花日本料理 简介，最新活动，宋园路地铁站附近餐厅， [半价菜][送可乐]樱花日本料理 外卖，外送电话，叫外卖上外卖超人。" />
    <meta name="viewport" content="user-scalable=no">
    
    <meta name="google-site-verification" content="BstJA3X9z6f9HcvoN9AZTwaKo_9Abj_j7dVBPfy640s" />
    <meta name="baidu-site-verification" content="IYCrtVH0i1" />
    <meta property="wb:webmaster" content="239d3d1dbdde1b2c" />
    <link rel="icon" type="image/png" href="/waimai/Public/Home/images/favicon.ico"/>
    
    <script type="text/javascript">
        
        (function(document, screen) {if (screen.width < 0) {document.location.href="/mobile/";}}(document, screen));
    </script>
    
    <link rel="stylesheet" href="/waimai/Public/Home/css/common.css?v=2015-5-20"/>
    
    <link rel="stylesheet" href="/waimai/Public/Home/css/menuPage.css"/>

    
    <title>店铺简介</title>
</head>
<body class="day " ng-controller="bodyCtrl"  day-or-night>
    <section class="common-back" id="wrapBackground">
        
        <header id="header">
                <div class="common-width clearfix">
                    <h1 class="fl">
                        <a class="logo base-logo" href="<?php echo U('/Home/Index/index');?>">沙漏外卖</a>
                    </h1>
                    
                        <ul class="member logging" ng-init="loginInfo=true">
                            <li><a href="<?php echo U('Home/Index/index');?>" class="index">首页</a></li>
                        
        <?php if($user_phone): ?><li class="userName">
                                <a href="<?php echo U('Home/User/index');?>" rel="nofollow" draw-user><?php echo ($user_phone); ?><em></em></a>
                                <div>
                                    <p><a href="<?php echo U('Home/User/index');?>"  rel="nofollow">账号管理</a></p>
                                    <p><a href="<?php echo U('Home/User/user_addr');?>"  rel="nofollow">地址管理</a></p>
                                    <p class="no-bo"><a id="logout" href="<?php echo U('Home/Login/login_out');?>"  rel="nofollow">退出</a></p>
                                </div>
                            </li>
        <?php else: ?>  
                        <li class="login-register">
                            <a href="<?php echo U('Home/Login/index');?>" id="login"  class="login"  rel="nofollow">登录</a>
                                <span class="cg">/</span>
                            <a href="<?php echo U('Home/Register/index');?>" rel="nofollow" class="register">注册</a>
                        </li>
            <script>
                document.getElementById('login').href += "?redirect_url=" + window.location.href;
            </script><?php endif; ?>
                            <li class=""><a href="<?php echo U('Home/User/user_order');?>" class="order-center"  rel="nofollow">我的订单</a></li>
                            <li class=""><a href="<?php echo U('Home/User/user_collect');?>"  rel="nofollow">我的收藏</a></li>
                            
                        </ul>
                    
                </div>
            </header>
            <div id="main-box">
                <!--二维码-->
                <div class="qrCode-frame" ng-hide="qrCodeStatus">
                    <img width="160px" height="160px" src="<?php echo U('Home/index');?>" alt="扫描二维码"/>
                    <em ng-click="qrCodeStatus=true">X</em>
                </div>
        <div ng-controller="colorAction">
          <div class="dayColor_two"></div>
          <div class="dayColor_one"></div>
          <div class="dayColor_three" ng-class="{dayColor_threeActive:threeActive}"></div>
        </div>


         
        <section class="menupage-main common-width" ng-init="city_name='上海'">
        
          <header class="nav clearfix">
            <div class="fl clearfix nav-des">
              <img src="/waimai/Public/Home/images/ic3.gif" class="fl" />
              <div class="fl nav-des-text">
                <h2 class="ellipsis" title="[半价菜][送可乐]樱花日本料理">沙漏小店</h2>
                <div class="clearfix">
                  <div class="fl nav-review">
                    <div style="width:65.00px;"></div>
                  </div>
                  <p class="nav-review-x">5星</p></div>
              </div>
            </div>
            <div class="fr clearfix nav-right">
              <div class="fl nav-right-blast line-right">
                <p>20
                  <span style="font-size:12px;color:#999;">元</span></p>
                <span>起送</span></div>
              <div class="fl nav-right-blast">
                <p>30
                  <span style="font-size:12px;color:#999;">分钟</span></p>
                <span>送餐时间</span></div>
              
            </div>
          </header>
 <ul class="clearfix menu-nav-list" scroll-position-static="160">
            <li class="no-line active">
              <a href="<?php echo U('/Home/Index/index_intro');?>">餐厅介绍</a></li>
            <li class="">
              <a href="<?php echo U('/Home/Index/index');?>">菜单</a></li>
          
          </ul>

		<section class="main-box">
			<div class="restaurant-info clearfix">
				<!--<div class="restaurant-logo fl">
					<img src="" alt="[半价菜][送可乐]樱花日本料理" >
                    
				</div>-->
				<div class="restaurant-status fl">
                    
                        <p class="hours"><label>营业时间 ：</label>[09:00-22:30]</p>
                    
                    
                        <p><label>送餐时间 ：</label>12-40分钟</p>
                    
					<p><label>餐厅地址 ：</label>广西机电职业技术学院</p>
					
				</div>
				
			</div>
			<article class="collapse">
				<header>
					<h3>餐厅介绍</h3>
				</header>
				<section class="description fs12 lh15">
                    
                        精选食材。纯净水运作。进口调料。。请来电18964778118订餐。最终解释权归本店所有
                    
                </section>
			</article>
            
			<article class="collapse restaurant-photo">
				<header>
					<h3>餐厅相册</h3>
				</header>
				<section class="pd12-26 clearfix photo" id="photoBox"> 
                            <img src="/waimai/Public/Uploads/product/5a02c8757b165.jpg" class="fl">
				</section>
                
			</article>
            
         
			</article>
		</section>
	</section>
        </section>
    </section>

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
    
     <!-- 意见反馈的 弹窗 -->
    <dh-dialog class="disnone" height="500" feeedbackclass="userFeedback" type="user-feedback" header="意见反馈" show="userFeedback">
        <div ng-controller="feedbackCtrl">
          <form novalidate="true" name="feedbackForm" class="inline">
            <div class="form-group row mb10">
              <label class="col-3">联系方式：</label>
              <div class="col-8">
                <input type="text" maxlength="20" name="userContact" required ng-focus="userContactFocus()" ng-class="{error:feedback.phoneMessage}" placeholder="请输入您的手机号码" ng-model="feedback.userContact" /></div>
            </div>
            <div class="row mb10">
              <div class="clo-8 col-offset-3" ng-if="feedback.phoneMessage">
                <span class="vaildate-error">联系方式不能为空</span></div>
            </div>
            <div class="form-group row">
              <label class="col-3 vt">反馈信息：</label>
              <div class="col-8">
                <textarea name="feedbackMessage" placeholder="可以说说您对沙漏外卖的意见" ng-focus="feedbacFocus()" required ng-class="{error:feedback.feedbackMessageTip}" ng-model="feedback.feedbackMessage" maxlength="300" cols="25" rows="7"></textarea>
              </div>
            </div>
            <div class="row mb10">
              <div class="clo-8 col-offset-3" ng-if="feedback.feedbackMessageTip">
                <span class="vaildate-error">反馈信息不能为空</span></div>
            </div>
            <div class="tc">
              <button class="btn normal-btn btn-success" ng-click="feedbackSubmit()">确认</button>
              <button class="btn normal-btn btn-cancel" ng-click="feedbackCancel()">取消</button></div>
          </form>
        </div>
        <div class="common-dialog-footer">咨询加QQ群：664621217</div>
      </dh-dialog>
       <!-- 意见反馈的 弹窗  控制这个的jq common.js -->
    
<dh-dialog class="disnone" type='login' height="500" header="登录" show="loginShow" >
    <form class="login-form" novalidate name="loginForm" ng-controller="loginCtrl">
        <div class="form-group">
            <label for="">手机号码</label>
            <div>
                <input type="text" ng-model="user.username" ng-class="{error:user.usernameMessage}" ng-focus="user.usernameMessage=''" maxlength="11" placeholder="请输入你的手机号码" />
                <span class="vaildate-error" ng-if="user.usernameMessage">
                    <span ng-bind="user.usernameMessage"></span>
                </span>
                <span class="vaildate-error" ng-if="user.isLogined">
                    该手机号码尚未注册！<a href="javascript:;" ng-click="locationRegister()" class="link">立即注册</a>
                </span>
            </div>
        </div>
        <div class="form-group mb10">
            <label for="">登录密码</label>
            <div>
                <input type="password" onpaste="return false" ng-model="user.password" ng-focus="user.passwordMessage=''"  ng-class="{error:user.passwordMessage}" maxlength="10" placeholder="请输入登录密码" />
                <span class="vaildate-error" ng-if="user.passwordMessage">
                    <span ng-bind="user.passwordMessage"></span>
                </span>
            </div>
        </div>
        <div ng-init="showCaptcha=0" ng-if="showCaptcha" class="form-group inline clearfix mb10">
            <div class="fl w50p">
                <input type="text" ng-model="user.captcha" ng-focus="user.captchaMessage=''"  ng-class="{error:user.captchaMessage}" placeholder="请输入验证码">
                <span class="vaildate-error" ng-if="user.captchaMessage">
                    <span ng-bind="user.captchaMessage"></span>
                </span>
            </div>
            <label class="fr">
                <dh-captcha change="captchaChange" src="/captcha/"></dh-captcha>
            </label>
        </div>
        <div class="clearfix mb10">
            <dh-checkbox model="user.rememberme" title="记住我" class="fl"></dh-checkbox>
            <a href="/account/password/reset_via_mobile/" target="_blank" class="fs12 fr link">忘记密码</a>
        </div>
        <button class="big-btn btn-green btn mb10" ng-click="loginVaildate()" ng-disabled="loginBtnDisabled" ng-bind="loginBtn"></button>
        <div class="clearfix">
            <span class="fr fs12">
                没有账号?
                <a href="javascript:void(0)" ng-click="locationRegister()" class="link">立即注册</a>
            </span>
        </div>
    </form>
</dh-dialog>
<dh-dialog class="disnone" type='register' height="500" header="注册" show="registerShow" >
    <form ng-controller="registerCtrl" class="register-form" name="registerForm">
        <div class="form-group mb10">
            <label for="">手机号码</label>
            <div>
                <input type="text" ng-class="{error:user.usernameMessage}" maxlength="11" placeholder="请输入您的手机号码" ng-model="user.username"/>
                <span class="vaildate-error" ng-if="user.usernameMessage">
                    <span ng-bind="user.usernameMessage"></span>
                </span>
                <span class="vaildate-error" ng-if="user.isRegistered">
                    该手机号码已经注册！<a href="javascript:;" ng-click="locationLogin()" class="link">立即登录</a>
                </span>
            </div>
        </div>



        <div class="form-group captcha-wrap">
            <div class="clearfix captcha-box">
                <div class="fl form-group captcha-item">
                    <div class="fl w50p">
                        <input type="text" ng-class="{error:user.captchaMessage}" ng-focus="user.captchaMessage=''" placeholder="请输入验证码" ng-model="user.captcha" />
                        <span class="vaildate-error" ng-if="user.captchaMessage">
                            <span ng-bind="user.captchaMessage"></span>
                        </span>
                    </div>
                    <button class="fs12 fr w40p btn btn-pink" ng-click="getCaptcha()" ng-disabled="captchaDisabled" ng-bind="captchaVal"></button>
                </div>
                <div class="fl form-group captcha-item">
                    <div class="fl w50p">
                        <input type="text" ng-model="user.imgCaptcha" maxlength="4" ng-disabled="imgCaptchaIsDisabled" ng-class="{error:user.imgCaptchaMessage}" placeholder="请输入验证码">
                        <span class="vaildate-error" ng-if="user.imgCaptchaMessage">
                            <span ng-bind="user.imgCaptchaMessage"></span>
                        </span>
                    </div>
                    <label class="fr">
                        <dh-captcha style="width:119px;height:34px;" change="captchaImgChange" src="/captcha/"></dh-captcha>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group mb10">
            <label for="">登录密码</label>
            <div><input type="password" ng-class="{error:user.passwordMessage}" ng-focus="user.passwordMessage=''"  maxlength="10" onpaste="return false" placeholder="输入登录密码 6-10个字符" ng-model="user.password" />
                <span class="vaildate-error" ng-if="user.passwordMessage">
                    <span ng-bind="user.passwordMessage"></span>
                </span>
            </div>
        </div>
        <div class="form-group mb10">
            <div><input type="password" ng-class="{error:user.password2Message}" ng-focus="user.password2Message=''" maxlength="10" onpaste="return false" placeholder="输入登录密码 6-10个字符" ng-model="user.password2"/>
                <span class="vaildate-error" ng-if="user.password2Message">
                    <span ng-bind="user.password2Message"></span>
                </span>
            </div>
        </div>
        <div class="clearfix mb10">
            <dh-checkbox model="user.remember" title="我同意外卖超人" class="fl"></dh-checkbox>
            <a href="/terms-and-conditions/" target="_blank" class="fs12 fl link"> " 注册条款 "</a>
        </div>
        <button ng-disabled="!user.remember || registerBtnDisabled" ng-click="registerVaildate()" class="big-btn btn-green btn mb10" ng-bind="registerBtn"></button>
    </form>
</dh-dialog>
<script>
    var common_sms_code = '/ajax/common_sms_code/';
    var ajax_customer_user_register_start = '/ajax/customer_user_register_start/';
    var common_validate_sms_code = '/ajax/common_validate_sms_code/';
    var ajax_customer_user_register_register = '/ajax/customer_user_register_register/';
</script>

    <dh-dialog class="disnone" type="alert" index="1001" header="" show="showErrorMsg">
        <div class="alert-box" ng-class="errorIcon">
            <p ng-bind="errorMsg"></p>
        </div>
    </dh-dialog>

     <ul class="site-fixed">
        <li class="scroll-top"><img src="/waimai/Public/Home/images/scroll_top1.png" alt=""/> </li>
        <li class="scorll-feekback" ng-click="userFeedback=true">
            <img src="/waimai/Public/Home/images/scorll_feekback.png" alt=""/>
            <div>意见反馈</div>
        </li>
       
    </ul>
    
    <script type="text/javascript" src="/waimai/Public/Home/js/angular.min.js"></script>
    <script src="/waimai/Public/Home/js/common.js"></script>
    
     
    <script src="/waimai/Public/Home/js/service.js"></script>
    
    <script>var feedbackUrl = '';var app = angular.module("app", ["dh.dialog", "dh.form", 'dh.service', 'dh.other']);</script>
    <!--[if lt IE 9]><script src="/waimai/Public/Home/js/fix.js"></script><![endif]-->
    
    
    <script>
    //有关于 反馈意见的 东西 不能删
        app.controller("bodyCtrl",["$scope","cache",'$window','$interval', "$http" , function(scope,cache,window,$interval,$http){
            var reloadFunc = function(){window.location.reload()};
            loginObj.init(scope,$interval,reloadFunc,reloadFunc).bind();
            scope.$on('collect-callback',function(e){
                scope.errorIcon = e.targetScope.errorIcon;
                scope.errorMsg = e.targetScope.errorMsg;
                scope.showErrorMsg = true;
            })
        }])
    </script>
    <script src="http://webapi.amap.com/maps?v=1.3&key=5cd6dcb00bc675bf26c9b4ab2af0759a&callback=map_init"></script>
    <script src="/waimai/Public/Home/js/favorite.js"></script>

    
    <script>angular.bootstrap(document, ["app"]);</script>

    <!-- Baidu Analytics -->


</body>
</html>