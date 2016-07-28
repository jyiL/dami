<?php


	$title = isset($_GET['title']) ? $_GET['title'] : '';


	$link = mysqli_connect('localhost','root','P@ssw0rd','message1') or exit('haha' . mysqli_connect_error() );

	mysqli_set_charset($link,'utf8');

	$sql = "delete from `ms` where title= '$title'";

	$result = mysqli_query($link,$sql);
	var_dump($result);


	mysqli_close($link);
	header('location:./message.php');