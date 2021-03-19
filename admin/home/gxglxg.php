<?php

header("Content-type:text/html;charset=utf-8");

$bbh = $_POST['bbh'];
$gxlj = $_POST['gxlj'];
$gxnr = $_POST['gxnr'];

$file = 'gxgl1.php';
include_once($file);

$arrr = array($bbh, $gxlj,$gxnr);
$ar = array_replace($arr, $arrr);
$n = "\n";
$text = '<?php' . $n . '$arr=' . var_export($ar, true) . ';' . $n . '?>';
if (false !== fopen($file, 'w')) {
    file_put_contents($file, $text);
    echo "<script>alert('修改成功');location='gxgl.php';</script>";
} else {
    echo "<script>alert('系统错误');location='gxgl.php';</script>";
}

?>