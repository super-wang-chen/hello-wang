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
<title>我的订单</title>
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/order.css">

	<div class="main">
		<div class="container">
			<p>当前位置：<a href="<?php echo U('Index/index');?>">首页</a>><a href="<?php echo U('Shopping/center');?>">会员中心</a>><span>我的订单</span></p>
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
						<div class="row order-header" >
							<ul class="col-sm-12 col-md-6 col-lg-6">
								<li><a href="/qmss/index.php/Home/Shopping/order_lists?p=1&state=全部" class="cur">全部订单</a></li>
								<li><a href="/qmss/index.php/Home/Shopping/order_lists?p=1&state=已支付">已完成</a></li>
								<li><a href="/qmss/index.php/Home/Shopping/order_lists?p=1&state=未支付">待付款</a></li>
							</ul>
							<ul class="col-sm-12 col-md-6 col-lg-6">
								<li><a href="/qmss/index.php/Home/Shopping/order_lists?p=1&state=待发货">待发货</a></li>
								<li><a href="/qmss/index.php/Home/Shopping/order_lists?p=1&state=待收货">待收货</a></li>
								<li><a href="/qmss/index.php/Home/Shopping/order_lists?p=1&state=待评价">待评价</a></li>
							</ul>
						</div>
						<table class="hidden-xs">
							<thead>
								<tr>
									<th>商品信息</th>
									<th>金额</th>
									<th class="hidden-sm">收货人</th>
									<th>状态</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td>
										<p>订单编号：<?php echo ($vo["order_num"]); ?></p>
										<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($vo["pro_id"]); ?>"><img src="/qmss/<?php echo ($vo["image"]); ?>" alt="" title="" style="width: 147px;height: 160px;"></a>
										<a href="<?php echo U('Product/pro_details');?>?id=<?php echo ($vo["pro_id"]); ?>"><?php echo ($vo["pro_name"]); ?></a>	
									</td>
									<td>￥<?php echo ($vo["price"]); ?></td>
									<td class="hidden-sm"><?php echo ($vo["name"]); ?></td>
									<td>
										<a href="javascript:;"><?php echo ($vo["state"]); ?></a><br/>
										<a href="order_details?id=<?php echo ($vo["order_num"]); ?>">订单详情</a>
										<a href="order_details?id=<?php echo ($vo["order_num"]); ?>">查看物流</a>
									</td>
									<td>
										<a href="<?php echo U('Product/index');?>?p=1" class="cur">再来一单</a>
										<a href="order_del?id=<?php echo ($vo["order_num"]); ?>" class="delete">删除订单</a>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
						
						<div aria-label="Page navigation" class='page'>
						    
						    <?php echo ($show); ?>
							   <!--  <li>
							        <a href="#" aria-label="Previous">
							        	<span aria-hidden="true">上一页</span>
							        </a>
							    </li>
							    <li class="active"><a href="#">1</a></li>
							    <li><a href="#">2</a></li>
							    <li><a href="#">3</a></li>
							    <li><a href="#">...</a></li>
							    <li>
							        <a href="#" aria-label="Next">
							        	<span aria-hidden="true">下一页</span>
							        </a>
							    </li>  -->
						    
						    <!-- <form>
							    <label>第<input type="" name="">页</label>
							    <button type="submit">确定</button>
							</form> -->
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
<script type="text/javascript" src='/qmss/Application/Home/Common/js/order.js'></script>
<script type="text/javascript" src="/qmss/Application/Home/Common/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
$(".nav-pills li").eq(4).addClass("current");
	$('.delete').live('click',function(){
		if(confirm('是否删除')){
			var url=$(this).attr("href");
			$.ajax({
				url:url,
				success:function(e){}
			})
			$(this).parents('tr').remove();
		};
		return false;
	});
	$(".order-header ul li a").click(function(){
		$(".order-header ul li a").removeClass();
		$(this).addClass("cur");
	});
	$(".page div a,.order-header ul li a").live('click',function(){
      var url = $(this).attr('href');
      $.ajax({
        type:"GET",
        url:url,
        dataType:"json",
        success:function(msg){
          var show = msg.show;
          var str = "";
          for(var i=0;i<msg.lists.length;i++){
				str+='<tr>';
				str+='<td>';
				str+='<p>订单编号：'+msg.lists[i]["order_num"]+'</p>';
				str+='<a href="';
				str+="<?php echo U('Product/pro_details');?>?id="+msg.lists[i]["pro_id"];
				str+='"><img src="/qmss/'+msg.lists[i]["image"]+'" alt=""';
				str+='title="" style="width: 147px;height: 160px;"></a>';
				str+='<a href="';
				str+="<?php echo U('Product/pro_details');?>?id="+msg.lists[i]["pro_id"];
				str+='">'+msg.lists[i]["pro_name"]+'</a>';	
				str+='</td>';
				str+='<td>￥'+msg.lists[i]["price"]+'</td>';
				str+='<td class="hidden-sm">'+msg.lists[i]["name"]+'</td>';
				str+='<td>';
				str+='<a href="javascript:;">'+msg.lists[i]["state"]+'</a><br/>';
				str+='<a href="order_details?id='+msg.lists[i]["order_num"]+'">订单详情</a>';
				str+='<a href="order_details?id='+msg.lists[i]["order_num"]+'">查看物流</a>';
				str+='</td>';
				str+='<td>';
				str+='<a href="';
				str+="<?php echo U('Product/index');?>?p=1";
				str+='" class="cur">再来一单</a>';
				str+='<a href="order_del?id='+msg.lists[i]["order_num"]+'" class="delete">删除订单</a>';
				str+='</td>';
				str+='</tr>';
          }
          $(".hidden-xs tbody").html(str);
          $(".page").html(show);
        }
      })
      return false;
    })
</script>