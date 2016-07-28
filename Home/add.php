<?php


	$title=isset($_POST['title']) ? $_POST['title'] : '';
	$content=isset($_POST['content']) ? $_POST['content'] : '';

	$link = mysqli_connect('localhost','root','P@ssw0rd','message1') or exit('haha' . mysqli_connect_error() );

	mysqli_set_charset($link,'utf8');

	$sql = "insert into `ms` values('$title','$content',unix_timestamp())";

	$result = mysqli_query($link,$sql);




	mysqli_close($link);

	header('location:./message.php');