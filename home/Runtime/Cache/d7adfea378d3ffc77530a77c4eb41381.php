<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>

<title>师生讨论笔记</title>

<link rel="stylesheet" href="/public/Css/home/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/public/Css/home/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/public/Css/home/invalid.css" type="text/css" media="screen" />

<script type="text/javascript" src="/public/Js/home/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/public/Js/home/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="/public/Js/home/facebox.js"></script>
<script type="text/javascript" src="/public/Js/home/jquery.wysiwyg.js"></script>
<link rel="shortcut" href="/bitbug_favicon.ico" />



<style type="text/css">
dt{padding: 20px;}
dd{font-size: 14px;
padding: 10px 50px 10px 50px;
}
</style>

</head>

<body>
<div style = "padding: 50px;width: 100px;height: 100px;float: right;"><a href="__URL__/../Index/" >返回首页</a></div>
<div id="body-wrapper">

  <div id="sidebar">
    <div id="sidebar-wrapper">
        <img id="logo" src="/public/Images/home/logo.png" alt="Simpla home logo" />

        <div id="profile-links" style = "font-size: medium;"> 
          您好,<a href="__URL__/../Account/" title="当前用户:<?php echo ($username); ?>"><?php echo ($username); ?></a> |
      <a href="__URL__/quit" title="退出">退出</a>

      
      <br />
        </div>
    </div>
  </div>
  <!-- End #sidebar -->
  
  
  
  
  <div id="main-content">
    <!-- Page Head -->
    <h2>师生讨论笔记</h2>
  <div style = "position: absolute;background-color: #fff;top: 130px;left: 330px;right: 100px;height: 1300px;bottom: 6px;border: 1px solid #b8bcc4;box-shadow: 0 0 3px rgba(184,188,196,0.25);">
  <dl>
    <dt>标题：</dt>
    <dd style = "border: 1px dashed #E45E5E;margin: 0px 75px;padding: 10px;"><?php echo ($article_item["subject"]); ?></dd>
    <dt>内容：</dt>
    <dd style = "border: 1px dashed #E45E5E;margin: 0px 75px;padding: 10px;height: 400px;"><?php echo ($article_item["message"]); ?></dd>
    <dt>结论：</dt>
    <dd style = "border: 1px dashed #E45E5E;margin: 0px 75px;padding: 10px;height: 250px;"><?php echo ($article_item["conclusion"]); ?></dd>
  <dt>矛盾点：</dt>
    <dd style = "border: 1px dashed #E45E5E;margin: 0px 75px;padding: 10px;height: 250px;"><?php if(is_array($conflict)): $i = 0; $__LIST__ = $conflict;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo['mark']); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?></dd>
  </dl>
  <div style = "margin: 10px 760px 0 760px;">
  <input onClick="location.href='__URL__/../Conflict/index?id=<?php echo ($sid); ?>';" value="添加矛盾" type="button"/>
  </div>
  </div>
    <div id="footer" style="text-align:center;margin: 1380px 0 0;"> <small>
      <!-- Remove this notice or replace it with whatever you want -->
      &#169; Copyright 2014 MF | Powered by Maple Flying</small> </div>
    <!-- End #footer -->
  </div>
  <!-- End #main-content -->
</div>
</body>
</html>