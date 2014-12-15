<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>设置</title>
<link rel="stylesheet" href="/public/Css/home/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/public/Css/home/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/public/Css/home/invalid.css" type="text/css" media="screen" />

<link rel="stylesheet" href="__ROOT__/ueditor/themes/default/ueditor.css"/>
<script type="text/javascript" src="/public/Js/home/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/public/Js/home/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="/public/Js/home/facebox.js"></script>
<script type="text/javascript" src="/public/Js/home/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="__ROOT__/ueditor/editor_config.js"></script>
<script type="text/javascript" src="__ROOT__/ueditor/editor_all.js"></script>
<link rel="shortcut" href="/bitbug_favicon.ico" />
</head>

<body>

<div style = "padding: 50px;width: 100px;float: right;"><a href="__URL__/../Index/" >返回首页</a></div>

<div id="body-wrapper">

  <div id="sidebar">
    <div id="sidebar-wrapper">

      	<img id="logo" src="/public/Images/home/logo.png" alt="Simpla home logo" />

      	<div id="profile-links" style = "font-size: medium;">
      		您好,<a href="#" title="当前用户:<?php echo ($username); ?>"><?php echo ($username); ?></a> | <a href="__URL__/quit" title="退出">退出</a>
       	</div>
        <div style = "float:left;width: 280px;">
        <dl style = "right: -1px;top: 11px;border-style: solid;border-width: ">
          <dd style = "margin: 30px 90px 30px 60px;font-size: medium;text-align: center;top: 11px;border-style: solid;border-width: 10px;border-color: transparent #fff000;"><a href="__URL__/../Account/" >个人资料</a></dd>
          <dd style = "margin: 30px 90px 30px 60px;font-size: medium;text-align: center;top: 11px;border-style: solid;border-width: 10px;border-color: transparent #000fff;"><a href="__URL__/../Stamp/" >邮箱验证</a></dd>
          <dd style = "margin: 30px 90px 30px 60px;font-size: medium;text-align: center;top: 11px;border-style: solid;border-width: 10px;border-color: transparent #03EC79;"><a href="__URL__/../Modify/" >修改密码</a></dd>
        </dl>
      </div>
    </div>
  </div>

  <div id="main-content">
    <h2>设置中心</h2>
      <div style = "background-color: #fff;width: 1000px;margin: 40px 20px 20px 20px;height: 750px;bottom: 6px;border: 1px solid #b8bcc4;box-shadow: 0 0 3px rgba(184,188,196,0.25);">
      <div style = "">
        <form action="__URL__/modify" method="POST">
        <div style="padding: 100px 0 30px 370px;">
            当前密码：
            <input  type="password" name="oldpwd" class="rlf-input rlf-input-pwd" placeholder="请输入当前密码"/>
        </div>
        <div style="padding: 30px 0 30px 370px;">
            新&nbsp;&nbsp;密&nbsp;&nbsp;码：
            <input  type="password" data-validate="password" name="newpwd" id="newpass" class="rlf-input rlf-input-pwd" placeholder="请输入密码"/>   
        </div>
        <div style="padding: 30px 0 30px 370px;">
            确认密码：
            <input  type="password" name="confirm" id="confirm" class="rlf-input rlf-input-pwd" placeholder="请输入密码"/>
        </div>
        <div style="padding: 10px 0 10px 607px;">
            <input  type="submit" value="保存"/>
        </div>
    </form>

      </div>
    </div>
    <div class="clear"></div>

    <div id="footer" style="text-align:center;"> <small>
      <!-- Remove this notice or replace it with whatever you want -->
      &#169; Copyright 2014 MF | Powered by Maple Flying</small> </div>
    <!-- End #footer -->
  </div>
</div>
</body>
</html>