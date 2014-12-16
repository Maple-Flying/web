<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>矛盾笔记</title>


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
<link rel="stylesheet" type="text/css" href="/public/Css/jump/component.css" />
<script src="/public/Js/jump/modernizr.custom.js"></script>
<style type="text/css">
dt{padding: 10px;}
</style>

</head>

<body>

<div style = "padding: 50px 50px 0 50px;width: 100px 100px 0 100px;float: right;"><a href="__URL__/../Index/" >返回首页</a></div>
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
  <div class="md-modal md-effect-8" id="modal-8" style="border: solid 3px #B9B9B9;
padding: 8px;
border-radius: 8px;" >
      <div class="md-content">

        <div class="md-text ">选择矛盾笔记</div>

        <form action="__URL__/index?id=<?php echo ($sid); ?>"  method="post">
          <div>
        标题：
          <select name="aritcle" class="small-input">
            <?php if(is_array($article_list)): $i = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><option value="<?php echo ($li['subject']); ?>"><?php echo ($li["subject"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
         </div>
        <div >
          <div class="md-close" style="position: absolute;top: 10px;right: 25px;font-size: 30px;cursor: pointer;">x</div>
          <button class="md-close" type="submit" style="border-radius: 10px;width: 70px;margin: 20px 100px 0 100px;height: 30px;background: #FFF;" >提交</button>
        </div>

      </form>
      </div>
    </div> 
  <div id="main-content">
  <h2>添加矛盾</h2>
      <div>
    <ul class="shortcut-buttons-set">
      <li>
    <div class="md-trigger" data-modal="modal-8" style="cursor:pointer;margin: 10px 0;">
      <a class="shortcut-button" >
      <span> 
      <img src="/web/Public/Images/home/sricon.png" alt="icon" width="48px;"><br>选择矛盾笔记</span>
      </a>
    </div></li>
  </ul>
  </div>
  <div style = "margin: 150px 0 0 0;">
    <form action="__URL__/addconflict?id=<?php echo ($sid); ?>"  method="post">
    <div style = "">
      <div style = "background-color: #fff;width: 527.5px;float:left;border: 1px solid #b8bcc4;box-shadow: 0 0 3px rgba(184,188,196,0.25);">
        <dl>
          <dt style ="margin: 0 200px 0 200px;">原笔记</dt>
          <dt>标题：</dt>
          <dt><input type="text" id="txtTitle" name="subject1" style="width:300px;" maxlength="50" value="<?php echo ($sarticle["subject"]); ?>"/></dt>
          <dt>内容：</dt>
          <dt>
          <div id="myEditor1" name="myEditor1">
            <script type="text/javascript">
              var editor1 = new baidu.editor.ui.Editor({
              initialContent: '<?php echo ($sarticle["message"]); ?>'});
              editor1.render("myEditor1");
            </script>
          </div>
          </dt>

        </dl>
      </div>
      <div style="background-color: #fff;width: 527.5px;float: right;border: 1px solid #b8bcc4;box-shadow: 0 0 3px rgba(184,188,196,0.25);">
        <dl>
          <dt style ="margin: 0 200px 0 200px;">矛盾笔记</dt>
          <dt>标题：</dt>
          <dt><input type="text" id="txtTitle" name="subject2" style="width:300px;" maxlength="50" value="<?php echo ($tarticle["subject"]); ?>"/></dt>
          <dt>内容：</dt>
          <dt>
          <div id="myEditor2" name="myEditor2">
            <script type="text/javascript">
              var editor2 = new baidu.editor.ui.Editor({
              initialContent: '<?php echo ($tarticle["message"]); ?>'});
              editor2.render("myEditor2");
            </script>
          </div>
          </dt>
        </dl>
      </div>
    </div>
    <div style="background-color: #fff;width: 1057px;float: left;height:280px;border: 1px solid #b8bcc4;box-shadow: 0 0 3px rgba(184,188,196,0.25);">
      <dl>
        <dt>矛盾点：</dt>
        <dt>
          <textarea name = "mark" cols="144" rows="13" style="overflow-x:hidden;overflow-y:hidden;background-color:#ffffff;border:1px solid #6CABE7;" ></textarea>
        </dt>
      </dl>
    </div>
    <div style = "margin: 100px 50px 100px 50px;">
        <input type="hidden" value="<?php echo ($article_item["id"]); ?>" name="id"/>
        <input type="hidden" value="<?php echo ($tid); ?>" name="tid"/>
        <input style = "margin: 20px 900px 0 900px;" type="submit" value="提交矛盾"/>
        <input type="hidden" value="<?php echo ($tid); ?>" name="tid"/>
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

</div>
<script src="/public/Js/jump/classie.js"></script>
    <script src="/public/Js/jump/modalEffects.js"></script>

    <script>
      var polyfilter_scriptpath = '/js/';
    </script>
    <script src="/public/Js/jump/cssParser.js"></script>
    <script src="/public/Js/jump/css-filters-polyfill.js"></script>
</body>
</html>