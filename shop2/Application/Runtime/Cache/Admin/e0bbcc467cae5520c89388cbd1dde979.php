<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加分类</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
 <link href="/shop2/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/shop2/Public/css/style.css"/>       
        <link rel="stylesheet" href="/shop2/Public/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/shop2/Public/assets/css/font-awesome.min.css" />
        <link href="/shop2/Public/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
      <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
        <!--[if lte IE 8]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->
      <script src="/shop2/Public/js/jquery-1.9.1.min.js"></script>
        <script src="/shop2/Public/assets/js/bootstrap.min.js"></script>
        <script src="/shop2/Public/assets/js/typeahead-bs2.min.js"></script>
         <script src="/shop2/Public/assets/layer/layer.js" type="text/javascript"></script>
        <script type="text/javascript" src="/shop2/Public/Widget/swfupload/swfupload.js"></script>
        <script type="text/javascript" src="/shop2/Public/Widget/swfupload/swfupload.queue.js"></script>
        <script type="text/javascript" src="/shop2/Public/Widget/swfupload/swfupload.speed.js"></script>
        <script type="text/javascript" src="/shop2/Public/Widget/swfupload/handlers.js"></script>
        <style>
          
          #add_brand{
              margin-left:215px;
          }

          .add_conent{
              background-color:white;
          }

          .div_visibility{
              visibility:hidden ;
          }
          
        </style>
</head>

<body style="background-color:snow;">
<div id="add_brand" class="clearfix">
<form action="<?php echo U('Types/showTypeViewAlsoHandlerAdd');?>" method="post" />
    <input type="hidden" name="pid" value="<?=empty($typeData['id']) ? 0 : $typeData['id']?>" />
    <input type="hidden" name="path" value="<?=empty($typeData['path']) ? '0,' : $typeData['path'].$typeData['id'].','?>" />

    <div class="left_add" style="border:1px solid snow;">
        <div class="title_name">添加分类</div>
        <ul class="add_conent">
            <li class=" clearfix">
                <label class="label_name">添加到：</label>&nbsp;&nbsp;&nbsp;
                <label style="font-size:16px; font-family:宋体; letter-spacing:3px; color:#690; width:280px;"><b><?=empty($typeData['id']) ? '顶级分类' : $typeData['name']?></b></label>
            </li>

            <li class=" clearfix">
                <label class="label_name">分类名称：</label> 
                <input name="name" type="text" class="add_text" maxlength="10" style="width:300px;" autofocus />
                <div class="div_visibility"><label class="label_name">12312</label></div>
            </li>
            <li class=" clearfix" style="text-align:center;">
                <label>
                    <input type="submit"  class="btn btn-primary" value="保存" />
                    <a href="<?php echo U('Types/showGoodsTypeView');?>"  class="btn btn-danger" />取消</a>
                </label>
            </li>
        </ul>
    </div>
</form>
</div>
</body>
</html>