<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>

<title>师生讨论笔记</title>

<link rel="stylesheet" href="/public/Css/home/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/public/Css/home/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/public/Css/home/invalid.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="/public/Css/jump/default.css" />
<link rel="stylesheet" type="text/css" href="/public/Css/jump/component.css" />
<script type="text/javascript" src="/public/Js/home/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/public/Js/home/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="/public/Js/home/facebox.js"></script>
<script type="text/javascript" src="/public/Js/home/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="/public/Js/junp/modernizr.custom.js"></script>
  <style type="text/css">
<!--
ul{list-style:none}

-->
</style>
</head>

<body>
<div id="body-wrapper">

  <div id="sidebar">
    <div id="sidebar-wrapper">
        <img id="logo" src="/public/Images/home/logo.png" alt="Simpla home logo" />

        <div id="profile-links" style = "font-size: medium;"> 
          您好,<a href="#" title="当前用户:<?php echo ($username); ?>"><?php echo ($username); ?></a> |
      <a href="__URL__/quit" title="退出">退出</a> 
      <br />
        </div>
    </div>
  </div>
  <!-- End #sidebar -->
  
  
  
  
  <div id="main-content">
 
    <noscript>
    <!-- Show a notification if the user has disabled javascript -->
      <div class="notification error png_bg">
          <div> Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
          Download From
          </div>
      </div>
    </noscript>
    
  

    <div class="clear"></div>
    
    <div class="content-box">
    
      <!-- Start Content Box -->
      <div class="content-box-header">
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">历次讨论结果</a></li>
          <!-- href must be unique and match the id of target div 
          -->
        </ul>
        <div class="clear"></div>
      </div>
      
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
          <div class="notification attention png_bg"> <a href="#" class="close"><img src="/public/Images/home/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
            <div>您好，<?php echo ($username); ?>，下面是历次讨论的结论！ </div>
          </div>
          

    <div>
    <input type="hidden" value="<?php echo ($tid); ?>" name="tid"/>
    </div>
    <br/>
       

<ul class="cbp_tmtimeline">
  <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
        <time class="cbp_tmtime" datetime=$vo['createtime']><span><?php echo date('d/m/y',$vo['createtime']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span><?php echo date('G:i',$vo['createtime']);?>&nbsp;</span></time>
        <div class="cbp_tmicon cbp_tmicon-phone"></div>
        <div class="cbp_tmlabel">
            <h2><?php echo ($vo['subject']); ?></h2>
            <p> <?php echo ($vo['conclusion']); ?></p>
        </div>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>        
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->
   
    <div id="footer" style="text-align:center;"> <small>
      <!-- Remove this notice or replace it with whatever you want -->
      &#169; Copyright 2014 MF | Powered by Maple Flying</small> </div>
    <!-- End #footer -->
  </div>
  <!-- End #main-content -->
</div>
</body>
</html>