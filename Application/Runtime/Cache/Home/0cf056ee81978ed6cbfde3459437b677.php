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
<title>支付订单</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/pay.css">
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/jquery.mCustomScrollbar.css">

	<!-- main开始 -->
	<div class="main">
		<div class="container">
			<div class="shop-header">
				<h2>支付订单</h2>
				<div class="shop-flow hidden-sm hidden-xs">
					<i></i>
					<ol>
						<li>我的购物车</li>
						<li>确认订单</li>
						<li class="cur">支付订单</li>
					</ol>
				</div>	
			</div>
			<div class="content">
				<div class="row submit-success">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<i></i>
					</div>
					<div class="col-sm-10 col-md-10 col-lg-10">
						<h3>您的订单提交成功，请尽快付款</h3>
						<p>应付金额：<span>￥<?php echo ($total); ?></span></p>
						<p>订单号：<?php echo ($order_num); ?></p>
						<h4>请您在订单提交成功后24小时内完成支付，否则订单将会自动取消</h4>
					</div>
				</div>
				<h3>选择支付方式</h3>
				<div class="pay-ways">
					<h4>网银支付</h4>
					<ul class="row e-payment">
						<li class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="pay-box">
								<label for="" class="default"><input type="radio" name="" checked=""></label>
							</div>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="pay-box">
								<label for=""><input type="radio" name=""></label>
							</div>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="pay-box">
								<label for=""><input type="radio" name=""></label>
							</div>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="pay-box">
								<label for=""><input type="radio" name=""></label>
							</div>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="pay-box">
								<label for=""><input type="radio" name=""></label>
							</div>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="pay-box">
								<label for=""><input type="radio" name=""></label>
							</div>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="pay-box">
								<label for=""><input type="radio" name=""></label>
							</div>
						</li>
					</ul>
					<h4>第三方平台支付</h4>
					<ul class="row other-payment">
						<li class="col-sm-4 col-md-3 col-lg-3">
							<div class="pay-box alipay">
								<label for=""><input type="radio" name=""></label>
							</div>
						</li>
						<li class="col-sm-4 col-md-3 col-lg-3">
							<div class="pay-box weChat">
								<label for=""><input type="radio" name=""></label>
							</div>
						</li>
					</ul>
				</div>
				<h3>输入密码</h3>
				<div class="password">
					<p><i></i>您的支付环境安全，请放心支付！</p>
					<div class="pay-password">
						<span>请输入密码：</span>
						<p><input type="" maxlength='1'><input type="" maxlength='1'><input type="" maxlength='1'><input type="" maxlength='1'><input type="" maxlength='1'><input type="" maxlength='1'></p>
						<a href="javascript:;">忘记密码？</a>
					</div>
					<a href="pay_success.html">确认支付</a>
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
<script type="text/javascript" src='/qmss/Application/Home/Common/js/pay.js'></script>
<script src="/qmss/Application/Home/Common/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
$(".nav-pills li").eq(4).addClass("current");
$(function(){
	$(window).load(function(){
		$(".e-payment").mCustomScrollbar({

			// scrollInertia:150

		});
	});
});
</script>