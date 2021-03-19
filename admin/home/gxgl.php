<?php
include("../other/dlif.php");
?>
<?php
$bz = '更新管理';
$title = '更新管理-默然iapp后台管理系统';
include("../other/header.php");
?>

<!--页面主要内容-->
<main class="lyear-layout-content">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="gxglxg.php" method="post" class="row">
                            <div class="form-group col-md-12">
                                <label for="title">软件更新版本</label>
                                <input type="text" class="form-control" id="title" name="bbh" value="<?php include_once("gxgl1.php"); echo $arr[0]; ?>" placeholder="请输入版本号" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="seo_keywords">软件更新链接</label>
                                <input type="text" class="form-control" id="seo_keywords" name="gxlj" value="<?php include_once("gxgl1.php"); echo $arr[1]; ?>" placeholder="请输入更新链接" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="seo_description">软件更新内容</label>
                                <textarea class="form-control" id="seo_description" name="gxnr" rows="5" value="" placeholder="请输入版本描述"><?php include_once("gxgl1.php"); echo $arr[2]; ?></textarea>
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