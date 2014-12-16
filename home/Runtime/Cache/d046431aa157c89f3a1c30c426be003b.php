<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>师生讨论笔记</title>

<link rel="stylesheet" href="/public/Css/home/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/public/Css/home/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/public/Css/home/invalid.css" type="text/css" media="screen" />

<script type="text/javascript" src="/public/Js/home/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/public/Js/home/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="/public/Js/home/facebox.js"></script>
<script type="text/javascript" src="/public/Js/home/jquery.wysiwyg.js"></script>
<link rel="shortcut" href="/bitbug_favicon.ico" />

<link rel="stylesheet" type="text/css" href="/public/Css/jump/component.css" />
<script src="/public/Js/jump/modernizr.custom.js"></script>



</head>

<body>
<div style = "padding: 50px;width: 100px;height: 100px;float: right;"><a href="__URL__/../Feedback/" >反馈</a></div>
<div id="body-wrapper">

  <div id="sidebar">
    <div id="sidebar-wrapper">
      	<img id="logo" src="/public/Images/home/logo.png" alt="Simpla home logo" />

      	<div id="profile-links" style = "font-size: medium;"> 
      		您好,<a href="__URL__/../Account/" title="当前用户:<?php echo ($username); ?>"><?php echo ($username); ?></a> |
	 		<a href="__URL__/quit" title="退出">退出</a> 
       	</div>
      <!-- <div>
        <dl>
          <dd style = "font-size: medium;border: 1px dashed #E45E5E;margin: 0 34px 0 34px;padding: 10px;height: 50px;width: 150px;"><?php echo ($account["userarticle"]); ?></dd>
        </dl>
      </div>   -->
    </div>
  </div>
  <!-- End #sidebar -->
  <div class="md-modal md-effect-8" id="modal-8" style="border: solid 3px #B9B9B9;
      padding: 8px;border-radius: 8px;" >
      <div class="md-content">

        <div class="md-text ">成员信息</div>

        <form action="__URL__/addmember"  method="post">
          <div>
        主题：
          <select name="title" class="small-input">
            <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><option value="<?php echo ($li['title']); ?>"><?php echo ($li["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
         </div>
        <div >
          <div>
          姓名：<input type = "text" name= "member"/ style="width: 22.5% !important;border-radius: 4px;padding: 4px;margin-left: 4px;">
        </div>
          <div class="md-close" style="position: absolute;top: 10px;right: 25px;font-size: 30px;cursor: pointer;">x</div>
          <button class="md-close" type="submit" style="border-radius: 10px;
              width: 70px;height: 30px;background: #FFF;" >提交</button>
        </div>
      </form>
      </div>
    </div>

    <div class="md-modal md-effect-9" id="modal-9" style="border: solid 3px #B9B9B9;padding: 8px;border-radius: 8px;" >
      <div class="md-content">

        <div class="md-text ">填写主题</div>

        <form action="__URL__/addtheme"  method="post">
          <div>
          主题：<input type = "text" name= "title" / style="width: 22.5% !important;border-radius: 4px;padding: 4px;margin-left: 4px;">
        </div>
          <div class="md-close" style="position: absolute;top: 10px;right: 25px;font-size: 30px;cursor: pointer;">x</div>
          <button class="md-close" type="submit" style="border-radius: 10px;
                  width: 70px;height: 30px;background: #FFF;" >提交</button>
      </form>

      </div>
    </div>
  <div id="main-content">
    <!-- Page Head -->
    <h2>师生讨论笔记</h2>
	<br></br>
      <ul class="shortcut-buttons-set">
      <li>
      <div class="md-trigger" data-modal="modal-9" style="cursor:pointer">
        <a class="shortcut-button">
          <span>
            <img src="/public/Images/home/icons/pencil_48.png" alt="icon" /><br />
            新建主题
          </span>
        </a>
      </div>
      </li>
      <li>
        <div class="md-trigger" data-modal="modal-8" style="cursor:pointer">
        <a class="shortcut-button" >
          <span>
            <img src="/web/Public/Images/home/usericon.jpg" alt="icon" width="48px;"><br>
            添加成员
          </span>
        </a>
           </div>
      </li>
    </ul>
    <div class="clear"></div>
    
    <div class="content-box">
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
          <div class="notification attention png_bg"> <a href="#" class="close"><img src="/public/Images/home/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
            <div>您好，<?php echo ($username); ?>，下面是最近新建的主题！ </div>
          </div>

          <!-- 表头 -->
          <table>
            <thead>
              <tr>
                <th>

                </th>
                <th>主题标题</th>
                <th>创建人</th>
                <th>添加时间</th> 
                <th>删除</th>
              </tr>
            </thead>

            <!-- 表内容部分 -->
            <tbody>
              <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td></td>
                <td><a href="__URL__/../Title/index/id/<?php echo ($vo['id']); ?>"><?php echo ($vo['title']); ?></a></td>
                <td><a href="#" title="title"><?php echo ($vo['author']); ?></a></td>
                <td><?php echo date('Y-m-d G:i:s',$vo['createtime']);?></td>
                <td>
                 <?php if($vo['author'] == $username): ?><a href="__URL__/delete/id/<?php echo ($vo['id']); ?>" title="删除"><img src="/public/Images/home/icons/cross.png" alt="删除" /></a>
                 <?php else: endif; ?>
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>

              <!-- 表尾 -->
            <tfoot>
              <tr>
                <td colspan="6">
                  <div class="pagination">               	  
                  	<?php echo ($page_method); ?>
                  </div>                 
                  <div class="clear"></div>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
        
        
        
        <!-- End #tab1 -->
        <div class="tab-content" id="tab2">
          <form action="#" method="post">
            <fieldset>
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
              <label>Small form input</label>
              <input class="text-input small-input" type="text" id="small-input" name="small-input" />
              <span class="input-notification success png_bg">Successful message</span>
              <!-- Classes for input-notification: success, error, information, attention -->
              <br />
              <small>A small description of the field</small> </p>
            <p>
              <label>Medium form input</label>
              <input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" />
              <span class="input-notification error png_bg">Error message</span> </p>
            <p>
              <label>Large form input</label>
              <input class="text-input large-input" type="text" id="large-input" name="large-input" />
            </p>
            <p>
              <label>Checkboxes</label>
              <input type="checkbox" name="checkbox1" />
              This is a checkbox
              <input type="checkbox" name="checkbox2" />
              And this is another checkbox </p>
            <p>
              <label>Radio buttons</label>
              <input type="radio" name="radio1" />
              This is a radio button<br />
              <input type="radio" name="radio2" />
              This is another radio button </p>
            <p>
              <label>This is a drop down list</label>
              <select name="dropdown" class="small-input">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
                <option value="option4">Option 4</option>
              </select>
            </p>
            <p>
              <label>Textarea with WYSIWYG</label>
              <textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
            </p>
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
   
    <div id="footer" style="text-align:center;"> <small>
      <!-- Remove this notice or replace it with whatever you want -->
      &#169; Copyright 2014 MF | Powered by Maple Flying</small> </div>
    <!-- End #footer -->
  </div>
  <!-- End #main-content -->
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