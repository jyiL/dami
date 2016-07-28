<?php
	//导入初始化文件
	require '../init.php';

	$id = $_GET['id'];
	//echo $id;
	$sql = 'select * from `order` where id = ' . $id;
	//echo $sql;
	$result = query($sql)[0];

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title></title>
		<style type="text/css">
		.tr td{
			
			padding:5px;
			border:1px dashed #1C1C1C;
			font: 15px/150% Arial,Verdana,"\5b8b\4f53";
			color:#333333;
		}
		.tr th{
			color:#fff;
			border:1px dashed #1C1C1C;
			background-color:#333333;
			font-family: 15px/150% Arial,Verdana,"\5b8b\4f53";


		}
		.tr a{
			color:#666;
			
			font-family: 15px/150% Arial,Verdana,"\5b8b\4f53";


		}

	</style>
	</head>
	
	<body>
	<center>
		<h1 style="text-align:center;">编辑订单</h1>
		<table style="border: 1px dashed #1C1C1C;border-collapse: collapse;text-align: center;width:70%;">
	
		
		<tr class="tr">
			<th>ID</th>
			<td><?php echo $result['id'];?></td>
		</tr>
		<tr class="tr">
			<th>用户ID</th>
			<td><?php echo $result['uid'];?></td>
		</tr>
		<tr class="tr">
			<th>姓名</th>
			<td><?php echo $result['name'];?></td>
		</tr>
		<tr class="tr">	
			<th>联系电话</th>
			<td><?php echo $result['tel'];?></td>
		</tr>
		<tr class="tr">
			<th>地址</th>
			<td><?php echo $result['address'];?></td>
		</tr>
		<tr class="tr">
			<th>价格</th>	
			<td><?php echo $result['price'];?></td>
		</tr>	
		<tr class="tr">
			<th>状态</th>	
			<td>
				待发货<input type="radio" name="status" value="0" <?php echo $result['status'] == 0 ? 'checked' : '';?> disabled>
				已发货<input type="radio" name="status" value="1" <?php echo $result['status'] == 1 ? 'checked' : '';?>>
			</td>
		</tr>
		<tr class="tr">
			<th>添加时间</th>	
			<td>
				<?php 
					date_default_timezone_set('PRC');
					echo date('Y-m-d H:i:s',$result['addtime']);

				?>
			</td>
			
		
		</tr>
		<tr class="tr">
			<th>操作</th>
			<td><a href="./action.php?handler=dost&id=<?php echo $result['id'];?>&status=<?php echo $result['status'];?>">确认提交</a></td>
		</tr>

	</table>
	</center>
	</body>
</html>