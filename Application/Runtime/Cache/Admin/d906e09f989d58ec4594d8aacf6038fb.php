<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/html5shiv.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/waimai/Public/Backstage/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>订单菜表</title>
<link rel="stylesheet" href="/waimai/Public/Backstage/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body>
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="20">菜品ID</th>
						<th width="40">菜名</th>
						<th width="40">数量</th>
						<th width="60">单价</th>
						<th width="60">小计</th>
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($list["0"]["order_detail"])): $i = 0; $__LIST__ = $list["0"]["order_detail"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c va-m">
						<td><?php echo ($vo["product_id"]); ?></td>
						<td class="text-1" ><?php echo ($vo["name"]); ?></td>
						<td class="text-2"><?php echo ($vo["nums"]); ?></td>
						<td><span class="price"><?php echo ($vo["price"]); ?></span> 元</td>
						<td class="text-2"><?php echo ($vo["subtotal"]); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>




<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/waimai/Public/Backstage/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/waimai/Public/Backstage/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
</script>
</body>
</html>