<?php
	
	//require'../init.php';
	//session_start();
	
	//echo '<pre>';

	//print_r($_SESSION['userInfo']);

	$id =  $_SESSION['userInfo']['id'];


	

	//2.定义每页显示的数目
	$num = 4;

	//sql语句
	$sql = 'select count(*) as total from `order` where uid = ' . $id;
	

	

	//总数
	$total = query($sql)[0]['total'];
	
	//获取当前页码
	$p = isset($_GET['p']) ? $_GET['p'] : 1;//默认第一页
	
	//求出总页码
	$page = ceil($total / $num);


	
	//对当前页的控制
	if($p<1){
		$p = 1;
	}
	if($p>$page){
		$p = $page;
	}


	//4.求出偏移量
	$offset = ($p - 1) * $num;

	//分页的条件
	$limit = " limit {$offset},{$num}";
	


	//sql订单

	$sql = "select * from `order` where uid = " . $id .' order by id desc '. $limit;
	
	$result = query($sql);
	
	$status = $_GET['status'];
	$oid = $_GET['oid'];
	if($status == 1){
		$status = 2;
	}

	$sql="update `order` set status = '{$status}' where id = " . $oid;
	//echo $sql;
	$order = execu($sql);



	$status = array('待发货','已发货','已收货');
	 


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
		<h1 style="text-align:center;">订单浏览</h1>
		<!--<div style="float:right;">
		<input type="text" name="search" value="<?php echo $search;?>">
		<input type="submit" value="搜索">
		</div>-->
		<table style="border: 1px solid #e5e5e5;border-collapse: collapse;text-align: center;margin-top:50px;">
		<tr class="tr">
			<th>ID</th>
			<th>用户ID</th>
			<th>收货人</th>
			<th>电话</th>
			<th>收货地址</th>
			<th>总金额</th>
			<th>订单状态</th>
				

			<th>添加时间</th>
			<th>操作</th>
		</tr>
		<!--遍历用户-->
		<?php foreach ($result as $k => $v):?>
		<tr class="tr">
			
			<td><?php echo $v['id'];?></td>
			<td><?php echo $v['uid'];?></td>
			<td><?php echo $v['name'];?></td>
			<td><?php echo $v['tel'];?></td>
			<td><?php echo $v['address'];?></td>
			<td><?php echo $v['price'];?></td>
	
			<td><?php echo $status[ $v['status'] ];?></td>
			<td><?php date_default_timezone_set('PRC');echo date('Y-m-d H:i:s',$v['addtime']);?></td>
			<td>
				
				<a href="./personal.php?ac=orderupd&id=<?php echo $v['id']?>"><button>确认收货</button></a>
				<a href="./personal.php?ac=orderdetail&id=<?php echo $v['id']?>"><button>订单详情</button></a>
			
			</td>
		</tr>
	<?php endforeach;?>
	<tr class="tr">
		<td colspan="12">
			<?php echo '总数量' . $total;?>
			<?php echo '当前页码' . $p;?>
			<?php echo '总页码' . $page;
			$next = $p + 1;
			?>

			<a href="./personal.php?ac=orderlist&p=<?php echo 1;?>">首页</a>
			<a href="./personal.php?ac=orderlist&p=<?php echo $p - 1;?>">上一页</a>
			<a href="./personal.php?ac=orderlist&p=<?php echo $next;?>">下一页</a>
			<a href="./personal.php?ac=orderlist&p=<?php echo $total;?>">尾页</a>

		</td>
	</tr>

	</table>
	</center>
	</body>
</html>