<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="description" content="[半价菜][送可乐]樱花日本料理外卖,全球领先订餐平台， [半价菜][送可乐]樱花日本料理外卖菜单, [半价菜][送可乐]樱花日本料理每日特价。轻松三步即刻享受周边美食！" />
    <meta name="viewport" content="user-scalable=no">
    <meta name="google-site-verification" content="BstJA3X9z6f9HcvoN9AZTwaKo_9Abj_j7dVBPfy640s" />
    <meta name="baidu-site-verification" content="IYCrtVH0i1" />
    <meta property="wb:webmaster" content="239d3d1dbdde1b2c" />
    <link rel="shortcut icon" href="/waimai/Public/Home/images/favicon.ico" type="image/x-icon" />

    <link rel="icon" type="image/png" href="/waimai/Public/Home/images/favicon.ico" />
    <script type="text/javascript">(function(document, screen) {
        if (screen.width < 760) {
          document.location.href = "/mobile/";
        }
      } (document, screen));</script>
    <link rel="stylesheet" href="/waimai/Public/Home/css/common.css?v=2015-5-20" />
    <link rel="stylesheet" href="/waimai/Public/Home/css/menuPage.css?v=2015-5-20" />
    <title>菜单列表</title></head>
  
  <body class="day " ng-controller="bodyCtrl" day-or-night>
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
            <li class="no-line ">
              <a href="<?php echo U('/Home/Index/index_intro');?>">餐厅介绍</a></li>
            <li class="active">
              <a href="<?php echo U('/Home/Index/index');?>">菜单</a></li>
            <li>
              <a href="<?php echo U('/Home/Index/index_intro');?>">评论</a></li>
            <li>
              <a href="<?php echo U('/Home/Index/index_intro');?>" id='point-tab'>大家都在点</a></li>
          </ul>
            
    <section class="main-box clearfix" lazy-img-load>
                    <div class="main fl">
                      <div class="inner-main">
                           <nav class="list-order-nav clearfix" id="list-order-nav">
                        <ul class="fl">
                            <li>菜单排序：</li>
                            <li><a href="javascript:void(0);" class="sort-default active">默认排序</a></li>
                            <li class="split-line">|</li>
                            <li><a href="javascript:void(0);" class="sort-sale descend">销量<i class="order-icon"></i></a></li>
                            <li class="split-line">|</li>
                            <li><a href="javascript:void(0);" class="sort-price">价格<i class="order-icon"></i></a></li>
                            <li class="split-line">|</li>
                           
                        </ul>
                    </nav>

                        <div id="menu-main" class="menu-main">
              <?php if(is_array($list)): foreach($list as $m=>$im): ?><article class="collapse section-<?php echo ($im["type_id"]); ?>">
                            <header accordion>
                              <h3 class="ellipsis"><?php echo ($im["type_name"]); ?></h3>
                              <span ng-if="sectionCount['<?php echo ($im["type_id"]); ?>']" ng-class="{disinbl:sectionCount['<?php echo ($im["type_id"]); ?>']}" class="badge disnone" ng-bind="sectionCount['<?php echo ($im["type_id"]); ?>']"></span>
                              <i class="icon shrink-icon position"></i>
                            </header>
                            <section>
                              <ul class="clearfix menu-group menu-group-img menu-first-load">
            <?php if(is_array($im["product"])): foreach($im["product"] as $key=>$pro): ?><li title="<?php echo ($pro["name"]); ?>" class="menu-item hasImg" accessorykey="<?php echo ($im["type_id"]); ?>-<?php echo ($pro["id"]); ?>" data-sale="<?php echo ($pro["sold"]); ?>" data-price="<?php echo ($pro["price"]); ?>">
                                  <div class="menu-item-img">
                                    <img data-src="/waimai/Public/Uploads/<?php echo ($pro["thumb"]); ?>?imageView2/1/w/202/h/202/" src="/waimai/Public/Uploads/<?php echo ($pro["thumb"]); ?>" width="202" height="202" /></div>
                                  <div class="meun-item-name">
                                    <span class="ellipsis"><?php echo ($pro["name"]); ?></span></div>
                                  <p class="ellipsis meun-item-des"></p>
                                  <div class="meun-item-sale clearfix">
                                    <span class="last"></span>
                                    <span class="price"><?php echo ($pro["price"]); ?></span>
                                    <span ng-if="menuItemCount['<?php echo ($im["type_id"]); ?>-<?php echo ($pro["id"]); ?>']" ng-class="{disinbl:menuItemCount['<?php echo ($im["type_id"]); ?>-<?php echo ($pro["id"]); ?>']}" class="badge disnone" ng-bind="menuItemCount['<?php echo ($im["type_id"]); ?>-<?php echo ($pro["id"]); ?>']"></span>
                                    <span class="fr">已售 <?php echo ($pro["sold"]); ?> 份</span>
                                  
                                    </div>
                                </li><?php endforeach; endif; ?>
                              </ul>
                              <ul class="clearfix menu-group"></ul>
                            </section>
                          </article><?php endforeach; endif; ?>    
                        </div><!-- <div id="menu-main" class="menu-main"> -->
           
                      </div>
                    </div>
      <aside class="fl">
        <article class="cart" scroll-position-static="160" top="42">
          <div class="menu-cart">
            <header>
              
              <h5>购物车
                <i class="icon trash-can-icon fr " id="clearCart" ng-click="clearCart()"></i></h5>
            </header>
            <section>
              <div class="inner-cart empty" ng-class="{empty:isEmpty}">
                <div class="cart-thead clearfix">
                  <div class="goods-name fs16">商品名</div>
                  <div class="goods-count fs16">份数</div>
                  <div class="goods-price fs16">单价</div>
                  <div class="goods-subtotal fs16">小计</div></div>
                <div class="cart-item-list select-none">
                  <div class="disnone" ng-class="{disnone:isEmpty}">
                    <div class="cart-item cart-data clearfix" ng-repeat="obj in cartDatas">
                      <div class="goods-name ellipsis" ng-bind="obj.name"></div>
                      <div class="goods-id ellipsis" hidden="display" ng-bind="obj.id"></div>
                      <div class="goods-count clearfix ellipsis">
                        <span class="goods-sub icon sub-icon fl" sub-goods="[[$index]]"></span>
                        <span class="goods-nums fl" ng-bind="obj.quantity"></span>
                        <span class="goods-add icon add-icon fl" ng-click="addGoodsNum($index)"></span>
                      </div>
                      <div class="goods-price">
                        <span ng-bind="obj.price|number:2"></span></div>
                      <div class="goods-subtotal">
                        <span ng-bind="(obj.quantity * obj.price)|number:2"></span></div>
                      <div class="accessory-item" ng-class="{firstitem:$first}" ng-repeat="item in obj.options">
                        <div class="cart-item clearfix">
                          <div class="goods-name ellipsis" ng-bind="item.name"></div>
                          <div class="goods-count fs20">
                            <span class="goods-sub fl"></span>
                            <span class="goods-nums fl" ng-bind="item.quantity"></span>
                          </div>
                          <div class="goods-price"><span ng-bind="item.price|number:2"></span></div>
                          <div class="goods-subtotal"><span ng-bind="(item.price * item.quantity)|number:2"></span></div>
                        </div>
                      </div>
                    </div>
                    <!--附加物-->
                    <div class="cart-item cart-item-addendum cart-data clearfix" ng-repeat="addition in additions">
                      <div class="goods-name ellipsis" ng-bind="addition.name"></div>
                      <div class="goods-count clearfix ellipsis">
                        <span class="goods-nums fl" ng-bind="addition.quantity"></span>
                      </div>
                      <div class="goods-price">
                        <span ng-bind="addition.price|number:2"></span></div>
                      <div class="goods-subtotal">
                        <span ng-bind="(addition.price * addition.quantity)|number:2"></span></div>
                    </div>
                    <!--附加物--></div>
                  <div class="cart-item-empty">暂无商品，请在左边的菜单上点单</div></div>
                <div id="cart-item-list"></div>
                <div class="total clearfix disnone" ng-class="{disnone:isEmpty}">
                  <div class="fl">配送费：
                    <span ng-bind="deliveryCost|number:2"></span></div>
                  <div class="fr">合计：
                    <span ng-bind="total|number:2" id="heji"></span></div>
                </div>
                <div class="checkout">
                  <button class="checkout btn" id="createOrder" ng-bind="createOrderBtnName">立即下单</button></div>
              </div>
            </section>
          </div>
         
        </article>
      </aside>
    </section>
          <span id="element" style="position:absolute;display:none" class="badge">1</span>
     
        </section>
      </div>
    </section>
    <!-- 页脚 -->
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


    <dh-dialog class="disnone" type="alert" index="1001" header="" show="createOrderError">
      <div class="alert-box error">
        <p style="padding-right:20px;">
          <span ng-bind="createOrderErrorMsg"></span>
          <a href="javascript:" title="清空购物车" class="clearShopingCart" ng-show="clearShopCart" ng-click="clearShopingCart()">清空购物车</a></p>
      </div>
    </dh-dialog>
    <dh-dialog class="disnone" type="alert" index="1001" header="" show="showErrorMsg">
      <div class="alert-box" ng-class="errorIcon">
        <p ng-bind="errorMsg"></p>
      </div>
    </dh-dialog>
    <dh-dialog class="disnone" type="alert" index="1002" header="" show="restaurantRest">
      <div class="alert-box warning">
        <p>该餐厅休息中，暂不支持下单。</p>
      </div>
    </dh-dialog>
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

    <script type="text/javascript" src="/waimai/Public/Home/js/angular.min.js"></script>
    <script src="/waimai/Public/Home/js/common.js"></script>
    <script src="/waimai/Public/Home/js/service.js"></script>
    <script>var feedbackUrl = '/ajax/feedback/';
      var app = angular.module("app", ["dh.dialog", "dh.form", 'dh.service', 'dh.other']);</script>
    <!--[if lt IE 9]>
      <script src="/waimai/Public/Home/js/fix.js"></script>
    <![endif]-->



    <script>
    var jsons = '<?php echo ($list2); ?>';
    jsons = JSON.parse(jsons);

    //console.log(jsons);
    sections=[];
      accessoryObj = {},
      orderObj = [],
      other_order = {};
