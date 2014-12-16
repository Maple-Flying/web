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
</head>

<body>
<div style = "padding: 50px;width: 100px;float: right;"><a href="__URL__/../Index/" >返回首页</a></div>
<div id="body-wrapper">

  <div id="sidebar">
    <div id="sidebar-wrapper">
      	<img id="logo" src="/public/Images/home/logo.png" alt="Simpla home logo" />

      	<div id="profile-links" style = "font-size: medium;">
      		您好,<a href="__URL__/../Account/" title="当前用户:<?php echo ($username); ?>"><?php echo ($username); ?></a> |
	 		<a href="__URL__/quit" title="退出">退出</a>
      <div style = "float:left;width: 280px;">
        <dl style = "top: 11px;border-style: solid;">
        <dt style = "margin: 30px 100px 30px 20px;font-size: medium;text-align: center;top: 11px;border-style: solid;border-width: 10px;border-color: transparent #fff000;">成员</dt>
        <?php if(is_array($member)): $i = 0; $__LIST__ = $member;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd style = "margin: 30px 100px 30px 20px;font-size: medium;text-align: center;top: 11px;border-style: solid;border-width: 10px;border-color: transparent #091EF5;"><a href="#" ><?php echo ($vo['member']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
        </dl>
      </div>
       	</div>
    </div>
  </div>
  <!-- End #sidebar -->

  <div id="main-content">
    <!-- Page Head -->
    <h2>师生讨论笔记</h2>
	<br></br>
     
   <ul class="shortcut-buttons-set">
      <li>
        <a class="shortcut-button" href="../../../Article/index/tid/<?php echo ($tid); ?>">
          <span> 
            <img src="/public/Images/home/icons/paper_content_pencil_48.png" alt="icon" /><br />
            新建笔记
          </span>
        </a>
      </li>
      <li>
        <div class="md-trigger" data-modal="modal-8" style="cursor:pointer">
         <a class="shortcut-button" href="../../../Conclusion/index/tid/<?php echo ($tid); ?>">
          <span> 
            <img src="/public/Images/home/icons/paper_content_pencil_48.png" alt="icon" /><br />
            结论
          </span>
        </a>
           </div>
      </li>
    </ul>
    <div class="clear"></div>
    
    <div class="content-box">
    
      <!-- Start Content Box -->
      <div class="content-box-header">
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">笔记列表(共<?php echo ($news_count); ?>条记录)</a></li>
          <!-- href must be unique and match the id of target div 
          -->
        </ul>
        <div class="clear"></div>
      </div>
      
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
          <div class="notification attention png_bg"> <a href="#" class="close"><img src="/public/Images/home/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
            <div>您好，<?php echo ($username); ?>，下面是最近新建的笔记！ </div>
          </div>
          
          <!-- 表头 -->
          <table>
            <thead>
              <tr>
                <th>
                 
                </th>
                <th>笔记标题</th>
                <th>记录人</th>
                <th>讨论地点</th>
                <th>添加时间</th>
                <th>最后修改</th>	 
                <th>选项</th>
              </tr>
            </thead>
            <!-- 表内容部分 -->
            <tbody>
              <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td></td>
                <td><a href="__URL__/../Detail/index/id/<?php echo ($vo['id']); ?>"><?php echo ($vo['subject']); ?></a></td>
                <td><?php echo ($vo['author']); ?></td>
                <td><?php echo ($vo['address']); ?></td>
                <td><?php echo date('Y-m-d G:i:s',$vo['createtime']);?></td>
                <td><?php echo date('Y-m-d G:i:s',$vo['lastmodifytime']);?></td>
                <td>
                 <?php if($vo['author'] == $username): ?><!-- Icons -->
                  <a href="__URL__/edit/id/<?php echo ($vo['id']); ?>" title="编辑"><img src="/public/Images/home/icons/pencil.png" alt="编辑" /></a> 
                  <a href="__URL__/delete/id/<?php echo ($vo['id']); ?>" title="删除"><img src="/public/Images/home/icons/cross.png" alt="删除" /></a> 
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

    <div id="footer" style="text-align:center;"> <small>
      <!-- Remove this notice or replace it with whatever you want -->
      &#169; Copyright 2014 MF | Powered by Maple Flying</small> </div>
    <!-- End #footer -->
  </div>
  <!-- End #main-content -->
</div>
</body>
</html>