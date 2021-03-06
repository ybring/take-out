<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
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
<title>管理员列表</title>
</head>
<body>
<div class="page-container">
	
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="type_add_cp('添加买卖分类','type_add_cp','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加外卖分类</a></span></div>
	<table class="table table-border table-bordered table-bg table-sort">
		<thead>
			<tr class="text-c">
				
				<th width="40">分类ID</th>
				<th width="150">分类名称</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
					
					<td><?php echo ($vo["type_id"]); ?></td>
					<td><?php echo ($vo["type_name"]); ?></td>
					<td class="td-manage">
					<a title="编辑" href="javascript:;" onclick="type_edit('分类编辑','type_edit?type_id=<?php echo ($vo["type_id"]); ?>','800','500')" class="ml-5" style="text-decoration:none">
							<i class="Hui-iconfont">&#xe6df;</i>
						</a> 
					<a title="删除" href="javascript:;" onclick="type_del(this,<?php echo ($vo["type_id"]); ?>)" class="ml-5" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe6e2;</i>
					</a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/waimai/Public/Backstage/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/waimai/Public/Backstage/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  {"orderable":false,"aTargets":[2]}// 制定列不参与排序
	]
});


/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function type_add_cp(title,url,w,h){
	layer_show(title,url,w,h);

}



/*管理员-删除*/
function type_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: 'type_del',
			data:{'type_id':id},
			dataType: 'json',
			success: function(data){
				
				if (data.code == 0) {
					$(obj).parents("tr").remove();
				}
				layer.msg(data.msg,{icon:1,time:1000});

			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*-编辑type_edit*/
function type_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
	window.location.reload;
}
</script>
</body>
</html>