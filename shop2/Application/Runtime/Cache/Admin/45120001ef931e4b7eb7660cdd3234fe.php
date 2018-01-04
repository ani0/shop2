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
        <link rel="stylesheet" href="/shop2/Public/font/css/font-awesome.min.css" />
        <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->
        <script src="/shop2/Public/js/jquery-1.9.1.min.js"></script>
        <script src="/shop2/Public/assets/js/bootstrap.min.js"></script>
        <script src="/shop2/Public/assets/js/typeahead-bs2.min.js"></script>               
        <script src="/shop2/Public/assets/js/jquery.dataTables.min.js"></script>
        <script src="/shop2/Public/assets/js/jquery.dataTables.bootstrap.js"></script>
      
     
<title>积分详情</title>
</head>

<body>
<div class="margin clearfix">
 <div class="" id="Other_Management">
 
    <div class="border clearfix">

      
      <a href="<?php echo U('Score/index');?>"  class="btn btn-xs btn-info"><i class="icon-edit bigger-120">返回</i></a>
      
       <span class="r_f">共：<b>2345</b>条</span>
     </div>
     <div class="list_style">
    <table class="table table-striped table-bordered table-hover" id="integration_history_list" width="100%">
     <thead>
         <tr>
                <th width="70">用户id</th>
                <th width="80">用户账号</th>   
                <th width="120">积分详情</th>
                <th width="80">积分变动</th>
                <th width="70">获得时间</th>              
            </tr>
        </thead>
    <tbody>
      <?php if(is_array($data)): foreach($data as $key=>$vv): ?><tr>
      
        <td><?php echo ($vv['uid']); ?></td>
        <td><?php echo ($vv['aname']); ?></td>
        <td><?php echo ($vv['desc']); ?></td>
       
       <td><?php echo ($vv['score']); ?></td>
       <td><?php echo ($vv['addtime']); ?></td>
        </tr><?php endforeach; endif; ?>

    
    </tbody>    
     </table>    
     </div>
     
 </div>
</div>
<!--积分-->
<div id="integration_history" style="display:none; padding:10px;">
  

</div>


</body>
</html>
<script>
jQuery(function($) {
                var oTable1 = $('#sample-table').dataTable( {
                "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
          //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
          {"orderable":false,"aTargets":[0,2,3,6]}// 制定列不参与排序
        ] } );
                
                
                $('table th input:checkbox').on('click' , function(){
                    var that = this;
                    $(this).closest('table').find('tr > td:first-child input:checkbox')
                    .each(function(){
                        this.checked = that.checked;
                        $(this).closest('tr').toggleClass('selected');
                    });
                        
                });
            });
            


/*用户-删除*/
function member_del(obj,id){
    layer.confirm('确认要删除吗？',function(index){
        $(obj).parents("tr").remove();
        layer.msg('已删除!',{icon:1,time:1000});
    });
}





</script>