<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
<title>用户管理</title>
</head>
<body>

<div class="pd-20">
  <div class="cl pd-5 bg-1 bk-gray mt-20">
    <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a>
    <a href="javascript:;" onclick="user_add('添加用户','/waimai/Admin/User/user_add','600','300')" class="btn btn-primary radius"><i class="icon-plus"></i> 添加用户</a></span>
  </div>
  <table class="table table-border table-bordered table-hover table-bg table-sort">
    <thead>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="20">ID</th>
        <th width="60">手机</th>
        <th width="260">密码</th>
        <th width="60">最近登录</th>
        <th width="60">加入时间</th>
        <th width="70">状态</th>
        <th width="100">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
          <td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" id="<?php echo ($vo["id"]); ?>" name="del"></td>
          <td><?php echo ($vo["id"]); ?></td>
          <td><?php echo ($vo["phone"]); ?></td>
          <td><?php echo ($vo["password"]); ?></td>
          <td class="text-l"><?php echo ($vo["lasttime"]); ?></td>
          <td><?php echo ($vo["add_time"]); ?></td>
          <td class="td-status">
              <?php if($vo["is_de"] == 0): ?><span class="label label-success radius">已启用</span>
                <?php else: ?>
                  <span class="label label-defaunt radius">已停用</span><?php endif; ?>
          </td>
           <td class="td-manage">
               <?php if($vo["is_de"] == 0): ?><a style="text-decoration:none" onClick="user_stop(this,'<?php echo ($vo["id"]); ?>')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>
                   <?php else: ?>
                   <a style="text-decoration:none" onClick="user_start(this,'<?php echo ($vo["id"]); ?>')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a><?php endif; ?>
           <a style="text-decoration:none" class="ml-5" onClick="change_password('修改密码','/waimai/Admin/User/user_pwd_save','<?php echo ($vo["id"]); ?>')" href="javascript:;" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a>
            <a title="删除" href="javascript:;" onclick="user_del(this,'<?php echo ($vo["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
  <div id="pageNav" class="pageNav"></div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/waimai/Public/Backstage/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/waimai/Public/Backstage/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/waimai/Public/Backstage/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/waimai/Public/Backstage/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){
  $('.table-sort').dataTable({
    "aaSorting": [[ 1, "desc" ]],//默认第几个排序
    "bStateSave": true,//状态保存
    "aoColumnDefs": [
      //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
      {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
    ]
  });

});
/*用户-添加*/
function user_add(title,url,w,h){
  layer_show(title,url,w,h);
}
/*用户-查看*/
function member_show(title,url,id,w,h){
  layer_show(title,url,w,h);
}
/*用户-停用*/
function user_stop(obj,id){
  layer.confirm('确认要停用吗？',function(index){
      $.post('/waimai/Admin/User/user_stop',{'id':id},function(r){
          if(r.code ==1) {
              $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="user_start(this,' + id + ')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
              $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
              $(obj).remove();
              layer.msg('已停用!', {icon: 5, time: 1000});
          }else{
              layer.msg(r.msg);
          }
    });
  });
}

/*用户-启用*/
function user_start(obj,id){
  layer.confirm('确认要启用吗？',function(index){
    $.post('/waimai/Admin/User/user_start',{'id':id},function(r){
        if(r.code ==1) {
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="user_stop(this,' + id + ')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
            $(obj).remove();
            layer.msg('已启用!', {icon: 6, time: 1000});
        }else {
            layer.msg(r.msg,{icon: 5, time: 1000});
        }
    });
  });
}
/*密码-修改*/
function change_password(title,url,id){
  layer.prompt({
    formType: 1,
    value: '',
    title: '请输入修改的密码'
  }, function(value, index, elem){
    if(value.length<6 || value.length>18){
      layer.msg('密码长度不符合 6 ~ 18',{time: 1000});
      return false;
    }
    $.post(url,{'password':value,'id':id},function(r){
        if(r.code ==1){
            layer.msg(r.msg+" 不刷新");
        }else{
            layer.msg(r.msg);
        }
    });
    layer.close(index);
  });
}
/*用户-删除*/
function user_del(obj,id){
  layer.confirm('确认要删除吗？',function(index){
    $.post('/waimai/Admin/User/user_del',{'id':id},function(r){
      if(r.code==1){
          $(obj).parents("tr").remove();
          layer.msg(r.msg,{time:1000});
      }else {
        layer.msg(r.msg,{time:1000});
      }
    });
  });
}
function datadel(){
  layer.confirm('确认要删除选中的数据吗？',function(index){
    layer.close(index);
    $('input[name=del]:checked').each(function(){
      var _id = $(this).val();
      var that = $(this);
      $.post("/waimai/Admin/User/user_del", {id:_id}, function(r){
        if(r.code ==1){
          that.parent().parent().remove();
          layer.msg(r.msg,{icon:1,time:1000});
        }else{
          layer.msg(r.msg,{icon:2,time:1000});
        }
      });
    });
  });
}
</script>
</body>
</html>