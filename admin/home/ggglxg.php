<?php

header("Content-type:text/html;charset=utf-8");

$gg = $_POST['gg'];


$file = 'gggl1.php';
include_once($file);

$arrr = array($gg);
$ar = array_replace($arr, $arrr);
$n = "\n";
$text = '<?php' . $n . '$arr=' . var_export($ar, true) . ';' . $n . '?>';
if (false !== fopen($file, 'w')) {
    file_put_contents($file, $text);
    echo "<script>alert('修改成功');location='gggl.php';</script>";
} else {
    echo "<script>alert('系统错误');location='gggl.php';</script>";
}

?>