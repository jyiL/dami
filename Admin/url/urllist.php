<?php
	//导入初始化文件
	require '../init.php';

		$search = !empty($_POST['search']) ? $_POST['search'] : '';
		//echo $search;

		//搜索条件

		$where = '';

		if(!empty($search)){
			$where .= "where name like '%{$search}%'";

		}

		//分页
		//每页显示数量
		$num = 4;

		//sql语句拿总数
		$sql = 'select count(*) as total from url ';


		//echo $sql;

		//总数

		$total = query($sql)[0]['total'];


		//当前页码
		$p = isset($_GET['p']) ? $_GET['p'] : 1;

		//页码数
		$page = ceil($total / $num);

		//防止页码超出范围
		if($p<1){
			$p = 1;
		}

		if($p>$page){
			$p = $page;
		}

		//计算页码偏移量
		$offset = ($p-1)*$num;

		//分页的条件
		$limit = " limit {$offset},{$num}";

		//准备sql 查找商品
		$sql = 'select * from url '.$where .$limit;
		//echo $sql;
		//执行sql语句
		$urllist = query($sql);
	

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
		<h1 style="text-align:center;">友情链接</h1>
		<form action="./urllist.php" method="post">
		<div style="float:right;">
		<input type="text" name="search" value="<?php echo $search;?>">
		<input type="submit" value="搜索">
		</div>
		</form>
		<table style="border: 1px solid #e5e5e5;border-collapse: collapse;text-align: center;width:100%">
		<tr class="tr">
			<th>ID</th>
			<th>公司名</th>
			<th>链接地址</th>
			<th>公司logo</th>

			<th>添加时间</th>
			<th>操作</th>
		</tr>
		<!--遍历用户-->
		<?php foreach ($urllist as $k => $v):?>
		<tr class="tr">
			
			<td><?php echo $v['id'];?></td>
			<td><?php echo $v['name'];?></td>
			<td><?php echo $v['url'];?></td>
			<td><?php echo "<img width='50' src='../Public/logo/{$v['picname'] }' />"; ?></td>
		
			<td><?php date_default_timezone_set('PRC');echo date('Y-m-d H:i:s',$v['addtime']);?></td>
			<td>
				
				<a href="./urlupd.php?id=<?php echo $v['id'];?>"><button>编辑链接</button></a>
				<a href="./action.php?handler=dodel&id=<?php echo $v['id'];?>"><button>删除链接</button></a>
			
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

			<a href="./urllist.php?p=<?php echo 1;?>">首页</a>
			<a href="./urllist.php?p=<?php echo $p - 1;?>">上一页</a>
			<a href="./urllist.php?p=<?php echo $next;?>">下一页</a>
			<a href="./urllist.php?p=<?php echo $page;?>">尾页</a>

		</td>
	</tr>
	</table>
	</body>
</html>