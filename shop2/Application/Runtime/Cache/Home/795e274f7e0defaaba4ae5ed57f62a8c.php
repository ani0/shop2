<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <script type="text/javascript">
        window.__trace__headstart = +new Date;
        window.__server__startTime = 1471485158459;
        window.__token = "F7+quQ9AoCjMKdEwP3nXR0ldMZf4/elGZlcOXcMBKM4=";
    </script>
    <script type="text/javascript" src="/shop2/Public/myjs/js/jquery.js"></script>
    <script src="/shop2/Public/assets/layer/layer.js" type="text/javascript" ></script>
    <script src="/shop2/Public/assets/laydate/laydate.js" type="text/javascript"></script>


    <meta charset="UTF-8"/>


    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title><?php echo ($datas['title']); ?></title>
    <meta name="keywords" content="<?php echo ($datas['keywords']); ?>"/>
    <meta name="description" content="<?php echo ($datas['desc']); ?>"/>
    <meta name="copyright" content="meilishuo.com"/>

    <link rel="alternate" href="http://m.mogujie.com/x6/detail/1fxighu">
    <meta name="mobile-agent" content="format=html5;url=http://m.mogujie.com/x6/detail/1fxighu">


    <link rel="canonical" href="http://shop.mogujie.com/detail/1fxighu"/>

    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml"/>
    <link rel="icon" href="http://s16.mogucdn.com/p1/160614/idid_ifrtgzddgm3dmnjshezdambqhayde_49x48.png" type="image/x-icon"/>

    <script> curl = {apiName: 'require'}; var MOGU = {}; var MoGu = {};</script>



    <link href="/shop2/Public/Home/css/index.css-2435ceae.css" rel="stylesheet" type="text/css"/>



    <link href="/shop2/Public/Home/__newtown/detail_mls/assets/mls-pc/pages/normal/index.css-449eac8d.css" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="/shop2/Public/Home/js/pkg-pc-base.js-beb518b8.js"></script>



    <link rel="stylesheet" type="text/css" href="/shop2/Public/Home/pc/css/base.css?1607170150.25" />
    <link rel="icon" href="/shop2/Public/Home/pic/_o/75/6e/2f6871f198c0bd7615ffbf9a2f5f_49_48.c5.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/shop2/Public/Home/pc/css/page/welcome.css?1607170150.25" />



    <script type="text/javascript">

        var MOGU_DEV= 0;

        if(window.require) {
            require.config({
                domain: 0
            });
        }

        MOGUPROFILE = {};

        //性能打点数据检测
        window.__trace__headendt = +new Date;
        (function(){
            window.__trace__domready = null;
            window.__trace__ladingendt = null;
            if(document.readyState){
                function setDomOperation(){
                    if(document.readyState == 'interactive'){
                        window.__trace__domready = +new Date();
                    }
                    else if(document.readyState == 'complete'){
                        window.__trace__ladingendt = +new Date();
                    }
                }
                setDomOperation();
                document.onreadystatechange = setDomOperation;
            }
        })();
    </script>
</head>
<body>

<script type="text/javascript">
    /**
     ** for layout 960
     **/
    (function(){
        var wWidth = $(window).width(); if(wWidth < 1212){ $('body').addClass('media_screen_960'); } else { $('body').addClass('media_screen_1200'); }
        //initTime for log 判断对象是否存在
        window.MoGu && $.isFunction(MoGu.set) && MoGu.set('initTime', (new Date()).getTime());

        var ua = navigator.userAgent;
        // 判断是否是ipad
        var is_plat_ipad = ua.match(/(iPad).*OS\s([\d_]+)/);
        if(is_plat_ipad) {
            $('body').addClass('media_ipad');
        }
        // 判断是否是ipadApp
        var is_plat_ipadApp = ua.indexOf('MeilishuoHD') >= 0 || location.href.indexOf('_atype=ipad') >= 0;
        if(is_plat_ipadApp) {
            $('body').addClass('media_ipad_app');
            // 隐藏头尾
            $('body').append('<style type="text/css">.header_2015,.header_nav,.foot .foot_wrap{display: none;}.foot{height: 0;background: none;}.back2top_wrap{height:0;width:0;overflow:hidden;opacity:0;}</style>');
            // 移除购物车，返回顶部
            setTimeout(function(){
                $('.back2top_wrap').remove();
            },1000)
        }
    })();
</script>

<div class="head">
    <!-- 头标签 -->

<?php
 if (@$logout) { $url = '/shop2/Home/Login'; }else{ $url = '/shop2/Home/Person'; } ?>
<div id="com-topbar">
  <div class="inner">
    <ul>
      <li class="drop" style="float:left">
              <a href="<?php echo U('Index/index');?>" >
                <em class="home"></em>美丽说首页</a>
           
      </li>
      <li class="drop">
        <a href="<?=$url?>" class="nick" target="_blank">
        
           <?php if(empty($picc)): ?><img class="face" src="/shop2/Public/Home/new1/v1/bdefaultavatar//03.jpg" />
            <?php else: ?>
            <img class="face" src="/shop2/Public/Uploads/<?php echo ($picc); ?>"><?php endif; ?>
          <?php if((@$logout == 1)): ?>请登录
            <?php else: ?>
         <?php echo ($account); endif; ?>
          <em class="arrow"></em></a>
        <ul class="down account">
          <li>
            <a href="<?=$url?>">账号与安全</a></li>
          <li>
            <a href="javascript:;" onclick="setLogout()" <?=@$logout?'style="display:none"':''?>>退出</a></li>
        </ul>
      </li>
      <li class="drop">
              <a href="<?php echo U('Register/index');?>" >
                注册</a>
           
      </li>
      <li class="drop">
        <a href="<?php echo U('Collect/index');?>" target="_blank">
          <em class="collect"></em>我的收藏</a>
        <!-- <ul class="down">
          <li>
            <a href="mylike.html" target="_blank">收藏宝贝</a></li>
          <li>
            <a href="mylikestore.html" target="_blank">收藏店铺</a></li>
        </ul> -->
      </li>
      <li class="drop cart-wrapper">
        <a target="_blank" href="<?php echo U('Cart/showMyCartView');?>" >
          <em class="cart"></em>我的购物车</a>
        <div class="hidden">
          <ul class="cart-goods"></ul>
          <p class="cart-account">
            <span>购物车里还有
              <a class="num" href="<?php echo U('Cart/showMyCartView');?>" target="_blank"></a>件商品</span>
            <a class="check-cart" href="<?php echo U('Cart/showMyCartView');?>" target="_blank">查看购物车</a></p>
        </div>
      </li>
     
    </ul>
  </div>
