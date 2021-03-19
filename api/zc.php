<?php

header("Content-type:text/html;charset=utf-8");

$user=$_GET['user'];
$name=$_GET['name'];
$pass=$_GET['pass'];
$qq=$_GET['qq'];

include_once("../data/tw.php");
if($user=="")
{
    echo ''.$tw[5].'';
}
elseif($name=="")
{
    echo ''.$tw[6].'';
}
elseif($pass=="")
{
    echo ''.$tw[7].'';
}
elseif($qq=="")
{
    echo ''.$tw[8].'';
}
else
{
    $file='../admin/user/'.$user.'.php';
    //检查文件或目录是否存在
    if(file_exists($file))
    {
        echo $tw[9];
    }
    else
    {
        $filea='../admin/user/'.$user.'.php';
        $time=date("Y-m-d H:i:s");
        $arr=array("0"=>$user,"1"=>$name,"2"=>$pass,"3"=>$qq,"4"=>$time,);
        $n="\n";
        $text='<?php'.$n.'$data='.var_export($arr,true).';'.$n.'?>';
        if(false!=fopen($filea,'w+'))
        {
            file_put_contents($filea,$text);
            echo ''.$tw[11].'';
        }
        else
        {
            echo '注册失败';
        }
    }
}

?>