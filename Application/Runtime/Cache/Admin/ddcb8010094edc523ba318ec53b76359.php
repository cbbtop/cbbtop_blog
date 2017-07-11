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

<title>意见反馈</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理 <span class="c-gray en">&gt;</span> 意见反馈 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 
    <form action="<?php echo U('comment_list');?>" method="get">
		<input type="text" class="input-text" style="width:250px" placeholder="输入用户名" name="username">
		<button type="submit" class="btn btn-success radius"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
    </form>
	</div>
    <form action="<?php echo U('Comment/alldel');?>" method="post">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><button type="submit" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</button> </span> <span class="r"><?php echo ($btn); ?></span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox"></th>
					<th width="40">ID</th>
                    <th width="100">留言文章ID</th>
					<th width="100">留言用户</th>
					<th width="200">留言内容</th>
                    <!-- <th width="40">评价星级</th> -->
                    <th width="70">留言时间</th>
                    <!-- <th width="60">是否显示</th> -->
                    <!-- <th width="50">回复状态</th> -->
                    <th width="200">查看回复</th>
                    <th width="70">回复时间</th>

					<th width="30">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): foreach($list as $k=>$v): ?><tr class="text-c">
                <td><input type="checkbox" value="<?php echo ($v["stay_id"]); ?>" name="box[]"></td>
                <td><?php echo ($v["stay_id"]); ?></td>
                <td><?php echo ($v["article_id"]); ?></td>
                <td><?php echo ($v["user_name"]); ?></td>
                <td><?php echo ($v["message_content"]); ?></td>
                <td><?php echo date('Y-m-d H:i:s',$v['message_stay_time']);?></td>
                <td><?php echo ($v["reply"]); ?></td>
             <!--    <?php if($v["is_show"] == 0): ?><td class="td-status"><span class="label label-success radius">显示</span><span style="text-decoration:none"  onclick="modify_status(this,'修改状态',<?php echo ($v['comment_id']); ?>)" value="0" title="屏蔽"><i class="Hui-iconfont" style="cursor:pointer">&#xe631;</i></span></td>
                <?php else: ?>
                    <td class="td-status"><span class="label label-success radius">屏蔽</span><span style="text-decoration:none"  onclick="modify_status(this,'修改状态',<?php echo ($v['comment_id']); ?>)" value="1" title="显示"><i class="Hui-iconfont" style="cursor:pointer">&#xe631;</i></span></td><?php endif; ?>
                <?php if($v["rep_status"] == 0): ?><td>待回复&nbsp;<a style="text-decoration:none"   onclick="comment_reply('回复用户评论','<?php echo U('comment_reply',['comment_id'=>$v['comment_id']]);?>','800','500')" class="label label-success radius" title="回复">回复</a></td>

                <?php else: ?>
                    <td>已回复</td><?php endif; ?> -->
                <td><?php echo date('Y-m-d H:i:s',$v['reply_time']);?></td>
                <td class="td-manage">
                    <a title="删除" href="<?php echo U('Comment/del',['id'=>$v['comment_id']]);?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                </td>
                </tr><?php endforeach; endif; ?> 			
			</tbody>
		</table>
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>  
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,2,4]}// 制定列不参与排序
		]
	});

});
/*评论-添加*/
function comment_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*评论-查看*/
function comment_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}

function comment_reply(title,url,w,h){ 
    layer_show(title,url,w,h);
}

/*状态修改*/
function modify_status(obj,title,id){ 
    var is_show = $(obj).attr('value');
    $.ajax({ 
        type:"get",
        url:"<?php echo U('Comment/getData');?>",
        data:"comment_id="+id+"&is_show="+is_show,
        success:function(arr) {
            if (arr) {   
                $(obj).prev().html('屏蔽'); 
                $(obj).attr('value','1');       
            } else { 
                $(obj).prev().html('显示');
                $(obj).attr('value','0');
            }
        }
    });
}
/*评论-编辑*/
function comment_edit(title,url,id,w,h){
    layer_show(title,url,w,h);
}
/*评论-删除*/
function comment_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
</script>
</body>
</html>