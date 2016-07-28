<?php error_reporting(E_ALL ^ E_NOTICE);
	// 导入init
	require './init.php';
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="./Public/css/css.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/liebiao.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/jieshao.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/personal.css">
</head>
<body>
	<!--头部-->
	<div id="top" class="bd"><?php include('./header.php');?></div>
	<center>
	<h1>留言板</h1><br>
	<a href="message.php" style="text-decoration:none;">查看留言</a>
	<form action="add.php" method="post">
		标题:<input type="text" name="title" style="width:230px;background: rgba(255, 255, 255, 0.2)!important;"><br><br>
		内容:<textarea name="content" cols="30" rows="5" style="background: rgba(255, 255, 255, 0.2)!important;"></textarea><br><br>
		<input type="submit">
	</form>

	
	</center>
</body>
</html>
