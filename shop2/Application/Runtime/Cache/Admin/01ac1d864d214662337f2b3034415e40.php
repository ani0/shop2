<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
 <link href="/shop2/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/shop2/Public/css/style.css"/>       
        <link href="/shop2/Public/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/shop2/Public/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/shop2/Public/font/css/font-awesome.min.css" />
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="/shop2/Public/js/jquery-1.9.1.min.js"></script>
		<script src="/shop2/Public/assets/js/typeahead-bs2.min.js"></script>   
        <script src="/shop2/Public/js/lrtk.js" type="text/javascript" ></script>		
		<script src="/shop2/Public/assets/js/jquery.dataTables.min.js"></script>
		<script src="/shop2/Public/assets/js/jquery.dataTables.bootstrap.js"></script>
        <script src="/shop2/Public/assets/layer/layer.js" type="text/javascript" ></script>          
        <script type="text/javascript" src="/shop2/Public/Widget/swfupload/swfupload.js"></script>
        <script type="text/javascript" src="/shop2/Public/Widget/swfupload/swfupload.queue.js"></script>
        <script type="text/javascript" src="/shop2/Public/Widget/swfupload/swfupload.speed.js"></script>
        <script type="text/javascript" src="/shop2/Public/Widget/swfupload/handlers.js"></script>
<title>广告管理</title>
</head>

<body>
<div class="page-content clearfix">
 <div class="sort_adsadd_style">
  <div class="border clearfix">
       <span class="l_f">
        <a href="javascript:ovid()"  id="ads_add" title="添加品牌" class="btn btn-warning Order_form"><i class="fa fa-plus"></i> 添加图片</a>
       
       </span>
       <span class="r_f">共：<b><?php echo ($num); ?></b>个图片</span>
     </div>
     <?php echo ($pageBtn); ?>
 <!--列表样式-->
    <div class="sort_Ads_list">
       <table class="table table-striped table-bordered table-hover" id="sample-table">
        <thead>
         <tr>
             
                <th width="80px">ID</th>               
                <th width="100">名字</th>
                <th width="240px">图片</th>
                <th width="250px">链接地址</th>
                <th width="100">分类</th>
             
      
                <th width="180">加入时间</th>
                <th width="70">状态</th>                
                <th width="250">操作</th>
            </tr>
        </thead>
    <tbody>
        <?php if(is_array($datas)): foreach($datas as $key=>$vo): ?><tr>
    
       <td><?php echo ($vo['id']); ?></td>
       <td><?php echo ($vo['title']); ?></td> 
      
       <td><span class="ad_img"><img src="/shop2/Public/Uploads/<?php echo ($vo['pic']); ?>"  width="100%" height="100%"/></span></td>      

       <td><?php echo ($vo['link']); ?></td>
       <?php if($vo['role'] == 1): ?><td>轮播图</td>
       <?php else: ?>
       <td>广告</td><?php endif; ?>
       <td><?php echo ($vo['addtime']); ?></td>

       <td class="td-status">
        <?php if($vo['status'] == 1): ?><span class="label label-success radius">显示
        <?php else: ?><span class="label label-defaunt radius">停用<?php endif; ?>
        </span>

       </td>
      <td class="td-manage">
         <?php if($vo['status'] == 1): ?><a onClick="member_stop(this,<?php echo ($vo["id"]); ?>,<?php echo ($vo["status"]); ?>)"  href="javascript:;" title="停用"  class="btn btn-xs btn-success"><i class="fa fa-check  bigger-120"></i></a>  
            <?php else: ?><a style="text-decoration:none" class="btn btn-xs " onClick="member_start(this,<?php echo ($vo["id"]); ?>,<?php echo ($vo["status"]); ?>)" href="javascript:;" title="显示"><i class="fa fa-close bigger-120"></i></a><?php endif; ?>   
<!--         <a title="编辑" onclick="member_edit('编辑','member-add.html','4','','510')" href="javascript:;"  class="btn btn-xs btn-info" ><i class="fa fa-edit bigger-120"></i></a>   -->    
        <a title="删除" href="javascript:;"  onclick="del(this,<?php echo ($vo["id"]); ?>)" class="btn btn-xs btn-warning" ><i class="fa fa-trash  bigger-120"></i></a>
       </td>
      </tr><?php endforeach; endif; ?>

     
    </tbody>
    </table>
     </div>
 
 </div>
</div>  

