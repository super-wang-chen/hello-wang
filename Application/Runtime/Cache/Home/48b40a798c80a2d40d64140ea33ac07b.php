<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
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
					<a href="index.html"><img class="logo" src="/qmss/Application/Home/Common/images/logo.png" alt='logo加载失败' title=""></a>
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
							<li class="current"><a href="<?php echo U('News/index?p=1');?>">新闻中心</a></li>
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
<title>订单详情</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/order_details.css">
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/jquery.mCustomScrollbar.css">

<!-- main开始 -->
	<div class="main">
		<div class="container">
			<p>当前位置：<a href="index.html">首页</a>><a href="user.html">会员中心</a>><a href="order.html">我的订单</a>><span>订单详情</span></p>
			<div class="content">
				<div class="row">
					<div class="col-sm-3 col-md-3 col-lg-3 hidden-xs">
						<div class="order-subnav">
							<h3>会员中心</h3>
							<dl>
								<dt><i class="order-user"></i>个人中心</dt>
								<dd><a href="center">基本资料</a></dd>
								<dd><a href="javascript:;">修改资料</a></dd>
								<dd><a href="collect">我的收藏</a></dd>
								<dd><a href="javascript:;">历史记录</a></dd>
								
								<dt><i class="order-form"></i>订单中心</dt>
								<dd><a href="order_lists.html?p=1" class="cur">我的订单</a></dd>
								<dd><a href="javascript:;">取消订单</a></dd>
								<dd><a href="javascript:;">我的评价</a></dd>
								<dd><a href="address.html">收货地址</a></dd>
								
								<dt><i class="order-wallet"></i>我的钱包</dt>
								<dd><a href="javascript:;">我的余额</a></dd>
								<dd><a href="javascript:;">优惠券</a></dd>
								<dd><a href="javascript:;">我的评价</a></dd>
								<dd><a href="javascript:;">我的积分</a></dd>
								
								<dt><i class="order-safe"></i>安全中心</dt>
								<dd><a href="javascript:;">修改密码</a></dd>
								<dd><a href="javascript:;">绑定手机</a></dd>
								<dd><a href="javascript:;">密保问题</a></dd>
								
							</dl>
						</div>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 order-content">
						<div class="row order-header hidden-xs">
							<div class="col-sm-12 col-md-3 col-lg-3 header-left">
								<span>订单号：<?php echo ($data[0]["order_num"]); ?></span>
								<h2><?php echo ($data[0]["state"]); ?></h2>
							</div>
							<div class="col-sm-12 col-md-9 col-lg-9 header-right">
								<span>物流跟踪信息：</span>
								<div class="info-list">
									<ul>
										<li class="cur">
											<i></i>
											<span>2016-11-04 15:48:05</span>
											<p>感谢您在青木三色购物，欢迎您再次光临！</p> 			
										</li>
										<li>
											<i></i>
											<span>2016-11-03 11:01:10</span>
											<p>【华南众包站】快递员【罗聪】已出发，联系电话：18118760488 感谢您的耐心等待】</p> 
										</li>
										<li>
											<i></i>
											<span>2016-11-03 07:56:19</span>
											<p>您的订单在【深圳海城站】验货完成，正在分配配送员</p>
										</li>
										<li>
											<i></i>
											<span>2016-11-02 23:01:18</span>
											<p>您的订单在【深圳松岗分拨中心】分拣完成</p>
										</li>
										<li>
											<i></i>
											<span>2016-11-03 11:01:10</span>
											<p>【华南众包站】快递员【罗聪】已出发，联系电话：18118760488 感谢您的耐心等待】</p> 
										</li>
										<li>
											<i></i>
											<span>2016-11-03 07:56:19</span>
											<p>您的订单在【深圳海城站】验货完成，正在分配配送员</p>
										</li>
										<li>
											<i></i>
											<span>2016-11-02 23:01:18</span>
											<p>您的订单在【深圳松岗分拨中心】分拣完成</p>
										</li>
									</ul>
								</div>									
							</div>
						</div>
						<div class="order-table hidden-xs">
							<table>
								<thead>
									<tr>
										<td><i class="icon01"></i></td>
										<td><span></span></td>
										<td><i class="icon02"></i></td>
										<td><span></span></td>
										<td><i class="icon03"></i></td>
										<td><span></span></td>
										<td><i class="icon04"></i></td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><span>提交订单</span><span>2016-11-02</span><span>12:47:55</span></td>
										<td></td>
										<td><span>付款成功</span><span>2016-11-02</span><span>12:48:55</span></td>
										<td></td>
										<td><span>卖家发货</span><span>2016-11-02</span><span>12:48:55</span></td>
										<td></td>
										<td><span>确认收货</span><span>2016-11-04</span><span>12:48:55</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="order-info">
							<div class="receiver-info">
								<h4>收货人信息</h4>
								<p>收件人：<?php echo ($data[0]["name"]); ?></p>
								<p>联系电话：<?php echo ($data[0]["phone"]); ?></p>
								<p>收货地址：<?php echo ($data[0]["address"]); ?></p>
								<p>支付方式：在线支付</p>
							</div>
							<div class="bill-info hidden-xs">
								<h4>发票信息</h4>
								<p>发票类型：普通发票</p>
								<p>发牌抬头：个人</p>
								<p>发票内容：购买商品明细</p>
							</div>
						</div>
						<div class="order-footer">
							<table class="hidden-xs">
								<thead>
									<tr>
										<td>商品信息</td>
										<td>金额</td>
										<td>数量</td>
										<td>收件人</td>
										<td>状态</td>
									</tr>
								</thead>
								<tbody>
								<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
										<td>
											<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($vo["pro_id"]); ?>"><img src="/qmss<?php echo ($vo["image"]); ?>" alt="" title="" style="width: 109px;height: 118px;"></a>
											<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($vo["pro_id"]); ?>"><?php echo ($vo["pro_name"]); ?></a>
										</td>
										<td class="price">￥<?php echo ($vo["price"]); ?></td>
										<td><?php echo ($vo["number"]); ?></td>
										<td><?php echo ($vo["name"]); ?></td>
										<td><?php echo ($vo["state"]); ?></td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
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
<script type="text/javascript" src='/qmss/Application/Home/Common/js/jquery.mCustomScrollbar.concat.min.js'></script>
<script type="text/javascript">
$(function(){
	$(window).load(function(){
		$(".info-list").mCustomScrollbar({

			// scrollInertia:150

		});
	});
});
</script>