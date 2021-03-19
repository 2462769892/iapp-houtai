<?php
include("../other/dlif.php");
?>
<?php
$title = '网站管理-默然iapp后台管理系统';
$bz = '网站管理';
include("../other/header.php");
?>

<!--页面主要内容-->
<main class="lyear-layout-content">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <ul class="nav nav-tabs page-tabs">
                        <li class="active"> <a href="#!">网站配置</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active">

                            <form action="wzpzxg.php" method="post" name="edit-form" class="edit-form">
                                <div class="form-group">
                                    <label for="web_site_title">网站标题</label>
                                    <input class="form-control" type="text" id="web_site_title" name="title" value="<?php include_once("wzpz.php");
                                                                                                                    echo $arr[0] ?>" placeholder="请输入站点标题">
                                </div>
                                <div class="form-group">
                                    <label for="web_site_title">app图标</label>
                                    <input class="form-control" type="text" id="web_site_title" name="apptb" value="<?php include_once("wzpz.php");
                                                                                                                    echo $arr[1] ?>" placeholder="请输入app图标链接">
                                </div>
                                <div class="form-group">
                                    <label for="web_site_title">app名称</label>
                                    <input class="form-control" type="text" id="web_site_title" name="app" value="<?php include_once("wzpz.php");
                                                                                                                    echo $arr[2] ?>" placeholder="请输入app名称">
                                </div>
                                <div class="form-group">
                                    <label for="web_site_keywords">版本号和软件大小</label>
                                    <input class="form-control" type="text" id="web_site_keywords" name="bbdx" value="<?php include_once("wzpz.php");
                                                                                                                        echo $arr[3] ?>" placeholder="请输入版本号和软件大小">
                                    <small class="help-block">比如 版本:1.0 大小:5.95MB</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_keywords">下载链接</label>
                                    <input class="form-control" type="text" id="web_site_keywords" name="xzlj" value="<?php include_once("wzpz.php");
                                                                                                                        echo $arr[4] ?>" placeholder="请输入下载链接">
                                    <small class="help-block">下载链接</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_keywords">图片</label>
                                    <input class="form-control" type="text" id="web_site_keywords" name="logo" value="<?php include_once("wzpz.php");
                                                                                                                        echo $arr[5] ?>" placeholder="请输入图片链接">
                                    <small class="help-block">软件详情图片</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_keywords">图片</label>
                                    <input class="form-control" type="text" id="web_site_keywords" name="logo1" value="<?php include_once("wzpz.php");
                                                                                                                        echo $arr[6] ?>" placeholder="请输入图片链接">
                                    <small class="help-block">软件详情图片</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_keywords">图片</label>
                                    <input class="form-control" type="text" id="web_site_keywords" name="logo2" value="<?php include_once("wzpz.php");
                                                                                                                        echo $arr[7] ?>" placeholder="请输入图片链接">
                                    <small class="help-block">软件详情图片</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_keywords">图片</label>
                                    <input class="form-control" type="text" id="web_site_keywords" name="logo3" value="<?php include_once("wzpz.php");
                                                                                                                        echo $arr[8] ?>" placeholder="请输入图片链接">
                                    <small class="help-block">软件详情图片</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_description">软件介绍</label>
                                    <textarea class="form-control" id="web_site_description" rows="1" name="rjjs" placeholder="请输入软件介绍"><?php include_once("wzpz.php");
                                                                                                                                                echo $arr[9] ?></textarea>
                                    <small class="help-block">软件介绍</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_description">更新日志</label>
                                    <textarea class="form-control" id="web_site_description" rows="1" name="gxrz" placeholder="请输入更新日志"><?php include_once("wzpz.php");
                                                                                                                                                echo $arr[10] ?></textarea>
                                    <small class="help-block">更新日志</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_keywords">团队介绍</label>
                                    <input class="form-control" type="text" id="web_site_keywords" name="tdjs" value="<?php include_once("wzpz.php");
                                                                                                                            echo $arr[11] ?>" placeholder="请输入团队介绍">
                                    <small class="help-block">团队介绍</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_keywords">站点关键词</label>
                                    <input class="form-control" type="text" id="web_site_keywords" name="keywords" value="<?php include_once("wzpz.php");
                                                                                                                            echo $arr[12] ?>" placeholder="请输入站点关键词">
                                    <small class="help-block">网站搜索引擎关键字</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_description">站点描述</label>
                                    <textarea class="form-control" id="web_site_description" rows="1" name="description" placeholder="请输入站点描述"><?php include_once("wzpz.php");
                                                                                                                                                echo $arr[13] ?></textarea>
                                    <small class="help-block">网站描述，有利于搜索引擎抓取相关信息</small>
                                </div>
                                <div class="form-group">
                                    <label for="web_site_copyright">版权信息</label>
                                    <input class="form-control" type="text" id="web_site_copyright" name="copyright" value="<?php include_once("wzpz.php");
                                                                                                                            echo $arr[14] ?>" placeholder="请输入版权信息">

                                </div>
                                <div class="form-group">
                                    <label for="web_site_icp">备案信息</label>
                                    <input class="form-control" type="text" id="web_site_icp" name="icp" value="<?php include_once("wzpz.php");
                                                                                                                echo $arr[15] ?>" placeholder="请输入备案信息">

                                </div>
                                <div class="form-group">
                                    <label class="btn-block" for="web_site_status">站点开关</label>
                                    <div class="example-box">
                                        <input class="form-control" type="text" id="web_site_icp" name="kg" value="<?php include_once("wzpz.php");
                                                                                                                    echo $arr[16] ?>" placeholder="请输入1或2">
                                        <small class="help-block">1为开2为关，站点关闭后将不能访问，后台可正常登录</small>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary m-r-5">保 存</button>
                                    </div>
                            </form>

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