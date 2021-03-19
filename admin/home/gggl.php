<?php
include("../other/dlif.php");
?>
<?php
$bz = '公告管理';
$title = '公告管理-默然iapp后台管理系统';
include("../other/header.php");
?>

<!--页面主要内容-->
<main class="lyear-layout-content">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="ggglxg.php" method="post" class="row">
                            <div class="form-group col-md-12">
                                <label for="seo_description">公告内容</label>
                                <textarea class="form-control" id="seo_description" name="gg" rows="5" value="" placeholder="请输入公告内容"><?php include_once("gggl1.php"); echo $arr[0]; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary ajax-post" target-form="add-form">确 定</button>
                            </div>
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