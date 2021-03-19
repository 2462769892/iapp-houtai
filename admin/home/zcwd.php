<?php
include("../other/dlif.php");
?>
<?php
$bz = '注册文档';
$title = '注册文档-默然iapp后台管理系统';
include("../other/header.php");
?>

<!--页面主要内容-->
<main class="lyear-layout-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4>注册文档</h4>
                        <ul class="card-actions">
                            <li>
                                <button type="button"><i class="mdi mdi-more"></i></button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <pre><?php echo file_get_contents("../../data/zcwd.txt"); ?></pre>
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