<?php
	

	// 到入初始化文件
	require '../init.php';

	// 接收处理方式
	$handler = isset($_GET['handler']) ? $_GET['handler'] : '';



	switch ($handler) {
		case 'addcate':
			
		echo '<pre>';
		print_r($_POST);

		//接受分类信息
		$catename = $_POST['catename'];
		$pid = $_POST['pid'];
		$path = $_POST['path'];
		$time = time();
		

		if(empty($catename)){

			echo '分类名不能为空';
			echo '<meta http-equiv="refresh" content="2000,url=./addcategory.php"/>';
			exit;
		}


		$sql = "insert into category values(null,'{$pid}','{$catename}','$path','$time')";

		echo $sql;

		$result = execu($sql);

		if($result){
			echo '<h1>ok。。2秒后跳转</h1>';
			echo '<meta http-equiv="refresh" content="2,url=./catelist.php"/>';
			exit;

		}else{
			echo "<h1>添加失败。。2秒后跳转</h1>";
			echo '<meta http-equiv="refresh" content="2,url=./addcategory.php"/>';
			exit;

		}

			break;






		case 'addson';

		//echo 'haha';

		 echo '<pre>';

		 print_r($_POST);

		 $catename = $_POST['catename'];
		
		

		 $pid = $_POST['pid'];
		 // 接受的是父级的路径
		 $path = $_POST['path'];

		 $path .= $pid . ',';
		 //判断是否为空
				if(empty($catename)){
					echo '添加失败';
					echo '<meta http-equiv="refresh" content="2,url=./addcategory.php?id='.$pid.'"/>';
					exit;
				}
		 echo $path;


		 $time = time();
	

		 $sql = "insert into category values(null,'{$pid}','{$catename}','{$path}','{$time}')";


		 echo $sql;

		 $result = execu($sql);
		 //echo $result;

		 if($result){

		 	echo '添加成功';
		 	echo '<meta http-equiv="refresh" content="2,url=./catelist.php"/>';
		 	exit;
		 }
		
	
		break;














		case 'edit';
			//echo 'test...';


			$id = $_GET['id'];
			//echo $id;
			//echo '<pre>';
			//print_r($_POST);

			if(!empty($_POST)){
				//print_r($_POST);
				$catename = $_POST['catename'];
				$sql = "update category set name = '{$catename}' where id = " . $id;
				//echo $sql;

				$result = execu($sql);

				if($result){
					echo '修改成功2秒后跳转';
					echo '<meta http-equiv="refresh" content="2,url=./catelist.php"/>';
					exit;
				}

			}else{
				$sql = 'select * from category where id =' . $id;

				$result = query($result)[0];

				


			}


		break;


		




		case 'del';

		//echo 'test...';

		//接收id
		$id = $_GET['id'];

		//检查分类是否有子分类
		$sql = 'select * from category where pid = ' . $id;
		//echo $sql;
		$result = query($sql);
		//echo '<pre>';

		//print_r($result);

		if(count($result) > 0){
			//var_dump($result);

			echo '不能删除，有子分类';
			echo '<meta http-equiv="refresh" content="2,url=./catelist.php"/>';
			exit;
		}


		//如果子类下有商品不能删除
		$sql = 'delete  from category where id =' . $id;
		//echo $sql;
		$row = execu($sql);

		//返回的是受影响行
		if($row){
			echo '删除成功,2秒跳转';
			echo '<meta http-equiv="refresh" content="2,url=./catelist.php" />';
			exit;
		}



		break;








	}
	