<!--添加广告样式-->
<div id="add_ads_style"  style="display:none">  
<form action="<?php echo U('Photo/doAddPhoto');?>" method="post" enctype="multipart/form-data" />
 <div class="add_adverts">
 <ul>
  <li><label class="label_name">名字</label><span class="cont_style"><input name="title" type="text" id="form-field-1"  class="col-xs-10 col-sm-5" style="width:450px"></span></li>
  <li>
  <label class="label_name">所属分类</label>
  <span class="cont_style">
  <select class="form-control" id="form-field-select-1" name="role">
    <option value="">选择分类</option>
    <option value="1">轮播图</option>
    <option value="2">广告</option>
</select>
    </span> 
  </li>
<li>
  <label class="label_name">商品分类</label>
  <span class="cont_style">
  <select class="form-control" id="form-field-select-1" name="goods">
    <option value="">选择分类</option>
    <?php if(is_array($types)): foreach($types as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></option><?php endforeach; endif; ?> 
</select>
    </span> 
  </li>
  
    

  <li><label class="label_name">链接地址</label><span class="cont_style"><input name="link" type="text" id="form-field-1"  class="col-xs-10 col-sm-5" style="width:450px"></span></li>  
   <li><label class="label_name">状&nbsp;&nbsp;态：</label>
   <span class="cont_style">
     &nbsp;&nbsp;<label><input name="status" type="radio" checked="checked" value="1" class="ace"><span class="lbl">显示</span></label>&nbsp;&nbsp;&nbsp;
     <label><input name="status" type="radio" value="2" class="ace"><span class="lbl">隐藏</span></label></span><div class="prompt r_f"></div>
     </li>
     <li><label class="label_name">图片</label><span class="cont_style">
        <input type="file" name="pic" class="col-xs-10 col-sm-5">
        </span>
    </li>
      <li style="margin-left:100px" width="100px">
        <input type="submit"   value="提交" >

    </li>
 
  
 </ul>
 </div>
 </form>
</div>
</body>
</html>


<script>

/*图片-停用*/
function member_stop(obj,id,status){
    layer.confirm('确认要停用吗？',function(index){

       $.ajax({
            url: "<?php echo U('Photo/editPhotoStatus');?>",
            type: "post",
            data: "id="+id+"&pp="+status,
            success: function (msg) {

                if (msg['code'] == 1200) {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs " onClick="member_start(this,'+id+',2)" href="javascript:;" title="显示"><i class="fa fa-close bigger-120"></i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">停用</span>');
                    $(obj).remove();
                    layer.msg('已停用!',{icon: 5,time:1000});
                   
                } else {

                    layer.msg('系统有误! 请尽快联系程序员!!',{icon:1,time:1000});
                }
            },
            dataType: "json"
        });
    });
}
/*图片-启用*/
function member_start(obj,id,status){
    layer.confirm('确认要启用吗？',function(index){

        $.ajax({
            url: "<?php echo U('Photo/editPhotoStatus');?>",
            type: "post",
            data: "id="+id+"&pp="+status,
            success: function (msg) {

                if (msg['code'] == 1200) {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs btn-success" onClick="member_stop(this,'+id+',1)" href="javascript:;" title="停用"><i class="fa fa-check  bigger-120"></i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">显示</span>');
                    $(obj).remove();
                    layer.msg('已显示!',{icon: 6,time:1000});
                    window.reload();
                } else {

                    layer.msg('系统有误! 请尽快联系程序员!!',{icon:1,time:1000});
                }
            },
            dataType: "json"
        });
    });
}
/*广告图片-删除*/
function del(obj, id) {

    layer.confirm('确认要删除吗？',function(index){

        $.ajax({
            url: "<?php echo U('Photo/delPhotoData');?>",
            type: "post",
            data: "id="+id,
            success: function (msg) {

                if (msg['code'] == 1200) {

              
                    $(obj).parents("tr").remove();
                   location.reload();
                } else {

                    layer.msg('系统有误! 请尽快联系程序员!!',{icon:1,time:1000});
                }
            },
            dataType: "json"
        });
    });    
}
/*******添加广告*********/
 $('#ads_add').on('click', function(){
	  layer.open({
        type: 1,
        title: '添加广告',
		maxmin: true, 
		shadeClose: false, //点击遮罩关闭层
        area : ['800px' , ''],
        content:$('#add_ads_style'),
	
		yes:function(index,layero){	
		 var num=0;
		 var str="";
     $(".add_adverts input[type$='text']").each(function(n){
          if($(this).val()=="")
          {
               
			   layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
                title: '提示框',				
				icon:0,								
          }); 
		    num++;
            return false;            
          } 
		 });
		  if(num>0){  return false;}	 	
          else{
			  layer.alert('添加成功！',{
               title: '提示框',				
			icon:1,		
			  });
			   layer.close(index);	
		  }		  		     				
		}
    });
})
</script>