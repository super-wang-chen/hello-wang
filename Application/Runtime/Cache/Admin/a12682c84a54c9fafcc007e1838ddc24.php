<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- <base href="/qmss/" /> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="/qmss/Application/Admin/Common/resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="/qmss/Application/Admin/Common/resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="/qmss/Application/Admin/Common/resources/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="/qmss/Application/Admin/Common/resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="/qmss/Application/Admin/Common/resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="/qmss/Application/Admin/Common/resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="/qmss/Application/Admin/Common/resources/scripts/jquery.wysiwyg.js"></script>
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="/qmss/Application/Admin/Common/resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="/qmss/Application/Admin/Common/resources/scripts/jquery.date.js"></script>
</head>
<body>
<div id="body-wrapper">
  <!-- Wrapper for the radial gradient background -->
  <div id="sidebar">
    <div id="sidebar-wrapper">
      <!-- Sidebar with logo and menu -->
      <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
      <!-- Logo (221px wide) -->
      <a href="http://www.865171.cn"><img id="logo" src="/qmss/Application/Admin/Common/resources/images/logo.png" alt="Simpla Admin logo" /></a>
      <!-- Sidebar Profile links -->
      <div id="profile-links"> Hello, <a href="#" title="Edit your profile"><?php echo ($_SESSION["username"]); ?></a>
        <br />
        <a href="/qmss/index.php/Home" title="View the Site">前台</a> | <a href="<?php echo U('Index/loginout');?>" title="Sign Out">退出</a> </div>
      <ul id="main-nav">
        <li> <a href="#" class="nav-top-item admin">管理员模块 </a>
          <ul>
            <li><a href="<?php echo U('Admin/admin_add');?>" class="admin_add">添加管理员</a></li>
            <li><a href="<?php echo U('Admin/index');?>?p=1" class="admin_lists">管理员列表</a></li>
          </ul>
        </li>    
        <li> <a href="#" class="nav-top-item news">新闻模块 </a>
          <ul>
            <li><a href="<?php echo U('News/news_add');?>" class="news_add">添加新闻</a></li>
            <li><a href="<?php echo U('News/index');?>?p=1" class="news_lists">新闻列表</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item product"> 产品模块 </a>
          <ul>
            <li><a href="<?php echo U('Product/product_add');?>" class="product_add">添加产品</a></li>
            <li><a href="<?php echo U('Product/product_lists');?>?p=1" class="product_lists">产品列表</a></li>
            <li><a href="<?php echo U('Product/product_cate_add');?>" class="cate_add">添加产品分类</a></li>
            <li><a href="<?php echo U('Product/product_cate_lists');?>" class="cate_lists">产品分类列表</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item single"> 单页面管理 </a>
          <ul>
            <li><a href="<?php echo U('Single/banner_add');?>" class="banner_add">添加轮播图</a></li>
            <li><a href="<?php echo U('Single/banner_lists');?>" class="banner">轮播图列表</a></li>
            <li><a href="<?php echo U('Single/brand');?>" class="brand">品牌介绍</a></li>
            <li><a href="<?php echo U('Single/contact');?>" class="contact" >联系我们</a></li>
            <li><a href="<?php echo U('Single/message');?>?p=1" class="message">留言列表</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item members"> 会员中心 </a>
          <ul>
            <li><a href="<?php echo U('Members/lists');?>?p=1" class="members">会员列表</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item order"> 订单中心 </a>
          <ul>
            <li><a href="<?php echo U('Order/index');?>?p=1" class="send">待发货订单</a></li>
            <li><a href="<?php echo U('Order/sended');?>?p=1" class="sended">已发货订单</a></li>
          </ul>
        </li>
      </ul>
      <!-- End #main-nav -->
      <div id="messages" style="display: none">
        <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
        <h3>3 Messages</h3>
        <p> <strong>17th May 2009</strong> by Admin<br />
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <p> <strong>2nd May 2009</strong> by Jane Doe<br />
          Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <p> <strong>25th April 2009</strong> by Admin<br />
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <form action="#" method="post">
          <h4>New Message</h4>
          <fieldset>
          <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
          </fieldset>
          <fieldset>
          <select name="dropdown" class="small-input">
            <option value="option1">Send to...</option>
            <option value="option2">Everyone</option>
            <option value="option3">Admin</option>
            <option value="option4">Jane Doe</option>
          </select>
          <input class="button" type="submit" value="Send" />
          </fieldset>
        </form>
      </div>
      <!-- End #messages -->
    </div>
  </div>
  <!-- End #sidebar -->
  <div id="main-content">
    <!-- Main Content Section with everything -->
    <noscript>
    <!-- Show a notification if the user has disabled javascript -->
    <div class="notification error png_bg">
      <div> Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
        Download From <a href="http://www.exet.tk">exet.tk</a></div>
    </div>
    </noscript>
    <!-- Page Head -->
    <h2>Welcome www.865171.cn</h2>
    <p id="page-intro">What would you like to do?</p>
    <ul class="shortcut-buttons-set">
      <li><a class="shortcut-button" href="#"><span> <img src="/qmss/Application/Admin/Common/resources/images/icons/pencil_48.png" alt="icon" /><br />
        Write an Article </span></a></li>
      <li><a class="shortcut-button" href="#"><span> <img src="/qmss/Application/Admin/Common/resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
        Create a New Page </span></a></li>
      <li><a class="shortcut-button" href="#"><span> <img src="/qmss/Application/Admin/Common/resources/images/icons/image_add_48.png" alt="icon" /><br />
        Upload an Image </span></a></li>
      <li><a class="shortcut-button" href="#"><span> <img src="/qmss/Application/Admin/Common/resources/images/icons/clock_48.png" alt="icon" /><br />
        Add an Event </span></a></li>
      <li><a class="shortcut-button" href="#messages" rel="modal"><span> <img src="/qmss/Application/Admin/Common/resources/images/icons/comment_48.png" alt="icon" /><br />
        Open Modal </span></a></li>
    </ul>
    <!-- End .shortcut-buttons-set -->
    <div class="clear"></div>
    <!-- End .clear -->
