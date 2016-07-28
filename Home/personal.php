<?php error_reporting(E_ALL ^ E_NOTICE);
	// 导入init
	require './init.php';
	session_start();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.fl{float:left;}
		.fr{float:right;}
		.bd{}
		.mt_10{margin-top:10px;}
		#top{height:160px;}
		#menu{height:600px;width:15%;background-color:#333333;color:#b0b0b0;}
		#cont{height:500px;width:84%;background-image:url(./Public/img/milogo.jpg);}
	</style>


	<link rel="stylesheet" type="text/css" href="./Public/css/css.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/liebiao.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/jieshao.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/personal.css">


</head>
<body>
	<!--头部-->
	<div id="top" class="bd"><?php include('./header.php');?></div>

	<div class="mt_10">
		<div id="menu" class="fl bd"><?php include('./menu.php');?></div>
		<div id="cont" class="fr bd">
			
			<?php
				$ac=$_GET['ac']?$_GET['ac']:'rr';
				include('./menu/'.$ac.'.php');
			?>

		</div>
	</div>
</body>
</html>