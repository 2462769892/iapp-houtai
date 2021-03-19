<?php
include("../other/dlif.php");
?>
<?php
$bz = '用户管理';
$title = '用户管理-默然iapp后台管理系统';
include("../other/header.php");
?>

<!--页面主要内容-->
<main class="lyear-layout-content">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">用户列表</div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>账号</th>
                                        <th>昵称</th>
                                        <th>QQ</th>
                                        <th>注册时间</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <!--表格内容-->
                                <tbody>
                                <tbody>
                                    <?php
                                    $file = '../user/';
                                    $arr = scandir($file);
                                    $number = count($arr);
                                    for ($n = 2; $n < $number; $n++) {
                                        $user = $arr[$n];
                                        include_once($file . $user);
                                        echo '<tr>
                <td>' . $data[0] . '</td>
                <td>' . $data[1] . '</td>
                <td>' . $data[3] . '</td>
                <td>' . $data[4] . '</td>
                <td><font class="text-success">正常</font></td>
                <td>
                <div class="btn-group">
                            <a class="btn btn-xs btn-default" href="userxx.php?user=' . $data[0] . '" title="编辑" data-toggle="tooltip"><i class="mdi mdi-pencil"></i></a>
                            <a class="btn btn-xs btn-default" href="del.php?user=' . $data[0] . '" title="删除" data-toggle="tooltip"><i class="mdi mdi-window-close"></i></a>
                </div>
                </td>
            </tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

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