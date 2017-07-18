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
<title>产品详情</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/pro_details.css">
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/jquery.mCustomScrollbar.css">
	<!-- main开始 -->
	<div class="main">
		<div class="container">
			<p>当前位置：<a href="<?php echo U('Index/index');?>">首页</a>><a href="<?php echo U('Product/index');?>?p=1">产品中心</a>><span>产品详情</span></p>
			<div class="content">
				<!-- 副导航开始 -->
				<div class="subnav">
					<?php if(is_array($cate_all)): $i = 0; $__LIST__ = $cate_all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["id"] == $product['cate']): ?><a href="/qmss/index.php/Home/Product/index?cate=<?php echo ($vo["id"]); ?>&p=1" class="selected" ><?php echo ($vo["name"]); ?></a>
					<?php else: ?><a href="/qmss/index.php/Home/Product/index?cate=<?php echo ($vo["id"]); ?>&p=1" ><?php echo ($vo["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<!-- 副导航结束 -->

				<!-- tab选项卡开始 -->
				<div class="tab">
					<div class="row">
						<div class="col-sm-12 col-md-5 col-lg-6">
							<div class="album">
								<img src="/qmss/<?php echo ($image[0]); ?>" alt="" title="">
								<div class="album_show">
									<span class="pro_prev"><img src="/qmss/Application/Home/Common/images/pro_prev.png" alt="" title=""></span>
										<div class="view">
											<ul>
												<?php if(is_array($image)): $i = 0; $__LIST__ = $image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><li><img src="/qmss/<?php echo ($voo); ?>" alt="" title="" style="width: 108px;height: 108px"></li><?php endforeach; endif; else: echo "" ;endif; ?>
											</ul>
										</div>
									<span class="pro_next"><img src="/qmss/Application/Home/Common/images/pro_next.png" alt="" title=""></span>	
								</div>								
							</div>
						</div>
						<div class="col-sm-12 col-md-7 col-lg-6">
							<div class="pro_info">
								<h2><?php echo ($product["pro_name"]); ?></h2>
								<div class="pro_text">
									<div class="price">
										价格:  
										<span>￥<?php echo ($product["new_price"]); ?></span>
									</div>
									<?php if(is_array($attr)): foreach($attr as $k=>$v): ?><div class="color" id="<?php echo ($k); ?>">
										<?php echo ($k); ?>:
										<?php if(is_array($v)): $i = 0; $__LIST__ = $v;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><span><?php echo ($v1); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
									</div><?php endforeach; endif; ?>
									
									<div class="number">
										数量:  
										<a href="javascript:;" class="sub">-</a>
										<input type="" name="num" value="1">
										<a href="javascript:;" class="add">+</a>
									</div>
									<div class="link">
										<a href="<?php echo U('Shopping/pay_cart');?>?id=<?php echo ($product['id']); ?>" id="pay">立即购买</a>
										<a href="<?php echo U('Shopping/add_cart');?>?id=<?php echo ($product['id']); ?>" id="cart" >加入购物车</a>
									</div>
									<div class="service">
										<span class="label">服务保证:  </span>
										<p>
											<span><i class="quality"></i>正品保证</span>
											<span><i class="on_time"></i>按时发货</span>
											<span><i class="seven_day"></i>7天无理由</span>
										<p>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- tab选项卡结束 -->	
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
<script type="text/javascript" src='/qmss/Application/Home/Common/js/pro_details.js'></script>
<script src="/qmss/Application/Home/Common/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="/qmss/Application/Home/Common/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
$(".nav-pills li").eq(2).addClass("current");
$(function(){
	$(".view ul li").eq(0).addClass("cur");
	$(".color span:first-child").addClass("selected");
	$("#cart").click(function(){
		var url=$(this).attr('href');
		var num=$("[name='num']").val();
		var i=0;
		var str="{";
		while($(".color").eq(i).attr('id')){
			var a=$(".color").eq(i).attr('id');
			var b=$(".color span[class='selected']").eq(i).html();
			str+='"'+a+'"'+':"'+b+'",';
			i++;
		}
		str = str.substr(0,str.length-1);
		str += "}";
		$.ajax({
			type:"GET",
            url:url,
            data:"number="+num+"&attr="+str,
            success:function(e){
            	if(e==1){
            		alert("添加成功");
            	}else{
            		alert("请登录");
            	}
            }
		})
		return false;
	});
	$("#pay").click(function(){
		var url=$(this).attr('href');
		var num=$("[name='num']").val();
		var i=0;
		var str="{";
		while($(".color").eq(i).attr('id')){
			var a=$(".color").eq(i).attr('id');
			var b=$(".color span[class='selected']").eq(i).html();
			str+='"'+a+'"'+':"'+b+'",';
			i++;
		}
		str = str.substr(0,str.length-1);
		str += "}";
		$.ajax({
			type:"GET",
            url:url,
            data:"number="+num+"&attr="+str,
            success:function(e){
            	if(e==1){
            		$(window).attr('location',"<?php echo U('Shopping/comfirm_order');?>");
            	}else{
            		alert("请登录");
            	}
            }
		})
		return false;
	});
	$(window).load(function(){
		$(".pro_text").mCustomScrollbar({

			// scrollInertia:150

		});
	});

});
</script>