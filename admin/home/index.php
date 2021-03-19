<?php
include("../other/dlif.php");
?>
<?php
$bz= '后台首页';
$title = '首页-默然iapp后台管理系统';
include("../other/header.php");
?>

<!--页面主要内容-->
<main class="lyear-layout-content">

  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="card bg-primary">
          <div class="card-body clearfix">
            <div class="pull-right">
              <p class="h6 text-white m-t-0">用户总数</p>
              <p class="h3 text-white m-b-0 fa-1-5x"><?php $ml = scandir("../user");
                                                      $sl = count($ml);
                                                      echo ($sl - 2); ?></p>
            </div>
            <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-account fa-1-5x"></i></span> </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="card bg-danger">
          <div class="card-body clearfix">
            <div class="pull-right">
              <p class="h6 text-white m-t-0">启动次数</p>
              <p class="h3 text-white m-b-0 fa-1-5x"><?php echo file_get_contents("../../data/qd.txt"); ?></p>
            </div>
            <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-upload fa-1-5x"></i></span> </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="card bg-success">
          <div class="card-body clearfix">
            <div class="pull-right">
              <p class="h6 text-white m-t-0">下载总量</p>
              <p class="h3 text-white m-b-0 fa-1-5x"><?php $intnum = intval(file_get_contents('../../data/xz.txt')); echo $intnum; ?></p>
            </div>
            <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-arrow-down-bold fa-1-5x"></i></span> </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="card bg-purple">
          <div class="card-body clearfix">
            <div class="pull-right">
              <p class="h6 text-white m-t-0">程序版本</p>
              <p class="h3 text-white m-b-0 fa-1-5x">1.0</p>
            </div>
            <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-sync fa-1-5x"></i></span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="list-group">
        <h4>
          <p class="list-group-item ">服务器信息</p>
        </h4>
        <p class="list-group-item">PHP 版本：<?php echo phpversion() ?> <?php if (ini_get('safe_mode')) {
                                                                        echo '线程安全';
                                                                      } else {
                                                                        echo '非线程安全';
                                                                      } ?></p>
        <p class="list-group-item">服务器软件：<?php echo $_SERVER['SERVER_SOFTWARE'] ?></p>
        <p class="list-group-item">系统名称：默然IAPP后台管理系统</p>
        <p class="list-group-item">作者：默然</p>
        <p class="list-group-item">QQ：2659917175 </p>
      </div>
    </div>
  </div>
</main>
<!--End 页面主要内容-->
</div>
</div>
</body>

</html>