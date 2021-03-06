<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/respond.min.js"></script>
<script type="text/javascript" src="js/PIE_IE678.js"></script>
<![endif]-->
<link href="/shop2/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/shop2/Public/css/style.css"/>       
<link href="/shop2/Public/assets/css/codemirror.css" rel="stylesheet">
<link rel="stylesheet" href="/shop2/Public/assets/css/ace.min.css" />
<link rel="stylesheet" href="/shop2/Public/Widget/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">
<link rel="stylesheet" href="/shop2/Public/assets/css/font-awesome.min.css" />
<!--[if IE 7]>
      <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
<link href="/shop2/Public/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/shop2/Public/Widget/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<style>
    
    ul{
        margin-left: 30px;
    }

    #outer{
        width:150px;
        height:32px;
        border:1px solid snow;
        line-height:32px;
        margin-bottom: 2px;
        margin-top: 3px;
        background: url(/shop2/Public/myjs/zakladka.png) no-repeat 0px -5px;
        border-radius: 5px;
        cursor:pointer ;
    }

    #xiaoxueID{
        line-height:32px;
        cursor:pointer ;
    }

    #span_display{
      width: 150px;
      height: 32px;
      line-height:32px;
      background-color:snow; 
    }

</style>
<title>修改商品</title>
</head>
<body>
<form action="<?php echo U('Goods/editgoodsDo');?>" method="post" enctype="multipart/form-data" id="shop_form">
<div class="clearfix" id="add_picture">
<div id="scrollsidebar" class="left_Treeview">
    <div class="show_btn" id="rightArrow"><span></span></div>
    <div class="widget-box side_content" >
    <div class="side_title"><a title="隐藏" class="close_btn"><span></span></a></div>
     <div class="side_list">
      <div class="widget-header header-color-green2">
          <h4 class="lighter smaller">选择产品类型</h4>
      </div>

      <div class="widget-body" style="border:1px solid white">
          <div class="widget-main padding-8" id="outerInner">
              
<ul>
<?php foreach ($dataType as $v): ?>

    <li id="outer"><i style="margin-left:60px;"><?=$v['name']?></i></li>
    <div id="showDiv" style="display:none;">
      
      <?php
 $twoTypeData = M('goods_types')->where(['pid' => $v['id']]) ->getField('id, pid, name'); foreach ($twoTypeData as $val) : ?>
      <?php  if (!M('goods_types')->where(['pid' => $val['id']])->getField('id')) { ?>

        <li><i><input class="ace" type="radio" name="shop_type" value="<?=$val['id']?>" class="inputDiv" <?=$value['id']==$info['tid']?'checked':''?>><span class="lbl"><?=$val['name']?></span></i></li>

      <?php } else { $threeTypeData = M('goods_types')->where(['pid' => $val['id']])->getField('id, pid, name'); foreach ($threeTypeData as $value) : ?>
        <li  style="display:block;"><i id="xiaoxueID"><input class="ace" name="shop_type" type="radio" value="<?=$val['id']?>" <?=$value['id']==$info['tid']?'checked':''?>><span class="lbl" id="span_display"><?=$val['name']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;☜</span></i>
            <ul style="display:none;" class="ulClass_display">
                <li style="display:block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="ace" type="radio" name="shop_type" value="<?=$value['id']?>" <?=$value['id']==$info['tid']?'checked':''?>><span class="lbl"><?=$value['name']?></span></li>
            </ul>
        </li>
      <?php endforeach;?>
      <?php }?>
      <?php endforeach;?>
    </div>
<?php endforeach ?>
</ul>
          </div>
  </div>
  </div>
  </div>  
  </div>
   <div class="page_right_style">
   <div class="type_title">修改商品</div>
  <div id="form-article-add" style="height:100%;">
    <div class="clearfix cl">
         <label class="form-label col-2">简略标题：</label>
       &nbsp;&nbsp;<input type="text" value="<?php echo ($info["name"]); ?>" placeholder="" id="shop_name" name="shop_name" style="width:400px;">
    </div>

    <div class="clearfix cl">
             <label class="form-label col-2">品&nbsp;&nbsp;&nbsp;&nbsp;牌：</label>  
       <div class="formControls col-2">
          <select class="input-text" value="" placeholder="" id="shop_brand" name="shop_brand">
       
              <option value="">--请选择品牌--</option>
              <?php if(is_array($data)): foreach($data as $key=>$ov): ?><option value="<?php echo ($ov["id"]); ?>" <?php if($ov["id"] == $info[bid]): ?>selected<?php endif; ?>><?php echo ($ov["name"]); ?></option><?php endforeach; endif; ?>

           </select> 
       </div>
    </div>

    <div class="clearfix cl">
         <label class="form-label col-2">展示价格：</label>
       &nbsp;&nbsp;<input type="number" value="<?php echo ($info['price']); ?>" id="price" name="price" style="width:122px">&nbsp;&nbsp;元
    </div>

    <div class="clearfix cl">
      <label class="form-label col-2">图片上传：</label>
       <input type="file" id="file_upload" name="pic[]" multiple="multiple"/>
     <!-- <input type='file'  name='photo1'><input type='file'  name='photo2'><input type='file'  name='photo3'> -->
    </div>

    <div class="clearfix cl">
        <label class="form-label col-2">状态：</label> 
        &nbsp;&nbsp;
        <label>
            <input name="status" type="radio" class="ace" checked="checked" value="1">
            <span class="lbl">新添加</span>
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>
            <input type="radio" class="ace" name="status" value="2" <?=$info['status']==2?'checked':'';?> />
            <span class="lbl">在售中</span>
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>
            <input type="radio" class="ace" name="status" value="3" <?=$info['status']==3?'checked':'';?> />
            <span class="lbl">已下架</span>
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
        <label>
            <input type="radio" class="ace" name="status" value="4" <?=$info['status']==4?'checked':'';?> />
            <span class="lbl">促销状态</span>
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div class="clearfix cl">
        <label class="form-label col-2">积&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;分：</label> 
        &nbsp;
        <label>
            <input name="sorce" type="number" min="0" class="ace" value="<?php echo ($info['sorce']); ?>">
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="clearfix cl">
        <label class="form-label col-2">促销时间：</label> 
        &nbsp;
        <label>
            <input name="saletime" type="datetime-local" min="0" class="ace">
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">

    <div class="clearfix cl">
      <div class="Button_operation">
        <button class="btn btn-primary radius" type="button" id="submit"><i class="icon-save"></i>保存</button>
        <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
      </div>
    </div>
  </div>  
