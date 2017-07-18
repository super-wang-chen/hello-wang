<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simpla Admin | Sign In by www.865171.cn</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="/qmss/Application/Admin/Common/resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="/qmss/Application/Admin/Common/resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="/qmss/Application/Admin/Common/resources/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="/qmss/Application/Admin/Common/resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="/qmss/Application/Admin/Common/resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="/qmss/Application/Admin/Common/resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="/qmss/Application/Admin/Common/resources/scripts/jquery.wysiwyg.js"></script>
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
    <div id="login-top">
        <h1>Simpla Admin</h1>
        <!-- Logo (221px width) -->
        <a href="http://www.865171.cn"><img id="logo" src="/qmss/Application/Admin/Common/resources/images/logo.png" alt="Simpla Admin logo" /></a> 
    </div>
  <!-- End #logn-top -->

    <div id="login-content">
      <form action="/qmss/index.php/Admin/Index/login" id="myform" method="post">
        <div class="notification information png_bg">
        <div> Just click "Sign In". No password needed. </div>
        </div>
        <p>
            <label>用户名</label>
            <input class="text-input" type="text" name="username" />
        </p>
        <div class="clear"></div>
        <p>
            <label>密码</label>
            <input class="text-input" type="password" name="password" />
        </p>
        <div class="clear"></div>
        <p>
            <label>验证码</label>
            <input class="text-input" type="text" name="ver" />
            <img style="cursor:pointer" class="img"  src="/qmss/index.php/Admin/Index/ver" onClick="this.src=this.src+'?'+Math.random();" title="看不清楚?点击刷新验证码?">
        </p>
        <div class="clear"></div>
        <p id="remember-password"><input type="checkbox" name="remember" class="remember" />记住我 </p>
        <div class="clear"></div>
        <p><input class="button" type="submit" value="登录" /></p>
      </form>
    </div>
  <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
</html>
<script>
 $(function(){
    $("#myform").submit(function(){
        var url = "/qmss/index.php/Admin/Index/login";
        var password = $("input[name='password']").val();
        var username = $("input[name='username']").val();
        var ver = $("input[name='ver']").val();
        if($('.remember').attr('checked')){
            var rem = 1;
        }else{
            var rem = 0;
        }
        $.ajax({
            type:"POST",
            url:url,
            data:"username="+username+"&password="+password+"&ver="+ver+"&rem="+rem,
            success:function(msg){
                if(msg==1){
                    alert("验证码错误");
                }else if(msg==2){
                    alert("用户名密码错误");
                }else if(msg==3){
                    window.location.href = "/qmss/index.php/Admin/Index/index";
                }
            }
        })
        return false;
    })
 })
    
</script>