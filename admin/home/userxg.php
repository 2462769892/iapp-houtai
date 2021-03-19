<?php

header("Content-type:text/html;charset=utf-8");

$user=$_GET['user'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$qq=$_POST['qq'];
/*
$vip=$_POST['vip'];
$rmb=$_POST['rmb'];*/

$file='../user/'.$user.'.php';

if($user=="")
{
}
elseif($name==""||$pass==""||$qq=="")
{
    include_once($file);
    echo "<script>alert('保存失败并修改失败[空值会出现用户信息问题]');location='userxx.php?user=".$data[0]."';</script>";
}
else
{
    if(file_exists($file))
    {
        include_once($file);
        $arr=array($data[0],$name,$pass,$qq,$data[4]);
        $ar=array_replace($data,$arr);
        $n="\n";
        $text='<?php'.$n.'$data='.var_export($ar,true).';'.$n.'?>';
        if(false!==fopen($file,'w'))
        {
            file_put_contents($file,$text);
            echo "<script>alert('保存成功并修改成功');location='userxx.php?user=".$data[0]."';</script>";
        }
        else
        {
            echo "<script>alert('系统出错');location='userxx.php?user=".$data[0]."';</script>";
        }
    }
    else
    {
        echo "<script>alert('系统找不到这个用户');location='user.php';</script>";
    }
}

?>