</div>
<script type="text/javascript">
  
    function setLogout(){
      console.log('行不行');
      $.ajax({
          type:'post',
          url:"<?php echo U('Login/logout');?>",
          data:'logout=1',
          success:function(msg){
            console.log(msg);
              if (msg['code'] == 1200) {
                  // location.reload([true]);
                 window.location.href="<?php echo U('Index/index');?>";
                  // console.log('注销没');
              }
          },
          error:function(msg){
              layer.confirm('访问服务器失败.');
          },
          dataType:'json'
      });
    }
    

</script>
    <!--  -->
 

   <!--  <img src="/shop2/Public/Home/jls.png" id="viva" style="position:absolute;top:200px;right:40px;cursor:pointer;width:83px;height:112px;z-index:232"> -->
    <!--  -->
            <!-- 搜索 -->
        <div id="com-search">
            <div class="inner">
                <a href="<?php echo U('Index/index');?>" class="logo">
                    <img src="/shop2/Public/Uploads/<?php echo ($datas['icon']); ?>" alt="" width="204px" height="52px">
                </a>
                <a href="" class="sublogo"></a>
                <div class="search">
                     <div class="search-tab">
                        <span class="active">宝贝</span>
                    </div>
                    <div class="search-box">
                        <form action="<?php echo U('List/index');?>" method="get">
                        <input type="text" class="search-txt"  name="keyword">
                        <button   class="search-btn" style="border:0"></button>
                
                        </form>
                        <div class="suggest-box"></div>
                    </div>
                    <div class="hotwords">
                       <?php  vendor('xunsearch.lib.XS'); $xs = new \XS('shop2'); $sObj = $xs->search; $hot = $sObj->getHotQuery(6,'currnum'); arsort($hot); foreach($hot as $k=>$v) { ?>

                    <a href="<?php echo U('List/index',array('keyword'=>$k));?>" style="color:#ff3366"><?php echo ($k); ?></a>
                
   
            <?php }?>    


                    </div>
                </div>


                <a class="spread" href="" target="_blank">
                      <embed src="/shop2/Public/Home/img/honehone_clock_wh.swf" style=" height:58px; width:155px;position:absolute;left:1023px; top:27px"></embed>
                </a>
            </div>
        </div>
<div style="border:0.7px solid #FF3366"></div>

