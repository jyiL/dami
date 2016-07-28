<?php
	//屏蔽所有错误提示
	error_reporting(0);
	error_reporting(~E_NOTICE);
    // 导入初始化文件
    require './init.php';
	
	
	// 接收处理方式
	$handler = isset($_GET['handler']) ? $_GET['handler'] : '';


	switch($handler){

		case 'dologin':

		//echo 'hahadsad';

		//echo '<pre>';
			//print_r($_GET);
			//print_r($_POST);
			//print_r($_SESSION);
		//echo '</pre>';

		//获取真实产生的验证码
		$code = $_SESSION['code'];
		//echo '<pre>';
			//print_r($code);

		//获取用户输入的验证码
		$yzm = $_POST['yzm'];

		//echo '<pre>';
			//print_r($yzm);


		if(strtolower($code) != strtolower($yzm)){

			echo '验证码错误';
			echo '<meta http-equiv="refresh" content="2;url=./login.php?errno=1"/>';
				exit;

		}

		//获取用户输入的账号
		$name = $_POST['username'];

		//获取用户输入的密码

		$pass = $_POST['pass'];
	

		// 根据用户输入 ，去查询数据库是否存在这个用户   and 后面的判断就是用于权限控制

		$sql = "select * from users where `username` = '{$name}' and `grade` < 2";
		//echo $sql;


		$result = query($sql)[0];  // 处理过的数据，其实就是一条数组
			//echo '<pre>';
				//print_r($result);
			//echo '</pre>';

			if(count($result) > 0){
				echo '<h1>用户存在</h1>';
				echo '<br>';


				if(md5($pass) == $result['pass']){
					//用户账号密码都正确
					//信息存储在SESSION
					$_SESSION['result'] = $result;

					echo '成功登陆2秒后跳转';
					echo '<meta http-equiv="refresh" content="2;url=./index.php"/>';

				}else{

					echo "<h1>密码错误</h1>";
					echo '<meta http-equiv="refresh" content="2;url=./login.php?error=2"/>';
					exit;
				}

			}else{

					echo "<h1>用户名错误</h1>";
					echo '<meta http-equiv="refresh" content="2;url=./login.php?error=3"/>';
					exit;

			}


		break;


		case 'logout':

			//echo '哈哈哈哈'

			// 所谓推出，只是把session的 userinfo 给销毁
			// unset();

			session_destroy();
			echo '<h1>退出成功</h1>';
			echo '<meta http-equiv="refresh" content="2;url=./login.php"/>';
		break;





	}