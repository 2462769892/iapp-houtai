<?php
include("../other/dlif.php");
?>
<?php
$bz= '个人信息';
$title = '个人信息-默然iapp后台管理系统';
include("../other/header.php");
?>


<!--页面主要内容-->
<main class="lyear-layout-content">

  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">

            <div class="edit-avatar">
              <img src="http://q1.qlogo.cn/g?b=qq&nk=<?php include_once("grxxxx.php");
                                                      echo $arr[1]; ?>&s=100" alt="默然" class="img-avatar" />
              <div class="avatar-divider"></div>
              <div class="edit-avatar-content">
                <br>
                <p class="m-0">修改QQ会自动获取QQ头像</p>
              </div>
            </div>
            <hr>
            <form method="post" action="grxxxg.php" class="site-form">
              <div class="form-group">
                <label for="nickname">昵称</label>
                <input type="text" class="form-control" name="nickname" id="nickname" placeholder="输入您的昵称" value="<?php include_once("grxxxx.php");
                                                                                                                  echo $arr[0]; ?>">
              </div>
              <div class="form-group">
                <label for="email">QQ</label>
                <input type="text" class="form-control" name="qq" id="qq" placeholder="请输入正确的qq" value="<?php include_once("grxxxx.php");
                                                                                                        echo $arr[1]; ?>">
                <small id="emailHelp" class="form-text text-muted">请保证您填写的QQ是正确的。</small>
              </div>
              <div class="form-group">
                <label for="remark">简介</label>
                <input type="text" class="form-control" name="grjj" id="text" placeholder="一句话形容你！！" value="<?php include_once("grxxxx.php");
                                                                                                            echo $arr[2]; ?>">
                <small id="emailHelp" class="form-text text-muted">没啥用</small>
              </div>
              <button type="submit" class="btn btn-primary">保 存</button>
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