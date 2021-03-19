<?php
header("Content-type:text/html;charset=utf-8");

$zh=$_COOKIE['adminzh'];
$mm=$_COOKIE['adminmm'];
if($zh==""&&$mm=="")
{
    echo "<script type='text/javascript'>alert('注销失败');location='index.php';</script>";
}
else
{
    setcookie("adminzh","",time()-3600*24);
    setcookie("adminmm","",time()-3600*24);
    echo "<script type='text/javascript'>alert('注销成功');location='../index.html';</script>";
}

?>