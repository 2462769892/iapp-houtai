<?php

header("Content-type:text/html;charset=utf-8");

$user=$_GET['user'];

if($user=="")
{
}
else
{
    $file='../user/'.$user.'.php';
    if(file_exists($file))
    {
        unlink($file);
        echo "<script>alert('删除成功');location='user.php';</script>";
    }
    else
    {
        echo "<script>alert('系统找不到这个用户');location='user.php';</script>";
    }
}

?>