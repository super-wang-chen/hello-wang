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
<title>我的购物车</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/shop_cart.css">
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/jquery.mCustomScrollbar.css">
	<!-- main开始 -->
	<div class="main">
		<div class="container">
			<div class="shop-header">
				<h2>我的购物车</h2>
				<div class="shop-flow hidden-sm hidden-xs">
					<i></i>
					<ol>
						<li class="cur">我的购物车</li>
						<li>确认订单</li>
						<li>支付订单</li>
					</ol>
				</div>	
			</div>
			<div class="shop-title">
				<a href="javascript:;" class="cur">全部商品</a>
			</div>
			<div class="content">
				<form action="/qmss/index.php/Home/Shopping/comfirm_order" method="post">
					<div class="shop-cart-title row hidden-xs">
						<div class="col-sm-2 col-md-2 col-lg-2">
							<label>
								<input type="checkbox" name="" >
								<span>全选</span>
							</label>
						</div>
						<div class="col-sm-2 col-md-3 col-lg-3 pro-info">商品信息</div>
						<div class="hidden-sm col-md-2 col-lg-2">颜色分类</div>
						<div class="col-sm-2 col-md-1 col-lg-1">单价（元）</div>
						<div class="col-sm-2 col-md-2 col-lg-2">数量</div>
						<div class="col-sm-2 col-md-1 col-lg-1">金额</div>
						<div class="col-sm-2 col-md-1 col-lg-1">备注</div>
					</div>
					<ul class="shop-box hidden-xs" style="overflow: auto;">
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="shop-cart row">
							<div class="col-sm-4 col-md-5 col-lg-5 select-box">
								<label class="default"><input type="checkbox" name="check[]" value="<?php echo ($vo["id"]); ?>" >
								<input  type="hidden"  name="id[]" value="<?php echo ($vo["id"]); ?>" /></label>
								<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($vo["pro_id"]); ?>"><img src="/qmss/<?php echo ($vo["image"]); ?>" alt="" title="" style="width: 184px;height: 200px;"></a>
								<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($vo["pro_id"]); ?>" class="info-text"><?php echo ($vo["pro_name"]); ?></a>
							</div>
							<div class="hidden-sm col-md-2 col-lg-2">
								<div class="text">
								<?php if(is_array($vo["attr"])): foreach($vo["attr"] as $k=>$voo): ?><span><?php echo ($k); ?>：<?php echo ($voo); ?></span><?php endforeach; endif; ?>
								</div>	
							</div>
							<div class="col-sm-2 col-md-1 col-lg-1 subPrice">
								<div class="text">
									<span class="unitPrice">￥<?php echo ($vo["new_price"]); ?></span>
								</div>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2">
								<div class="text">
									<div class="num">
										<i class="sub"></i>
										<input type="text" name="number[]" value="<?php echo ($vo["number"]); ?>">
										<i class="add"></i>
									</div>
								</div>
							</div>
							<div class="col-sm-2 col-md-1 col-lg-1">
								<div class="text">
									<span class="subtotal">￥<?php echo ($vo["totle"]); ?></span>
								</div>
							</div>
							<div class="col-sm-2 col-md-1 col-lg-1">
								<div class="text">
									<button type="button" class="collect" name="<?php echo ($vo["id"]); ?>">收藏</button>
									<button type="button" class="delete" name="<?php echo ($vo["id"]); ?>">删除</button>
								</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					
					<div class="shop-foot">
						<p>已选商品 <span class="numTotal">0</span> 件</p>
						<p>合计（含运费）￥<span class="totalPrice">0.00</span>元</p>
						<button type="submit"><a>结算</a></button>
					</div>	
				</form>
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
<script src='/qmss/Application/Home/Common/js/jquery.mCustomScrollbar.concat.min.js'></script>
<script src='/qmss/Application/Home/Common/js/jquery-1.6.2.min.js'></script>
<script type="text/javascript" src='/qmss/Application/Home/Common/js/shop_cart.js'></script>
<script type="text/javascript">
$(".nav-pills li").eq(4).addClass("current");
	$('.delete').click(function(){
		if(confirm('是否删除')){
			var id=$(this).attr("name");
			var url="cart_del";
			$.ajax({
				url:url,
				data:"id="+id,
				success:function(e){
				}
			})
			$(this).parents('.shop-cart').remove();
			// 已选商品数量
			var checkedLen = $('.shop-cart .select-box label input:checked').length;
			var totalLen = $('.shop-cart label input').length;
		
			// 单个checkbox图标改变全选
			if(checkedLen==totalLen){
				$('.shop-cart-title label input').prop('checked',true);
				$('.shop-cart-title label').css('background','url(images/checked_box.jpg) no-repeat');
			}else{
				$('.shop-cart-title label input').prop('checked',false);
				$('.shop-cart-title label').css('background','url(images/check_box.jpg) no-repeat');
			};
			// 已选商品数量
			countNum();
			// 求总价
			countPrice();
			//滚动条
			var len = $(".shop-cart").length;
			if(len < 3){
				$(".mCSB_scrollTools").css("display",'none');
				$(".shop-box").css('height',len*212+(len-1)*30+'px');
				$(".mCSB_container").css('top',0);
			}	
		}
		return false;
	})
	$('.collect').click(function(){
		if(confirm('是否收藏')){
			var id=$(this).attr("name");
			var url="cart_collect";
			$.ajax({
				url:url,
				data:"id="+id,
				success:function(e){
					if(e==3){
						alert("收藏成功");
					}
				}
			})
		}
		return false;
	})
</script>