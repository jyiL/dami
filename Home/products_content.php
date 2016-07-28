<?php
	// 导入init
	require './init.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Index</title>
<link rel="stylesheet" type="text/css" href="./Public/css/css.css">
<link rel="stylesheet" type="text/css" href="./Public/css/liebiao.css">
<link rel="stylesheet" type="text/css" href="./Public/css/jieshao.css">
</head>
<body>
<!--header-->
<?php require './header.php';?>
<!--content-->
	
</div>
<div class="page-main">
	<div class="container breadcrumbs">
		<!--查询数据库-->
		<?php
			$id = $_GET['id'];
			$sql = 'select * from commodity where id=' . $id;
			echo $sql;
			$result = query($sql)[0];
			echo '<pre>';
			print_r($result);
		?>
		<!--输出商品名-->
		<a href="#">首页</a><span>/</span><?php echo $result['name'];?>
	

	</div>
 	
 	<div class="goods-detail">
 		<div class="goods-detail-info">
 			<div class="container">
 				<div class="row" style="clear:both;">
 					<div class="left-img">
 						<!--输出商品图片-->
 						<img class="goods-big-pic" src="../admin/public/uploads/<?php echo $result['picture'];?>" >
 					</div>
 					<div class="right-text">
 						<dl>
 							<dt class="r_title"><h2><?php echo $result['name'];?></h2></dt>
 							<dd class="d-text"><p><?php echo $result['describe'];?></p></dd>
 							<dd class="yuan"><b><?php echo $result['price'];?></b> 元 </dd>
 							<dd><a class="addcar" href="./action.php?handler=shopcar&id=<?php echo $result['id'];?>">加入购物车</a></dd>
 							<dd></dd>
 						</dl>
 					</div>
 					
 				</div>
 			</div>
 		</div>
 	</div>
	
	<div class="pro-box">
		<div class="box-img"><a href="#"><img src="./Public/img/mi4-detail-5.jpg"></a></div>
		<div class="box-img"><a href="#"><img src="./Public/img/mi4-video.jpg"></a></div>
	</div>
</div>


<!--footer-->
<?php require './footer.php';?>
<div class="site-info"></div>
</div>

</body>
</html>