<div id="body_wrap">


    <input type='hidden' id='shopid' value='110fni1q'>
    <input type="hidden" id="J_ShopId" value="110fni1q">
    <input type="hidden" id="J_PageType" value="item">
    <input type='hidden' id='iteminfoid' value='1fxighu'>
    <input type="hidden" id="J_ItemId" value="1fxighu">
    <input type="hidden" id="J_RushId" value="">
    <input type='hidden' id='sellerId' value='115knefy'>
    <input type="hidden" id="J_SellerId" value="115knefy">
    <input type='hidden' id='J_DetailRefer' value='shop.html110fni1q/index/total?ptp=1.CmymMoKw.0.0.Bffk4'>
    <input type="hidden" id="J_CartLuckyDrawData" data-istimerange="true">


    <div class="shop-detail">
        <div class="detail-primary clearfix">
            <div class="primary-goods">
                <div class="clearfix">
                    <div class="fl goods-info goods-info-tuan-pre" id="J_GoodsInfo">
                        <div class="info-box">
                            <input id="myself" type="hidden" name="id" value="<?php echo ($goodsBaseData["id"]); ?>">
                            <br>
                            <br>
                            <h1 class="goods-title"><span itemprop="name"><?php echo ($goodsBaseData["name"]); ?></span></h1>

                            <div class="goods-prowrap goods-main">
                                <div class="clearfix main-box">
                                    <dl class="clearfix property-box">
                                        <dt class="property-type property-type-origin">价格：</dt>
                                        <dd class="property-cont property-cont-origin">
                                            <span id="J_OriginPrice" class="price">¥213.00</span>
                                        </dd>
                                    </dl>
                                    <dl class="clearfix property-box">
                                        <dt class="property-type property-type-now" > 现价 ：</dt>
                                        <dd class="property-cont property-cont-now fl">
                                            <span id="J_NowPrice" class="price" style="color: #333333" title="<?php echo ($goodsBaseData["price"]); ?>">¥</span>
                                            <!-- <em class="pre-price-desc">（特卖价 ¥110.97）</em> -->
                                        </dd>
                                        <dd class="property-extra fr">
                                            <span>累计销量：<span class="num J_SaleNum"><?php echo ($goodsBaseData["buynum"]); ?></span></span>
                                        </dd>
                                    </dl>

                                    <div id="J_ModulePromotions"></div>
                                </div>
                            </div>
                            <div class="goods-prowrap goods-im">
                                <dl class="clearfix">
                                    <dt>客服：</dt>
                                    <dd>
                                        <div class="mlstalk_widget_btn" data-shopid="110fni1q" style="cursor:pointer" data-style="default" data-toid="1256898643" data-tid="4170704471">联系客服</div>
                                    </dd>
                                </dl>
                            </div>

                            <div class="goods-prowrap goods-sku" id="J_GoodsSku">
                                <div class="content">
                                    <div class="pannel-title">
                                        <span class="choose-goods-info">选择商品信息</span>
                                        <b class="J_PannelClose pannel-close"></b>
                                    </div>
                                    <div class="box momo">
                                        <dl class="clearfix" >
                                            <dt>颜色：</dt>
                                            <dd>
                                               <ol class="J_StyleList style-list clearfix">
                                                <?php foreach ($color as $k=>$v) { ?>
                                                    <li data-id="1" data-src="" title="<?php echo ($v); ?>" key="<?php echo ($k); ?>"><?php echo ($v); ?></li>
                                                <?php } ?>   
                                                </ol>
                                            </dd>
                                        </dl>

                                        <dl class="clearfix">
                                            <dt>尺码：</dt>
                                            <dd>
                                                <ol class="J_SizeList size-list clearfix">
                                                <?php foreach ($size as $k=>$v) { ?>
                                                    <li class="" data-id="100" title="<?php echo ($v); ?>"><?php echo ($v); ?></li>
                                                <?php } ?>
                                                </ol>
                                            </dd>
                                        </dl>

                                        <dl class="clearfix">
                                            <dt>数量：</dt>
                                            <dd class="num clearfix">
                                                <div id="J_GoodsNum" class="goods-num fl">
                                                    <span class="num-reduce num-disable"></span>
                                                    <input class="num-input" type="text" value="1" >
                                                    <span class="num-add "></span>
                                                </div>
                                                <div class="J_GoodsStock goods-stock fl"></div>
                                               <!--  <div class="J_GoodsStockTip goods-stock-tip fl" style="display:none">您所填写的商品数量超过库存！</div> -->
                                            </dd>
                                        </dl>
                                    </div>
                                    
                                    <div class="pannel-action" style="display:block;">
                                        <a href="javascript:;" class="J_PannelOK pannel-ok"></a>
                                    </div>
                                </div>

                                <div class="goods-buy clearfix">
                                    <a href="javascript:;"class="fl mr10 buy-btn buy-now">立刻购买</a>
                                    <input type="hidden" value="nodapei" id="dapeiShow">
                                    <a href="javascript:;"  class="fl mr10 buy-cart buy-btn">加入购物车</a>
                                </div>
                            </div>
                            <div class="goods-social clearfix">
                                <div class="item"><b></b><span class="fav-num">收藏</span></div>
                                    <div class="share-w clearfix">

                                        <a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=shopdetail.html#?1fxighu&amp;title=又有一款充满仙气的裙子贡献给菇凉们了~这款裙裙是采用雪纺面料的，亲自试穿过，面料特别舒服，清清凉凉的，然后有里衬，也不会透，夏日穿特别合适！荷叶袖的设计，手臂有肉肉的菇凉也不用担心了~&amp;pics=http://d01.res.meilishuo.net/pic/_o/56/20/136f8f7eff1a84578d1ef245015e_640_832.c1.jpg_468x468.jpg" class="forqzone" title="关注QQ空间" rel="nofollow"></a>
                                        <a target="_blank" href="http://widget.renren.com/dialog/share?resourceUrl=shopdetail.html#?1fxighu&amp;title=又有一款充满仙气的裙子贡献给菇凉们了~这款裙裙是采用雪纺面料的，亲自试穿过，面料特别舒服，清清凉凉的，然后有里衬，也不会透，夏日穿特别合适！荷叶袖的设计，手臂有肉肉的菇凉也不用担心了~&thumbnail_url=http://d01.res.meilishuo.net/pic/_o/56/20/136f8f7eff1a84578d1ef245015e_640_832.c1.jpg_468x468.jpg" class="forrenren" title="关注人人" rel="nofollow"></a>
                                        <a target="_blank" href="http://service.weibo.com/share/share.php?url=shopdetail.html#?1fxighu&amp;title=又有一款充满仙气的裙子贡献给菇凉们了~这款裙裙是采用雪纺面料的，亲自试穿过，面料特别舒服，清清凉凉的，然后有里衬，也不会透，夏日穿特别合适！荷叶袖的设计，手臂有肉肉的菇凉也不用担心了~&amp;pic=http://d01.res.meilishuo.net/pic/_o/56/20/136f8f7eff1a84578d1ef245015e_640_832.c1.jpg_468x468.jpg" class="forsina" title="关注sina" rel="nofollow"></a>
                                        <a target="_blank" href="http://v.t.qq.com/share/share.php?url=shopdetail.html#?1fxighu&amp;title=又有一款充满仙气的裙子贡献给菇凉们了~这款裙裙是采用雪纺面料的，亲自试穿过，面料特别舒服，清清凉凉的，然后有里衬，也不会透，夏日穿特别合适！荷叶袖的设计，手臂有肉肉的菇凉也不用担心了~&amp;pic=http://d01.res.meilishuo.net/pic/_o/56/20/136f8f7eff1a84578d1ef245015e_640_832.c1.jpg_468x468.jpg" class="forweixin" title="关注腾讯微博" rel="nofollow"></a>
                                    </div>
                                </div>

                            <div class="goods-extra clearfix">

                                <div class="extra-services">
                                    <div class="fl clearfix label">服务承诺：</div>
                                    <ul class="fl clearfix list">
                                        <li class="item">
                                            <span class="link">
                                                <img src="http://s2.mogucdn.com/p1/150923/upload_ieztcoldmvsdmztdgmzdambqgyyde_24x24.png" width="24" height="24">
                                                退货补运费
                                            </span>
                                        </li>
                                        <li class="item">
                                            <span class="link">
                                                <img src="http://s2.mogucdn.com/p1/150923/upload_ieywiobrmfsdmztdgmzdambqmeyde_24x24.png" width="24" height="24">
                                                7天无理由退货
                                            </span>
                                        </li>
                                        <li class="item">
                                            <span class="link">
                                                <img src="http://s2.mogucdn.com/p1/160618/upload_ie4dqzjrmqzdoojthezdambqgiyde_24x27.png" width="24" height="24">
                                                先行赔付
                                            </span>
                                        </li>
                                        <li class="item">
                                            <span class="link">
                                                <img src="http://s2.mogucdn.com/p1/150923/upload_iezgeolcmnsdmztdgmzdambqmmyde_24x24.png" width="24" height="24">
                                                72小时发货
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="extra-pay">
                                    <div class="fl clearfix label">支付方式：</div>
                                    <div class="fl list list-nomaibei"></div>
                                </div>
                            </div>    </div>
                    </div>
                    <div class="fl goods-topimg" id="J_GoodsImg">

                        <div class="big-img">
                            <button class="middle">
                                <img id="J_BigImg" src="/shop2/Public/Uploads/<?php echo ($goodsBaseData['pic']); ?>" data-main="/shop2/Public/Uploads/<?php echo ($goodsBaseData["pic"]); ?>" alt="雪纺裙,收腰,淑女,夏季新品,系带" style="height:520px;width:400px;">
                            </button>
                            </div>              
    
                        <div id="J_SmallImgs" class="small-img">
                            <div class="box">
                                <div class="list" style="width:300px;height:100px;">
                                    <ul class="clearfix">
                                </div>
                            </div>
                            <a class="left-btn arrow-btn" href="javascript:;"></a>
                            <a class="right-btn arrow-btn" href="javascript:;"></a>
                        </div>
                    </div>        </div>
            </div>

            <div class="primary-slide">
                <div class="goods-recommend" id="J_ModuleLook" data-ptp="_rechot"></div>
            </div>
        </div>
        <div class="detail-content ">

            <!-- 顶部 -->
            <div class="col-top">
                <!-- 搭配购 -->
                <div class="module-dapei" id="J_ModuleDapei"></div>
            </div>

            <!-- 主体 -->
            <div class="col-main">

                <!-- 模块标签页 -->
                <div class="module-tabpanel" id="J_ModuleTabpanel">

                    <!-- 选项栏 -->
                    <div class="tabbar-box">
                        <ul class="tabbar-list clearfix">
                            <li data-panels="graphic,recommend" data-hasnav="true" class="tab-graphic selected" >
                                <a href="javascript:;">商品详情</a>
                            </li>
                            <li data-panels="rates" data-hasnav="false">
                                <a id="aa">累计评价<em></em></a>
                            </li>
                            <li data-panels="recommend" data-hasnav="false">
                                <a href="javascript:;">本店同类商品</a>
                            </li>
                            <li class="qrcode">
                                <div class="qrcode-togger">手机扫码下单<!-- <br />快捷支付立减五元 --></div>
                                <div class="qrcode-pic">
                                    <!-- <img src="http://shop.mogujie.com/qrcode/16qub6k"> -->
                                </div>
                                <i class="qrcode-mini"></i>
                                <i class="qrcode-arrow"></i>
                            </li>
                        </ul>
                    </div>
                    <!--给评价绑定点击事件-->
                    <script>
                        $('#aa').click(function (){
                            var gid = $('#myself').val();
                            $('#J_RatesBuyerList').attr('style','display:block');                            
                            $.post(
                                '<?php echo U("Goods/handlerAjaxComment");?>',
                                 {'gid':gid},
                                 function (msg) {
                                    $('#abc').remove();
                                    if (msg.code == 1200) {
                                        var ulStr = '<span id="abc">';
                                        for (var i=0; i<msg.data.length; i++) {
                                            var res = msg.data[i].content1;
                                            console.log(res);
                                            ulStr +=   '<div class="item clearfix"><div class="info"><div class="info-w"><div class="info-t clearfix"><span class="name">'+msg.data[i].account+'</span><span class="date">'+msg.data[i].time+'</span></div><div class="info-m">'+msg.data[i].content+'</div><div class="info-b clearfix"><span>颜色:'+msg.data[i].color+'</span><span>尺码:'+msg.data[i].size+'</span></div><div class="info-b clearfix"></div> <div class="info-k show-img"><ul class="list clearfix"><li><div class="img-box"><span><img src="http://s15.mogucdn.com/mlcdn/917393/171104_269296048d17ikf0g281625jck8ji_750x880.jpg_100x100.jpg" width="40"></span></div></li></ul><div class="big-img"><div class="img-box"><span><img src="about:blank" height="400"></span></div></div></div></div></div><div class="face"><img src="http://s3.mogucdn.com/p2/161214/103488673_0l1ff9kf2hbc32fe4a2g05l77d89d_140x140.png_64x64.jpg"></div></div>';
                                            if (res) {
                                                // $('#J_RatesBuyerList').after('<div style="margin-left:60px;">商家回复：'+msg.data[i].content1+'</div>');
                                                ulStr += '<div style="margin-left:60px;">商家回复：'+msg.data[i].content1+'</div><br>';
                                            }
                                        }
                                        ulStr +='</span>';
                                        $('#J_RatesBuyerList').append(ulStr);


                                    } else {
                                        //没有拿到数据 
                                    }
                                },
                                'json',

                            );
                        });
                    </script>
                    <div class="tabbar-bg ui-hide">
                        <div class="bg-right"></div>
                        <div class="bg-left"></div>
                    </div>
                    <div class="tabbar-occupying ui-hide"></div>

                    <!-- 选项页 -->
                    <div class="panel-box">

                        <!-- 图文详情 -->
                        <div class="module-panel module-graphic" id="J_ModuleGraphic">
                    
                        </div>

                        <!-- 累计评价 -->
                        <div class="module-panel module-rates ui-none" id="J_ModuleRates">
                             <!-- 买家评价 -->
                            <div id="J_RatesBuyer">
                                <div class="panel-title rates-title">
                                    <h1>买家评价</h1>
                                </div>
                                <!-- 买家评价 -->
                                <div class="rates-buyer">

                                    <div class="comment-content">
                                            
                                        <div class="tags clearfix">
                                            <div class="list  open ">

                                            </div>

                                        </div>


                                        <!-- 导航 -->
                                        <div class="nav clearfix">
                                        </div>

                                        <!-- 列表 -->
                                        <div id="J_RatesBuyerList" class="comments">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                            <!-- 成交记录 -->
                            <div id="J_RatesOrder">
                                <div class="panel-title rates-title">
                                    <h1>成交记录</h1>
                                </div>
                                <!-- 成交记录 -->
                                <div class="rates-order">
                                    <!-- 列表 -->
                                    <div class="sale-list" id="J_RatesOrderList"></div>
                                </div>
                            </div>
                        </div>

                        <!-- 本店同类商品 -->
                        <div class="module-panel module-recommend" id="J_ModuleRecommend"></div>
                    </div>
                </div>
            </div>

            <!-- 侧边栏 -->
            <!-- <div class="col-sidebar">
 -->
                <!-- 店铺模块 -->
                <!-- <div class="module-shop" id="J_ModuleShop"> -->
                    <!-- 店铺信息 -->
                    <!-- <div class="ui-box shop-info">
                        <h3 class="ui-hd shop-hd">
                            <div class="shop-name">
                                <a class="text text-hasim" href="shop.html#110fni1q">爱丽缇旗舰店
                                </a>
                                <div class="mlstalk_widget_btn" data-shopid="110fni1q" style="cursor:pointer; width:1px; margin-top:22px;line-height:16px;" data-style="default" data-toid="1256898643" data-tid="4170704471">&nbsp;</div> 
                            </div>
                        </h3>
                        <div class="shop-occupying ui-hide"></div>
                        <div class="ui-bd">

                            <div class="shop-evaluate">
                                <ul>
                                    <li>
                                        <p class="text">描述</p>
                                        <p class="num-def  num-low ">4.76</p>
                                    </li>
                                    <li>
                                        <p class="text">价格</p>
                                        <p class="num-def  num-low ">4.77</p>
                                    </li>
                                    <li>
                                        <p class="text">质量</p>
                                        <p class="num-def ">4.77</p>
                                    </li>
                                    <li>
                                        <p class="text">服务</p>
                                        <p class="num-def  num-low ">4.77</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="shop-btns">
                                <a rel="nofollow" class="J-shop-follow shop-follow  btn-faved shop-followed " href="javascript:;" data-shopid="110fni1q">
                                    已收藏                         </a>
                                <a class="btn-goto" href="shop.html#110fni1q">进入店铺</a>
                            </div>

                            <div class="shop-search">
                                <i class="line"></i>
                                <form action="shop.html#110fni1q/search/index" method="get" id="J_ShopSearch">
                                    <input class="inptxt" type="text" name="q">
                                    <input class="inpbtn" type="submit" value="店内搜索">
                                </form>
                            </div>

                            <div class="shop-provide">
                                <i class="line"></i>
                                <i class="arrow"></i>
                                <a class="pic" href="javascript:;">
                                    <img class="img-lazyload" width="150" height="26" src="http://s11.mogucdn.com/p1/150914/upload_ie2dsmbsmyydcmtbgmzdambqgiyde_150x26.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- 分类模块 -->
                <!-- <div class="module-classify" id="J_ModuleClassify"> -->
                    <!-- 分类信息 -->
                    <!-- <div class="ui-box classify-info">
                        <h3 class="ui-hd">本店分类</h3>
                        <div class="ui-bd"> -->

                            <!-- 列表 -->
                            <!-- <ul class="classify-list">
                                <li>
                                    <a href="shop.html#110fni1q/index/total">全部商品</a>
                                </li>
                                <li>
                                    <a href="shop.html#110fni1q/list/index?categoryId=10702384">热卖单品</a>
                                </li>
                                <li>
                                    <a href="shop.html#110fni1q/list/index?categoryId=10724128">连衣裙</a>
                                </li>
                                <li>
                                    <a href="shop.html#110fni1q/list/index?categoryId=10725286">特惠专区</a>
                                </li>
                                <li>
                                    <a href="shop.html#110fni1q/list/index?categoryId=10845418">T恤衫</a>
                                </li>
                                <li>
                                    <a href="shop.html#110fni1q/list/index?categoryId=10849048">时尚套装/搭配</a>
                                </li>
                                <li>
                                    <a href="shop.html#110fni1q/list/index?categoryId=10849050">蕾丝/针织衫</a>
                                </li>
                                <li>
                                    <a href="shop.html#110fni1q/list/index?categoryId=20028214">半身裙/裤装</a>
                                </li>
                                <li>
                                    <a href="shop.html#110fni1q/list/index?categoryId=20064593">外套专区</a>
                                </li>
                                <li>
                                    <a href="shop.html#110fni1q/list/index?categoryId=20064594">初秋新品</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <!-- 看了又看模块 -->
                <!-- <div class="module-repeat" id="J_ModuleRepeat"></div>
            </div>
 -->
            <!-- 扩展栏 -->
           <!--  <div class="col-extra">
                <i class="bor-line bor-r"></i>
                <i class="bor-line bor-b"></i>
                <i class="bor-line bor-l"></i> -->

                <!-- 购物车模块 -->
               <!--  <div class="module-cart" id="J_ModuleCart">
                    <div class="ui-box cart-info">
                        <div class="ui-hd cart-hd">
                            <a class="cart-name" href="javascript:;">
                                <span><i></i>加入购物车</span>
                            </a>
                        </div>
                        <div class="cart-occupying ui-hide"></div>
                    </div>
                </div> -->


                <!-- 右侧子导航模块 -->
                <!-- <div class="module-extranav" id="J_ModuleExtranav"> -->
                    <!-- 主体 -->
                   <!--  <div class="extranav-bd"></div>
                </div>
            </div>
        </div>

    </div> -->

  <div id="com-foot">
        <div class="inner">
            <div class="flist"> 
                <h4>买家帮助</h4>
                <div><a href="noviceGuide.html" target="_blank">新手指南</a></div>
                <div><a href="serviceEnsure.html" target="_blank">服务保障</a></div>
                <div><a href="helpCommon.html" target="_blank">常见问题</a></div>
                <div><a href="shoppingHelp.html" target="_blank">购物帮助</a></div>
            </div>
            <div class="flist">
                <h4>商家帮助</h4>
                <div><a href="#/business" target="_blank">商家入驻</a></div>
                <div><a href="#" target="_blank">商家后台</a></div>
                <div><a href="#" target="_blank">商家推广</a></div>
            </div>
            <div class="flist">
                <h4>关于我们</h4>
                <div><a href="aboutus.html" target="_blank">关于美丽说</a></div>
                <div><a href="contactus.html" target="_blank">联系我们</a></div>
            </div>
            <div class="flist aboutus">
                <h4>关注我们</h4>
                <div>
                    <a href="#" target="_blank">
                        <span class="i-sina"></span>新浪微博
                        <div class="follow">一键关注新浪微博
                          <wb:follow-button uid="1718455577" type="red_1" width="67" height="24"></wb:follow-button></div>
                    </a>
                </div>
                <div>
                    <a href="#" target="_blank">
                    <span class="i-qzone"></span>QQ空间</a>
                </div>
                <div>
                    <a href="#" target="_blank">
                    <span class="i-tencent"></span>腾讯微博</a>
                </div>
            </div>
            <div class="flist service">
                <h4>美丽说微信服务号</h4>
                <img class="qrcode" src="http://s7.mogucdn.com/p2/160802/7e_61hjl8kjfjfagkg3cdaj05fghck9c_100x100.png" alt="美丽说服务号二维码" />
            </div>
            <div class="flist last" style="float:left;">
                <h4>美丽说客户端下载</h4>
                <p style="background:none; margin-top:0px;" class="client">
                    <img class="qrcode" src="/shop2/Public/Home/p2/160802/7e_74j23d2a5f5j3bj31h70375gbeec1_100x100.png">
                </p>
            </div>
            <div class="record"><?php echo ($datas['copyright']); ?>&nbsp;
                <a href="http://s16.mogucdn.com/new1/v1/bmisc/518ea1bbd36948b90e658485d2700e62/181714310539.pdf" target="_blank">电信与信息服务业务经营许可证100798号</a>&nbsp;
                <a href="http://s16.mogucdn.com/p1/160811/idid_ifrtszjqmmzdazrumezdambqhayde_2436x3500.jpg" target="_blank">经营性网站备案信息</a>&nbsp;
                <br /><?php echo ($datas['record']); ?>&nbsp; 京公网安备110108006045&nbsp;&nbsp; 客服电话：4000-800-577&nbsp; 文明办网文明上网举报电话：010-82615762 &nbsp;
                <a href="http://net.china.com.cn/index.htm" target="_blank">违法不良信息举报中心</a></div>
            </div>
        </div>
        <p style="display: none" class="biu-login">11cnkktq</p>
        <div class="biu-sidebar">
            <div class="biu-options">
                <div class="biu-download">下载
                    <span>APP</span>
                    <div class="mls-qrcode">
                        <img src="/shop2/Public/Home/p2/160802/7e_0h22fa0g03cgl0c5676cb6k2ii71h_140x140.png">
                    </div>
                </div>
                <div class="biu-cart">
                  <a href="mycart.html" target="_blank">
                    <span class="cart-num biu-cart-num"></span>购物车</a>
                </div>
                <div class="biu-service">
                  <a class="biu-open-im">
                    <span class="service-num biu-service-num"></span>消息</a>
                </div>
                <div class="biu-coupon">
                  <a href="coupon.html#" target="_blank">
                    <span class="coupon-num biu-coupon-num"></span>优惠券</a>
                </div>
                <div class="biu-mark"><a href="mylike.html" target="_blank">收藏</a></div>
                <div class="biu-footprint"><a href="footprint.html" target="_blank">足迹</a></div>
            </div>
            <div class="biu-go2top"></div>
        </div>
    <script type="text/javascript">
        var MoGuConstant = {
            mobileRegex: /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i,
            userAgent: navigator.userAgent.toLowerCase(),
        };

        var MoGuDetail = {
            data: null,

            util: {
                isMGJApp: (function(){
                    return MoGuConstant.userAgent.indexOf('nonative') < 0 && MoGuConstant.userAgent.indexOf('mogujie') > 0;
                }()),

                isMobile: (function(){
                    return MoGuConstant.mobileRegex.test(MoGuConstant.userAgent);
                }()),

                isWeChat: (function(){
                    return MoGuConstant.userAgent.indexOf('micromessenger') > 0;
                }())
            }
        };
    </script>
    <script type="text/javascript">
        //如果在蘑菇街APP
        if (MoGuDetail.util.isMGJApp) {
            // setTimeout(function(){
            //     window.location.href = "mgj://detail?iid=1fxighu";
            // },400)
        }else if(navigator.userAgent.indexOf('MeilishuoHD')!=-1){

        }
        // 如果在移动设备上
        else if(MoGuDetail.util.isMobile){
            setTimeout(function(){
                var url = "http://weixin.meilishuo.com/wx/detail/1fxighu";
                if (window.location.search) {
                    url += window.location.search;
                }
                window.location.href = window.logger? logger.generatePtpParams(url): url;
            },400)
        }
        
        var detailInfo = {
            itemId: '1fxighu',
            shopId: '110fni1q',
            cids: '#682# #683# #704# #705#',
            sellerId: '115knefy',
            main: {
                originPrice: $('#J_NowPrice').attr('title')*1.5+'.00元',
                nowPrice: $('#J_NowPrice').attr('title')+'元',
                topImages:  []       
            },
            attribute:  [{}] ,
            listBanner:  {} ,
            redPacketsSwitch:  false ,
            loginUserId:  "11cnkktq" ,
            isLogin:  true ,
            isMoguer:  false     };
    </script>
