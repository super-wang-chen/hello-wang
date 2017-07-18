<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<!-- <base href="/qmss/" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/libs/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/common.css">
	
</head>
<body>
	<!-- header开始 -->
	<div class='header hidden-xs'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-2 col-md-2 col-lg-2'>
					<a href="<?php echo U('Index/index');?>"><img class="logo" src="/qmss/Application/Home/Common/images/logo.png" alt='logo加载失败' title=""></a>
				</div>
				<div class='col-sm-10 col-md-10 col-lg-10'>
					<div class='login'>
					<?php if($_SESSION['user'] != null): ?><a href="">欢迎<?php echo ($_SESSION['user']); ?></a>
						<span>/</span>
						<a href="<?php echo U('Members/login_out');?>">退出</a>
					<?php else: ?>
						<a href="<?php echo U('Members/login');?>">登录</a>
						<span>/</span>
						<a href="<?php echo U('Members/create_user');?>">注册</a><?php endif; ?>
						<form action="<?php echo U('Product/pro_find?p=1');?>" method="get">
							<input type="text" name="keyword">
							<button type="submit"><img src="/qmss/Application/Home/Common/images/search.png" title="" alt=""></button>
						</form>
						<a href="<?php echo U('Shopping/index');?>"><img src="/qmss/Application/Home/Common/images/shopping.png" alt="" title="">购物车</a>
					</div>
					<div class='nav'>
						<ul class="nav-pills">
							<li><a href="<?php echo U('Index/index');?>" class="home">首页</a></li>
							<li><a href="<?php echo U('Brand/index?p=1');?>">品牌介绍</a></li>
							<li><a href="<?php echo U('Product/index?p=1');?>">产品中心</a></li>
							<li><a href="<?php echo U('News/index?p=1');?>">新闻中心</a></li>
							<li><a href="<?php echo U('Shopping/center');?>">会员中心</a></li>
							<li><a href="<?php echo U('Contact/index');?>">联系我们</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header结束 -->

	<!-- sm-header开始 -->
	<div class="sm-header visible-xs">
		<div class="container">
			<div class="col-xs-3 sm-logo"><a href="index.html"></a></div>
			<div class="col-xs-8 sm-search">
				<form class="center-block">
					<input type="text" name="" value="请输入关键词" onfocus="if (this.value=='请输入关键词') value=''" onblur="if (this.value=='') value='请输入关键词'"/>
					<button type="submit">搜索</button>
				</form>
			</div>
			<div class="col-xs-1 sm-navbar">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sm-subnav" aria-expanded="true" id='navOp'>  
			            <span class="sr-only">Toggle navigation</span>  
			            <span class="icon-bar"></span>  
			            <span class="icon-bar"></span>  
			            <span class="icon-bar"></span>  
		          </button>
				<ul id="sm-subnav" class="collapse">
				   <li><a href="index.html">首页</a></li>
					<li><a href="about_us.html">品牌介绍</a></li>
					<li><a href="product.html">产品中心</a></li>
					<li><a href="news.html">新闻中心</a></li>
					<li><a href="user.html">会员中心</a></li>
					<li><a href="contact_us.html">联系我们</a></li>
		    		<li><a href="login.html">登录/注册</a></li>
				    <li><a href="shop_cart.html">购物车</a></li>
				</ul> 
			</div>
		</div>
	</div>
	<!-- sm-header结束 -->
