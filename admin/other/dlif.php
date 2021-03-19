<?php

header("Content-type:text/html;charset=utf-8");

$user=$_COOKIE["adminzh"];
$pass=$_COOKIE["adminmm"];

if($user==""||$pass=="")
{
    echo "<script>alert('请进行管理员登录');location='../index.html';</script>";
}
else
{
    include_once("../home/admin.php");
    if($user==$arr[0]&&$pass==$arr[1])
    {
    }
    else
    {
        echo "<script>alert('管理员用户名或密码错误，请重新登录');location='../index.html';</script>";
    }
}

?>