<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <script type="text/javascript">
        window.__trace__headstart = +new Date;
        window.__server__startTime = 1471504978830;
        window.__token = "67C15Xsj15wubf5/8DmrkXlG/l2jEPZBLXthifzz6ww=";
    </script>
    <meta charset="UTF-8"/>
    <title>订单详情-美丽说</title>




    <link rel="search" type="/shop2/Public/Home/application/opensearchdescription+xml" href="/opensearch.xml"/>
    <link rel="icon" href="/shop2/Public/Home/p1/160614/idid_ifrtgzddgm3dmnjshezdambqhayde_49x48.png" type="image/x-icon"/>

    <script> curl = {apiName: 'require'}; var MOGU = {}; var MoGu = {};</script>



    <link href="/shop2/Public/Home/css/index.css-63e7a9a6.css" rel="stylesheet" type="text/css"/>



    <link href="/shop2/Public/Home/css/index.css-edfa391a.css" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="/shop2/Public/Home/js/pkg-pc-base.js-beb518b8.js"></script>



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

<div class="mgj_rightbar" data-ptp="_sidebar"></div>
<div id="header" class="J_sitenav header_2015" data-ptp="_head">
    <div class="wrap clearfix"></div>
</div>
<!-- 中间区域 -->
<div class="header_mid clearfix">
    <div class="wrap">
        <a rel="nofollow" href="index.html" class="logo" title="美丽说首页"></a>
        <div class="normal-search-content">
            <div class="top_nav_search" id="nav_search_form"> <!--搜索框 -->
                <div class="search_inner_box clearfix">
                    <div class="selectbox" data-v="1">
                        <span class="selected">搜商品</span>
                        <ol>
                            <li class="current" data-index="goods"><a href="#">商品</a></li>
                            <li data-index="shop"><a href="#">店铺</a></li>
                        </ol>
                    </div>
                    <form action="http://www.meilishuo.com/search" method="get" id="top_nav_form">
                        <input type="text" data-tel="search_book" name="searchKey" class="ts_txt fl" data-def="" value="" autocomplete="off" def-v="">
                        <input type="submit" value="搜  索" class="ts_btn" />
                        <input type="hidden" name="filter" value="goods" id="select_type" />
                    </form>
                    <div class="top_search_hint"></div>
                </div>

                <div class="ts_hotwords"></div>
            </div>
        </div>
    </div>
</div>

<div id="body_wrap">
</div>

<div class="foot J_footertimer" data-ptp="_foot" data-svrtime="">
    <div class="wrap foot_wrap clearfix">
        <div class="foot_info">
            <a rel="nofollow" class="info_logo" href="index.html"></a>
            <div class="info_text">
                <p>营业执照注册号：<a rel="nofollow" href="http://s6.mogucdn.com/pic/140924/8qc9_ieydgn3emqztszbxmmytambqmmyde_1502x2246.jpg" target="_blank">110108013011072</a></p>
                <p>京ICP备11031139号</p>
                <p>
                    <a target="_blank" href="http://d03.res.meilishuo.net/pic/_o/e1/80/4f22feee45bb9d0a92e7a950f9c5_1131_1600.cg.jpg" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
                        <img src="http://s18.mogucdn.com/p1/160428/upload_ifrgemjwgq3gemzthazdambqmeyde_20x20.png" style="float:left;">
                        <span style="color: #999;">&nbsp;京公网安备 110108006045</span>
                    </a>
                </p>
                <p class="mgjhostname" title="<?php echo gethostname();?>">©<? echo date("Y") ?> meilishuo.com 北京美丽时空网络科技有限公司</p>
            </div>
        </div>
        <div class="foot_link">
            <dl class="link_company">
                <dt>公司</dt>
                <dd><a rel="nofollow" href="aboutus.html" target="_blank">关于我们</a></dd>
                <dd><a rel="nofollow" href="#" target="_blank">招聘信息</a></dd>
                <dd><a rel="nofollow" href="contactus.html" target="_blank">联系我们</a></dd>
            </dl>
            <dl class="link_consumer">
                <dt>消费者</dt>
                <dd><a rel="nofollow" href="noviceGuide.html" target="_blank">新手指南</a></dd>
                <dd><a rel="nofollow" href="serviceEnsure.html" target="_blank">服务保障</a></dd>
            </dl>
            <dl class="link_business">
                <dt>商家</dt>
                <dd><a rel="nofollow" href="#/business#/index" target="_blank">商家入驻</a></dd>
                <dd><a rel="nofollow" href="#" target="_blank">商家推广</a></dd>
                <dd><a rel="nofollow" href="#/help#/index" target="_blank">帮助中心</a></dd>
            </dl>
        </div>
    </div>
</div>


<script type="text/javascript" src="/shop2/Public/Home/js/index.js-417ef0a2.js"></script>

<script type="text/javascript" src="/shop2/Public/Home/js/index.js-804c6d43.js"></script>

</body>

</html>