<script type="text/javascript" charset="utf-8" src="/qmss/Public/Validform/jquery-1.6.2.min.js"></script>

  <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>Content box</h3>
        <ul class="content-box-tabs">
            <li><a href="#tab1" >Table</a></li>
            <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2" class="default-tab">Forms</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab2">
          <form action="/qmss/index.php/Admin/Admin/admin_add" method="post" class="demoform" id="myform">
            <fieldset>
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
              <label>管理员名称</label>
              <input class="text-input small-input" type="text" id="username" name="username" />
              <!-- Classes for input-notification: success, error, information, attention -->
            <p>
              <label>密码</label>
              <input class="text-input medium-input datepicker" type="password" id="password"  name="password"  />
            <p>
              <label>确认密码</label>
             <input class="text-input medium-input datepicker" type="password" id="password1" />
            </p>
               <p>
              <label>邮箱</label>
                <input class="text-input medium-input datepicker" type="text" id="email"  name="email" />
             
            </p>
            <div class="level">
                <label>选择权限</label>
            <p>
               <input class="module" type="checkbox" /> 管理员模块
               <br/>
               <input class="action" type="checkbox" name="level[]" value="1"/> 新增管理员
               <input class="action" type="checkbox" name="level[]" value="2"/> 查看管理员
               <input class="action" type="checkbox" name="level[]" value="3"/> 删除管理员
            </p>
            <p>
               <input class="module" type="checkbox" /> 新闻模块
               <br/>
               <input class="action" type="checkbox" name="level[]" value="4"/> 新增新闻
               <input class="action" type="checkbox" name="level[]" value="5"/> 查看新闻列表
               <input class="action" type="checkbox" name="level[]" value="6"/> 修改新闻
               <input class="action" type="checkbox" name="level[]" value="7"/> 删除新闻
            </p>
            <p>
               <input class="module" type="checkbox" /> 产品模块
               <br/>
               <input class="action" type="checkbox" name="level[]" value="8"/> 新增产品
               <input class="action" type="checkbox" name="level[]" value="9"/> 查看产品列表
               <input class="action" type="checkbox" name="level[]" value="10"/> 修改产品
               <input class="action" type="checkbox" name="level[]" value="11"/> 删除产品
               <input class="action" type="checkbox" name="level[]" value="12"/> 新增产品分类
               <input class="action" type="checkbox" name="level[]" value="13"/> 查看产品分类列表
               <input class="action" type="checkbox" name="level[]" value="14"/> 修改产品分类
               <input class="action" type="checkbox" name="level[]" value="15"/> 删除产品分类
            </p>
            <p>
               <input class="module" type="checkbox" /> 单页面管理
               <br/>
               <input class="action" type="checkbox" name="level[]" value="16"/> 轮播图新增
               <input class="action" type="checkbox" name="level[]" value="17"/> 查看轮播图列表
               <input class="action" type="checkbox" name="level[]" value="18"/> 删除轮播图
               <input class="action" type="checkbox" name="level[]" value="19"/> 查看品牌介绍
               <input class="action" type="checkbox" name="level[]" value="20"/> 修改品牌介绍
               <input class="action" type="checkbox" name="level[]" value="21"/> 查看联系我们
               <input class="action" type="checkbox" name="level[]" value="22"/> 修改联系我们
               <input class="action" type="checkbox" name="level[]" value="23"/> 查看留言
               <input class="action" type="checkbox" name="level[]" value="24"/> 删除留言
            </p>
            <p>
               <input class="module" type="checkbox" /> 会员中心
               <br/>
               <input class="action" type="checkbox" name="level[]" value="25"/> 查看会员
               <input class="action" type="checkbox" name="level[]" value="26"/> 删除会员
            </p>
            <p>
               <input class="module" type="checkbox" /> 订单中心
               <br/>
               <input class="action" type="checkbox" name="level[]" value="27"/> 查看订单
               <input class="action" type="checkbox" name="level[]" value="28"/> 删除订单
            </p>
            <p><input type="checkbox" class="select_all" />全选</p>
            </div>
            <p>
              <input class="button" type="submit" value="Submit" />
            </p>
            </fieldset>
            <div class="clear"></div>
            <!-- End .clear -->
          </form>
        </div>
        <!-- End #tab2 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->
