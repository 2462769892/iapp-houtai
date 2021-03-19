<?php
include("../other/dlif.php");
?>
<?php
$bz= '修改密码';
$title = '首页-默然iapp后台管理系统';
include("../other/header.php");
?>


<!--页面主要内容-->
<main class="lyear-layout-content">

  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="alert alert-warning" role="alert">警告！修改成功后需要重新登录哦！</div>
            <form method="post" action="adminxg.php" class="site-form">
              <div class="form-group">
                <label for="old-password">管理员账号</label>
                <input type="text" class="form-control" name="user" value="<?php include("admin.php");
                                                                            echo $arr[0]; ?>" id="old-password" placeholder="输入账号的原登录密码">
              </div>
              <div class="form-group">
                <label for="new-password">管理员密码</label>
                <input type="text" class="form-control" name="pass" value="<?php include_once("admin.php");
                                                                            echo $arr[1]; ?>" id="new-password" placeholder="输入新的密码">
              </div>
              <button type="submit" class="btn btn-primary">修 改</button>
            </form>

          </div>
        </div>
      </div>

    </div>

  </div>

</main>
<!--End 页面主要内容-->
</div>
</div>
</body>

</html>