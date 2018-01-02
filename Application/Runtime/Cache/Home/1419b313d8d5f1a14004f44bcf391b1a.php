<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="description" content="" />
    <meta name="viewport" content="user-scalable=no">
    <meta name="google-site-verification" content="BstJA3X9z6f9HcvoN9AZTwaKo_9Abj_j7dVBPfy640s" />
    <meta name="baidu-site-verification" content="IYCrtVH0i1" />
    <meta property="wb:webmaster" content="239d3d1dbdde1b2c" />
    <link rel="icon" type="image/png" href="/waimai/Public/Home/images/favicon.ico"/>
    
    <script type="text/javascript">
        
        (function(document, screen) {if (screen.width < 0) {document.location.href="/mobile/";}}(document, screen));
    </script>
    
    <link rel="stylesheet" href="/waimai/Public/Home/css/common.css?v=2015-5-20"/>
    
    <link rel="stylesheet" href="/waimai/Public/Home/css/user_center.css"/>
    <style>

        .pay-dz{ padding-top:30px;}
        .pay-dz li{ width:202px; height:89px; padding:9px 23px 8px 12px; margin:0 25px; background:url(/waimai/Public/Home/images/confirmation-li-tu2.gif) no-repeat; float:left; cursor:pointer; overflow:auto;}
        .pay-dz li:hover{background:url(/waimai/Public/Home/images/confirmation-li-tu1.gif) no-repeat;}
        .pay-dz .current{ background:url(/waimai/Public/Home/images/confirmation-li-tu1.gif) no-repeat;}
        .pay-dz li h3{ font-weight:normal; font-size:14px; color:#2B2B2B;}
        .pay-dz li p{ font-size:13px; color:#7A7A7A;}
        .pay-dz li p .sp2{ margin-left:5px;}
        .pay-dz li a{ font-size:14px; color:#AB5100; display:none; float: left; margin-right: 20px; }
        .pay-dz .current a{ display:block;}
        .pay-xdz-btn{ font-size:14px; color:#fff; background:#EF9D09; width:106px; height:37px; border:none; cursor:pointer; margin:0 0 20px 25px;}

        .info-mid .mid-guige1{width:67px; height:71px;padding:5px 15px; margin-right:60px;position:relative;}
        .info-mid .mid-guige1 p{ font-size:13px; color:#3B3B3B;}
        .info-mid .mid-yunfei{ font-size:13px; color:#E90000; margin:10px 50px 0 0;}
        .info-heji{ height:50px; background:#F7F7F7;}
        .info-heji h3{ font-weight:normal; line-height:50px;s font-size:14px; color:#000; margin-right:10px;}
        .info-heji p{ line-height:50px; font-size:14px; color:#9A9A9A;margin-right:10px;}
        .info-heji p span{ color:#E90000;}


        /*确认订单（新增地址）*/
        .confirmation-tanchuang{display:none; width:100%; height:100%; position:relative; position:absolute; top:0; left:0;}
        .confirmation-tanchuang .tanchuang-bg{ width:100%; height:100%; background:#666; top:0; left:0; opacity:0.5;}
        .confirmation-tanchuang .tanchuang-con{ width:670px; background:#fff; position:absolute; top:272px; left:50%; margin-left:-335px;}
        .tanchuang-con .tc-title{ height:42px; background:#F2F2F2;}
        .tanchuang-con .tc-title h3{ float:left; line-height:42px; font-weight:normal; font-size:14px; color:#000; margin-left:18px;}
        .tanchuang-con .tc-title a{ float:right; margin:12px 15px 0 0;}
        .tanchuang-con .tc-con2{}
        .tanchuang-con .tc-con2 .tc-li1{ margin-bottom:12px;}
        .tanchuang-con .tc-con2 .tc-li1 .l-p{float:left;width:100px; text-align:right; font-size:13px; color:#000; margin-right:15px; line-height:31px;}
        .tanchuang-con .tc-con2 .tc-li1 .l-p span{ color:#F34737; margin-left:5px;}
        .tanchuang-con .tc-con2 .tc-li1 .xl-dz{ float:left;}
        .tc-con2 .tc-li1 .xl-dz .dz-left{ margin-right:16px; position:relative;}
        .tc-con2 .tc-li1 .xl-dz .dz-left p{width:87px; height:31px; line-height:31px; font-size:13px; color:#3B3B3B; padding-left:7px;border:1px solid #E9E9E9; background:url(/waimai/Public/Home/images/erweima-bg.jpg) no-repeat 76px center;}
        .tc-con2 .tc-li1 .xl-dz .dz-left ul{ display:none; width:84px; background:#fff; border:1px solid #E9E9E9; padding:5px; position:absolute; top:34px; left:0;}
        .tc-con2 .tc-li1 .xl-dz .dz-left li{ line-height:25px;}
        .tc-con2 .tc-li1 .xl-dz .dz-left li a{ display:block; font-size:13px; color:#3B3B3B;}
        .tc-con2 .tc-li1 .xl-dz .dz-left .current a{ color:#129FE9;}
        .tc-con2 .tc-li1 .xl-dz .dz-left li:hover a{color:#129FE9;}

        .tc-con2 .tc-li1 .xl-dz .dz-right{ position:relative;}
        .tc-con2 .tc-li1 .xl-dz .dz-right p{width:305px; height:31px;line-height:31px; font-size:13px; color:#3B3B3B; padding-left:7px;border:1px solid #E9E9E9; background:url(/waimai/Public/Home/images/erweima-bg.jpg) no-repeat 295px center;}
        .tc-con2 .tc-li1 .xl-dz .dz-right ul{ display:none; width:312px; background:#fff;border:1px solid #E9E9E9;position:absolute; top:34px; left:0;}
        .tc-con2 .tc-li1 .xl-dz .dz-right li{ float:left; line-height:30px; margin:0 9px;}
        .tc-con2 .tc-li1 .xl-dz .dz-right li a{ font-size:13px; color:#000;}
        .tc-con2 .tc-li1 .xl-dz .dz-right .current a{ color:#129FE9;}
        .tc-con2 .tc-li1 .xl-dz .dz-right li:hover a{color:#129FE9;}

        .tanchuang-con .tc-con2 li .textarea1{ width:414px; height:87px; border:1px solid #E9E9E9; font-size:13px; color:#ACACAC; padding:5px;}
        .tanchuang-con .tc-con2 li input{ width:167px; height:31px; font-size:14px; padding:0 10px; border:1px solid #E9E9E9;}
        .tanchuang-con .btn-pst2{ width:106px; height:37px; background:#F34737; color:#fff; font-size:14px; border:none; cursor:pointer; margin:20px 0 30px 115px;}
    </style>
    <!--[if lte IE 7]><script>window.onload=function(){location.href="/ie6warning/"}</script><![endif]-->
    <!--[if lt IE 9]>

    <script>
        var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video, dh-dialog, dh-checkbox".split(', ');
         var i= e.length;while (i--){document.createElement(e[i])}
    </script>
    <![endif]-->
    <title>个人中心 - 地址管理</title>
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

                        </ul>
                    
                </div>
            </header>
            <div id="main-box">
                <!--二维码-->
                <div class="qrCode-frame" ng-hide="qrCodeStatus">
                    <img width="160px" height="160px" src="<?php echo U('/Home/Home/index');?>" alt="扫描二维码"/>
                    <em ng-click="qrCodeStatus=true">X</em>
                </div>
        <div ng-controller="colorAction">
          <div class="dayColor_two"></div>
          <div class="dayColor_one"></div>
          <div class="dayColor_three" ng-class="{dayColor_threeActive:threeActive}"></div>
        </div>


         
        
            
    <section>
        <div class="user-center-main-box common-width clearfix">
            <aside class="fl">
                <ul>
                    <li >
                        <a href="<?php echo U('Home/User/index');?>" rel="nofollow">账号管理</a>
                    </li>
                    <li >
                        <a href="<?php echo U('Home/User/user_order');?>" rel="nofollow">我的订单</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo U('Home/User/user_addr');?>"  rel="nofollow">地址管理</a>
                    </li>
                </ul>
            </aside>
            <article class="fl user-center-main">
                <header>地址管理</header>
                
    <section class="user-address-main">
        <header>
            <h2>已保存地址</h2>
        </header>
        <!--收货地址-->
        <ul class="pay-dz">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1 ): ?><li class="current" id="li-<?php echo ($vo["id"]); ?>">
                        <?php else: ?>
                    <li id="li-<?php echo ($vo["id"]); ?>"><?php endif; ?>
                <h3><span class="sp1"><?php echo ($vo["customer_phone"]); ?></span>（<span class="sp3"><?php echo ($vo["customer_name"]); ?></span> 收）</h3>
                <br>
                <p><span class="sp1"><?php echo ($vo["delivery_address"]); ?></span></p>
                <input type="hidden" class="<?php echo ($vo["id"]); ?>" name="id" value="<?php echo ($vo["id"]); ?>" >
                <br>
                <a href="JavaScript:;" xiugai="">修改</a><a  href="JavaScript:;" class="shanchu" id="<?php echo ($vo["id"]); ?>" >删除</a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>


            <div class="addaf"  style="clear:both;"></div>
        </ul>
        <br>
        <button class="pay-xdz-btn">使用新地址</button>

    </section>


            </article>
        </div>
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

    <!--确认订单（新增地址）-->
    <div class="confirmation-tanchuang" xgdz1="">
        <div class="tanchuang-bg"></div>
        <div class="tanchuang-con">
            <div class="tc-title">
                <h3>新增地址</h3>
                <a href="JavaScript:;" dz-guan=""><img src="/waimai/Public/Home/images/close-select-city.gif" /></a>
                <div style="clear:both;"></div>
            </div>
            <ul class="tc-con2">
                <li class="tc-li1">
                    <p class="l-p">收货人姓名<span>*</span></p>
                    <input type="text" id="receiver" />
                    <div style="clear:both;"></div>
                </li>
                <li class="tc-li1">
                    <p class="l-p">联系电话<span>*</span></p>
                    <input type="text" id="shouji" maxlength="11" />
                    <div style="clear:both;"></div>
                </li>
                <li class="tc-li1">
                    <p class="l-p">详细地址<span>*</span></p>
                    <textarea class="textarea1" placeholder="请如实填写您的详细信息，如街道名称、门牌号、楼层号和房间号。" id="dizi"></textarea>
                    <div style="clear:both;"></div>
                </li>
            </ul>
            <button class="btn-pst2" id="btn-pst2">保存</button>
        </div>
    </div>


    <!--修改地址-->
    <div class="confirmation-tanchuang" xgdz2="">
        <div class="tanchuang-bg"></div>
        <div class="tanchuang-con">
            <div class="tc-title">
                <h3>修改地址</h3>
                <a href="JavaScript:;" dz-guan=""><img src="/waimai/Public/Home/images/close-select-city.gif" /></a>
                <div style="clear:both;"></div>
            </div>
            <ul class="tc-con2">
                <li class="tc-li1">
                    <p class="l-p">收货人姓名<span>*</span></p>
                    <input type="text" class="shxm" id="shxm" />
                    <div style="clear:both;"></div>
                </li>
                <li class="tc-li1">
                    <p class="l-p">联系电话<span>*</span></p>
                    <input type="text" class="lxdh" id="lxdh" maxlength="11" />
                    <div style="clear:both;"></div>
                </li>
                <li class="tc-li1">
                    <p class="l-p">详细地址<span>*</span></p>
                    <textarea id="xxdz" class="textarea1" placeholder="请如实填写您的详细信息，如街道名称、门牌号、楼层号和房间号。"></textarea>
                    <div style="clear:both;"></div>
                </li>
            </ul>
            <input type="hidden" id="hiddenid" name="hiddenid" value="">
            <button class="btn-pst2" id="dz2">保存</button>
        </div>
    </div>


    <ul class="site-fixed">
    <li class="scroll-top">
        <img src="/waimai/Public/Home/images/scroll_top1.png" alt="" /></li>
    <li class="scorll-feekback" ng-click="userFeedback=true">
        <img src="/waimai/Public/Home/images/scorll_feekback.png" alt="" />
        <div>意见反馈</div></li>
    <li class="scroll-wx">
        <img src="/waimai/Public/Home/images/scroll_wx.png" alt=""/>
        <div><img width="180px" height="180px" src="<?php echo U('Home/index');?>" alt=""/></div>
    </li>
</ul>
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

    <!-- 收货地址的JS -->
    <script type="text/javascript" src="/waimai/Public/jquery.min.js"></script>
    <script type="text/javascript" src="/waimai/Public/layer/layer.js"></script>

    <script type="text/javascript" src="/waimai/Public/Home/js/zhonglin.js"></script>

<script >
    $(".shanchu").click(function(){
        var id =this.id;
        layer.confirm('确定删除地址吗?', {icon: 3, title:'提示'}, function(index){
            $.post("<?php echo U('Order/dele_address');?>",{ 'id' : id },function(r){
                if(r.code==1){
                    layer.msg('删除成功！');window.location.reload();
                }else {
                    layer.msg('删除失败！请联系客服！');
                }
            });
            layer.close(index);//关闭 弹窗
        });
    });
</script>
</body>
</html>