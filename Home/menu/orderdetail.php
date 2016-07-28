<?php
	

	$oid = $_GET['id'];
	//echo $oid;
	$sql = 'select * from orderdetail where oid = ' . $oid;
	//echo $sql;

	$orderdetail = query($sql);

	$status = array('待发货','已发货');


	//echo '<pre>';

	//print_r($orderdetail);
		




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
			background-color:#f5f5f5;
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
		<h1 style="text-align:center;">订单详情</h1>
		<table style="border: 1px solid #e5e5e5;border-collapse: collapse;text-align: center;margin-top:50px; width:70%;">
		<tr class="tr">
			<th>ID</th>
			<th>用户ID</th>
			<th>订单号</th>
			<th>商品ID</th>
			<th>商品名</th>
			<th>价格</th>
			<th>购物数量</th>
		

		</tr>
		<!--遍历用户-->
		<?php foreach ($orderdetail as $k => $v):?>
		<tr class="tr">
			
			<td><?php echo $v['id'];?></td>
			<td><?php echo $v['uid'];?></td>
			<td><?php echo $v['oid'];?></td>
			<td><?php echo $v['gid'];?></td>
			<td><?php echo $v['goodsname'];?></td>
			<td><?php echo $v['price'];?></td>
	
			<td><?php echo $v['buy'];?></td>
			
		
		</tr>
	<?php endforeach;?>
	<tr class="tr">
		
			<td colspan="7">
			<center>
			<a href="./personal.php?ac=orderlist">返回</a>
			</center>
			</td>
		
	</tr>

	</table>
	</center>
	</body>
</html>