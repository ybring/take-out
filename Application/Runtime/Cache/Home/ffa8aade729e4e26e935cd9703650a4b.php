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
        
        (function(document, screen) {if (screen.width < 760) {document.location.href="/mobile/";}}(document, screen));
    </script>
    
    <link rel="stylesheet" href="/waimai/Public/Home/css/common.css?v=2015-5-20"/>
    
    <link rel="stylesheet" href="/waimai/Public/Home/css/checkout.css"/>
<!-- 引用订单地址CSS 
<link rel="stylesheet" href="/waimai/Public/Home/css/shopping-mall-index.css"/>
-->
<style>

.pay-dz{ padding-top:30px;}
.pay-dz li{ width:202px; height:89px; padding:9px 23px 8px 12px; margin:0 25px; background:url(/waimai/Public/Home/images/confirmation-li-tu2.gif) no-repeat; float:left; cursor:pointer; overflow:auto;}
.pay-dz li:hover{background:url(/waimai/Public/Home/images/confirmation-li-tu1.gif) no-repeat;}
.pay-dz .current{ background:url(/waimai/Public/Home/images/confirmation-li-tu1.gif) no-repeat;}
.pay-dz li h3{ font-weight:normal; font-size:14px; color:#2B2B2B;}
.pay-dz li p{ font-size:13px; color:#7A7A7A;}
.pay-dz li p .sp2{ margin-left:5px;}
.pay-dz li a{ font-size:14px; color:#AB5100; display:none;}
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
    <title>下订单</title>
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
                                <a href="member_index.html" rel="nofollow" draw-user><?php echo ($user_phone); ?><em></em></a>
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


         
        
            
	<section class="checkout-main common-width">
		<header class="brtrl">送餐信息 (*为必填项)</header>
		<section class="user-info">
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
                    <a href="JavaScript:;" xiugai="">修改</a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>


                <div style="clear:both;"></div>
            </ul>
            <br>
            <button class="pay-xdz-btn">使用新地址</button>

			<form novalidate="true" name="orderForm" class="order-form inline">
                <div ng-show="userAddressList.length == 0">
                    <div class="form-group row mb10">
                        <label class="require col-2">收单人：</label>
                        <div class="col-8">
                            <input type="text" required ng-blur="orderForm.name.blur=true" ng-focus="orderForm.name.blur=false" maxlength="10"
                                   ng-class="{error:(orderForm.submit || orderForm.name.blur) && orderForm.name.$invalid}" name="name" placeholder="您的称呼" ng-model="name">
                        </div>
                        <div class="col-8 col-offset-2 disnone" ng-class="{disnone : !((orderForm.submit && orderForm.name.$invalid) || (!orderForm.submit && orderForm.name.blur && orderForm.name.$invalid))}">
                            <span class="vaildate-error">称呼不能为空</span>
                        </div>
                    </div>
                    <div class="form-group row mb10">
                        <label class="require col-2">手机号码：</label>
                        <div  class="col-8">
                            <input type="text" maxlength="11"  ng-blur="orderForm.contact.blur=true" ng-focus="orderForm.contact.blur=false" required mobile
                                   ng-class="{error:(orderForm.submit || orderForm.contact.blur) && orderForm.contact.$invalid}" name="contact" placeholder="您的联系方式" ng-model="phone">
                        </div>
                        <div class="col-8 col-offset-2 disnone" ng-class="{disnone: !((orderForm.submit || orderForm.contact.blur) && orderForm.contact.$error.required)}">
                            <span class="vaildate-error">联系方式不能为空</span>
                        </div>
                        <div class="col-8 col-offset-2 disnone" ng-class="{disnone: !(orderForm.contact.blur && orderForm.contact.$error.mobile&&!orderForm.contact.$error.required)}">
                            <span class="vaildate-error">请输入正确的11位手机号码</span>
                        </div>
                    </div>
                    <div class="form-group row mb10">
                        <label class="require col-2">送餐地址：</label>
                        <div class="col-8">
                            <input type="text" required ng-blur="orderForm.address.blur=true" ng-focus="orderForm.address.blur=false"
                                   ng-class="{error:(orderForm.submit || orderForm.address.blur) && orderForm.address.$invalid}" name="address" placeholder="详细地址，如武定西路1189号606室" ng-model="address">
                        </div>
                        <div class="col-8 col-offset-2 disnone" ng-class="{disnone: !((orderForm.submit && orderForm.address.$invalid) || (!orderForm.submit && orderForm.address.blur && orderForm.address.$invalid))}">
                            <span class="vaildate-error">送餐地址不能为空</span>
                        </div>
                    </div>
                </div>
				<div class="form-group row mb10">
					<label class="col-2">送餐时间：</label>
					<dh-select class="col-8" data="selectObj" selectedindex="datetimeIndex"></dh-select>
				</div>
                <div class="form-group row mb10 relative">
                    <label class="col-2">支付方式：</label>
                    
                    <dh-radio class="col-2" model="payType" value="0" title="餐到付款"></dh-radio>
                    <em ng-init="payType=2"></em>
                    <dh-radio class="col-2" model="payType" value="1" title="餐到付款1"></dh-radio>
                    <em ng-init="payType=1"></em>
                    <dh-radio class="col-2" model="payType" value="2" title="餐到付款2"></dh-radio>
                    <em ng-init="payType=0"></em>
                    
                    
                    
                </div>
				<div class="form-group row mb10">
					<label class="col-2">备注信息：</label>
					<div class="col-8">
						<input id="beizhu" type="text" maxlength="150" placeholder="如：多米饭，不吃辣等口味需求" ng-model="comment">
					</div>
				</div>
			</form>
		</section>
		<header>订单内容</header>
		<section>
			<div class="toggle-order-info" accordion>
				<a href="javascript:;">展开订单详情 <i class="icon arrows-s-down"></i></a>
			</div>
			<div class="order-info">
				<div class="order-thead clearfix">
					<div class="goods-name">商品</div>
					<div class="goods-count">份数</div>
					<div class="goods-price">单价</div>
					
					<div class="goods-total">小计</div>
				</div>
                <?php if(is_array($or)): $i = 0; $__LIST__ = $or;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="order-body">
                            <div class="order-item clearfix">
                                <div class="goods-name"><?php echo ($vo["name"]); ?></div>
                                <div class="goods-count"><?php echo ($vo["nums"]); ?></div>
                                <div class="goods-price">￥<?php echo ($vo["price"]); ?></div>
                                <div class="goods-total">￥<?php echo ($vo["subtotal"]); ?></div>
                            </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</section>
		<section class="total-sum">
			
			
			<p class="tr fs14">订单金额： <span>￥<?php echo ($heji["total"]); ?></span></p>
            <p ng-if="isVaildateCouponSuccess" class="tr fs14">优惠券： <span ng-bind="couponMoney|number:2|currency:'￥-'"></span></p>
            <p class="tr fs14">配送费用： <span>￥0.00</span></p>
			<p class="tr fs17 pink">需要付款： <b>￥<span ng-init="orderTotal=<?php echo ($heji["total"]); ?>" ng-bind="orderTotal|number:2"></span></b></p>
			<p class="tr last">
				<a href="" id="xgdd"  class="fs15 link"><i class="icon arrows-left"></i> 返回修改订单</a>

				<button id="tijiaodingdan" class="btn btn-success fs20">提交订单 <i class="icon arrows-right"></i></button>
			</p>
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



<script>
    var common_sms_code = '11111';
    var ajax_customer_user_register_start = '2222222';
    var common_validate_sms_code = '33333333';
    var ajax_customer_user_register_register = '44444';
</script>

  
    

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
                    <input type="text" id="shouji" />
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
                    <input type="text" class="lxdh" id="lxdh" />
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

<!--  -->
<input type="hidden" name="address_id" value="">


    <script type="text/javascript" src="/waimai/Public/jquery.min.js"></script>

    <script type="text/javascript" src="/waimai/Public/Home/js/angular.min.js"></script>
    <script src="/waimai/Public/Home/js/common.js"></script>
    <script src="/waimai/Public/layer/layer.js"></script>
     
    <script src="/waimai/Public/Home/js/service.js"></script>
    
    <script>var feedbackUrl = '222111';var app = angular.module("app", ["dh.dialog", "dh.form", 'dh.service', 'dh.other']);</script>
    <!--[if lt IE 9]><script src="/waimai/Public/Home/js/fix.js"></script><![endif]-->
    
    
    <script>
        var check_coupon_url = "555";
        var place_order_url = "556";
        var confirm_url = "557";
        var online_pay = "558";
        var ajax_add_delivery_address = "559";
        var ajax_add_all_delivery_addresses = "560";
        var ajax_update_delivery_address = "update_address";//修改的链接
        var ajax_common_sms_code = "561";
        var ajax_is_order_need_sms_validate = "562";
        var ajax_common_validate_sms_code = "563";
        var orderId = '3788798';
        var grid_locationId = '602341';
        var restaurantId = '1019';
        var gaObj = {
            restaurantName : '吉祥馄饨 (高安路店)',
            order_total : '32.00',
            main_cuisine : 'DrinkSnack',
            orderId : '3788798',
            delivery_fee : '0.00'
        };

        var cart_items_json=<?php echo ($ors); ?>;
        var selectObj = [];
        var userAddress = <?php echo ($add); ?>;//用户地址
        //console.log("商品名："+<?php echo ($add); ?>);
        var _isAuthenticated = 'ajax';
        var setLastAddrUrl =  "/ajax/delivery_address/0/last_used/";
        var lastUsedAddressId = '230901';
        //用户地址
        // userAddress.push({
        //     customer_name:'阿逗',
        //     delivery_address:'rrrrr',
        //     customer_phone:'13815212121',
        //     id:'230896'});
       
        //  送餐时间
        selectObj.push({id:'no',text:'即时送出',date:'2017-11-30'});
        selectObj.push({id:'9:30',text:'9:30',date:'2017-11-30'});
        selectObj.push({id:'10:00',text:'10:00',date:'2017-11-30'});
        selectObj.push({id:'10:30',text:'10:30',date:'2017-11-30'});
        selectObj.push({id:'11:00',text:'11:00',date:'2017-11-30'});
        selectObj.push({id:'11:30',text:'11:30',date:'2017-11-30'});
        selectObj.push({id:'12:00',text:'12:00',date:'2017-11-30'});
        selectObj.push({id:'12:30',text:'12:30',date:'2017-11-30'});
        selectObj.push({id:'13:00',text:'13:00',date:'2017-11-30'});
        selectObj.push({id:'13:30',text:'13:30',date:'2017-11-30'});
        selectObj.push({id:'14:00',text:'14:00',date:'2017-11-30'});
        selectObj.push({id:'14:30',text:'14:30',date:'2017-11-30'});
        selectObj.push({id:'15:00',text:'15:00',date:'2017-11-30'});
        selectObj.push({id:'15:30',text:'15:30',date:'2017-11-30'});
        selectObj.push({id:'16:00',text:'16:00',date:'2017-11-30'});
        selectObj.push({id:'16:30',text:'16:30',date:'2017-11-30'});
        selectObj.push({id:'17:00',text:'17:00',date:'2017-11-30'});
        selectObj.push({id:'17:30',text:'17:30',date:'2017-11-30'});
        selectObj.push({id:'18:00',text:'18:00',date:'2017-11-30'});
        selectObj.push({id:'18:30',text:'18:30',date:'2017-11-30'});
        selectObj.push({id:'19:00',text:'19:00',date:'2017-11-30'});
        selectObj.push({id:'19:30',text:'19:30',date:'2017-11-30'});
        selectObj.push({id:'20:00',text:'20:00',date:'2017-11-30'});
        selectObj.push({id:'20:30',text:'20:30',date:'2017-11-30'});
        selectObj.push({id:'21:00',text:'21:00',date:'2017-11-30'});
    </script>
    <script src="/waimai/Public/Home/js/checkout.js"></script>
    <script>
        (function(){var b=document.createElement;var a=0;var e=/www[.]google-analytics[.]com/i;var h;function d(j,k,i){if(j.addEventListener){j.addEventListener(k,i,false)}else{if(j.attachEvent){j.attachEvent("on"+k,i)}else{j["on"+k]=i}}}function g(j,k,i){if(j.removeEventListener){j.removeEventListener(k,i,false)}else{if(j.detachEvent){j.detachEvent("on"+k,i)}else{j["on"+k]=null}}}function c(j,l){function i(m){a+=1;d(m,"error",l);d(m,"load",l)}var k=window.MutationObserver||window.WebKitMutationObserver||false;if(!!k){j._observer=new k(function(m){m.forEach(function(n){if(n.attributeName=="src"&&e.test(n.target.src)){i(n.target)}})});j._observer.observe(j,{attributes:true,childList:false,characterData:false})}else{if(j.addEventListener){j._DOMAttrModified=function(m){if(m.attrName=="src"&&e.test(m.target.src)){i(m.target)}};j.addEventListener("DOMAttrModified",j._DOMAttrModified)}else{if(j.attachEvent){j._onpropertychange=function(m){if(m.propertyName=="src"&&e.test(m.srcElement.src)){i(m.srcElement)}};j.attachEvent("onpropertychange",j._onpropertychange)}}}}function f(i,k){var j=window.MutationObserver||window.WebKitMutationObserver||false;if(!!j){i._observer.disconnect();delete i._observer}else{if(i.addEventListener){i.removeEventListener("DOMAttrModified",i._DOMAttrModified);delete i._DOMAttrModified}else{if(i.attachEvent){i.detachEvent("onpropertychange",i._onpropertychange);delete i._onpropertychange}}}g(i,"error",k);g(i,"load",k);a-=1;if(a<=0&&h){h();h=null}}document.createElement=function(i){element=b.call(document,i);if(i.toLowerCase()=="img"){var j=function(k){f(k.target||k.srcElement,j)};c(element,j)}return element};this.ga_synchronize=function(i){h=i}}());
    </script>

    
    <script>angular.bootstrap(document, ["app"]);</script>

    <!-- Baidu Analytics -->
<!-- 收货地址的JS -->
  <script type="text/javascript" src="/waimai/Public/Home/js/zhonglin.js"></script>
    <!-- 提交订单 -->
    <script>
    $('#tijiaodingdan').click(function(){
        var load = layer.load(3, {time: 10*1000}); //又换了种风格，并且设定最长等待10秒
        var add_id =$('.pay-dz .current input[name=id]').val();//地址的id
        var checkText=$(".dropdown-text").text(); //送餐时间
        var beizhu =$('#beizhu').val();//备注信息
        //var fangshi =$('').val();//支付方式
        $.post('add_order_detail_do',{ 'address_id':add_id ,'remarks':beizhu ,'time_of_delivery':checkText  },function(re){
            if(re.code==1){
                layer.msg(re.msg,{icon: 6},function(){
                    layer.close(load);
                    location.href = "order_success";
                });
            }else {
                layer.msg("出错了",{icon: 5},function(){
                    layer.close(load);
                });
                return false;
            }
        });
    });
    $('#xgdd').click(function(){
        var load = layer.load(3, {time: 10*1000}); //又换了种风格，并且设定最长等待10秒
        $.get('de_or',function(result){
            if(!result){
                layer.msg("出错了",{icon: 5},function(){
                    layer.close(load);
                });
                return false;
            }

            location.href = "<?php echo U('Index/index');?>"; layer.close(load);
        });
    });
    </script>
    <script src="/waimai/Public/Home/js/menupage.js"></script>
    <script src="/waimai/Public/Home/js/favorite.js"></script>
    <script>angular.bootstrap(document, ["app"]);</script>
</body>
</html>