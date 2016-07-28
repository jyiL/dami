<?php

	//导入初始化文件
	require '../init.php';
	

	$handler = isset($_GET['handler']) ? $_GET['handler'] : '';

	switch($handler){

		case 'doaddurl':
			//echo 'dasdsa';
			echo '<pre>';
			print_r($_POST);

			echo '<pre>';

			print_r($_FILES);

		$name = htmlspecialchars($_POST['name']);
		$url = htmlspecialchars($_POST['url']);


			$result = upload('picname',$savePath = '../Public/logo/' ,$allowType = array('image/jpeg','image/png','image/gif','image/jpg'),$maxSize = 0);
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
			echo '<meta http-equiv="refresh" content="3;url=./urllist.php"/>';

		}
	}

		break;


		case 'doedit':

			//echo 'dsadsa';

		$id = $_GET['id'];

		if(!empty($_POST)){
			echo '<pre>';
			print_r($_POST);

			if($_FILES['myfile']['error']==0){
				echo '用户已经上传。。';

				//允许的类型
				$allowType=array('image/jpeg','image/jpg','image/png','image/gif');

				//存储路径
				$savePath='../Public/logo/';

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

				   	    $picture=$zoomSmallName;

					}
					}else{
						//用户没有上传，取隐藏域的名字
						$picture=$_POST['picname'];
					}
					//接受用户的值

					$name = htmlspecialchars($_POST['name']);
					$url = htmlspecialchars($_POST['url']);
					
					$time = time();

					//执行更新

					$sql = "update `url` set name = '{$name}' , picname = '{$picture}' , url = '{$url}' , addtime = '{$time}' where id=" . $id;

					//echo $sql;
					$result = execu($sql);

					if($result){

						echo '<h2>ok</h2>';
						echo '<meta http-equiv="refresh" content="3;url=./urllist.php"/>';

					}




		}



		break;


		case 'dodel':
			//echo 'dass';

			$id = $_GET['id'];
			//echo $id;

			$sql = 'delete from url where id =' . $id;
			//echo $sql;
			$result = execu($sql);
			if($result){
				header('location:./urllist.php?ok');
			}


		break;

		case 'dourl':

		echo 'dadas';






		break;






	}