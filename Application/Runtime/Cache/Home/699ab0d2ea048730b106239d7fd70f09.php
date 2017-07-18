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
<title>会员中心</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/user.css">

	<!-- main开始 -->
	<div class="main">
		<div class="container">
			<p>当前位置：<a href="<?php echo U('Index/index');?>">首页</a>><span>会员中心</span></p>
			<div class="content">
				<div class="row">
					<div class="col-sm-3 col-md-3 col-lg-3 hidden-xs">
						<div class="order-subnav">
							<h3>会员中心</h3>
							<dl>
								<dt><i class="order-user"></i>个人中心</dt>
								<dd><a href="<?php echo U('Shopping/center');?>" class="cur">基本资料</a></dd>
								<!-- <dd><a href="javascript:;">修改资料</a></dd> -->
								<!-- <dd><a href="<?php echo U('Shopping/center');?>">我的收藏</a></dd> -->
								<!-- <dd><a href="javascript:;">历史记录</a></dd> -->
								
								<dt><i class="order-form"></i>订单中心</dt>
								<dd><a href="<?php echo U('Shopping/order_lists');?>?p=1">我的订单</a></dd>
								<!-- <dd><a href="javascript:;">取消订单</a></dd>
								<dd><a href="javascript:;">我的评价</a></dd> -->
								<dd><a href="<?php echo U('Shopping/address');?>">收货地址</a></dd>
								
								<!-- <dt><i class="order-wallet"></i>我的钱包</dt>
								<dd><a href="javascript:;">我的余额</a></dd>
								<dd><a href="javascript:;">优惠券</a></dd>
								<dd><a href="javascript:;">我的评价</a></dd>
								<dd><a href="javascript:;">我的积分</a></dd>
								
								<dt><i class="order-safe"></i>安全中心</dt>
								<dd><a href="javascript:;">修改密码</a></dd>
								<dd><a href="javascript:;">绑定手机</a></dd>
								<dd><a href="javascript:;">密保问题</a></dd> -->
								
							</dl>
						</div>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 order-content">
						<div class="user-top">
							<div class="row user-header">
								<div class="col-md-3 col-lg-3 user-left hidden-sm">
									<img src="/qmss/Application/Home/Common/images/user_image01.png" alt='' title=''>
								</div>
								<div class="col-sm-12 col-md-9 col-lg-9 user-right">
									<h3>您好！    <span>V<sub><?php echo ($user["vip"]); ?></sub></span>会员    <?php echo ($user["user"]); ?>，欢迎来到会员中心</h3>
									<ul>
										<li><a href='javascript:;'>待付款（0）</a></li>
										<li><a href='javascript:;'>待发货（0）</a></li>
										<li><a href='javascript:;'>待收货（0）</a></li>
										<li><a href='javascript:;'>待评价（0）</a></li>
									</ul>
									<p><a href="javascript:;">我的积分（<?php echo ($user["integral"]); ?>）</a><a href="javascript:;">我的优惠券（<?php echo ($user["coupons"]); ?>）</a></p>
									<p class="link"><a href="<?php echo U('Shopping/address');?>">管理收货地址</a></p>
								</div>
							</div>
							<div class="user-footer hidden-xs">
								<h4 class="hidden-md hidden-sm ">我的会员成长值</h4>
								<table>
									<tr>
										<td>Vip1</td>
										<td>Vip2</td>
										<td>Vip3</td>
										<td>Vip4</td>
										<td>Vip5</td>
										<td>Vip6</td>
										<td>Vip7</td>
										<td>Vip8</td>
									</tr>
									<tr>
										<td>0</td>
										<td>500</td>
										<td>1000</td>
										<td>1600</td>
										<td>2200</td>
										<td>3000</td>
										<td>5000</td>
										<td>7000</td>
									</tr>
								</table>
								<div class="progress-line">
									<div class="bg-line"></div>
									<span style="width: <?php echo ($user['exp']); ?>%"></span>
									<i></i>
									<i class="line01"></i>
									<i class="line02"></i>
									<i class="line03"></i>
									<i class="line04"></i>
								</div>
							</div>
						</div>
						<div class="user-bottom">
							<h2>最近订单</h2>
							<table class="hidden-xs">
								<thead>
									<tr>
										<td>商品信息</td>
										<td>金额</td>
										<td>数量</td>
										<td colspan="2">交易时间</td>
										<td>状态</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<p>订单编号：<?php echo ($order["order_num"]); ?></p>
											<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($order['pro_id']); ?>"><img src="/qmss/<?php echo ($order['image']); ?>" alt="" title="" style="width: 147px;height: 160px;"></a>
											<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($order['pro_id']); ?>"><?php echo ($order["pro_name"]); ?></a>
										</td>
										<td>￥<?php echo ($order["price"]); ?></td>
										<td><?php echo ($order["number"]); ?></td>
										<td colspan="2"><?php echo (date("y-m-d",$order["create_time"])); ?></td>
										<td><?php echo ($order["state"]); ?></td>
									</tr>
								</tbody>
							</table>
							
						</div>							
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
<script type="text/javascript">
	$(".nav-pills li").eq(4).addClass("current");
</script>