</div>

<script type="text/javascript">
    window.PTP_PARAMS = window.PTP_PARAMS || {};
    window.PTP_PARAMS.ptp_cnt_b = '__item_detail';
</script>


<script type="text/javascript" src="/shop2/Public/Home/js/index.js-8f5416c3.js"></script>

<script type="text/javascript" src="/shop2/Public/Home/__newtown/detail_mls/assets/mls-pc/pages/normal/index.js-957ad653.js"></script>

<!--ajax处理不同属性对应不同库存-->
<script>
    
$(function(){ 
    $('.momo').on('click','li',function (){
        $(this).addClass('check').siblings().removeClass('check');
        if( $('.J_StyleList').find('.check').length == 1 && $('.J_SizeList').find('.check').length== 1) {
            var color = $('.J_StyleList').find('.check').attr('key');

            var size = $('.J_SizeList').find('.check').attr('title');

            $.ajax({
                type:'post',
                url:'<?php echo U("Goods/handlerAjaxBuynum");?>',
                data:{'color':color,'size':size},
                success:function (msg) {
                    $('.aabb').remove();
                    $('.J_GoodsStock').after(
                        '<span class="aabb" data-stock="'+msg.num[0]['num']+'"style="color:red;">库存为<i id="show_buyNum">'+msg.num[0]['num']+'</i>件</span>'
                        );
                    $('#J_GoodsNum').attr('data-stock',msg.num[0]['num']);
                    
                },
                error:function () {
                    alert(1);
                },
                dataType:'json',
            });

    } else {
        // $('.J_GoodsStock').after().remove();
    }   
    })
})
        
