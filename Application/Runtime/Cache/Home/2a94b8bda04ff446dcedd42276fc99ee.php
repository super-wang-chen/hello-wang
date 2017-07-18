<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<base href="/qmss/" />
	<title>商城首页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/libs/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/common.css">
	<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/index.css">
	<script type="text/javascript" charset="utf-8" src="/qmss/Public/Validform/jquery-1.6.2.min.js"></script>
</head>
<body>
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

	<!-- sm-banner开始 -->
	<div id="sm-banner">
		<ul>
			<li class="cur"><a href="pro_details.html"><img src="/qmss/Application/Home/Common/images/sm_banner1.jpg" alt="" title=""></a></li>
			<li><a href="pro_details.html"><img src="/qmss/Application/Home/Common/images/sm_banner2.jpg" alt="" title=""></a></li>
			<li><a href="pro_details.html"><img src="/qmss/Application/Home/Common/images/sm_banner3.jpg" alt="" title=""></a></li>
		</ul>
		<ol>
			<li class="cur"></li>
			<li></li>
			<li></li>
		</ol>
	</div>
	<!-- sm-banner结束 -->


	<div class="main-top">
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
							<form  action="<?php echo U('Product/pro_find?p=1');?>" method="get">
								<input type="text" name="keyword">
								<button type="submit"><img src="/qmss/Application/Home/Common/images/search.png" title="" alt=""></button>
							</form>
							<a href="<?php echo U('Shopping/index');?>"><img src="/qmss/Application/Home/Common/images/shopping.png" alt="" title="">购物车</a>
						</div>
						<div class='nav'>
							<ul class="nav-pills">
								<li class="current"><a href="<?php echo U('Index/index');?>" class="home">首页</a></li>
								<li><a href="<?php echo U('Brand/index');?>">品牌介绍</a></li>
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

		<!-- banner开始 -->
		<div id="banner" class="hidden-xs">
			<ul>
				<!-- <li class="cur"><a href="pro_details.html"><img src="/qmss/Application/Home/Common/images/pc_banner1.jpg" alt="" title=""></a></li>
				<li><a href="pro_details.html"><img src="/qmss/Application/Home/Common/images/pc_banner2.jpg" alt="" title=""></a></li> -->
				<?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($vo["pro_id"]); ?>"><img src="/qmss<?php echo ($vo["image"]); ?>" alt="" title=""></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ol>
				<li class="cur"></li>
				<li></li>
				<li></li>
			</ol>
		</div>
		<!-- banner结束 -->
	</div>
	

	<!-- main开始 -->
	<div class="main">
		<!-- 产品左右滚动开始 -->
		<div class='pro-show'>
			<a class='prev' href="javascript:;"></a>
			<div class="view">
				<ul>
					<?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><li>
						<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($voo["id"]); ?>">
							<img src="/qmss<?php echo ($voo["image"]); ?>" alt="" title="" style="width:220px; height:200px">
						</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<a class='next' href="javascript:;"></a>
		</div>
		<!-- 产品左右滚动结束 -->
	</div>	
	<!-- main结束 -->

	<!-- sm-main开始 -->
	<div class="sm-main">
		<!-- sm-nav开始 -->
		<div class="sm-nav container">
			<ul>
				<li><a href="about_us.html"><img src="/qmss/Application/Home/Common/images/sm_index1.png" alt="" title="" class="center-block">公司介绍</a></li>
				<li><a href="news.html"><img src="/qmss/Application/Home/Common/images/sm_index2.png" alt="" title="" class="center-block">新闻中心</a></li>
				<li><a href="product.html"><img src="/qmss/Application/Home/Common/images/sm_index3.png" alt="" title="" class="center-block">产品中心</a></li>
				<li><a href="contact_us.html"><img src="/qmss/Application/Home/Common/images/sm_index4.png" alt="" title="" class="center-block">联系我们</a></li>
			</ul>			
		</div>
		<!-- sm-nav结束 -->

		<!-- sm-index-product开始 -->
		<div class="container sm-index-product">
			<ul>
				<li><a href="pro_details.html"><img src="/qmss/Application/Home/Common/images/sm-index-product1.jpg" alt="" title=""><span class="pro-text01">连衣裙<span>GO!</span></span></a></li>
				<li><a href="pro_details.html"><img src="/qmss/Application/Home/Common/images/sm-index-product2.jpg" alt="" title=""><span class="pro-text02">外套<span>GO!</span></span></a></li>
				<li><a href="pro_details.html"><img src="/qmss/Application/Home/Common/images/sm-index-product3.jpg" alt="" title=""><span class="pro-text03">套装<span>GO!</span></span></a></li>
				<li><a href="pro_details.html"><img src="/qmss/Application/Home/Common/images/sm-index-product4.jpg" alt="" title=""><span class="pro-text04">针织衫<span>GO!</span></span></a></li>
			</ul> 
		</div>
		<!-- sm-index-product结束 -->
	</div>
	<!-- sm-main结束 -->

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
<script type="text/javascript" src='/qmss/Application/Home/Common/js/hammer.min.js'></script>
<script type="text/javascript" src='/qmss/Application/Home/Common/js/index.js'></script>