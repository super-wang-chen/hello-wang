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
<link rel="stylesheet" type="text/css" href="/qmss/Application/Home/Common/css/news.css">

	<!-- main开始 -->
	<div class="main">
		<div class="container">
			<h2>新闻中心</h2>
			<h3>News center</h3>
			<p>当前位置：<a href="<?php echo U('Index/index');?>">首页</a>><span>新闻中心</span></p>
			<div class="content">
				<ul>
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="row">
						<div class="col-md-4 col-lg-4 con-image" style="background: rgba(0, 0, 0, 0) url('/qmss/<?php echo ($vo["image"]); ?>') no-repeat  scroll 0 0;background-size:100% 100%;
    height: 250px;"><a href="/qmss/index.php/Home/News/news_details?id=<?php echo ($vo["id"]); ?>"></a></div>
						<div class="col-md-8 col-lg-8 con-text">
							<h4><a href="/qmss/index.php/Home/News/news_details?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h4>
							<p><?php echo (mb_substr($vo["content"],0,150,utf8)); ?></p>
							<span><?php echo ($vo["create_time"]); ?></span>
							<a href="/qmss/index.php/Home/News/news_details?id=<?php echo ($vo["id"]); ?>">查看详情>></a>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<div aria-label="Page navigation" class='page'>
				 <?php echo ($show); ?>
				    <!-- <ul>
					    <li>
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
					    </li>
				    </ul> -->
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
<script type="text/javascript" src="/qmss/Application/Home/Common/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
$(".nav-pills li").eq(3).addClass("current");
  $(function(){
    $(".page div a").live('click',function(){
      //alert(1);
      var url = $(this).attr('href');
      $.ajax({
        type:"GET",
        url:url,
        dataType:"json",
        success:function(msg){
          var show = msg.show;
          var str = "";
          for(var i=0;i<msg.lists.length;i++){
          	str+='<li class="row">';
          	str+='<div class="col-md-4 col-lg-4 con-image" style="background: rgba(0, 0, 0, 0) ';
          	str+="url('/qmss/"+msg.lists[i]['image']+"') no-repeat  scroll 0 0;background-size:100% 100%;";
          	str+='height: 250px;"><a href="/qmss/index.php/Home/News/news_details?id='+msg.lists[i]["id"]+'"></a></div>';
            str+='<div class="col-md-8 col-lg-8 con-text">';
			str+='<h4><a href="/qmss/index.php/Home/News/news_details?id='+msg.lists[i]["id"]+'">'+msg.lists[i]["title"]+'</a></h4>';
			str+='<p>'+msg.lists[i]["content"].substr(0,150)+'</p>';
			str+='<span>'+msg.lists[i]["create_time"]+'</span>';
			str+='<a href="/qmss/index.php/Home/News/news_details?id='+msg.lists[i]["id"]+'">查看详情>></a>';
			str+='</div>';
			str+='</li>';
          }
          $(".content ul").html(str);
          $(".page").html(show);
        }
      })
      return false;
    })
  })
</script>