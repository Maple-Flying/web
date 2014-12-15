<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新建主题</title>


<link rel="stylesheet" href="__PUBLIC__/Css/home/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/Css/home/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/Css/home/invalid.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__ROOT__/ueditor/themes/default/ueditor.css"/>

<script type="text/javascript" src="__PUBLIC__/Js/home/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/home/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/home/facebox.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/home/jquery.wysiwyg.js"></script>

<script type="text/javascript" src="__ROOT__/ueditor/editor_config.js"></script>
<script type="text/javascript" src="__ROOT__/ueditor/editor_all.js"></script>

<link rel="shortcut" href="/bitbug_favicon.ico" />
</head>

<body>
<div id="body-wrapper">

  <div id="sidebar">
    <div id="sidebar-wrapper">
     
        <h1 id="sidebar-title"><a href="#">Simpla home</a></h1>
        <img id="logo" src="__PUBLIC__/Images/home/logo.png" alt="Simpla home logo" />

        <div id="profile-links"> 
          您好,<a href="__URL__/../Account/" title="当前用户:<?php echo ($username); ?>"><?php echo ($username); ?></a> |
      <a href="__URL__/quit" title="退出">退出</a> 
        </div> 
    </div>
  </div>
  
  <div id="main-content">
 
    <noscript>
    <!-- Show a notification if the user has disabled javascript -->
      <div class="notification error png_bg">
          <div> 您好，您的浏览器不支持JavaScript，请打开JavaScript功能 <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
          Download From
          </div>
      </div>
    </noscript>
    
    <h2>新建主题</h2>
  <br></br>
  
    
  <form action="__URL__/<?php echo ($btn_ok_act); ?>"  method="post">
      <p class="subtit">主题标题</p>
    <div>
      <input type="text" id="txttitle" name="txttitle" style="width:560px; height:20px; float:left;" maxlength="100" value="<?php echo ($title_item["title"]); ?>"/>
    </div>
    <div class="clear"></div>
    <div>
    <input type="hidden" value="<?php echo ($title_item["id"]); ?>" name="id"/>
    </div>
    </br>
    <input type="submit" value="<?php echo ($btn_ok_text); ?>"/>
  </form>
    <div class="clear"></div>
    <div id="footer" style="text-align:center;"> <small>
      <!-- Remove this notice or replace it with whatever you want -->
      &#169; Copyright 2014 MF | Powered by Maple Flying</small> </div>
    <!-- End #footer -->
  </div>
    
  </div>

</div>
</body>
</html>