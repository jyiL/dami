<?php

	//导入初始化文件
	require '../init.php';
	

	$handler = isset($_GET['handler']) ? $_GET['handler'] : '';


	switch($handler){
		case 'doadduser';
		$username = htmlspecialchars($_POST['username']);
		$name = htmlspecialchars($_POST['name']);
		$pass = md5($_POST['password']);
		$icon = $_FILES['icon'];
		$sex = $_POST['sex'];
		$address = htmlspecialchars($_POST['address']);
		$code = htmlspecialchars($_POST['code']);
		$phone = htmlspecialchars($_POST['phone']);
		$email = htmlspecialchars($_POST['email']);
		$grade = $_POST['grade'];
		$status = $_POST['status'];



		$result = upload('icon',$savePath = '../Public/icon/' ,$allowType = array('image/jpeg','image/png','image/gif','image/jpg'),$maxSize = 0);
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
		$sql = "insert into `users` values(null,'{$username}','{$name}','{$pass}','{$sex}','{$address}','{$code}','{$phone}','{$email}','{$zoomSmallName}','{$grade}','{$status}',unix_timestamp())";


		$res = execu($sql);

		if($res){

			echo 'ok..3秒后跳转';
			echo '<meta http-equiv="refresh" content="3;url=./userlist.php"/>';

		}
	}

		break;


		case 'del';
		$id = $_GET['id'];
		//echo $id;

		$sql = 'delete from users where id = ' . $id;

		$result = execu($sql);

		if($result){
			header('location:./userlist.php?ok');
		}
		break;



		

		case 'doedit';

		$id = $_GET['id'];


		// 2.用户没有设置密码 ---- 取原密码
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];

		//两次密码是否相等
		if($pass != $repass){
			echo '两次密码不一样';
			echo '<meta http-equiv="refresh" content="3;url=./edit.php?id='.$id.'"/>';
				exit;
			}



		//密码为空

		if(empty($pass)){
			//去数据库密码
			$sql = 'select * from users where id =' . $id;

			$list = query($sql)[0];
			echo '密码没有输入';

			$pass = $list['pass'];
		}else{
			$repass = $_POST['repass'];
		}
		

		//用户没有上传头像取原图片名
		if($_FILES['myfile']['error']==0){
				echo '用户已经上传。。';

				//允许的类型
				$allowType=array('image/jpeg','image/jpg','image/png','image/gif');

				//存储路径
				$savePath='../Public/icon/';

				//执行头像的上传
				$uploadResult=upload('myfile',$savePath,$allowType);
				/*echo '<pre>';
				   print_r($uploadResult);
				echo '</pre>';*/

				//判断上传后的状态，如果成，ststus值为true
				   if($uploadResult['status']){
           				//返回结果就有 上传的文件名
				   	    $picPath=$uploadResult['imageName'];//获取上传后的图片名

				   	    //使用路径，拼接上 上传后的图片名

				   	    $picPath=$savePath.$picPath;

				   	    //要进行缩放
				   	    $zoomSmallName=zoom($picPath,$savePath,100,100);

				   	    //$zoomSmallName 就是我们需要的头像了

				   	    //把上传过来的大图给删除了
				   	    unlink($picPath);

				   	    $icon=$zoomSmallName;

					}
					}else{
						//用户没有上传，取隐藏域的名字
						$icon=$_POST['icon'];
					}
		
		

		//接收用户的值
		
		$username = htmlspecialchars($_POST['username']);
		$name = htmlspecialchars($_POST['name']);

		$sex = $_POST['sex'];
		$address = htmlspecialchars($_POST['address']);
		$code = htmlspecialchars($_POST['code']);
		$phone = htmlspecialchars($_POST['phone']);
		$email = htmlspecialchars($_POST['email']);
		$grade = $_POST['grade'];
		$status = $_POST['status'];
		$time = time();

		

		//执行更新

		$sql = "update `users` set `username` = '{$username}',`name` = '{$name}',`pass` = '{$pass}', `sex` = '{$sex}',`address` = '{$address}',`code` = '{$code}',`phone` = '{$phone}',`email` = '{$email}',`icon` = '{$icon}',`grade` = '{$grade}',`status` = '{$status}',addtime = '{$time}' where id =" . $id.';';
		echo $sql; 
		
		$affected_rows = execu($sql);
		var_dump($affected_rows);
		echo '受影响行：' . $affected_rows;

		if($affected_rows){
			echo '<h2>ok</h2>';
			echo '<meta http-equiv="refresh" content="3;url=./userlist.php"/>';
		}
	

		break;


		case 'grade';


			$id = $_GET['id'];
			$status = $_GET['status'];
		

			//判断状态结果 1启用 0禁用
			if($status == 1){
				$status = 0;
			}else{
				$status = 1;
			}

			//准备sql语句
			$sql = "update users set status= {$status} where id =" . $id;
			echo $sql;
			$result = execu($sql);
			var_dump($result);
			if($result){
				header('location:./userlist.php');

			}

		break;

	}