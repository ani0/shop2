<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Cache-Control" content="no-siteapp" />
 <link href="/shop2/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/shop2/Public/css/style.css"/>       
        <link href="/shop2/Public/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/shop2/Public/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/shop2/Public/assets/css/font-awesome.min.css" />
        	<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="/shop2/Public/js/jquery-1.9.1.min.js"></script>
        <script src="/shop2/Public/assets/js/bootstrap.min.js"></script>
		<script src="/shop2/Public/assets/js/typeahead-bs2.min.js"></script>           	
        <script src="/shop2/Public/assets/layer/layer.js" type="text/javascript" ></script>          
        <script src="/shop2/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/shop2/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/shop2/Public/assets/js/ace-elements.min.js"></script>
		<script src="/shop2/Public/assets/js/ace.min.js"></script>
<title>系统设置</title>

</head>

<body>
<div class="margin clearfix">
 <div class="stystems_style">
  <div class="tabbable">
	<ul class="nav nav-tabs" id="myTab">
	  <li class="active">
		<a data-toggle="tab" href="#home"><i class="green fa fa-home bigger-110"></i>&nbsp;基本设置</a></li>
      <li class="">
		<a data-toggle="tab" href="#profile">消息通知<span class="badge badge-danger">4</span></a></li>
      <li class="">
		<a data-toggle="tab" data-toggle="dropdown" class="dropdown-toggle" href="#dropdown">底部菜单</a>
      </li>
        <li class="">
		<a data-toggle="tab" data-toggle="dropdown" class="dropdown-toggle" href="#other">其他设置</a>
      </li>
	</ul>
    <div class="tab-content">
		<div id="home" class="tab-pane active">
        <form action="<?php echo U('Systems/handlerSystemData');?>" method="post" enctype="multipart/form-data" />
        <input type="hidden" name="id" value="<?php echo ($datas['id']); ?>">
         <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>网站名称： </label>
          <div class="col-sm-9"><input type="text" name="title" id="website-title" placeholder="控制在25个字、50个字节以内" value="<?php echo ($datas['title']); ?>" class="col-xs-10 "></div>
          </div>
           <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>网站icon图标： </label>
          <div class="col-sm-9"><input type="file" id="id-input-file-2" name="icon"  value="<?php echo ($datas['icon']); ?>" /></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>关键词： </label>
          <div class="col-sm-9"><input type="text"  name="keywords" placeholder="5个左右,8汉字以内,用英文,隔开"  class="col-xs-10 "  value="<?php echo ($datas['keywords']); ?>"></div>
          </div>
	      <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>文件路径配置： </label>
          <div class="col-sm-9"><input type="text"  name="path" placeholder="默认为空，为相对路径" value="" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>描述： </label>
          <div class="col-sm-9"><input type="text"  name="desc" placeholder="空制在90个汉字，160个字符以内" value="<?php echo ($datas['desc']); ?>" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>底部版权信息： </label>
          <div class="col-sm-9"><input type="text"  placeholder="" value="<?php echo ($datas['copyright']); ?>" name="copyright" class="col-xs-10 "></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>备案号： </label>
          <div class="col-sm-9"><input type="text"  placeholder="" value="<?php echo ($datas['record']); ?>" name="record" class="col-xs-10 "></div>
          </div>
          
          <div class="Button_operation"> 
				<input class="btn btn-primary radius" type="submit"><i class="fa fa-save "></i>&nbsp;保存
				
				<button onclick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
       </form>        
			</div>
        </div>
        <div id="profile" class="tab-pane ">
        
        </div>
        <div id="dropdown" class="tab-pane">
          
		</div>
		<div id="other" class="tab-pane">
		   <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>屏蔽词： </label>
          <div class="col-sm-9"><textarea class="textarea"></textarea></div>          
          </div>
          <div class="Button_operation"> 
				<button onclick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="fa fa-save "></i>&nbsp;保存</button>
				
				<button onclick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
               
			</div>
	    </div>
		</div>
		</div>
 </div>

</div>
</body>
</html>
<script>
$('#id-input-file-2').ace_file_input({
					no_file:'选择上传图标 ...',
					btn_choose:'选择',
					btn_change:'更改',
					droppable:false,
					onchange:null,
					thumbnail:false, //| true | large
					whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
</script>