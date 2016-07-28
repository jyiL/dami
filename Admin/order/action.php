<?php

	//导入初始化文件
	require '../init.php';
	

	$handler = isset($_GET['handler']) ? $_GET['handler'] : '';


	switch($handler){

		case 'dost';

		//echo 'dasdsa';
		$id = $_GET['id'];
		$status = $_GET['status'];

		//判断状态结果  0 未发货  1 已发货
		if($status == 0){
			
			$status = 1;
		}

		//准备sql语句
		$sql = "update `order` set status = {$status} where id =" . $id;
		//echo $sql;
		$result = execu($sql);
		//var_dump($result);
		if($result){
			header('location:./orderlist.php');

		}



		break;



	}