<title>会员注册</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/register.css">


	<!-- main开始 -->
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6 col-lg-6 content">
					<h2>会员注册</h2>
					<form action="/qmss/index.php/Home/Members/add_user" method="post"  class="demoform">
						<label>
							<span>用 户 名：</span>
							<input type="text" name="user" value="支持中文、字母、数字的组合，6-20个字符" onfocus="if (this.value=='支持中文、字母、数字的组合，6-20个字符') value=''" onblur="if (this.value=='') value='支持中文、字母、数字的组合，6-20个字符'" id="username" data-toggle="popover" data-placement="bottom" data-content="用户名不能为空" />
						</label>
						<label>
							<span>密     码：</span>
							<input type="text" name="password" value="建议使用中文、字母、数字的组合，6-20个字符" onfocus="if (this.value=='建议使用中文、字母、数字的组合，6-20个字符') value=''" onblur="if (this.value=='') value='建议使用中文、字母、数字的组合，6-20个字符'" id="password" data-toggle="popover" data-placement="bottom" data-content="密码不能为空">
						</label>
						<label>
							<span>确认密码：</span>
							<input type="text" name="" value="请再次输入密码" onfocus="if (this.value=='请再次输入密码') value=''" onblur="if (this.value=='') value='请再次输入密码'" id="rePassword" data-toggle="popover" data-placement="bottom" data-content="确认密码不能为空">
						</label>
						<label>
							<span>E-mail：</span>
							<input type="text" name="email" value="请输入您的E-mail" onfocus="if (this.value=='请输入您的E-mail') value=''" onblur="if (this.value=='') value='请输入您的E-mail'" id="email" data-toggle="popover" data-placement="bottom" data-content="邮箱不能为空">
						</label>
						<label>
							<span>手 机 号：</span>
							<input type="text" name="phone" value="请输入您的手机号" onfocus="if (this.value=='请输入您的手机号') value=''" onblur="if (this.value=='') value='请输入您的手机号'" id="phone" data-toggle="popover" data-placement="bottom" data-content="手机号不能为空">
						</label>
						<label class="identifying-code">
							<span>验 证 码：</span>
							<input type="text" name="" value="请输入邮箱验证码" onfocus="if (this.value=='请输入邮箱验证码') value=''" onblur="if (this.value=='') value='请输入邮箱验证码'" id="verify" data-toggle="popover" data-placement="bottom" data-content="验证码不能为空">
							<a href="javascript:;" id="ver">获取验证码</a>
						</label>					
						<div class="agreement">
							<label style="background: rgba(0, 0, 0, 0) url('/qmss/Application/Home/Common/images/check_box.jpg') no-repeat scroll 0 3px;">
							<input type="checkbox" name="" id="agreement" data-toggle="popover" data-placement="right" data-content="请先同意服务条款">
							<p>我已阅读并同意<span>《青木三色用户注册协议》</span></label>
						</div>											
						<button type="submit">立即注册</button>
					</form>
				</div>
			</div>		
		</div>
	</div>
	<!-- main结束 -->



	<!-- footer开始 -->
	<div class="footer">
		<p>OPYRIGHT ©2016 CHING MUKALL RIGHTS RESERVED</p>
		<p>粤ICP备14063069号</p>
	</div>
	<!-- footer结束 -->



</body>
<script type="text/javascript" src="/qmss/Application/Home/Common/js/jquery.js"></script>
<script type="text/javascript" src="/qmss/Application/Home/Common/libs/bootstrap/js/bootstrap.js"></script>
<!-- <script type="text/javascript" src="/qmss/Application/Home/Common/js/jquery-1.6.2.min.js"></script> -->
</html>
<script type="text/javascript" src="/qmss/Application/Home/Common/js/register.js"></script>
<script type="text/javascript">
$(".nav-pills li").eq(4).addClass("current");
	var ver=0;
	var time=120;
	var id="";

	$("#email").blur(function(){//验证邮箱格式
		var email = $("#email").val();
		var patte = /^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/;
		var res = patte.test(email);
		if(!res){
			alert("邮箱格式错误");
		}
	})

	$("#username").blur(function(){//验证用户名是否已存在
		var url = "/qmss/index.php/Home/Members/create_user";
		var user = $("#username").val();
		$.ajax({
			type:"GET",
			url:url,
			data:"user="+user,
			success:function(e){
				if(e==1){
					alert("用户名已存在");
				}
			}
		})
	})

	function changeTime(){//验证码有效期计时
	     time--;
	     if(time>0){
	      $("#ver").html("有效期:"+time+"s");
	    }else{
	        $("#ver").html("验证码过期");
	        time=0;
	    }

	 }

	$("#ver").click(function(){//点击邮件发送验证码
		var email = $("#email").val();
		var url = "/qmss/index.php/Home/Members/send_email";
		$.ajax({
			type:"POST",
			url:url,
			data:"email="+email,
			success:function(e){
				if(e==2){ //邮件发送成功，调用定时器实现时间秒的切换
	               $("#ver").html("有效期:"+time+"s");
	               id =setInterval(changeTime,1000);
	           }
			}
		})
	})

	 

	$("#verify").change(function(){//验证验证码
	    var code =$("#verify").val();
	    var url = "/qmss/index.php/Home/Members/check_ver";
	    $.ajax({
	        type:"GET",
	        url:url,
	        data:"code="+code,
	        success:function(msg){
	            if(msg==3){
	                $("#ver").html("验证码验证成功");
	                ver=1;
	                clearInterval(id);//销毁定时器    
	             }else if(msg==4){
	              alert("验证码错误");ver=0;
	             }
	        }
	    })
	 })

	$(".demoform").submit(function(){
		if(ver!=1){
			alert("验证码错误");
      		return false;
    	}
	})

</script>