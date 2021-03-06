<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/shop2/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/shop2/Public/css/style.css"/>       
        <link href="/shop2/Public/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/shop2/Public/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/shop2/Public/assets/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="/shop2/Public/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="/shop2/Public/assets/css/ace-ie.min.css" />
		<![endif]-->
			<script src="/shop2/Public/assets/js/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/shop2/Public/assets/js/bootstrap.min.js"></script>
		<script src="/shop2/Public/assets/js/typeahead-bs2.min.js"></script>
		<!-- page specific plugin scripts -->
		<script src="/shop2/Public/assets/js/jquery.dataTables.min.js"></script>
		<script src="/shop2/Public/assets/js/jquery.dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="/shop2/Public/js/H-ui.js"></script> 
        <script type="text/javascript" src="/shop2/Public/js/H-ui.admin.js"></script> 
        <script src="/shop2/Public/assets/layer/layer.js" type="text/javascript" ></script>
        <script src="/shop2/Public/assets/laydate/laydate.js" type="text/javascript"></script>
        <style>
        	.myselfcss{
				position:absolute;
				top:350px;
				left:400px;
        	}
        </style>
<title>用户列表</title>
</head>
<body>
     <div class="border clearfix">
       <span class="l_f">
        <a href="javascript:ovid()" id="member_add" class="btn btn-warning">修改用户信息</a>
       </span>
     </div>
<div class="add_menber" id="add_menber_style" style="display:block">
    <form action="<?php echo U('User/editUser');?>" method="post" id="myself">
        <input type="hidden" name="uid" value="<?php echo ($user["id"]); ?>" />
        <ul class=" page-content">
         <li><label class="label_name">用户账号：</label><span class="add_name"><input value="<?php echo ($user["account"]); ?>" name="account" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
         <li><label class="label_name">用户昵称：</label><span class="add_name"><input value="<?php echo ($user["name"]); ?>" name="name" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
         <li><label class="label_name">手机号：</label><span class="add_name"><input value="<?php echo ($user["phone"]); ?>" name="phone" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
         <li><label class="label_name">生日：</label><span class="add_name"><input value="<?php echo ($user["birth"]); ?>" name="birth" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
         <li><label class="label_name">电子邮箱：</label><span class="add_name"><input value="<?php echo ($user["email"]); ?>" name="email" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
         <li><label class="label_name">积分：</label><span class="add_name"><input value="<?php echo ($user["score"]); ?>" name="score" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
         <li><label class="label_name">用户角色：</label><span class="add_name">
         <label><input <?=$user['role'] == 1?'checked':''?> name="role" type="radio" class="ace" value="1"><span class="lbl">普通用户</span></label>&nbsp;&nbsp;&nbsp;
         <label><input <?=$user['role'] == 2?'checked':''?> name="role" type="radio" class="ace" value="2"><span class="lbl">VIP</span></label>&nbsp;&nbsp;&nbsp;
         <label><input <?=$user['role'] == 3?'checked':''?> name="role" type="radio" class="ace" value="3"><span class="lbl">钻石会员</span></label>
         </span>
         <div class="prompt r_f"></div>
         </li>
         <li><label class="label_name">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</label><span class="add_name">
         <label><input <?=$user['sex'] === '0'?'checked':''?> name="sex" type="radio" class="ace" value="0"><span class="lbl">女</span></label>&nbsp;&nbsp;&nbsp;
         <label><input <?=$user['sex'] == 1?'checked':''?> name="sex" type="radio" class="ace" value="1"><span class="lbl">男</span></label>&nbsp;&nbsp;&nbsp;
         <label><input <?=$user['sex'] == 2?'checked':''?> name="sex" type="radio" class="ace" value="2"><span class="lbl">保密</span></label>
         </span>
         <div class="prompt r_f"></div>
         </li>
         <li><label class="label_name">状&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;态：</label><span class="add_name">
         <label><input <?=$user['status'] == 1?'checked':''?> name="status" type="radio" class="ace" value="1"><span class="lbl">启用</span></label>&nbsp;&nbsp;&nbsp;
         <label><input <?=$user['status'] == 2?'checked':''?> name="status"type="radio" class="ace" value="2"><span class="lbl" >停用</span></label></span><div class="prompt r_f"></div></li>

        </ul>

 </div>
    <div class="myselfcss">
     <label>
        <a href=""><input type="submit"  class="btn btn-search myself" value="提交"/></a>
        <a href="<?php echo U('User/index');?>"  class="btn btn-danger">取消</a>
    </label>
    </div>
    </form>
  <!-- <button class="btn_search" type="button">提</button>
  <button class="btn_search" type="button">取消</button> -->

 	
</body>

<script>
    
    
     $(function(){
      var dataformInit = $("#myself").serializeArray();   
      var jsonTextInit = JSON.stringify({ dataform: dataformInit });  
      $(".myself").click(function(){  
             var dataform = $("#myself").serializeArray();  
             var jsonText = JSON.stringify({ dataform: dataform });  
             if(jsonTextInit==jsonText)  
             {   
                     alert("你什么也没改");  
                     return false;  
             }  
  
      })  
  
}) 
</script>
</html>