</script>

<script>
//     $(function(){ 
//     $('.momo').on('click','li',function (){
//             $(this).addClass('check').siblings().removeClass('check');
//          if( $('.J_StyleList').find('.check').length != 1) {
//                 // var color = $('.J_StyleList').find('.check').attr('key');

//                 // var size = $('.J_SizeList').find('.check').attr('title');

//                 // $.ajax({
//                 //     type:'post',
//                 //     url:'<?php echo U("Goods/handlerAjaxBuynum");?>',
//                 //     data:{'color':color,'size':size},
//                 //     success:function (msg) {
//                 //         $('.aabb').remove();
//                 //         $('.J_GoodsStock').after(
//                 //             '<span class="aabb" data-stock="'+msg.num[0]['num']+'"style="color:red;">库存为<i id="show_buyNum">'+msg.num[0]['num']+'</i>件</span>'
//                 //             );
//                 //         $('#J_GoodsNum').attr('data-stock',msg.num[0]['num']);
                        
//                 //     },
//                 //     error:function () {
//                 //         alert(1);
//                 //     },
//                 //     dataType:'json',
//                 // });
//                 console.log('asd');
//                 $('.J_GoodsStock').after().remove();

//     } 
//         // 
        
//     })
// })

</script>

<!--ajax处理颜色对应的尺码-->
<script>
    
       $('.J_StyleList').on('click','li', function (){
            var that =$(this);
            $(this).addClass('c').siblings().removeClass('c');
            $(this).addClass('check').siblings().removeClass('check');
            var color = $('.J_StyleList').find('.check').attr('key');
            console.log(color);
                $.ajax({
                    type:'post',
                    url:'<?php echo U("Goods/handlerAjaxSize");?>',
                    data:{'color':color},
                    success:function (msg) {
                       $('.J_SizeList li').remove();
                       var olUsr = '';
                       for (var i=0; i<msg.size.length; i++)  {
                            olUsr += '<li class="" data-id="100" title="'+msg.size[i].size+'">'+msg.size[i].size+'</li>';
                       }
                       $('.J_SizeList').append(olUsr);
                    },
                    error:function () {
                        alert(1);
                    },
                    dataType:'json',

                });
            
       }) 
