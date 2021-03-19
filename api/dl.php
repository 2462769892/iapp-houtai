<?php

header("Content-type:text/html;charset=utf-8");

$user=$_GET['user'];
$pass=$_GET['pass'];

include_once("../data/tw.php");
if($user=="")
{
    echo ''.$tw[0].'';
}
elseif($pass=="")
{
    echo ''.$tw[1].'';
}
else
{
    $file='../admin/user/'.$user.'.php';
    //检查文件或目录是否存在
    if(file_exists($file))
    {
        include_once($file);
        if($user==$data[0]&&$pass==$data[2])
        {
            echo ''.$tw[4].'';
        }
        else
        {
            echo ''.$tw[2].'';
        }
    }
    else
    {
        echo ''.$tw[3].'';
    }
}

?>