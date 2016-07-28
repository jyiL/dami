<?php

	// 导入init
	require './init.php';

	$handler = $_GET['handler'];


	switch($handler){


		case 'dologin':
			
			echo '<pre>';
				print_r($_POST);
			
		$code = $_SESSION['code'];
		echo '<pre>';
			print_r($code);

		//验证验证码
		if(strtolower($code) != strtolower($_POST['yzm'])){
			echo '<h1>验证码错误2秒后跳转</h1>';
			echo '<meta http-equiv="refresh" content="2;url=./login.php?errno=1"/>';
			exit; 
		}
		//获取用户输入的账号
		$name = $_POST['username'];
		//获取用户输入的密码
		$pass = $_POST['pass'];
		//查询数据库是否有此用户
		$sql = "select * from users where username = '{$name}'";

		//echo $sql;

		$userInfo = query($sql)[0];
		echo '<pre>';

		print_r($userInfo);

		if(count($userInfo) > 0){
			echo '<h1>用户存在</h1>';


				if(md5($pass) == $userInfo['pass']){

					//用户账号密码都正确
					//信息存储到SESSEION
					$_SESSION['userInfo'] = $userInfo;

					echo '<h1>登录成功</h1>';
					echo '<meta http-equiv="refresh" content="2;url=./index.php"/>';
					exit;
				}else{
					echo '<h1>密码错误</h1>';
					echo '<meta http-equiv="refresh" content="2;url=./login.php"/>';
					exit;

				}

		}else{

			echo '<h1>用户名错误</h1>';
			echo '<meta http-equiv="refresh" content="2;url=./login.php"/>';
			exit;

		}

		



		break;



		case 'logout':

		//echo 'dada';

		session_destroy();
		echo '<h1>退出成功</h1>';
		echo '<meta http-equiv="refresh" content="2;url=./index.php"/>';
		break;

		case  'shopcar':
			//echo 'dasdas';
			$id = $_GET['id'];
			echo $id;//exit;
			if(empty($_SESSION['userInfo'])){
				header('location:./login.php');
			}else{

				header("location:./shopcar.php?id={$id}");
			}
		break;






	}