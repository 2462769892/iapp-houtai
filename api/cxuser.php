<?php

$user = $_GET['user'];
?>
                用户账号:<?php include_once("../admin/user/$user.php"); echo $data[0] ?><br>
                用户注册时间:<?php include_once("../admin/user/$user.php"); echo $data[4] ?><br>
                用户昵称:<?php include_once("../admin/user/$user.php"); echo $data[1] ?><br>
                用户QQ:<?php include_once("../admin/user/$user.php"); echo $data[3] ?><br>

