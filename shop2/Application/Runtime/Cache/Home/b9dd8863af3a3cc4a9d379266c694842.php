<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0058)http://www.pinkyswear.cn/Haoduoyou/Home/Login/findPwd.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<title>找回密码_美丽说</title> 
  <meta name="description" content="美丽说是白领女性时尚消费品牌，为超过1亿注册用户提供导购信息。建立300万全球女性时尚品牌商品库，超过1000家全球品牌达成官方合作导购体验，更好的满足白领女性的时尚消费需求。">
  <meta name="keywords" content="美丽说,美丽说官网,美丽说首页,美丽说登录,导购,白领,女装,网购">	
  
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">	
  <meta name="renderer" content="webkit">	
  <meta name="mobile-agent" content="format=html5;url=http://m.meilishuo.com"> 
  <link rel="icon" href="https://s10.mogucdn.com/mlcdn/c45406/170612_02i668aijej2cb21ji56g98a218dg_48x48.png" type="image/x-icon">	
  <link type="text/css" rel="stylesheet" href="/shop2/Public/Home/css/base-6575225484.css">	
  <link type="text/css" rel="stylesheet" href="/shop2/Public/Home/css/common-ef21baae57.css">
  <script src="/shop2/Public/js/jquery-1.9.1.min.js"></script> 
  <script src="/shop2/Public/assets/layer/layer.js" type="text/javascript" ></script>
</head>
<body>
  <div style="height: 52px; clear: both; display: none;"></div>
  <div class="settings">
    <strong class="settings_title">找回密码</strong> 
    <div class="findPwd" id="findPwd" data-code="" data-token=""> 
    
    
    <div class="findPwdForm">
      <form action="<?php echo U('Login/findPassword');?>" method="post">
      <input type="hidden" class="hidden" name="rand" value=""> 
      <div class="form-list ">
        <hr>
        <h2>邮箱获取验证码:</h2>
        <br> 
        <label class="account-label">邮箱:</label> 
        <input id="login_name" name="email" class="email" type="text" placeholder="你的邮箱">
        <span id="iemail"></span>
        <span class="email_span"></span>
      </div>
      <div class="d_none" id="yanzhengma">
        <div class="form-list " style="margin-left: 182px;">
          <input id="login_code" name="yzm" class="_yzm" type="text" placeholder="邮箱验证码">&nbsp;
          <a id="get_code" class="get_code yzm" disabled="fasle">获取邮箱验证码</a><br>
          <span id="iyzm"></span>
          <span class="yzm_span"></span>   
        </div>
      <button style="margin-left: 180px" id="send_next" data-captcha="" class="ext_submit check_password">下一步</button>
      <span class="errorMessageText color-pink"></span>
    </div>
    </form>

  </div> 
</div>
</div>
  </body>
  </html>
<script type="text/javascript">

  var boolEmail = false;
  $('#login_name').focusout(function(){
    var ema = $(this);
    if (!checkphoneNum(ema.val())) {
      $('#iemail').text('邮箱格式不正确');
      boolEmail = false;
      return false;
    }else{
      $('#iemail').text('');
    }
    checkPhoneExist(ema.val());
  });

  //检查邮箱是否存在
    function checkPhoneExist(email){
        $('.email_span').next().remove();
        $.ajax({
            type:'get',
            url:"<?php echo U('Register/checkphoneNum');?>",
            data:"email="+email,
            success:function(msg){
                if (msg['code'] != 1404) {
                    $('.email_span').attr('color','red').after("<a href='<?php echo U('Register/index');?>'>邮箱不存在,请先注册</a>");
                    boolEmail = false;
                }else{
                  $('.email_span').next().remove();
                  boolEmail = true;
                }
            },
            dataType:'json'
        });
    }
     /**
     * 正则验证邮箱
     */
    function checkphoneNum(phoneNum){
         var reg = /^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;

         return reg.test(phoneNum);
    }

    function getVerify(){

    }

    $('#get_code').click(function(){
      if (!boolEmail) {
        layer.msg('请输入正确邮箱',{icon:2,time:800});
        return false;
      };
      var obj = $(this);
      if (countdown == 60 || countdown == 0) {
        settime(obj);
        $.ajax({
        type: "post",
        url: "<?php echo U('Register/getVerify');?>",
        data: "email=" + $('#login_name').val(),
        success: function(msg){
          console.log(msg);
          if (msg['code'] == 1200) {
            $('#send_next').removeAttr("disabled");
          };
        }
        });
      };
    });

    var countdown=60;
    function settime(obj) {
        if (countdown == 0) {
            $(obj).attr("disabled",false);
            $(obj).text("获取邮箱验证码");
            countdown = 60;
            return;
        } else {
            $(obj).attr("disabled",true);
            $(obj).text("(" + countdown + ") s 重新发送");
            countdown--;
        }
        setTimeout(function() {
                    settime(obj) }
                ,1000)
    }



</script>