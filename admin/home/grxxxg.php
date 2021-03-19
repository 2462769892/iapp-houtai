<?php

header("Content-type:text/html;charset=utf-8");

$nickname=$_POST['nickname'];
$qq=$_POST['qq'];
$grjj=$_POST['grjj'];

if($nickname=="")
{
    echo "<script>alert('请输入管理员昵称！');location='grxx.php';</script>";
}
elseif($qq=="")
{
    echo "<script>alert('请输入管理员qq!');location='grxx.php';</script>";
}
else
{
    $file='grxxxx.php';
    include_once($file);
    
    $arrr=array($nickname,$qq,$grjj);
    $ar=array_replace($arr,$arrr);
        $n="\n";
        $text='<?php'.$n.'$arr='.var_export($ar,true).';'.$n.'?>';
        if(false!==fopen($file,'w'))
        {
            file_put_contents($file,$text);
            echo "<script>alert('修改成功');location='grxx.php';</script>";
        }
        else
        {
            echo "<script>alert('系统错误');location='grxx.php';</script>";
        }
}

?>