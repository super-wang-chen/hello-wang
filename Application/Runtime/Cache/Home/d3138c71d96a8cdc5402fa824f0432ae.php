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
<title>确认订单</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/comfirm_order.css">

	<!-- main开始 -->
	<div class="main">
		<div class="container">
			<div class="shop-header">
				<h2>确认订单</h2>
				<div class="shop-flow hidden-sm hidden-xs">
					<i></i>
					<ol>
						<li>我的购物车</li>
						<li class="cur">确认订单</li>
						<li>支付订单</li>
					</ol>
				</div>	
			</div>
			<div class="content" name="/qmss/index.php/Home/Shopping/address_del">
				<h4>收货地址</h4>
				<div class="address row">
				<?php if(is_array($address)): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i; if($voo["id"] == $curt): ?><div class="address-info default col-sm-3 col-md-3 col-lg-3"  name="<?php echo ($voo["id"]); ?>">
						<span>默认地址</span>
						<p><?php echo ($voo["name"]); ?>   收</p>
						<p><?php echo ($voo["phone"]); ?></p>
						<p><?php echo ($voo["address"]); ?></p>
						<button type="button" class="delete" name="<?php echo ($voo["id"]); ?>">删除</button>
						<i></i>
					</div>
				<?php else: ?>
					<div class="address-info col-sm-3 col-md-3 col-lg-3"  name="<?php echo ($voo["id"]); ?>">
						<span>默认地址</span>
						<p><?php echo ($voo["name"]); ?>   收</p>
						<p><?php echo ($voo["phone"]); ?></p>
						<p><?php echo ($voo["address"]); ?></p>
						<button type="button" class="delete" name="<?php echo ($voo["id"]); ?>">删除</button>
						<i></i>
					</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					<!-- <div class="address-info default col-sm-3 col-md-3 col-lg-3">
						<span>默认地址</span>
						<p>六娃   收</p>
						<p>12580112110</p>
						<p>广东省   广州市   白云区中山大道东213号</p>
						<button type="button" class="delete">删除</button>
						<button type="button" class="change">修改</button>
						<i></i>
					</div>
					<div class="address-info col-sm-3 col-md-3 col-lg-3">
						<span>默认地址</span>
						<p>六娃   收</p>
						<p>12580112110</p>
						<p>广东省   广州市   白云区中山大道东213号</p>
						<button type="button" class="delete">删除</button>
						<button type="button" class="change">修改</button>
						<i></i>
					</div> -->
					<div class="add-address col-sm-3 col-md-3 col-lg-3">
						<i></i>
						<a href="/qmss/index.php/Home/Shopping/address">新增收货地址</a>
					</div>
				</div>
				<h4>订单信息</h4>
				<table class="hidden-xs">
					<thead>
						<tr>
							<td>商品信息</td>
							<td></td>
							<td>单价/元</td>
							<td>数量</td>
							<td>金额</td>
							<td>库存</td>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($vo["pro_id"]); ?>"><img src="/qmss/<?php echo ($vo["image"]); ?>" alt="" title="" style="width: 184px;height: 200px;"></a></td>
							<td><a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($vo["pro_id"]); ?>"><?php echo ($vo["pro_name"]); ?></a></td>
							<td>￥<?php echo ($vo["new_price"]); ?></td>
							<td class="number"><?php echo ($vo["number"]); ?></td>
							<td class="price">￥<?php echo ($vo["total"]); ?></td>
							<td><?php echo ($vo["inven"]); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						<!-- <tr>
							<td><a href="pro_details.html"><img src="images/shop_cart_image.jpg" alt="" title=""></a></td>
							<td><a href="pro_details.html">青木·Ching muk 2016冬季新款修身毛呢连衣裙女中长款</a></td>
							<td>￥598.00</td>
							<td>1</td>
							<td>￥598.00</td>
							<td>有货</td>
						</tr> -->
					</tbody>
				</table>
				<!-- <ul class="visible-xs">
					<li class="order-image">
						<a href="pro_details.html"><img src="images/shop_cart_image.jpg" alt="" title=""></a>
					</li>
					<li class="order-info">
						<a href="pro_details.html">青木·Ching muk 2016冬季新款修身毛呢连衣裙女中长款</a>
						<span>单价：￥598.00</span>
						<span>数量：1</span>
						<span>总计：￥598.00</span>
					</li>
				</ul> -->
				<div class="shop-foot">
					<p>已选商品 <span class="numTotal"></span> 件</p>
					<p>合计（含运费）￥<span class="totalPrice"></span>元</p>
					<a href="/qmss/index.php/Home/Shopping/pay">结算</a>
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
<script type="text/javascript" src='/qmss/Application/Home/Common/js/comfirm_order.js'></script>
<script type="text/javascript">
	$('.address-info').click(function(){
		var url="address_change";
		var id=$(this).attr("name");
		  $.ajax({
			url:url,
			data:"id="+id,
			success:function(e){
			}
		  })
		//$(this).addClass('default').siblings().removeClass('default');
	});
</script>
<script type="text/javascript">
	$(".nav-pills li").eq(4).addClass("current");
</script>