</script>

<!--ajax处理不同颜色对应的图片-->
<script>
    $('.J_StyleList').on('click','li', function (){
        if ($('#J_BigImg').attr('isrequested') == 'true') {
            return false;
        }
        var that = $(this);
        $(this).addClass('check').siblings().removeClass('check');
            var color = $('.J_StyleList').find('.check').attr('key');
            // console.log(color);
                $.ajax({
                    type:'post',
                    url:'<?php echo U("Goods/handlerAjaxPic");?>',
                    data:{'color':color},
                    success:function (msg) {
                        $('#J_BigImg').attr('isrequested', true);
                        $('#J_BigImg').attr('src',"/shop2/Public/Uploads/"+msg.pic[0].pic+"");                      
                    },
                    error:function () {
                        alert(1);
                    },
                    dataType:'json',
                });
            
       })
</script>

<!--判断购买数量失去焦点事件-->
<script>
    $('.num-input').blur(function (){

        if ($('.J_StyleList').find('.check').length ==1 && $('.J_SizeList').find('.check').length == 1) {
                var stock = '';
                var buynum = '';
                var stock = parseInt($('#J_GoodsNum').attr('data-stock'));
                
                var buynum =parseInt($('.num-input').attr('value'));
                
                if (buynum > stock) {
                    $('.num-input').val(parseInt(stock));
                }

                if (buynum == '') {
                    buynum ='1';
                    $('.num-input').val(parseInt(buynum));
                }

                if (buynum <= 0) {
                    buynum = '1';
                    $('.num-input').val(parseInt(buynum));
                }

                if (!(/(^-?\d+$)/.test(buynum))){  
                    buynum = '1';
                    $('#shuliang').val(parseInt(buynum));
                }
        }
        
    });

    
