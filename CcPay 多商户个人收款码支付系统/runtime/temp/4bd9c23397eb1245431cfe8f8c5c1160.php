<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"/www/wwwroot/epay.3ii.cn/public/../application/admin/view/admin/admin-permission.html";i:1568129818;s:65:"/www/wwwroot/epay.3ii.cn/application/admin/view/common/blank.html";i:1568129819;s:66:"/www/wwwroot/epay.3ii.cn/application/admin/view/common/footer.html";i:1568129819;}*/ ?>
﻿﻿<!DOCTYPE HTML>
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
<script type="text/javascript" src="/static/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/lib/respond.min.js"></script>

<!--1-图片上传的引入文件-->
<link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/static/bootstrap/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="/static/bootstrap/js/jquery-2.0.3.min.js"></script>
<script src="/static/bootstrap/js/fileinput.js" type="text/javascript"></script>
<script src="/static/bootstrap/js/fileinput_locale_de.js" type="text/javascript"></script>
<script src="/static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


<link href="/static/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/static/static/h-ui.admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/static/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>

<!--引入echarts 数据图-->
 <script src="/static/lib/echarts/echarts.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="/static/lib/DD_belatedPNG_0.0.8a-min.js" ></script>-->
<!--<script>DD_belatedPNG.fix('*');</script>-->

<![endif]-->
<title>权限管理</title>
</head>
<body>
<nav class="breadcrumb">
	<i class="Hui-iconfont">&#xe67f;</i>
	首页 <span class="c-gray en">&gt;</span>
	管理员管理 <span class="c-gray en">&gt;</span>
	权限管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
	<i class="Hui-iconfont">&#xe68f;</i>
	</a>
</nav>
<div class="page-container">
	<div class="text-c">
		<form class="Huiform" method="post" action="<?php echo url('admin/admin/permission'); ?>" target="_self">
			<input type="text" class="input-text" style="width:250px" placeholder="权限名称" id="" name="keyword">
			<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜权限节点</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius">
				<i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
			<a href="javascript:;" onclick="admin_permission_add('添加权限节点','<?php echo url("admin/admin/addPermission"); ?>','','510')" class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i>
				添加权限节点</a>
		</span>
		<span class="r">共有数据：<strong><?php echo $num; ?></strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="7">权限节点</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="200">权限名称</th>
				<th width="200">父级菜单</th>
				<th width="200">url路径</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($admins) || $admins instanceof \think\Collection || $admins instanceof \think\Paginator): $i = 0; $__LIST__ = $admins;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$admin): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td><?php echo $admin['id']; ?></td>
				<td><?php echo $admin['name']; ?></td>
				<td><?php echo $admin['parent']['name']; ?></td>
				<td><?php echo $admin['url']; ?></td>
				<td>
					<a title="编辑" href="javascript:;" onclick="admin_permission_edit('角色编辑','<?php echo url("admin/admin/editPermission",array("id"=>$admin['id'])); ?>','1','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i>
					</a>
					<a title="删除" href="javascript:;" onclick="admin_permission_del(this,'<?php echo $admin['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i>
					</a>
				</td>
			</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-权限-添加*/
function admin_permission_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-权限-编辑*/
function admin_permission_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-权限-删除*/
function admin_permission_del(obj,id){
    layer.confirm('确认要删除吗？',function(index){
        $.post(
            '<?php echo url("admin/admin/delPermission"); ?>',
            {id:id},
            function(dat){
                var data = JSON.parse(dat);
                if(data.status == 1){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                }else{
                    var msg = data.msg;
                    layer.msg(msg,{icon:2,time:2000});
                }
            });
    });
}
</script>
</body>
</html>