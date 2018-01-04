<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>


<head>
    <meta charset="utf-8" />
    <title>登录 － 美丽说</title>
    <meta name="description" content="来美丽说开启属于你的发现之旅，感受全新的购买体验吧！这里有百万粉丝的时尚大咖、热爱发现美物的生活家、一边旅行一边挖掘好货的higo海淘达人...而他们都将成为你的专属挑款师！还等什么？加入我们，发现流行，占有世界！" />
    <meta name="keywords" content="美丽说,higo,衣服,鞋子,包包,配饰,家居,美妆,搭配,团购,美丽说higo" />

    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1" />
    <meta property="qc:admins" content="173137167465514130576375" />
    <meta name="chinaz-site-verification" content="500e4417-e595-40ac-98da-dec66c97a9e5" />
    <link rel="stylesheet" type="text/css" href="/shop2/Public/css/base.css" />
    <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="css/ie6.css?1607162038.1471376099" />
    <![endif]-->
    <link rel="apple-touch-icon-precomposed" href="/shop2/Public/css/images/custom_icon_precomposed.png" />
    <link rel="icon" href="/shop2/Public/css/images/icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/shop2/Public/css/login2.css" />
    <script type="text/javascript" src="/shop2/Public/~fml"></script>
    <script src="/shop2/Public/js/jquery-1.9.1.min.js"></script> 
    <script src="/shop2/Public/assets/layer/layer.js" type="text/javascript" ></script>
</head>

<body>
<div class="wrap">
    <div class="reg_wrap">
        <div class="head">
            <a href="/shop2" class="reg_logo"></a>
            <a href="/shop2" class="welcome_txt"></a>
        </div>
        <div class="main">
            <div class="ad_wrap">
                <img src="/shop2/Public/css/images/register/ad_img.jpg" width="370" height="353" /></div>
            <div class="login_form">
                <form id="loginForm" method="post" action="">
                    <h3>
                        <a href="/shop2/Home/register">注册</a>登录美丽说</h3>
                    <div class="login_list">
                        <p class="login_box">
                            <input class="login_txt" id="mlsUser" name="username" type="text" placeholder="邮箱/用户名" />
                            <span></span>
                            <span class="user_icon"></span>

                        </p>
                    </div>
                    <div class="login_list">
                        <p class="login_box">
                            <input class="login_txt" id="password" name="password" type="password" placeholder="密码" />
                            <span></span>
                            <span class="pwd_icon"></span>
                        </p>
                    </div>
                    <div class="login_list authpic" style="display:none">
                        <div class="login_box">
                            <!-- 验证码位置 -->
                            <input id="code" name="verify" class="enter_code login_txt" type="text" placeholder="验证码" maxlength="6" />
                            <img id="get_code" class="get_code" src="<?php echo U('Login/getVerify');?>" onclick="this.src=this.src+'?'"/>
                            <span></span>
                        </div>
                    </div>
                    <div class="loginErrorMessage none_f"></div>
                    <div class="login_btn_wrap">
                        <input type="button" class="login_btn" id="login_btn" value="立即登录" onclick="runSubmit()" /></div>
                    <div class="remember">
                        <input type="checkbox" name="savestate" id="savestate" checked="checked" />
                        <label for="savestate">记住我</label></div>
                    <div class="forget_pwd">
                        <a href="<?php echo U('findPwd');?>" target="_blank">忘记密码？</a></div>
                </form>
                <!-- <div class="fast_login">
                    <h3>无需注册，即可登录</h3>
                    <div class="fast_way">
                        <a href="javascript:;" class="qq_way"></a>
                        <a href="javascript:;" class="sina_way"></a>
                        <a href="javascript:;" class="weixin_way"></a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

</body>
</html>
<script type="text/javascript">


    var hint = '请填写登录信息';
    var checkUser = false;
    var checkPwd = false;
    $('#mlsUser').focusout(function (){
        var user=$(this);
        if (user.val().length == 0) {
            hint = "请输出用户名或邮箱";
            user.next().attr('class','msg_err');
            user.next().next().next().remove();
            user.next().next().after("<div id='msglsUser' class='msg_error'><span></span>"+hint+"</div>");
            checkUser = false;
        }else if(!(checkAccount(user.val()) || checkphoneNum(user.val()))){
            hint = "请输入正确的邮箱或用户名";
            user.next().attr('class','msg_err');
            user.next().next().next().remove();
            user.next().next().after("<div class='msg_error'><span></span>"+hint+"</div>");
            checkUser = false;
        }else{
            user.next().attr('class','msg_ok');
            user.next().next().next().remove();
            checkUser = true;
        }

    });
    $('#password').focusout(function (){
        var pwd=$(this);
        if (pwd.val().length == 0) {
            hint = "请输入密码";
            pwd.next().attr('class','msg_err');
            pwd.next().next().next().remove();
            pwd.next().next().after("<div class='msg_error'><span></span>"+hint+"</div>");
            checkPwd = false;
        }else if(checkPwdnum(!pwd.val())){
            hint = "请输入6到16位之间的密码";
            pwd.next().attr('class','msg_err');
            pwd.next().next().next().remove();
            pwd.next().next().after("<div class='msg_error'><span></span>"+hint+"</div>");
            checkPwd = false;
        }else{
            pwd.next().attr('class','msg_ok');
            pwd.next().next().next().remove();
            checkPwd = true;
        }

    });

    /** 验证用户位数是否数字开头 */
    function checkAccount(account){
        var reg = /^[a-z|A-Z]\w{3,12}$/;
        
        return reg.test(account);
    }

    /** 验证密码位数 */
    function checkPwdnum(pwd){
        var reg = /^[\x21-\x2f\x3a-\x40\x5b-\x60\x7B-\x7F,\w]{6,16}$/;
        
        return reg.test(pwd);
            
    }

    /**
     * 正则验证邮箱
     */
    function checkphoneNum(phoneNum){
         var reg = /^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;

         return reg.test(phoneNum);
    }

    var loginTime = 0;
    /**
     * 登录
     */
    function runSubmit(){
        if (!checkUser && !checkPwd) {
            layer.msg(hint,{icon:2,time:800});
            return false;
        };
        if (loginTime >= 2) {
            $('.authpic').attr('style','display:block;');
            var verify =  $('#code').val();
            if (verify == "") {
                layer.msg('请填写验证码',{icon:2,time:800});
                return false;
            };
        };
        
        $.ajax({
            type:'post',
            url:"<?php echo U('Login/getLogin');?>",
            data:$('#loginForm').serialize(),
            success:function(msg){
                if (msg['code'] == 1200) {
                    $(location).attr('href', '/shop2');
                }else if(msg['code'] == 1404){
                    $('#get_code').click();
                    $('#get_code').val('');
                    layer.confirm(msg['msg']);
                    loginTime = msg['num'];
                    if (loginTime >= 2) {
                        $('.authpic').attr('style','display:block;');
                    };
                }
            },
            error:function(msg){
                layer.confirm('访问服务器失败.');
            },
            dataType:'json'
        });
    }

    $(document).keyup(function(event){
      if(event.keyCode ==13){
        $('#login_btn').click();
      }
    });
    


</script>