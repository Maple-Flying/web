<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>

<title>师生讨论笔记</title>

<link rel="stylesheet" href="__PUBLIC__/Css/home/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/Css/home/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/Css/home/invalid.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/jump/default.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/jump/component.css" />
<script type="text/javascript" src="__PUBLIC__/Js/home/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/home/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/home/facebox.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/home/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/junp/modernizr.custom.js"></script>

</head>

<body>
<div id="body-wrapper">

  <div id="sidebar">
    <div id="sidebar-wrapper">
        <img id="logo" src="__PUBLIC__/Images/home/logo.png" alt="Simpla home logo" />

        <div id="profile-links"> 
          您好,<a href="#" title="当前用户:<?php echo ($username); ?>"><?php echo ($username); ?></a> |
      <a href="__URL__/quit" title="退出">退出</a> 
      <br />
        </div>
    </div>
  </div>
  <div id="main-content">

    <h2>调查问卷</h2>
    <div >欢迎您使用我们的师生讨论笔记，恳请您认真填写下列问题，以便于我们进一步改进我们的程序，给您更完美的用户体验，谢谢。
      <br></br>
    </div>
  <div style = "">         
 <form action="__URL__/add"  method="post">  
  <label >
  <div>       
        1.您对于我们的主页布局是否满意？
     <label ><input type="radio" hidefocus="true" value="0"  name="op1">A:非常满意</label >
     <label ><input type="radio" hidefocus="true" value="1"  name="op1">B:满意</label >
     <label ><input type="radio" hidefocus="true" value="2"  name="op1">C:一般</label >
     <label ><input type="radio" hidefocus="true" value="3"  name="op1">D:不满意</label >
     <label ><div>
       原因是: <br></br>
      <input type="text" id="txtTitle" name="reason1" style="width:560px; height:20px; float:left;" maxlength="100" />
    </div></label >
    <br></br>
  </div></label >
  <label >
<div>       
       2.您对于我们的新建功能是否满意？
     <label ><input type="radio" hidefocus="true" value="0"  name="op2">A:非常满意</label >
     <label ><input type="radio" hidefocus="true" value="1"  name="op2">B:满意</label >
     <label ><input type="radio" hidefocus="true" value="2"  name="op2">C:一般</label >
     <label ><input type="radio" hidefocus="true" value="3"  name="op2">D:不满意</label >
     <label ><div>
       原因是: <br></br>
      <input type="text" id="txtTitle" name="reason2" style="width:560px; height:20px; float:left;" maxlength="100" />
    </div></label >
    <br></br>
  </div>
</label >
<label >
<div>       
      3.您对于目前文本输入框所包含功能是否满意？
     <label ><input type="radio" hidefocus="true" value="0"  name="op3">A:非常满意</label >
     <label ><input type="radio" hidefocus="true" value="1"  name="op3">B:满意</label >
     <label ><input type="radio" hidefocus="true" value="2"  name="op3">C:一般</label >
     <label ><input type="radio" hidefocus="true" value="3"  name="op3">D:不满意</label >
     <label ><div>
       原因是: <br></br>
      <input type="text" id="txtTitle" name="reason3" style="width:560px; height:20px; float:left;" maxlength="100" />
    </div></label >
    <br></br>
  </div>
</label >
<label >
<div>       
     4.您对于我们的追溯功能是否满意？
     <label ><input type="radio" hidefocus="true" value="0"  name="op4">A:非常满意</label >
     <label ><input type="radio" hidefocus="true" value="1"  name="op4">B:满意</label >
     <label ><input type="radio" hidefocus="true" value="2"  name="op4">C:一般</label >
     <label ><input type="radio" hidefocus="true" value="3"  name="op4">D:不满意</label >
     <label ><div>
       原因是: <br></br>
      <input type="text" id="txtTitle" name="reason4" style="width:560px; height:20px; float:left;" maxlength="100" />
    </div></label >
    <br></br>
  </div>
