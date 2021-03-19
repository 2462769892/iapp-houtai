
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="icon" href="asster/images/favicon.ico" type="image/ico">
	<title><?php include_once("admin/home/wzpz.php");
			echo $arr[0] ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="asster/css/style.css">
</head>

<body>
	<div id="hedadr">
		<img src="asster/images/tp.png">
		<ul><?php include_once("admin/home/wzpz.php");
			echo $arr[2] ?></ul>
		<p><?php include_once("admin/home/wzpz.php");
			echo $arr[3] ?></p>
		<dd>
			<a href="<?php include_once("admin/home/wzpz.php");
						echo $arr[4] ?>"><button onclick="xzhs()">普通下载</button></a>
		</dd>
	</div>
	<div class="title">软件截图</div>
	<div class="show">
		<div class="pic">
			<img src="<?php include_once("admin/home/wzpz.php");
						echo $arr[5] ?>">
			<img src="<?php include_once("admin/home/wzpz.php");
						echo $arr[6] ?>">
			<img src="<?php include_once("admin/home/wzpz.php");
						echo $arr[7] ?>">
			<img src="<?php include_once("admin/home/wzpz.php");
						echo $arr[8] ?>">
		</div>
	</div>
	<div class="title">软件介绍</div>
	<div class="show"><?php include_once("admin/home/wzpz.php");
						echo $arr[9] ?></div>
	<div class="title" id="q">更新日志</div>
	<div class="show" id="qx"><?php include_once("admin/home/wzpz.php");
								echo $arr[10] ?></div>
	<div class="title" id="q">团队介绍</div>
	<div class="show" id="qx"><?php include_once("admin/home/wzpz.php");
								echo $arr[11] ?></div>
	<!-- 开启社区 -->
	<!--底部-->
	<div class="bg-bottom">
		<div style="text-align:center;font-size:13px;color:#616161;margin-top:10px;"><?php include_once("admin/home/wzpz.php");
																						echo $arr[14] ?><br><?php include_once("admin/home/wzpz.php");
																																					echo $arr[15] ?></div>
	</div>
</body>

		<script>
			function xxhs(){
		<?php $intnum = intval(file_get_contents('data/xz.txt'));
			file_put_contents('data/xz.txt',strval($intnum + 1));?>
			}
</script>
</html>