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
<script type="text/javascript">
$(function(){
var a=<?php echo ($user_account["sex"]); ?>;
 if(a=="0")
  {
      document.getElementById("0").checked=true;
  }
  else if(a=="1")
  {
      document.getElementById("1").checked=true;
     
  }
  else
  {
      document.getElementById("2").checked=true;
   
  }

var b=<?php echo ($user_account["status"]); ?>;
if(b=="1")
  {
      document.getElementById("11").selected=true;
  }
  else 
  {
      document.getElementById("22").selected=true;
     
  }
 
 } )


</script>

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
      
        <form action="__URL__/update" method="POST">
        <div style = "">
          <div style="padding: 100px 240px 30px 240px;">
            用&nbsp;&nbsp;户&nbsp;&nbsp;名：
              <input  type="text" name="username" autocomplete="off" value="<?php echo ($username); ?>"/>
          </div>
          <div style="padding: 30px 0 30px 240px;">
            性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：
              <input id="0" type="radio" hidefocus="true" value="0" name="sex" >保密
              <input id="1" type="radio" hidefocus="true" value="1" name="sex">男
              <input id="2" type="radio" hidefocus="true" value="2" name="sex">女
          </div>
          <div style="padding: 30px 0 30px 240px;">
            身&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;份：
              <select  name="status" hidefocus="true" id="job">
                <option value="0" >请选择身份</option>
                <option value="1" id="11">教师</option>
                <option value="2" id="22">学生</option>
              </select>
          </div>
          <div style="padding: 30px 0 30px 240px;">
            地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;区：
              <input  type="text" name="address" autocomplete="off" placeholder="请输入地区." value="<?php echo ($user_account["address"]); ?>" />
          </div>
          <div style="padding: 30px 0 30px 240px;">
            工作单位：
              <input  type="text" name="workaddress" autocomplete="off" placeholder="请输入工作单位." value="<?php echo ($user_account["workaddress"]); ?>" />
          </div>
          <div style="padding: 30px 300px 20px 240px;">
            个性签名：
            <br>
          </br>
              <textarea name="userarticle" id="aboutme" cols="10" rows="7" class="textarea" placeholder="这位用户很懒，什么也没留下~~~"><?php echo ($user_account["userarticle"]); ?></textarea>
          </div>
          <div style="padding: 0 650px 10px 650px;">
            <input  type="submit" name="提交"/>
          </div>
          </div>
        </form>
      
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