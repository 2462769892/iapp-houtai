<?php
include("../other/dlif.php");
?>
<?php
$bz= '用户信息';
$title = '用户信息-默然iapp后台管理系统';
include("../other/header.php");
?>

<?php

$user = $_GET['user'];

if ($user == "") {
} else {
    $file = '../user/' . $user . '.php';
    if (file_exists($file)) {
        echo '
    
    <!--页面主要内容-->
    <main class="lyear-layout-content">
    <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">

                <!--手风琴效果-->

                <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    用户数据
                    </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">';

        include_once($file);
        echo '
            <ul>
                <li><span style="color:#606060">用户账号：</span><br><b>' . $data[0] . '</b></li>
                <li><span style="color:#606060">用户注册时间：</span><br><b>' . $data[4] . '</b></li>
            </ul>';
        echo '

                    </div>
                </div>
                
            </div>
            <div class="tab-content">
                <div class="tab-pane active">
        <form action="userxg.php?user=' . $data[0] . '" method="post" name="edit-form" class="edit-form">
                    <div class="form-group">
                    <label for="web_site_title">用户昵称</label>
                    <input class="form-control" type="text" id="web_site_title" name="name" value="' . $data[1] . '" placeholder="请输入用户昵称" >
                    </div>
                    <div class="form-group">
                    <label for="web_site_keywords">用户密码</label>
                    <input class="form-control" type="text" id="web_site_keywords" name="pass" value="' . $data[2] . '" placeholder="请输入用户密码" >
                    </div>
                    <div class="form-group">
                    <label for="web_site_copyright">用户QQ</label>
                    <input class="form-control" type="text" id="web_site_copyright" name="qq" value="' . $data[3] . '" placeholder="请输入用户QQ" >
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary m-r-5">确 定</button>
                    <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);return false;">返 回</button>
                    </div>
                </form>
                </div>
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
</html>';
    } else {
        echo "<script>alert('系统找不到这个用户');location='user.php';</script>";
    }
}

?>