<div class="content-box column-left">
      <div class="content-box-header">
        <h3>Content box left</h3>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab">
          <h4>Maecenas dignissim</h4>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo. </p>
        </div>
        <!-- End #tab3 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->
    <div class="content-box column-right closed-box">
      <div class="content-box-header">
        <!-- Add the class "closed" to the Content box header to have it closed by default -->
        <h3>Content box right</h3>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab">
          <h4>This box is closed by default</h4>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo. </p>
        </div>
        <!-- End #tab3 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->
    <div class="clear"></div>
    <!-- Start Notifications -->
    <div class="notification attention png_bg"> <a href="#" class="close"><img src="/qmss/Application/Admin/Common/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      <div> Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. </div>
    </div>
    <div class="notification information png_bg"> <a href="#" class="close"><img src="/qmss/Application/Admin/Common/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      <div> Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. </div>
    </div>
    <div class="notification success png_bg"> <a href="#" class="close"><img src="/qmss/Application/Admin/Common/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      <div> Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. </div>
    </div>
    <div class="notification error png_bg"> <a href="#" class="close"><img src="/qmss/Application/Admin/Common/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      <div> Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. </div>
    </div>
    <!-- End Notifications -->
    <div id="footer"> <small>
      <!-- Remove this notice or replace it with whatever you want -->
      &#169; Copyright 2010 Your Company | Powered by <a href="http://www.865171.cn">admin templates</a> | <a href="#">Top</a> </small> </div>
    <!-- End #footer -->
  </div>
  <!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>
<script>
$(".admin").addClass("current");
    $(".admin_add").addClass("current");
    var a=0;
  var b=0;
  var c=0;
  $("#username").blur(function(){//验证姓名是否为空
    if($("#username").val()==""){
        alert("姓名不能为空");a=0;
    }else{
        var username=$("#username").val();
        var url=$(".demoform").attr("action");
        $.ajax({
            type:"GET",
            url:url,
            data:"username="+username,
            success:function(msg){
                if(msg==1){
                    alert("用户名已存在");a=0;
                }else{
                    a=1;
                }
            }

        })
    }
  })

  $("#password").blur(function(){//验证密码是否为空
    if($("#password").val()==""){
        alert("密码不能为空");
    }
  })

  $("#password1").blur(function(){//验证密码是否正确
    var password = $("#password").val();
    var password1 = $("#password1").val();
    if(password==password1){
      b=1;
    }else{
      alert("两次密码不一样");b=0;
    }
  })

  $("#email").blur(function(){//验证邮箱格式是否正确
    if($("#email").val()==""){
        alert("邮箱不能为空");c=0;
    }else if(!$("#email").val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)){
        alert("邮箱格式不正确");c=0;
    }else{
        c=1;
    }
  })

  $("#myform").submit(function(){
    if(a+b+c!=3){
        return false;
    }
  })

  //点击全选
$(".select_all").click(function(){
    var status = $(this).is(":checked");  //获取当前复选框的状态
    // is(":checked") 判断是否被选中 如果选中返回true  未被选中返回false
   if(status){
      $(".level p input[type='checkbox']").attr("checked",true);
   }else{
       $(".level p input[type='checkbox']").attr("checked",false);
   }

})

//点击模块
$(".module").click(function(){
   var status =$(this).is(":checked");
   if(status){ 
      $(this).siblings().attr("checked",true); //设置当前的同辈被选中
   }else{
      $(this).siblings().attr("checked",false);//设置当前的同辈不被选中
   }
select_all()

})

//点击模块对应的方法
$(".action").click(function(){
    var status = $(this).is(":checked");
    if(status){
        $(this).siblings(".module").attr("checked",true);
    }else{
          //代表当前的同级元素最多只有被选中（该选中的只可能是模块） 设置模块不被选中
        if($(this).siblings("input:checked").length<=1){
             $(this).siblings(".module").attr("checked",false);
        }
    }

  select_all()
})

function select_all(){
    var checked_num = $(".level input:checked").length; //获取复选框被选中的个数
    if(checked_num ==$(".level input").length){
        $(".select_all").attr("checked",true);
    }else{
         $(".select_all").attr("checked",false);
    }
}
	 
</script>