for(var i=0; i<jsons.length; i++)  
    {  //type   
        sections[i]=
        {
            "description" : null,
            "image": null,
            "recommended": true,
            "id": jsons[i].type_id,
            "menu_items": [],//商品
            "name": jsons[i].type_name //name : 店主推荐
            
          };
for(var j=0; j<jsons[i].product.length; j++)  
            {       
                //商品
                sections[i].menu_items[j]=
                            {
                              "qiniu_url": "/waimai/Public/Uploads/"+jsons[i].product[j].thumb,
                              "additions": [],
                              "name": jsons[i].product[j].name,
                              "optionsets": [],
                              "ordercount": 8,
                              "position": 0,
                              "price": jsons[i].product[j].price,
                              "id": jsons[i].product[j].id,
                              "description": ""
                            }
            };
          //type    
    };
   // console.log(sections);
      if (sections) {
        for (var i = 0,
        len = sections.length; i < len; i++) {
          var sectionObj = sections[i],
          key = '';
          for (var j = 0,
          itemLen = sectionObj.menu_items.length; j < itemLen; j++) {
            var menuItemObj = sectionObj.menu_items[j];
            key = sectionObj.id + '-' + menuItemObj.id;
            menuItemObj.key = key;
            menuItemObj.sectionId = sectionObj.id;
            accessoryObj[key] = menuItemObj;
          }
        }
      }

      if (other_order && other_order.items) {
        //order data
        for (var j = 0; j < other_order.items.length; j++) {
          if (other_order.items[j].status == true) {
            orderObj.push(other_order.items[j]);
          }
        }
      }
        var restaurantId = '1592';//店家id
      var restaurantInRange = true;
      var grid_locationId = 602341;//地区代码
      var inRange = true;
      var can_process_order = true;
      var create_order_url = "";//订单传输ID
      var checkout_url = "";
      var restaurant_list_url = "";
      var favoriteUrl = "";//登录跳转到的网页
      var delivery = {
        minimum_order_quantity: '20',//差多少元起送
        free_delivery_treshold: '0',//满 多少不用配送费
        delivery_fee: '0',//配送费 
      }</script>
      
    <script src="/waimai/Public/Home/js/menupage.js"></script>
    <script src="/waimai/Public/Home/js/favorite.js"></script>
    <script>angular.bootstrap(document, ["app"]);</script>
    <!-- Baidu Analytics -->
    <script src="/waimai/Public/jquery-2.1.3.min.js"></script>
    <script>


        $('#createOrder').click(function(){
            var load = layer.load(3, {time: 10*1000}); //又换了种风格，并且设定最长等待10秒
            var data = new Array();
            $('.cart-data').each(function(){
                var product_id =$(this).find('.goods-id').text();
                var name =$(this).find('.goods-name').text();
                var nums =$(this).find('.goods-nums').text();
                 var price =$(this).find('.goods-price').text();
                 price=$.trim(price);
                 var subtotal =$(this).find('.goods-subtotal').text();
                 subtotal=$.trim(subtotal);

                var reg=/,/g;
                nums=nums.replace(reg,'');
                price=price.replace(reg,'');
                subtotal=subtotal.replace(reg,'');
                //console.log("商品名："+name+"    份数："+nums+"    单价："+price+"    小计："+subtotal);return false;
                data.push(
                 {
                        'product_id' : product_id,
                        'name':name,
                        'nums':nums,
                        'price':price,
                        'subtotal':subtotal,
                  } 
                );
            });

            var total =$('#heji').text();//合计
            $.post("<?php echo U('Home/Order/add_order_detail');?>",{data:data , 'total':total},function(re) {
                if(re.status == 0){
                    layer.msg(re.info,{icon: 5},function(){
                                layer.close(load);

                                location.href = "<?php echo U('Login/index');?>?redirect_url="+window.location.href;
                            }
                    );
                }else if(re.code == 1){
                    $('#clearCart').click();
                         layer.close(load);
                         var orid=re.order_id;
                          window.location.href = "<?php echo U('Order/index');?>";
                 }else if(re.code==0){
                     layer.msg(re.msg+" 请联系客服！",{icon: 5},function(){
                                 return false;
                             }
                     );
                 }else {
                     layer.msg("未知错误！",{icon:5});layer.close(load);
                 }

            });
            //console.log(data);
        });
    </script>
    <script src="/waimai/Public/layui/layui.js"></script>
    <script src="/waimai/Public/layui/layui.all.js"></script>
    </body>

</html>