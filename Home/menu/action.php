<?php 

	
	$handler = isset($_GET['handler']) ? $_GET['handler'] : '';


	switch($handler){

		case 'doedit';
			//echo 'dada';

		$id = $_GET['id'];


		// 2.用户没有设置密码 ---- 取原密码
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];

		//两次密码是否相等
		if($pass != $repass){
			echo '两次密码不一样';
			echo '<meta http-equiv="refresh" content="3;url=./personal.php?ac=userupd?id='.$id.'"/>';
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
		//echo '<pre>';
		//print_r($_FILES);

		//用户没有上传头像取原图片名
		if($_FILES['myfile']['error']==0){
				echo '用户已经上传。。';

				//允许的类型
				$allowType=array('image/jpeg','image/jpg','image/png','image/gif');

				//存储路径
				$savePath = LOCALPATH . '../admin/public/icon/';
				//echo $savePath;
				//执行头像的上传
				$uploadResult=upload('myfile',$savePath,$allowType);

				//echo '<pre>';
				   //print_r($uploadResult);
				//echo '</pre>';

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
		
		$time = time();

		

		//执行更新

		$sql = "update `users` set `username` = '{$username}',`name` = '{$name}',`pass` = '{$pass}', `sex` = '{$sex}',`address` = '{$address}',`code` = '{$code}',`phone` = '{$phone}',`email` = '{$email}',`icon` = '{$icon}',addtime = '{$time}' where id =" . $id.';';
		echo $sql; 
		
		$affected_rows = execu($sql);
		var_dump($affected_rows);
		echo '受影响行：' . $affected_rows;

		if($affected_rows){
			echo '<h2>ok</h2>';
			echo '<meta http-equiv="refresh" content="3;url=./personal.php?ac=userlist"/>';
		}
	





		break;










	}