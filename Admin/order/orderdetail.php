<?php
	//导入初始化文件
	require '../init.php';

	$oid = $_GET['id'];
	//1.查总数
	$sql = 'select count(*) total from orderdetail';
	$total = query($sql);
	$totalNum = $total[0]['total'];

	//2.定义每页显示的数目
	$num = 4;

	//2.1求出总页码
	$totalPage = ceil($totalNum / $num);


	//3.获取当前页码
	$p = isset($_GET['p']) ? $_GET['p'] : 1;//默认第一页
	//3.1对当前页的控制
	if($p > $totalPage) $p = $totalPage;
	if($p < 1) $p = 1;


	//4.求出偏移量
	$offset = ($p - 1) * $num;

	//分页的条件
	$limit = " limit {$offset},{$num}";
	//5.拼接sql

	$sql = "select * from `orderdetail` where oid = " . $oid . $limit;
	//echo $sql;
	$result = query($sql);
	//echo $p;

	$status = array('待发货','已发货');
	 


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
		<h1 style="text-align:center;">订单浏览</h1>
		<table style="border: 1px solid #e5e5e5;border-collapse: collapse;text-align: center;width:100%">
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
		<?php foreach ($result as $k => $v):?>
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
		<td colspan="12">
			<?php echo '总数量' . $totalNum;?>
			<?php echo '当前页码' . $p;?>
			<?php echo '总页码' . $totalPage;?>

			<a href="./orderdetail.php?p=<?php echo $p = 1;?>">首页</a>
			<a href="./orderdetail.php?p=<?php echo $p - 1;?>">上一页</a>
			<a href="./orderdetail.php?p=<?php echo $p + 1;?>">下一页</a>
			<a href="./orderdetail.php?p=<?php echo $totalPage;?>">尾页</a>

		</td>
	</tr>
	</table>
	</body>
</html>