</script>

<script>
     $('.num-input').blur(function (){
        var buynum =parseInt($('.num-input').attr('value'));
        var stock = parseInt($('#J_GoodsNum').attr('data-stock'));
            if (buynum > stock) {
                $('.num-input').val(parseInt(stock));
            }    
            if (stock>buynum > 1) {
                buynum = '1'
                $('.num-input').val(parseInt(buynum));
            }

            if (buynum == '') {
                buynum ='1';
                $('.num-input').val(parseInt(buynum));
            }

            if (buynum <= 0) {
                buynum = '1';
                $('.num-input').val(parseInt(buynum));
            }

            if (!(/(^-?\d+$)/.test(buynum))){  
                buynum = '1';
                $('#shuliang').val(parseInt(buynum));
            }
     })
</script>

<!--判断购买量是否大于库存-->   
<script>
    $('.num-add').click(function (){
        var stock = '';
        var buynum = '';
        var stock = parseInt($('#J_GoodsNum').attr('data-stock'));
        
        var buynum =parseInt($('.num-input').attr('value'));

        if (buynum >= stock) {
            $('.num-input').val(parseInt(stock-1));
        }
    });
</script>

<!--判断购买量是否大于库存-->   
<script>
    $('.num-add').click(function (){
        var stock = '';
        var buynum = '';
        var stock = parseInt($('#J_GoodsNum').attr('data-stock'));
        
        var buynum =parseInt($('.num-input').attr('value'));

        if (stock == 0) {
            $('.num-input').val(parseInt(stock));
            
        }
    });
