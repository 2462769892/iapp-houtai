<?php

header("Content-type:text/html;charset=utf-8");

$title = $_POST['title'];
$apptb = $_POST['apptb'];
$app = $_POST['app'];
$bbdx = $_POST['bbdx'];
$xzlj = $_POST['xzlj'];
$logo = $_POST['logo'];
$logo1 = $_POST['logo1'];
$logo2 = $_POST['logo2'];
$logo3 = $_POST['logo3'];
$rjjs = $_POST['rjjs'];
$gxrz = $_POST['gxrz'];
$tdjs = $_POST['tdjs'];
$keywords = $_POST['keywords'];
$description = $_POST['description'];
$copyright = $_POST['copyright'];
$icp = $_POST['icp'];
$kg = $_POST['kg'];


if ($title == "") {
    echo "<script>alert('请输入网站标题');location='wzgl.php';</script>";
} else {
    $file = 'wzpz.php';
    include_once($file);

    $arrr = array($title,$apptb,$app,$bbdx,$xzlj,$logo, $logo1, $logo2, $logo3,$rjjs,$gxrz,$tdjs, $keywords, $description, $copyright, $icp, $kg);
    $ar = array_replace($arr, $arrr);
    $n = "\n";
    $text = '<?php' . $n . '$arr=' . var_export($ar, true) . ';' . $n . '?>';
    if (false !== fopen($file, 'w')) {
        file_put_contents($file, $text);
        echo "<script>alert('修改成功');location='wzgl.php';</script>";
    } else {
        echo "<script>alert('系统错误');location='wzgl.php';</script>";
    }
}
