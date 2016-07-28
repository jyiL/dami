<?php


	$id = $_GET['id'];
	//echo $id;
	$sql = 'select * from `order` where id = ' . $id;
	//echo $sql;
	$result = query($sql);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title></title>
		<style type="text/css">
		.tr td{
			
			padding:15px;
			font: 15px/150% Arial,Verdana,"\5b8b\4f53";
			color:#fff;
		}
		.tr th{
			color:#666;
			border:1px dashed #1C1C1C;
			font-family: 15px/150% Arial,Verdana,"\5b8b\4f53";


		}
		.tr a{
			color:#fc1;
			
			font-family: 15px/150% Arial,Verdana,"\5b8b\4f53";


		}

	</style>
	</head>
	
	<body>
		<center>
		<h1 style="text-align:center;">编辑订单</h1>
		<table style="border: 1px solid #e5e5e5;border-collapse: collapse;text-align: center;width:70%;">
	
		<!--遍历用户-->
		<?php foreach ($result as $k => $v):?>
		<tr class="tr">
			<th>ID</th>
			<td><?php echo $v['id'];?></td>
		</tr>
		<tr class="tr">
			<th>用户ID</th>
			<td><?php echo $v['uid'];?></td>
		</tr>
		<tr class="tr">
			<th>姓名</th>
			<td><?php echo $v['name'];?></td>
		</tr>
		<tr class="tr">	
			<th>联系电话</th>
			<td><?php echo $v['tel'];?></td>
		</tr>
		<tr class="tr">
			<th>地址</th>
			<td><?php echo $v['address'];?></td>
		</tr>
		<tr class="tr">
			<th>价格</th>	
			<td><?php echo $v['price'];?></td>
		</tr>	
		<tr class="tr">
			<th>状态</th>	
			<td>
				待发货<input type="radio" name="status" value="0" <?php echo $v['status'] == 0 ? 'checked' : '';?> disabled>
				已发货<input type="radio" name="status" value="1" <?php echo $v['status'] == 1 ? 'checked' : '';?>>
			</td>
		</tr>
		<tr class="tr">
			<th>添加时间</th>	
			<td>
				<?php 
					date_default_timezone_set('PRC');
					echo date('Y-m-d H:i:s',$v['addtime']);

				?>
			</td>
			
		
		</tr>
		<tr class="tr">
			<th>操作</th>
			<td><a href="./personal.php?ac=orderlist&oid=<?php echo $v['id'];?>&status=<?php echo $v['status'];?>">确认收货</a></td>
		</tr>
	<?php endforeach;?>
	
	</table>
	</center>
	</body>
</html>