</script>

<!--加入购物车-->
<script>
    $('.buy-cart').click(function() {
        if (Number($('#show_buyNum').html()) <= 0) {
            return false;
        }
       if ($('.J_StyleList').find('.check').length ==1 && $('.J_SizeList').find('.check').length == 1) {
            // alert(1);
            var gid = $('#myself').val(); 
            var cid = $('.J_StyleList').find('.check').attr('key');
            var size = $('.J_SizeList').find('.check').attr('title');
            var number = parseInt($('.num-input').attr('value'));
            console.log(gid);
            console.log(cid);
            console.log(size);
            console.log(number);

            $.ajax({
                type:'post',
                url:'<?php echo U("Cart/addMyCart");?>',
                data:{
                    gid:gid,
                    cid:cid,
                    size:size,
                    number:number
                },
                success:function(res){
                    if(res.code == 1200){
                        layer.confirm('添加成功', {
                                btn : [ '确定' ]//按钮
                            }, function(index) {
                                layer.close(index);
                            });
                            return false; 
                    }else{
                        layer.confirm('库存为0,添加失败', {
                                btn : [ '确定' ]//按钮
                            }, function(index) {
                                layer.close(index);
                            }); 
                        return false;
                    }

                },
                dataType:'json',
            });
        } else {
            layer.confirm('你没有选择任何商品款式', {
                btn : [ '确定' ]//按钮
            }, function(index) {
                layer.close(index);
            }); 
            return false;
        }        

    });


</script>
<script>

var flag1 = true;
$(window).scroll(function(){    

    if (flag1) {
    var sclST = $(window).scrollTop();// 滚动高度
    var top = $('#J_ModuleGraphic').offset().top - $(window).height(); // offset().top 元素页面的高度 - 浏览器的窗口高度
    var gid = $('#myself').val();

    if( sclST > top && $('#J_ModuleGraphic').attr('boxes') != 'true'){
        flag1 = false;
        console.log(888);
        $.post(
        "<?php echo U('Goods/handlerAjaxPhoto');?>",
        {gid:gid},
        function (msg) {
            console.log(msg.photos[0]['photo']);
            if (msg.code == 1200) {
                var divStr = '<div  style="padding-bottom:5%;"></div>';
                for (var i=0; i<msg.photos.length; i++) {
                    divStr += '<div style="padding-bottom:10%;"><img src="/shop2/Public/Uploads/'+msg.photos[i]['photo']+' " style="width:700px;height:800px;"></div>';
                }
                $('#J_ModuleGraphic').append(divStr);
                $('#J_ModuleGraphic').attr('boxes','true');

                flag1 = true;

                } else {
                    //没有拿到商品数据
                }
            },
            'json'
        );
    }
}
 })
</script>

<!--立刻购买-->
 <script>
    $('.buy-now').click(function() {
       if ($('.J_StyleList').find('.check').length ==1 && $('.J_SizeList').find('.check').length == 1) {
            
            var data_arr = new Array(4);
            data_arr[0] = $('#myself').val(); 
            data_arr[1] = $('.J_StyleList').find('.check').attr('key');
            data_arr[2] = $('.J_SizeList').find('.check').attr('title');
            data_arr[3] = parseInt($('.num-input').attr('value'));

            $.ajax({
                type:'get',
                url:'<?php echo U("Order/handlerGoodsDetailData");?>',
                data:{
                    gid:data_arr[0],
                    cid:data_arr[1],
                    sid:data_arr[2],
                    number:data_arr[3]
                },
                success:function(res){

                    if(res.code == 1404){
                        window.location.href ='<?php echo U("Login/index");?>';
                    }

                    if (res.code == 1200) {

                        $(location).attr('href', "<?php echo U('Order/showOrderView');?>?arr="+data_arr+"&det=1");
                    }

                    if (res.code == 1606) {
                        layer.confirm('库存不足', {
                            btn : [ '确定' ]//按钮
                        }, function(index) {
                            layer.close(index);
                        }); 
                        return false;
                    }

                },
                dataType:'json',
            });
        } else {
           layer.confirm('你没有选择任何商品款式', {
                btn : [ '确定' ]//按钮
            }, function(index) {
                layer.close(index);
            }); 
            return false;
        }        

    });
</script>

<!--ajax处理收藏功能-->
<script>
    $('.fav-num').click(function () {
        if ($('.fav-num').attr("requested") == 'true') {
            layer.confirm('你已收藏', {
                btn : [ '确定' ]//按钮
            }, function(index) {
                layer.close(index);
            });
            return false;
        }
        var gid = $('#myself').val();
        $.ajax({
                type:'get',
                url:'<?php echo U("Goods/handlerCollectAjax");?>',
                data:{
                    gid:gid
                },
                success:function(res){
                    
                    if(res.code == 1404){
                        layer.confirm('你还没有登录', {
                            btn : [ '确定','取消' ]//按钮
                        }, function(index) {
                            layer.close(index);
                        });
                        window.location.href ='<?php echo U("Login/index");?>';
                    }

                    if (res.code == 1200) {
                        $('.fav-num').attr("requested",'true');
                        layer.confirm('收藏成功', {
                            btn : [ '确定' ]//按钮
                        }, function(index) {
                            layer.close(index);
                        }); 
                        return false;
                    }

                    if (res.code == 1606) {
                        layer.confirm('收藏失败', {
                            btn : [ '确定' ]//按钮
                        }, function(index) {
                            layer.close(index);
                        }); 
                        return false;
                    }

                },
                dataType:'json',
            });
    })
</script>
</body>

</html>