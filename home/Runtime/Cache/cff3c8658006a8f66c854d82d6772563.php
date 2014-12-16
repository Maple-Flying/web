<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
  <title>师生讨论笔记</title>
  <meta name="keywords" content="师生讨论笔记" />
  <meta name="description" content="师生讨论笔记" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/public/Css/home/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="/public/Css/home/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/public/Css/home/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
  <link href="/public/Css/home/templatemo_style.css" rel="stylesheet" type="text/css">
  <style>
  body{
   font-size:20px;
   font-family:"Microsoft Yahei";
  }
</style>
</head>
<body class="templatemo-bg-gray" style="background:url(../../public/Images/home/index2.jpg)">
<!-- style="background:url('../../Images/home/index.jpg')" -->
  <div class="container">
    <div class="col-md-12">
      <br/>
      <br/>
      <h1 class="margin-bottom-15">师生讨论笔记</h1>
      <br/>
      <br/>
      <br/>
      <form style="opacity:0.6;" class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="__URL__/login" method="post">
            <div class="form-group">
              <div class="col-xs-12">
                <div class="control-wrapper">
                  <label for="username" class="control-label fa-label"><img src="../../public/Images/home/icons/1.ico" /></label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="control-wrapper">
                  <label for="password" class="control-label fa-label"><img src="../../public/Images/home/icons/2.ico" /></label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="checkbox control-wrapper">
                    <label>
                        <input type="checkbox"> 记住我
                    </label>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="control-wrapper" font-family:"Microsoft Yahei">
                  <input type="submit" value="登录" class="btn btn-info">
                  <!-- <a href="forgot-password.html" class="text-right pull-right">Forgot password?</a> -->
                  <input  type="button" value="注册" class="btn btn-info text-right pull-right" onClick="location.href='__URL__/../User/index';"/>
                </div>
              </div>
            </div>
          </form>
          <div class="text-center">
            <!-- <a href="<?php echo U('User/index');?>" class="templatemo-create-new">注册<i class="fa fa-arrow-circle-o-right"></i></a>  -->
          </div>
    </div>
  </div>
</body>
</html>