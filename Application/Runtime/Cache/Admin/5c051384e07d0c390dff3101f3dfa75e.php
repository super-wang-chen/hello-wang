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
<script type="text/javascript" charset="utf-8" src="/qmss/Public/Validform/Validform_v5.3.2_min.js"></script>
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
          <form action="/qmss/index.php/Admin/Single/banner_add" method="post" enctype="multipart/form-data" class="demoform" >
            <fieldset>
           
            <p>
              <label>关联产品的id</label>
              <input class="text-input medium-input datepicker" type="text" id="medium-input" name="pro_id" nullmsg="请管关联产品！" datatype="n" />
            </p>
            
            <p>
              <label>图片</label>
              <input type="file" name="image" id="myfile"  nullmsg="请添加图片！" datatype="*" />
              <ul class="images">
              </ul>
              <style>
                 #main-content ul.images{ list-style:none; overflow:hidden; }
                 #main-content ul.images li{width:100px; height: 100px; border:1px #666666 solid; margin-left:15px; float:left; padding:0; position: relative;} 
                 #main-content ul.images li>img{width:100px; height: 100px;}
                 
              </style>
            </p>
            
            <p>
              <input class="button" type="submit" value="提交" />
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
<script type="text/javascript">
   $(".demoform").Validform();
$(".single").addClass("current");
    $(".banner_add").addClass("current");
    $("#myfile").change(function(){
      //当上传新图片，实现images内容初始化，将之前上传的内容
      $(".images").html("");
       // console.log(this.files.length);
       var j=0;//j表示图片对应的下标
       for(var i=0;i<this.files.length;i++){
        var file=this.files[i];
        if (window.FileReader) {    
            var reader = new FileReader();    
            reader.readAsDataURL(file);    
            //监听文件读取结束后事件    
          reader.onloadend = function (e) {
                var str="<li>";   //e.target.result就是最后的路径地址
            str+="<img src='"+e.target.result+"'/>";
            str+="</li>";
                $(".images").append(str);
               j++;
            }  

       }
     }
    })
   
 
</script>