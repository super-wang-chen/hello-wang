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
<title>收货地址</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/address.css">


	<!-- main开始 -->
	<div class="main">
		<div class="container">
			<p class="hidden-xs">当前位置：<a href="<?php echo U('Index/index');?>">首页</a>><a href="<?php echo U('Shopping/center');?>">会员中心</a>><span>收货地址</span></p>
			<div class="content">
				<div class="row">
					<div class="col-sm-3 col-md-3 col-lg-3 hidden-xs">
						<div class="order-subnav">
							<h3>会员中心</h3>
							<dl>
								<dt><i class="order-user"></i>个人中心</dt>
								<dd><a href="center">基本资料</a></dd>
								<!-- <dd><a href="javascript:;">修改资料</a></dd> -->
								<!-- <dd><a href="<?php echo U('Shopping/center');?>">我的收藏</a></dd> -->
								<!-- <dd><a href="javascript:;">历史记录</a></dd> -->
								
								<dt><i class="order-form"></i>订单中心</dt>
								<dd><a href="order_lists.html?p=1" class="cur">我的订单</a></dd>
								<!-- <dd><a href="javascript:;">取消订单</a></dd>
								<dd><a href="javascript:;">我的评价</a></dd> -->
								<dd><a href="address.html">收货地址</a></dd>
								
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
						<a href="javascript:;"><i></i>添加收货地址</a>
						<form class="hidden-xs" action="/qmss/index.php/Home/Shopping/address" method="post">
							<label>
								<span>收件人：</span>
								<input type="text" value="输入收件人姓名" onfocus="if (this.value=='输入收件人姓名') value=''" onblur="if (this.value=='') value='输入收件人姓名'" id="username" data-toggle="popover" data-placement="bottom" data-content="用户名不能为空" name="name">
							</label>
							<label>
								<span>地址：</span>
								<select name="province3" id="province" data-toggle="popover" data-placement="bottom" data-content="请选择省份">
								</select>
								<select name="city3" id="city"
								data-toggle="popover" data-placement="bottom" data-content="请选择市">
								</select>
								<select name="area3" id="area" data-toggle="popover" data-placement="bottom" data-content="请选择区">
									
								</select>
							</label>
							<label>
								<span>详细地址：</span>
								<textarea id="street" data-toggle="popover" data-placement="bottom" data-content="输入街道或小区名称" name="addr">输入街道或小区名称</textarea>
							</label>
							<label>
								<span>联系方式：</span>
								<input type="text" value="输入电话号码" onfocus="if (this.value=='输入电话号码') value=''" onblur="if (this.value=='') value='输入电话号码'" id="phone" data-toggle="popover" data-placement="bottom" data-content="手机号不能为空" name="phone">
							</label>
							<label class="def-address">
								<input type="checkbox" name="check">
								<p>设为默认地址</p>
							</label>
							<label>
								<span></span>
								<button type="submit" class="selected">保存</button>
								<button type="reset">取消</button>
							</label>
						</form>
						<div class="address row" name="/qmss/index.php/Home/Shopping/address_del">
						<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["id"] == $addr): ?><div class="address-info default col-xs-12 col-sm-5 col-md-5 col-lg-5" name="<?php echo ($vo["id"]); ?>">
									<span>默认地址</span>
									<p><?php echo ($vo["name"]); ?>   收</p>
									<p><?php echo ($vo["phone"]); ?></p>
									<p><?php echo ($vo["address"]); ?></p>
									<button type="button" class="delete" name="<?php echo ($vo["id"]); ?>">删除</button>
									<i></i>
								</div>
							<?php else: ?>
								<div class="address-info col-xs-12 col-sm-5 col-md-5 col-lg-5" name="<?php echo ($vo["id"]); ?>">
									<span>默认地址</span>
									<p><?php echo ($vo["name"]); ?>   收</p>
									<p><?php echo ($vo["phone"]); ?></p>
									<p><?php echo ($vo["address"]); ?></p>
									<button type="button" class="delete" name="<?php echo ($vo["id"]); ?>">删除</button>
									<i></i>
								</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							<!-- <div class="address-info default col-xs-12 col-sm-5 col-md-5 col-lg-5">
								<span>默认地址</span>
								<p>六娃   收</p>
								<p>12580112110</p>
								<p>广东省   广州市   白云区中山大道东213号</p>
								<button type="button" class="delete">删除</button>
								<button type="button" class="change">修改</button>
								<i></i>
							</div>
							<div class="address-info col-xs-12 col-sm-5 col-md-5 col-lg-5">
								<span>默认地址</span>
								<p>六娃   收</p>
								<p>12580112110</p>
								<p>广东省   广州市   白云区中山大道东213号</p>
								<button type="button" class="delete">删除</button>
								<button type="button" class="change">修改</button>
								<i></i>
							</div> -->
							
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
<script type="text/javascript" src='/qmss/Application/Home/Common/js/address.js'></script>
<script type="text/javascript" src='/qmss/Application/Home/Common/js/PCASClass.js'></script>
<script type="text/javascript">
	//实例化地区多久联动效果
	$(".nav-pills li").eq(4).addClass("current");
    new PCAS("province3","city3","area3");
</script>