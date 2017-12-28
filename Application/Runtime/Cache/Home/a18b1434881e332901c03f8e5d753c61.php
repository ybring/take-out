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
    <link rel="stylesheet" href="/waimai/Public/layui/css/layui.css"/>
    <link rel="stylesheet" href="/waimai/Public/Home/css/common.css?v=2015-5-20"/>

    <link rel="stylesheet" href="/waimai/Public/Home/css/user_center.css"/>

    <!--[if lte IE 7]><script>window.onload=function(){location.href="/ie6warning/"}</script><![endif]-->
    <!--[if lt IE 9]>
    <script src="/waimai/Public/Home/js/respond.js"></script>
    <script>
        var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video, dh-dialog, dh-checkbox".split(', ');
         var i= e.length;while (i--){document.createElement(e[i])}
    </script>
    <![endif]-->
    <title>个人中心 - 订单管理</title>
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


         
            
    <section>
        <div class="user-center-main-box common-width clearfix">
            <aside class="fl">
                <ul>
                    <li >
                        <a href="<?php echo U('Home/User/index');?>" rel="nofollow">账号管理</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo U('Home/User/user_order');?>" rel="nofollow">我的订单</a>
                    </li>
                    <li >
                        <a href="<?php echo U('Home/User/user_collect');?>" rel="nofollow">我的收藏</a>
                    </li>
                    <li >
                        <a href="<?php echo U('Home/User/user_addr');?>"  rel="nofollow">地址管理</a>
                    </li>
                </ul>
            </aside>
            <article class="fl user-center-main">
                <header>历史订单</header>

        <!-- 自己输入的内容 -->
        <div class="layui-collapse" lay-accordion>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="layui-colla-item">
                        <table class="layui-colla-title layui-table" lay-even lay-skin="nob" style="margin-top: 0px; margin-bottom: 0px;">
                            <colgroup>
                                <col width="200">
                                <col width="160">
                                <col width="280">
                                <col>
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th style="padding-left: 40px;">订单号：<?php echo ($vo["id"]); ?></th>
                                <th>送餐时间：<?php echo ($vo["time_of_delivery"]); ?></th>
                                <th>下单日期：<?php echo ($vo["order_date"]); ?></th>
                                <th>订单状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <thead>
                            <tr>
                                <th style="padding-left: 40px;">手机：<?php echo ($vo["address"]["customer_phone"]); ?></th>
                                <th>姓名：<?php echo ($vo["address"]["customer_name"]); ?></th>
                                <th>地址：<?php echo ($vo["address"]["delivery_address"]); ?></th>
                                <th>
                                    <?php if($vo["or_state"] == 0): ?>待送餐
                                        <?php elseif($vo["or_state"] == 1): ?><a href="JavaScript:;" id="<?php echo ($vo["id"]); ?>" class="qdsh" title="送货中">确定收货</a>
                                        <?php elseif($vo["or_state"] == 2): ?>订单完成
                                        <?php else: ?> 无状态<?php endif; ?>
                                </th>
                                <th><a href="JavaScript:;" id="<?php echo ($vo["id"]); ?>" class="shanchu">删除</a></th>
                            </tr>
                            </thead>
                        </table>
                        <!-- 隐藏的内容 -->
                        <table class="layui-colla-content layui-table" lay-size="sm"   style="padding: 0px; margin: 0px;">
                            <colgroup>
                                <col width="200">
                                <col width="200">
                                <col width="200">
                                <col width="200">
                            </colgroup>
                            <thead>
                            <tr>
                                <th>商品名称</th>
                                <th>单价</th>
                                <th>数量</th>
                                <th>小结</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($vo["order_detail"])): $i = 0; $__LIST__ = $vo["order_detail"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vp): $mod = ($i % 2 );++$i;?><tr>
                                        <td><?php echo ($vp["name"]); ?></td>
                                        <td><?php echo ($vp["price"]); ?> 元</td>
                                        <td><?php echo ($vp["nums"]); ?></td>
                                        <td><?php echo ($vp["subtotal"]); ?> 元</td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                            <tbody>
                                <tr style="background-color: #e2e2e2">
                                    <td>备注：<?php echo ($vo["remarks"]); ?></td>
                                    <td>购买IP：<?php echo ($vo["ip"]); ?></td>
                                    <td>运费：0 元</td>
                                    <td>总支付：<?php echo ($vo["total"]); ?> 元</td>
                                </tr>
                            </tbody>
                        </table>

                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
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


    
    <script type="text/javascript">
        var token = 'u8wA1RHnkO8OfIWaX5Uxg3u5Og9X718nFVOQTFXg:WsqxKsgpRoNjeOqH4m8Uo80w3TM=:eyJtaW1lTGltaXQiOiJpbWFnZS9qcGVnO2ltYWdlL3BuZyIsInNjb3BlIjoiZGhjLXJlZnVuZCIsImRlYWRsaW5lIjoxNDMwNjIwMDM3LCJmc2l6ZUxpbWl0Ijo1MjQyODgwfQ==';
        var orderRefund = "/account/order/0/refund/create/";
        var static = "/static/";
    </script>
    <script src="/waimai/Public/Home/js/jquery-1.8.1.js"></script>

    <script type="text/javascript" src="/waimai/Public/Home/js/angular.min.js"></script>
    <script src="/waimai/Public/Home/js/common.js"></script>
    
     
    <script src="/waimai/Public/Home/js/service.js"></script>
    <script>var feedbackUrl = '/ajax/feedback/';var app = angular.module("app", ["dh.dialog", "dh.form", 'dh.service', 'dh.other']);</script>
    <!--[if lt IE 9]><script src="/waimai/Public/Home/js/fix.js"></script><![endif]-->
    <script src="/waimai/Public/Home/js/user_center.js"></script>


    <script>angular.bootstrap(document, ["app"]);</script>

    <!-- Baidu Analytics -->
    <script type="text/javascript" src="/waimai/Public/layui/layui.js"></script>
    <script type="text/javascript" src="/waimai/Public/layui/layui.all.js"></script>
<script>
    layui.use('element', function(){
        var element = layui.element;
        //一些事件监听
        element.on('collapse(filter)', function(data){
            console.log(data.show); //得到当前面板的展开状态，true或者false
            console.log(data.title); //得到当前点击面板的标题区域DOM对象
            console.log(data.content); //得到当前点击面板的内容区域DOM对象
        });
    });
//删除订单
    $(".shanchu").click(function(){
        var id =this.id;
        layer.confirm('确定要删除订单吗？', {icon: 3, title:'提示'}, function(index){
            $.post("<?php echo U('User/de_or');?>",{'id':id},function(result){
                if(result){
                    layer.msg('删除成功！');window.location.reload();
                }else {
                    layer.msg('删除失败！请联系客服！');
                }
            });
            layer.close(index);
        });
    });
    //确定收货
$('.qdsh').click(function(){
    var id =this.id;
    layer.confirm("<input class='pwd' type='password' />",{title:'请输入密码'},function(index){
        var pwd = $('.pwd').val();
        if(pwd){
            $.post("<?php echo U('/Home/User/pwd');?>",{'pwd':pwd,'id':id},function(r){
                if(r.code == 1){
                    layer.msg('已确定收货！');window.location.reload();
                }else{
                    layer.msg('操作失败！');
                    return false;
                 }
            });
        }
        layer.close(index);
    });
});
</script>
</body>
</html>