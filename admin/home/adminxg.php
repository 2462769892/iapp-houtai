<?php

header("Content-type:text/html;charset=utf-8");

$user=$_POST['user'];
$pass=$_POST['pass'];

if($user=="")
{
    echo "<script>alert('请输入管理员账号！');location='xgmm.php';</script>";
}
elseif($pass=="")
{
    echo "<script>alert('请输入管理员密码!');location='xgmm.php';</script>";
}
else
{
    $file='admin.php';
    include_once($file);
    
    $arrr=array($user,$pass);
    $ar=array_replace($arr,$arrr);
        $n="\n";
        $text='<?php'.$n.'$arr='.var_export($ar,true).';'.$n.'?>';
        if(false!==fopen($file,'w'))
        {
            file_put_contents($file,$text);
            echo "<script>alert('修改成功');location='../index.html';</script>";
        }
        else
        {
            echo "<script>alert('系统错误');location='xgmm.php';</script>";
        }
}
