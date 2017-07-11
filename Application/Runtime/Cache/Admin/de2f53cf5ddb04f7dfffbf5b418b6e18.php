<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>图片列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 图片管理 <span class="c-gray en">&gt;</span> 图片列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
	<form action="<?php echo U('Loop/loop_list');?>" method="get">
		<input type="text" name="img_title" placeholder=" 轮播图主题" style="width:250px" class="input-text">
		<button class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
    </form>
	</div>
    <form action="<?php echo U('Loop/alldel');?>" method="post">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><button type="submit" class="btn btn-danger radius"><i class="Hui-iconfont"  class="btn btn-danger radius">&#xe6e2;</i> 批量删除</button> <a class="btn btn-primary radius" onclick="picture_add('添加轮播图','<?php echo U('Loop/loop_add');?>','700','320')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加轮播图</a></span> <span class="r"><?php echo ($btn); ?></span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input type="checkbox" value=""></th>
					<th width="80">ID</th>
                    <th width="100">分类名</th>
                    <th>轮播图主题</th>	
					<th width="250">轮播封面图</th>
					<th width="200">添加时间</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
            <?php if(is_array($list)): foreach($list as $k=>$v): ?><tr class="text-c">
					<td><input name="box[]" type="checkbox" value="<?php echo ($v["id"]); ?>"></td>
					<td><?php echo ($v["id"]); ?></td>
                    <td>┝┅<?php echo ($v["parent_name"]); ?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;┅┅<?php echo ($v["son_name"]); ?></td>
					<td><?php echo ($v["img_title"]); ?></td>
					<td><img width="210" class="picture-thumb" src="/Uploads/img/<?php echo ($v["loop_img"]); ?>"></td>
					<td><?php echo ($v["add_time"]); ?></td>
					<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="loop_edit('编辑轮播图','<?php echo U('Loop/loop_edit',['id'=>$v['id']]);?>','1','800','500')" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" href="<?php echo U('Loop/del',['id'=>$v['id']]);?>" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

/*图片-添加*/
function picture_add(title,url,w,h){
	layer_show(title,url,w,h);
}

/*图片-查看*/
function picture_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-编辑*/
function loop_edit(title,url,id,w,h){
    layer_show(title,url,w,h);
}
</script>
</body>
</html>