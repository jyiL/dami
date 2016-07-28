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


		//注册
		case 'doregister';
		//echo 'dsadsa';
		//echo '<pre>';
		//print_r($_POST);
			//session_start();

		// 接收用户输入的数据
			$yzm = $_POST['yzm'];
			$code = $_SESSION['code'];

			// 1.判断验证码
			if(! (strtolower($yzm) == strtolower($code)) ){
				// 如果不成功，我们才处理
				echo '<h1>验证码错误</h1>';
				echo '<meta http-equiv="refresh" content="2;url=./register.php"/>';
				exit;
			}

			// 2.用户的信息永远不要相信，想办法做验证
			// 接收用户输入的数据
			$user = htmlspecialchars($_POST['username']);
			$pass =  md5(htmlspecialchars($_POST['pass']));
			$repass =  md5(htmlspecialchars($_POST['repass']));

			if($pass != $repass){
				// 如果不成功，我们才处理
				echo '<h1>密码不一致</h1>';
				echo '<meta http-equiv="refresh" content="2;url=./register.php"/>';
				exit;
			}


			$time = time();

			// 插入到数据库中

			

			// 准备sql语句
			$sql = "insert into users(`username`,`pass`,`addtime`) values('{$user}','{$pass}','{$time}')";
			//echo $sql;
			// 发送执行
			$result = execu($sql);
			//var_dump($result);

			// 如果成功，去登录
			if($result){
				echo '<h1>注册成功</h1>';
				echo '<meta http-equiv="refresh" content="2;url=./login.php"/>';
			}else{
				echo '<h1>注册失败</h1>';
				echo '<meta http-equiv="refresh" content="2;url=./register.php"/>';
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
			$num = $_GET['num'];
			//echo $id;//exit;
			if(empty($_SESSION['userInfo'])){
				header('location:./login.php');
			}else{

				header("location:./shopcar.php?id={$id}&num={$num}");
			}
		break;

		case 'del':
			//echo 'dasdsa';
		//$id = $_GET['id'];
		//echo $id;
		//echo '<pre>';
		//print_r($_SESSION['shopcar']);
		//echo '<pre>';
		unset($_SESSION['shopcar'][$_GET['id']]);
		



		//print_r($_SESSION['shopcar']);

		//unset($_SESSION['shopcar'][$gid]);

		header('location:./shopcar.php');




		break;


		case 'doorder';

		//echo 'dsadsa';
		//session获取用户的id
		$uid = $_SESSION['userInfo']['id'];
		//获取用户的姓名
		$name = $_SESSION['userInfo']['name'];
		//echo $name;
		//echo '<pre>';
		//print_r($_POST);
		
		$tel = $_SESSION['userInfo']['phone'];
		//echo $tel;
		$price = $_POST['total'];

		
		//echo $price;
		$address = $_SESSION['userInfo']['address'];
		//echo $address;

		$sql = "insert into `order`values(null,{$uid},'{$name}','{$tel}','{$address}','{$price}',0,unix_timestamp())";
		//echo $sql;
		$res = execu($sql);
       


		
		echo $res;


		if($res){


			foreach ($_SESSION['shopcar'] as $v) {
				

				$sql = "insert into `orderdetail` values(null,{$uid},{$res},'{$v['id']}','{$v['name']}','{$v['price']}','{$v['num']}')";
				echo $sql;
				$list = execu($sql);
				if(!$list){
					exit('订单详情表获取错误');
				}



			}
		



			header("location:./order.php?oid=$res");
			exit;

		}else{
			echo '购物车有误';
			echo '<meta http-equiv="refresh" content="20;url=./shopcar.php"/>';
		}

		break;





		case 'dodatail':
			//echo 'sadsa';
			//echo '<pre>';
			$id = $_GET['id'];
			//echo $id;
			$oid = $_GET['oid'];
			//echo $oid;

			$sql = 'select address ,name , tel from `order` where id = ' . $oid;
			//echo $sql;
			$res = query($sql)[0];

			//echo '<pre>';
			//print_r($res);
			//接受用户输入的信息

			$address = $_POST['address'];
			$name = $_POST['name'];
			$tel = $_POST['tel'];
			//echo $tel;
			

			if($address != $res['address']){

				$sql = "update `order` set address = '{$address}' where id = " . $oid;
				//echo $sql;
				$res = execu($sql);



			}

			if($address != $res['name']){

				$sql = "update `order` set address = '{$name}' where id = " . $oid;
				//echo $sql;
				$res = execu($sql);



			}



			if($address != $res['tel']){

				$sql = "update `order` set address = '{$tel}' where id = " . $oid;
				//echo $sql;
				$res = execu($sql);



			}

			echo '<h1>请尽快付款</h1>';
			echo '<meta http-equiv="refresh" content="2;url=./personal.php"/>';



		break;

		case 'dourl':

		//echo 'dadas';
		echo '<pre>';
			print_r($_POST);

			echo '<pre>';

			print_r($_FILES);
			$name = htmlspecialchars($_POST['name']);
		$url = htmlspecialchars($_POST['url']);


			$result = upload('picname',$savePath = '../admin/Public/logo/' ,$allowType = array('image/jpeg','image/png','image/gif','image/jpg'),$maxSize = 0);
			if(isset($result['imageName'])){
			$photo = $result['imageName'];

				// 使用路径，拼接上，上传后的图片名
				$photo = $savePath . $photo;
	

				// 得到大图，就要进行缩放
				$zoomSmallName = zoom($photo,$savePath,100,100);
				//echo '图片缩放后的小图的名字：' . $zoomSmallName;
				// 把上传过来的大图给删除了
				unlink($photo);

				//echo '文件上传后的大图：' .$photo;
				//echo '<br>';

			

			//echo '图片缩放后的小图的名字：' . $zoomSmallName;
			//echo '<pre>';
			//	print_r($result);
			//echo '</pre>';

		

		// 准备sql语句
		$sql = "insert into `url` values(null,'{$name}','{$url}','{$zoomSmallName}',unix_timestamp())";


		$res = execu($sql);

		if($res){

			echo 'ok..3秒后跳转';
			echo '<meta http-equiv="refresh" content="3;url=./link.php"/>';

		}
	}





		break;



		

	}