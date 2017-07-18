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
<title>新闻中心</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/news_details.css">
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/jquery.mCustomScrollbar.css">

	<!-- main开始 -->
	<div class="main">
		<div class="container">
			<p>当前位置：<a href="<?php echo U('Index/index');?>">首页</a>><a href="<?php echo U('News/index');?>?p=1">新闻中心</a>><span>新闻详情</span></p>
			<div class="content">
				<h2><?php echo ($news["title"]); ?></h2>
				<span>时间：<?php echo (date("Y年m月d日 H:m:s",$news["create_time"])); ?></span>
				<div class="article">
					
					<span class="left-image" style="background: rgba(0, 0, 0, 0) url('/qmss/<?php echo ($image[0]); ?>') no-repeat scroll 50% center;background-size:100% 100%" ></span>
					<span class="right-image" style="background: rgba(0, 0, 0, 0) url('/qmss/<?php echo ($image[1]); ?>') no-repeat scroll 50% center;background-size:100% 100%"></span>
					<p><?php echo ($news["content"]); ?></p>
				</div>
				<div class="link">
				<?php if($pre): ?><a href="/qmss/index.php/Home/News/news_details?id=<?php echo ($pre['id']); ?>">上一篇：<?php echo ($pre["title"]); ?></a>
				<?php else: ?> <a href="javascript:;">上一篇：没有了</a><?php endif; ?>
				<?php if($next): ?><a href="/qmss/index.php/Home/News/news_details?id=<?php echo ($next['id']); ?>">下一篇：<?php echo ($next["title"]); ?></a>
				<?php else: ?> <a href="javascript:;">下一篇：没有了</a><?php endif; ?>
					
					
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
<script src="/qmss/Application/Home/Common/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="/qmss/Application/Home/Common/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
$(".nav-pills li").eq(3).addClass("current");
$(function(){

	$(window).load(function(){
		$(".article").mCustomScrollbar({

			// scrollInertia:150

		});
	});
});
</script>