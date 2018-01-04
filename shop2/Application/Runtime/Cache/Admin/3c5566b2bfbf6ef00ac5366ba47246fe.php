<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>后台登录</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/shop2/Public/css/style1.css" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src="/shop2/Public/js/jquery-1.8.3.min.js"></script>
      
    <script src="/shop2/Public/js/Particleground.js"></script>
    <script>
    $(document).ready(function() {
      //粒子背景特效
      $('body').particleground({
        dotColor: '#5cbdaa',
        lineColor: '#5cbdaa'
      });

     
     
    });
    </script>
</head>
<body>
<dl class="admin_login">
 <dt>
  <strong>站点后台管理系统</strong>
  <em>Management System</em>
 </dt>
 <form action="<?php echo U('Public/handlerLogin');?>" method="post"> 
 <dd class="user_icon">
  <input type="text" placeholder="账号" class="login_txtbx" name="uname"/>
 </dd>
 <dd class="pwd_icon">
  <input type="password" placeholder="密码" class="login_txtbx" name="pass"/>
 </dd>


    <img src="<?php echo U('Public/makeCode');?>"  id="pic"  onclick="this.src=this.src+'?'">
    

 <dd class="val_icon">

   
    <input type="text" placeholder="验证码" name="code" class="login_txtbx"/>

  
 </dd>
 <dd>
  <input type="submit" value="立即登陆" class="submit_btn"/>
 </dd>
 <dd>
  <p>© 2017-2018 DeathGhost 版权所有</p>
  <p>www.diyunkeji</p>
 </dd></form>
</dl>
</body>

</html>