</label >
<label >
<div>       
     5.您对于我们的标注矛盾的方式是否满意？
     <label ><input type="radio" hidefocus="true" value="0"  name="op5">A:非常满意</label >
     <label ><input type="radio" hidefocus="true" value="1"  name="op5">B:满意</label >
     <label ><input type="radio" hidefocus="true" value="2"  name="op5">C:一般</label >
     <label ><input type="radio" hidefocus="true" value="3"  name="op5">D:不满意</label >
     <label ><div>
       原因是: <br></br>
      <input type="text" id="txtTitle" name="reason5" style="width:560px; height:20px; float:left;" maxlength="100" />
    </div></label >
    <br></br>
  </div>
</label >
<label >
<div>       
     6.您对于我们分享机制是否满意？
     <label ><input type="radio" hidefocus="true" value="0"  name="op6">A:非常满意</label >
     <label ><input type="radio" hidefocus="true" value="1"  name="op6">B:满意</label >
     <label ><input type="radio" hidefocus="true" value="2"  name="op6">C:一般</label >
     <label ><input type="radio" hidefocus="true" value="3"  name="op6">D:不满意</label >
     <label ><div>
       原因是: <br></br>
      <input type="text" id="txtTitle" name="reason6" style="width:560px; height:20px; float:left;" maxlength="100" />
    </div></label >
    <br></br>
  </div>
</label >
<label >
<div>       
     7.您对于我们的矛盾标注功能是否满意？
     <label ><input type="radio" hidefocus="true" value="0"  name="op7">A:非常满意</label >
     <label ><input type="radio" hidefocus="true" value="1"  name="op7">B:满意</label >
     <label ><input type="radio" hidefocus="true" value="2"  name="op7">C:一般</label >
     <label ><input type="radio" hidefocus="true" value="3"  name="op7">D:不满意</label >
     <label ><div>
       原因是: <br></br>
      <input type="text" id="txtTitle" name="reason7" style="width:560px; height:20px; float:left;" maxlength="100" />
    </div></label >
    <br></br>
  </div>
</label >
<label >
<div>       
     8.您是否愿意继续使用该软件记录讨论笔记？
     <label ><input type="radio" hidefocus="true" value="0"  name="op8">A:非常满意</label >
     <label ><input type="radio" hidefocus="true" value="1"  name="op8">B:满意</label >
     <label ><input type="radio" hidefocus="true" value="2"  name="op8">C:一般</label >
     <label ><input type="radio" hidefocus="true" value="3"  name="op8">D:不满意</label >
     <label ><div>
       原因是: <br></br>
      <input type="text" id="txtTitle" name="reason8" style="width:560px; height:20px; float:left;" maxlength="100" />
    </div></label >
    <br></br>
  </div>
</label >
<label >
<div>       
     9.您是否会向老师和同学推荐这款软件？
     <label ><input type="radio" hidefocus="true" value="0"  name="op9">A:非常满意</label >
     <label ><input type="radio" hidefocus="true" value="1"  name="op9">B:满意</label >
     <label ><input type="radio" hidefocus="true" value="2"  name="op9">C:一般</label >
     <label ><input type="radio" hidefocus="true" value="3"  name="op9">D:不满意</label >
     <label ><div>
      原因是: <br></br>
      <input type="text" id="txtTitle" name="reason9" style="width:560px; height:20px; float:left;" maxlength="100" />
    </div></label >
    <br></br>
  </div>
</label >
<label >
<div>       
     <label ><div>
      感谢您认真填写以上问题，若您有什么其他的功能需求，或对该软件有什么意见或建议，欢迎您填写在下方，谢谢。
      <textarea name = "text" rows="10" cols="20" style="height:200px" id= "text" />
      </textarea>
    </div></label >
    <br></br>
  </div>
</label >
<input type="hidden" name="id" value="add">
 <div style="text-align:center;margin-top:20px;"><button class="btn" type="submit">提交</button></div>
</form> 
</div>
     
          

    <div>
    <input type="hidden" value="<?php echo ($tid); ?>" name="tid"/>
    </div>
    <br/>
       

      <div id="footer" style="text-align:center;"> <small> 
      &#169; Copyright 2014 MF | Powered by Maple Flying</small> </div>
    <!-- End #footer -->
  </div>
  <!-- End #main-content -->
</div>
</body>
</html>