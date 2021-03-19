<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title><?php echo $title; ?></title>
<link rel="icon" href="../../asster/images/favicon.ico" type="image/ico">
<link href="../../asster/css/bootstrap.min.css" rel="stylesheet">
<link href="../../asster/css/materialdesignicons.min.css" rel="stylesheet">
<link href="../../asster/css/style.min.css" rel="stylesheet">
<script type="text/javascript" src="../../asster/js/jquery.min.js"></script>
<script type="text/javascript" src="../../asster/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../asster/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="../../asster/js/main.min.js"></script>
</head>
<body>
  <div class="lyear-layout-web">
    <div class="lyear-layout-container">
      <!--左侧导航-->
      <aside class="lyear-layout-sidebar">

        <!-- logo -->
        <div id="logo" class="sidebar-header">
          <a href="index.php"><img src="../../asster/images/logo.png" title="默然iapp管理系统" alt="默然iapp管理系统" /></a>
        </div>
        <div class="lyear-layout-sidebar-scroll">

          <nav class="sidebar-main">
            <ul class="nav nav-drawer">
              <li class="nav-item"> <a href="index.php"><i class="mdi mdi-home"></i> 后台首页</a> </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-palette"></i> 网站管理</a>
                <ul class="nav nav-subnav">
                  <li> <a href="wzgl.php">网站管理</a> </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-android"></i>app管理</a>
                <ul class="nav nav-subnav">
                  <li> <a href="gxgl.php">更新管理</a> </li>
                  <li> <a href="gggl.php">公告管理</a> </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-account-settings-variant"></i> 用户管理</a>
                <ul class="nav nav-subnav">
                  <li> <a href="user.php">用户管理</a> </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-subnav">
                <a href="javascript:void(0)"><i class="mdi mdi-note-text"></i>使用文档</a>
                <ul class="nav nav-subnav">
                  <li> <a href="dlwd.php">登录</a> </li>
                  <li> <a href="zcwd.php">注册</a> </li>
                  <li> <a href="ggwd.php">公告</a> </li>
                  <li> <a href="gxwd.php">更新</a> </li>
                  <li> <a href="qdwd.php">启动</a> </li>
                </ul>
              </li>
            </ul>
          </nav>

          <div class="sidebar-footer">
            <p class="copyright">Copyright &copy; 2021 <a target="_blank" href="http://hstory.top">默然iapp管理系统</a> All
              rights reserved.</p>
          </div>
        </div>

      </aside>
      <!--End 左侧导航-->

      <!--头部信息-->
      <header class="lyear-layout-header">

        <nav class="navbar navbar-default">
          <div class="topbar">

            <div class="topbar-left">
              <div class="lyear-aside-toggler">
                <span class="lyear-toggler-bar"></span>
                <span class="lyear-toggler-bar"></span>
                <span class="lyear-toggler-bar"></span>
              </div>
              <span class="navbar-page-title"> <?php echo $bz; ?></span>
            </div>

            <ul class="topbar-right">
              <li class="dropdown dropdown-profile">
                <a href="javascript:void(0)" data-toggle="dropdown">
                  <img class="img-avatar img-avatar-48 m-r-10" src="http://q1.qlogo.cn/g?b=qq&nk=<?php include_once("grxxxx.php"); echo $arr[1]; ?>&s=640" alt="默然" />
                  <span><?php include_once("grxxxx.php"); echo $arr[0]; ?><span class="caret"></span></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li> <a href="grxx.php"><i class="mdi mdi-account"></i> 个人信息</a> </li>
                  <li> <a href="xgmm.php"><i class="mdi mdi-lock-outline"></i> 修改密码</a> </li>
                  <li class="divider"></li>
                  <li> <a href="dlout.php"><i class="mdi mdi-logout-variant"></i> 退出登录</a> </li>
                </ul>
              </li>
            </ul>

          </div>
        </nav>

      </header>
      <!--End 头部信息-->
