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
<title>联系我们</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/contact_us.css">

<!-- main开始 -->
	<div class="main">
		<div class="container">
			<h2>联系我们</h2>
			<h3>Contact us</h3>
			<p>当前位置：<a href="<?php echo U('Index/index');?>">首页</a>><span>联系我们</span></p>
			<div class="content">
				<div class="map">
					<iframe src="/qmss/Application/Home/Common/map.html" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6 information">
						<p><span>网址：<?php echo ($data["url"]); ?></span><span>电话：<?php echo ($data["phone"]); ?></span></p>
						<p><span>QQ：<?php echo ($data["qq"]); ?></span><span>邮箱：<?php echo ($data["email"]); ?></span></p>
						<p>地址：<?php echo ($data["address"]); ?></p>
						<ul class="hidden-xs">
							<li>
								<span>青木三色官方微信</span><br/>
								<img src="/qmss/<?php echo ($data["official_image"]); ?>" style="height: 114px; width: 114px"  />
							</li>
							<li>
								<span>客服微信</span><br/>
								<img src="/qmss/<?php echo ($data["service_image"]); ?>" style="height: 114px; width: 114px"  />
							</li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 message">
						<form action="/qmss/index.php/Home/Contact/index" method="post" >
							<label>
								<input class="name" type="text" name="" value="请输入您的姓名" onfocus="if (this.value=='请输入您的姓名') value=''" onblur="if (this.value=='') value='请输入您的姓名'" id="username" data-toggle="popover" data-placement="bottom" data-content="用户名不能为空">
								<input class="phone" type="text" name="" value="请输入您的手机" onfocus="if (this.value=='请输入您的手机') value=''" onblur="if (this.value=='') value='请输入您的手机'" id="phone" data-toggle="popover" data-placement="bottom" data-content="手机号不能为空">
							</label>
							<label>
								<textarea id="message" data-toggle="popover" data-placement="bottom" data-content="留言不能为空">请输入您想对我们说的话...</textarea>
							</label>
							<label>
								<input class="validatebox" type="" name="" maxlength="5" value="请输入验证码" onfocus="if (this.value=='请输入验证码') value=''" onblur="if (this.value=='') value='请输入验证码'" id="verify" data-toggle="popover" data-placement="top" data-content="验证码不能为空">
								<img style="cursor:pointer; width: 130px;height: 40px;" class="img"  src="/qmss/index.php/Home/Contact/ver" onClick="this.src=this.src+'?'+Math.random();" title="看不清楚?点击刷新验证码?">
							</label>
							<label>
								<button type="submit">提交</button>
								<button type="reset">重置</button>
							</label>
						</form>
					</div>
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
<script type="text/javascript" src='/qmss/Application/Home/Common/js/contact_us.js'></script>
<script type="text/javascript">
	$(".nav-pills li").eq(5).addClass("current");
</script>