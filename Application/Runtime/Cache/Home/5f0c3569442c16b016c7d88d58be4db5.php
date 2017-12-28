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
    <link rel="stylesheet" href="/waimai/Public/Home/css/confirm.css"/>
    <script type="text/javascript">
        
        (function(document, screen) {if (screen.width < 0) {document.location.href="/mobile/";}}(document, screen));
    </script>
    
    <link rel="stylesheet" href="/waimai/Public/Home/css/common.css?v=2015-5-20"/>
    
    <link rel="stylesheet" href="/waimai/Public/Home/css/menuPage.css"/>

    
    <title>下订单成功</title>
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


         

            <section class="confirm-main common-width clearfix">
                <div class="confirm-content fl">
                    <div class="content">
                        <h3>订单已成功提交</h3>
                        <p>请保持手机<?php echo ($user_phone); ?>畅通，稍后沙漏客服会与您联系。</p>
                        <p>感谢使用沙漏外卖。</p>

                        <a href="<?php echo U('User/user_order');?>" class="order">查看订单</a>

                    </div>
                </div>
                <div class="app_download fl">
                    <h4>下载沙漏外卖手机App</h4>
                    <p>用手机扫描下方二维码</p>
                    <p><img src="<?php echo U('Home/index');?>" width="200px" height="200px" alt="App二维码" class="code-img"/></p>
                    <p>或电脑直接下载</p>
                    <div class="down-btn">
                        <a href="#" target="_blank" class="ios" title="iOS下载">iOS下载</a>
                        <a href="#" target="_blank" class="Android" title="Android下载">Android下载</a>
                    </div>
                    <p>也可以从各大应用市场搜索下载外卖超人</p>
                    <div class="chaoren-weixin">
                        <img src="<?php echo U('Home/index');?>" width="50px" height="50px" class="code-img"/>
                        <p>关注沙漏外卖微信公共账号微信也可以订外卖</p>
                    </div>
                </div>
            </section>
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