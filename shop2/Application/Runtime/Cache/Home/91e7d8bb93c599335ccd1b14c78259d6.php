<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
		<title>收藏</title>
		<!--css类引用-->
		<link rel="stylesheet" href="/shop2/Public/css/layui.css" />
		<!-- <link rel="stylesheet" href="css/index.css" /> -->
		<link rel="stylesheet" href="/shop2/Public/css/ShoppingCart.css" />
		<script src="/shop2/Public/js/jquery-1.9.1.min.js"></script> 
    	<script src="/shop2/Public/assets/layer/layer.js" type="text/javascript" ></script>
	</head>
	<body>

		<!--主要内容-->
		<div class="row " id="myVue" v-cloak>
			<div class="col-lg-10 col-lg-offset-1" >
				<div class="layui-form">
					<table class="ShopCartTable layui-table">
						<thead>
							<tr>
								<th class="selectLeft">
									<span class="selectLeftGoods">商品名称</span>
								</th>
								<th>单价</th>
								<th>加入时间</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
						<!-- 循环开始 -->
						<?php if(is_array($data)): foreach($data as $key=>$ov): $id = $ov['goods_id']; $goods = D('goods')->where(['id'=>$id])->field('name,price,pic')->find(); ?>
							<tr>
								<td  class="selectLeft">
									<span class="goodName">
										<img class="goodImg" src="/shop2/Public/Uploads/<?=$goods['pic']?>" />
									</span>
									<span class="goodName goodsName">
										<h2 class="goodname" v-text="tabledatas.name">
											<?=$goods['name']?>
										</h2>
									</span>
								</td>
								<td class="danPrice"><span>￥</span><?=$goods['price']?></td>
								<td>
									<p class="totalPrice"><?php echo ($ov['addtime']); ?></p>
								</td>
								<td class="gongneng">
									<p class="deletegoods" cid="<?php echo ($ov['id']); ?>">移出收藏</p>
								</td>
							</tr><?php endforeach; endif; ?>
							<!-- 循环结束 -->
						</tbody>
						
					</table>
					<div style="text-align:center;"><?php echo ($pageBtn); ?></div>
					
				</div>
			</div>
		</div>
		<!--js类引用-->
		
		<!--  -->
	</body>

</html>
<script type="text/javascript">
	$('.deletegoods').click(function(){
		var obj = $(this);
		var cid = obj.attr('cid');
		layer.confirm('是否移除收藏',{btn:['确定','取消']},
			function(index){
				$.ajax({
					type:'get',
					url:"<?php echo U('Collect/delCollect');?>",
					data:'cid='+cid,
					success:function(msg){
						if (msg['code'] ==1200) {
							layer.msg('删除了',{icon:1,time:800});
							location.reload([true]);
						}else if(msg['code'] ==1404){
							layer.msg(msg['msg'],{icon:1,time:800});
						}
					},
					error:function(msg){
						layer.msg('服务器异常',{icon:1,time:800});
					},
					dataType:'json'
				});	
			});
	});
</script>