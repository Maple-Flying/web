<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新建笔记</title>


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
<div style = "padding: 50px;width: 100px;height: 100px;float: right;"><a href="__URL__/../Index/" >返回首页</a></div>
<div id="body-wrapper">

  <div id="sidebar">
    <div id="sidebar-wrapper">
      	<img id="logo" src="/public/Images/home/logo.png" alt="Simpla home logo" />

      	<div id="profile-links" style = "font-size: medium;">
      		您好,<a href="__URL__/../Account/" title="当前用户:<?php echo ($username); ?>"><?php echo ($username); ?></a> |
	 		<a href="__URL__/quit" title="退出">退出</a>
       	</div>
    </div>
  </div>

  <div id="main-content">
    <h2>新建笔记</h2>
	<br></br>
   	<!-- 实例化百度编辑器 -->

   	<form action="__URL__/<?php echo ($btn_ok_act); ?>"  method="post">
   		<p class="subtit">笔记标题</p>
		<div>
			<input type="text" id="txtTitle" name="subject" style="width:560px; height:20px; float:left;" maxlength="100" value="<?php echo ($article_item["subject"]); ?>"/>
		</div>
		<br></br>
		<p class="subtit">讨论地点</p>
		<div>
			<input type="text" id="txtTitle" name="address" style="width:560px; height:20px; float:left;" maxlength="100" value="<?php echo ($article_item["address"]); ?>"/>
		</div>
		<br></br>
		<p class="subtit">笔记内容</p>
	    <div id="myEditor">
			<script type="text/javascript">
				var editor = new baidu.editor.ui.Editor({
				    initialContent: '<?php echo ($article_item["message"]); ?>'
				});
				editor.render("myEditor");
			</script>
		</div>
		<p class="subtit">结论</p>
		<div>
			<textarea name = "conclusion" rows="10" cols="20" style="height:200px" id= "conclusion" />
			<?php echo ($article_item["conclusion"]); ?>
			</textarea>
		</div>

		<br/>
		<div>
		<input type="hidden" value="<?php echo ($article_item["id"]); ?>" name="id"/>
		<input type="hidden" value="<?php echo ($tid); ?>" name="tid"/>
		</div>
		<br/>
		<input type="submit" style="margin: 0 0 0 940px;" value="<?php echo ($btn_ok_text); ?>"/>
		<input type="hidden" value="<?php echo ($tid); ?>" name="tid"/>
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