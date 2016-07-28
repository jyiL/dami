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
		$sql = 'select count(*) as total from category ';


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
		$sql = 'select * from category '.$where .$limit;
		//echo $sql;
		//执行sql语句
		$userlist = query($sql);
	

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
		<h1 style="text-align:center;">分类浏览</h1>
		<form action="./catelist.php" method="post">
		<div style="float:right;">
		<input type="text" name="search" value="<?php echo $search;?>">
		<input type="submit" value="搜索">
		</div>
		</form>
		<table style="border: 1px solid #e5e5e5;border-collapse: collapse;text-align: center;width:100%">
		<tr class="tr">
			<th>ID</th>
			<th>PID</th>
			<th>分类名</th>
			<th>Path</th>
			<th>添加时间</th>
			<th>操作</th>
			
		</tr>

		<?php foreach ($userlist as $k => $v):?>
		<tr class="tr">
			<td><?php echo $v['id']?></td>
			<td><?php echo $v['pid']?></td>
			<td>
			<?php
				$num  = substr_count($v['path'],',');
				$res = str_repeat('→→',$num - 1);

				echo $res  . $v['name'];


			 ?>


			</td>

			<td><?php echo $v['path']?></td>
			<td><?php echo date('Y-m-d:H:i:s',$v['addtime'])?></td>
			<td>
				<a href="./addson.php?id=<?php echo $v['id'];?>"><button>添加子分类</button></a>
				<a href="./upd.php?id=<?php echo $v['id'];?>"><button>编辑</button></a>
				<a href="./action.php?handler=del&id=<?php echo $v['id'];?>"><button>删除</button></a>
			
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

			<a href="./catelist.php?p=<?php echo 1;?>">首页</a>
			<a href="./catelist.php?p=<?php echo $p - 1;?>">上一页</a>
			<a href="./catelist.php?p=<?php echo $next;?>">下一页</a>
			<a href="./catelist.php?p=<?php echo $page;?>">尾页</a>

		</td>
	</tr>
	</body>
</html>