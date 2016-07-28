<?php

	// 初始化文件 
	require '../init.php';

	// 接收处理方式
	$handler = isset($_GET['handler']) ? $_GET['handler'] : '';
	

	switch ($handler) {
		case 'addcommodity':
			//echo 'haha';

		//echo '<pre>';

			//print_r($_POST);
		//	print_r($_FILES);

		//接受商品信息
		$cateid = $_POST['cateid'];
		$name = htmlspecialchars($_POST['name']);
		$price = htmlspecialchars($_POST['price']);
		$store = htmlspecialchars($_POST['store']);
		$describe = htmlspecialchars($_POST['describe']);
		$display = $_POST['display'];
		$status = $_POST['status'];
		$time = time();
		$views = isset($_POST['views']) ? $_POST['views'] : '';
		$buy = isset($_POST['buy']) ? $_POST['buy'] : '';

		//验证，正则
		if($price < 0 || empty($price)){
			exit('价格不能小于0或者为空');
		}
		if($store < 0 || empty($store)){
			exit('库存不能小于0或者为空');

		}

		if(empty($name)){
			exit('商品名不能为空');
		}



		//上传照片
		$savePath = LOCALPATH . '/Public/uploads/';
		$allowType = array('image/jpeg','image/png','image/jpg','image/gif');
		$maxSize = 1024000000;

		//上传大图片
		$returnResult = upload('myfile',$savePath,$allowType,$maxSize);

		//echo '上传的返回结果，有状态，有图片';
		//var_dump($returnResult);

		if($returnResult['status']){

			$bigName = $savePath . $returnResult['imageName'];
			//对大图进行缩放
			$smallName = zoom($bigName,$savePath,$zoomSize = 150,$zoomHeight = 150);


			//缩放成功后，返回的是小图片名
			//echo '缩放后的小图名：' . $smallName;

			//var_dump($smallName);

			unlink($bigName);

		}else{
			echo '<h1>图片上传失败</h1>';
			echo '<meta http-equiv="refresh" content="2;url=./addcommodity.php"/>';
			exit;
		}


		//echo '<hr>';

		//插入商品信息
		$sql = "insert into commodity values(null,'{$cateid}','{$name}','{$smallName}','{$price}','{$store}','{$views}','{$buy}','{$describe}','{$display}','{$status}','{$time}')";
		//echo $sql;


		$result = execu($sql);

		if($result){
			echo '<h1>上传成功，2秒后跳转</h1>';
			echo '<meta http-equiv="refresh" content="2;url=./commoditylist.php"/>';
			exit;
		}else{
			exit('添加商品失败');
		}


			break;

		case 'ds';


			$id = $_GET['id'];
			$display = $_GET['display'];
		

			//判断状态结果 1上架 0下架
			if($display == 1){
				$display = 0;
			}else{
				$display = 1;
			}

			//准备sql语句
			$sql = "update commodity set display= {$display} where id =" . $id;
			echo $sql;
			$result = execu($sql);
			var_dump($result);
			if($result){
				header('location:./commoditylist.php');

			}

		break;


		case 'del';
			$id = $_GET['id'];
			//echo $id;

			$sql = 'delete from commodity where id =' . $id;
			//echo $sql;
			$result = execu($sql);
			if($result){
				header('location:./commoditylist.php?ok');
			}

		break;
		



		case 'edit';

		//echo 'dsad';

		$id = $_GET['id'];

		if(!empty($_POST)){
			echo '<pre>';
			print_r($_POST);

			if($_FILES['myfile']['error']==0){
				echo '用户已经上传。。';

				//允许的类型
				$allowType=array('image/jpeg','image/jpg','image/png','image/gif');

				//存储路径
				$savePath='../Public/uploads/';

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
						$picture=$_POST['picture'];
					}
					//接受用户的值

					$name = htmlspecialchars($_POST['name']);
					$price = htmlspecialchars($_POST['price']);
					$store = htmlspecialchars($_POST['store']);
					$describe = htmlspecialchars($_POST['describe']);
					$display = $_POST['display'];
					$status = $_POST['status'];
					$time = time();

					//执行更新

					$sql = "update `commodity` set name = '{$name}' , picture = '{$picture}' , price = '{$price}', store = '{$store}', display = {$display} , status = {$status} ,addtime = '{$time}' where id=" . $id;

					//echo $sql;
					$result = execu($sql);

					if($result){

						echo '<h2>ok</h2>';
						echo '<meta http-equiv="refresh" content="3;url=./commoditylist.php"/>';

					}




		}



		break;


		



		
	}
	