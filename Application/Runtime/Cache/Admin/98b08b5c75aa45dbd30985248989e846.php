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
<title>订单管理</title>
<link rel="stylesheet" href="/waimai/Public/Backstage/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">
	<div class="page-container">
		<div class="cl pd-5 bg-1 bk-gray mt-20"> 
			<span class="l">
				<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
				<a class="btn btn-success radius "   href="javascript:location.replace(location.href);" title="刷新" >刷新</a>
				
			</span> 
		 </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="5"><input name="" type="checkbox" value=""></th>
						<th width="10">订单ID</th>
						<th width="40">送餐信息</th>
						<th width="40">用户相关</th>
						<th width="60">总价</th>
						<th width="60">订单内容</th>
						<th width="60">点击送餐状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c va-m">
						<td><input id="<?php echo ($vo["id"]); ?>" name="del" type="checkbox" value="<?php echo ($vo["id"]); ?>"></td>
						<td><?php echo ($vo["id"]); ?></td>
						<td class="text-1" ><?php echo ($vo["address"]["customer_phone"]); ?> 姓名:<?php echo ($vo["address"]["customer_name"]); ?><br> <?php echo ($vo["address"]["delivery_address"]); ?> </td>
						<td class="text-2"><?php echo ($vo["order_date"]); ?><br>送餐时间:<?php echo ($vo["time_of_delivery"]); ?> <?php echo ($vo["remarks"]); ?> </td>
						<td><span class="price"><?php echo ($vo["total"]); ?></span> 元</td>
						<td class="text-2"><a class="ml-5" onClick="order_show('订单 <?php echo ($vo["id"]); ?> 详情','/waimai/Admin/Order/order_show',<?php echo ($vo["id"]); ?>)" href="javascript:;" title="订单详情">订单详情</a></td>
						<td class="td-status">
							<?php if($vo['or_de'] == 1): ?><span id="$vo['or_de']" class="label label-error radius">用户已删除</span>
								<?php else: ?>
								<span class="label label-success radius">已签收</span><?php endif; ?>
						</td>
						<td class="td-manage">
									<span class="label label-success radius">已签收</span>
							<a style="text-decoration:none" class="ml-5" onClick="order_del(this,<?php echo ($vo["id"]); ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
		</div>
	</div>


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
var setting = {
	view: {
		dblClickExpand: false,
		showLine: false,
		selectedMulti: false
	},
	data: {
		simpleData: {
			enable:true,
			idKey: "id",
			pIdKey: "pId",
			rootPId: ""
		}
	},
	callback: {
		beforeClick: function(treeId, treeNode) {
			var zTree = $.fn.zTree.getZTreeObj("tree");
			if (treeNode.isParent) {
				zTree.expandNode(treeNode);
				return false;
			} else {
				//demoIframe.attr("src",treeNode.file + ".html");
				return true;
			}
		}
	}
};





$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
	]
});

/*产品-查看*/
function order_show(title,url,id){

	var index = layer.open({
		type: 2,
		title: title,
		shadeClose: true,
		shade: false,
		maxmin: true, //开启最大化最小化按钮
		area: '600px',
		anim: 5,
		content: url+'/id/'+id
	});
	layer.restore(index);
}
/*订单-取消*/
function order_stop(obj,id){
	layer.confirm('确认要取消送餐吗？',function(index){
		layer.load(2, {time: 1000});
		layer.close(index);
		$.post('/waimai/Admin/Order/order_stop',{_id:id},function(data){
			if(data.code == 1){
				$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="order_start(this,'+id+')" href="javascript:;" title="点击送餐"><i class="Hui-iconfont">&#xe603;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">快点送餐吧！</span>');
				$(obj).remove();
				layer.msg(data.msg,{icon: 6,time:1000});
			}else{
				$(obj).remove();
				layer.msg(data.msg,{icon: 6,time:1000});
			}
		});

	});
}

/*产品-点击送餐*/
function order_start(obj,id){
	layer.confirm('确定已经送餐了吗？',function(index){
		layer.load(2, {time: 1000});
		layer.close(index);
		$.post('/waimai/Admin/Order/order_start',{_id:id},function(data){
			if(data.code == 1){
				$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="order_stop(this,'+id+')" href="javascript:;" title="取消送餐"><i class="Hui-iconfont">&#xe6de;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已点击送餐</span>');
				$(obj).remove();
				layer.msg(data.msg,{icon: 6,time:1000});
			}else{
				$(obj).remove();
				layer.msg(data.msg,{icon: 6,time:1000});
			}
		});
		
	});
}

/*产品-编辑*/
function order_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url+"/id/"+id,
	});
	layer.full(index);
}

/*产品-删除*/
function order_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		layer.close(index);
		$.ajax({
			type: 'POST',
			url: "<?php echo U('/Admin/Order/de_or');?>",
			data:{'id':id},
			dataType: 'json',
			success: function(r){
				if(r.code == 1){
					$(obj).parents("tr").remove();
					layer.msg(r.msg,{icon:1,time:1000});
				}else{
					layer.msg(r.msg,{icon:1,time:1000});
				}

			},
			error:function(r) {
				console.log(r.msg);
			},
		});		
	});
}
function datadel(){
	layer.confirm('确认要删除选中的数据吗？',function(index){
		layer.close(index);
		
		$('input[name=del]:checked').each(function(){
			var _id = $(this).val();
			var that = $(this);
			$.post("<?php echo U('/Admin/Order/de_or');?>", {id:_id}, function(r){
				if(r.code ==1){
					that.parent().parent().remove();
					layer.msg(r.msg,{icon:1,time:1000});
				}else{
					layer.msg(r.msg,{icon:1,time:1000});
				}
			});
		});
		
	});

}
</script>
</body>
</html>