</div>
</form>
<script src="/shop2/Public/js/jquery-1.9.1.min.js"></script>   
<script src="/shop2/Public/assets/js/bootstrap.min.js"></script>
<script src="/shop2/Public/js/lrtk.js" type="text/javascript" ></script>
<script src="/shop2/Public/assets/layer/layer.js" type="text/javascript" ></script>
<script src="/shop2/Public/assets/laydate/laydate.js" type="text/javascript"></script>

<script>
$(function() { 
  $("#add_picture").fix({
    float : 'left',
    skin : 'green', 
    durationTime :false,
    stylewidth:'220',
    spacingw:0,
    spacingh:260,
  });
});
$( document).ready(function(){
//初始化宽度、高度
  
   $(".widget-box").height($(window).height()); 
   $(".page_right_style").height($(window).height()); 
   $(".page_right_style").width($(window).width()-220); 
  //当文档窗口发生改变时 触发  
    $(window).resize(function(){

   $(".widget-box").height($(window).height()); 
   $(".page_right_style").height($(window).height()); 
   $(".page_right_style").width($(window).width()-220); 
  }); 
});
function layer_close(){
  window.history.back();
}
// console.log($('#shop_brand').val());
if ($('#shop_type').val()) {
  $('#shop_type_show').val($('#shop_type option:selected').text());
}

$('#shop_type').change(function (){
  // console.log($('#shop_type_show').val());
  // console.log($('#shop_type option:selected').text());
  $('#shop_type_show').val($('#shop_type option:selected').text());
});
$('#submit').click(function(){

  // window.location.href="<?php echo U('Goods/index');?>";
  // console.log('点击提交');
  // layer.confirm('请填写价格');
  
  // // $('#shop_form')[0].reset();
  // console.log($('#shop_name').val());
  // return false;
  if (!$('#shop_name').val()) {
    layer.confirm('请填写商品名');
    return false;
  }
  if(!$('#shop_brand').val()){
    layer.confirm('请选择品牌');
    return false;
  }

  var bFlag = false;
  var redioNum = $("input[name='shop_type']").attr("checked", true);
  for (var i = 0; i < redioNum.length; i++) {
      if (redioNum[i].checked) {
        bFlag = true;
        console.log(redioNum[i]);
        break;
      }
  }
  // return false;
  if(!$('#price').val()){
    layer.confirm('请填写价格');
    return false;
  }
  // var excel_file = $("#file_upload").val();
  // if (excel_file == "" || excel_file.length == 0) {  
  //       layer.confirm('请选择图片');
  //       return false;
  // }
  var form = new FormData(document.getElementById("shop_form"));
  // console.log(form);
   $.ajax({
      url:"<?php echo U('Goods/editGoods');?>",
      type:"post",
      data:form,
      processData:false,
      contentType:false,
      success:function(data,textStatus,jqXHR){
          // console.log('ok');
          console.log(data);
          if (data['code'] == 1200) {
             layer.confirm('修改成功',
            function(){
              // console.log("<?php echo U('Goods/index');?>");
              window.location.href="<?php echo U('Goods/index');?>";
            }
            );
          }else{
            layer.confirm(data['msg']);
          }
      },
      error:function(e,textStatus){
          alert("错误！！");
          console.log(textStatus);
          console.log(e);
          // window.clearInterval(timer);
      },
      dataType:'json'
  });

});

$('li').click(function () {

    $(this).siblings('div').css('display', 'none');
    $(this).next().css('display', 'block');
})


$('i').click(function () {

    $(this).parent().siblings().children('ul').css('display', 'none');
    $(this).next().css('display', 'block');
})

// $('#outerInner').mouseleave(function () {

//     $(this).find("div").css('display', 'none');
//     $('#outerInner').find('.ulClass_display').css('display', 'none');
// })

</script>
</body>
</html>