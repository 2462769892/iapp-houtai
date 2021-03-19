<?php

header("Content-type:text/html;charset=utf-8");

$user=$_POST['adminzh'];
$pass=$_POST['adminmm'];

include("home/admin.php");
if($user==$arr[0]&&$pass==$arr[1])
{
    setcookie("adminzh",$arr[0],time()+3600*24);
    setcookie("adminmm",$arr[1],time()+3600*24);
    echo "<script>alert('管理员登录成功！！欢迎回来！');location='home/';</script>";
}
else
{
    echo "<script>alert('管理员账号或密码错误!');location='index.html';</script>";
}

?>