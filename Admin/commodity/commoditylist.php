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
		$sql = 'select count(*) as total from commodity ';


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
		$sql = 'select * from commodity '.$where .$limit;
		//echo $sql;
		//执行sql语句
		$result = query($sql);

		$dodisplay = array('下架','上架');
		$status = array('热销','新品','小而美');


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
		<h1 style="text-align:center;">商品浏览</h1>
		<form action="./commoditylist.php" method="post">
		<div style="float:right;">
		<input type="text" name="search" value="<?php echo $search;?>">
		<input type="submit" value="搜索">
		</div>
		</form>
		<table style="border: 1px solid #e5e5e5;border-collapse: collapse;text-align: center;width:100%">
		<tr class="tr">
			<th>ID</th>
			<th>分类ID</th>
			<th>商品名</th>
			<th>商品图</th>
			<th>价格</th>
			<th>库存</th>
			<th>浏览量</th>
			<th>购买量</th>
			<th>上下架</th>
			<th>状态</th>	

			<th>添加时间</th>
			<th>操作</th>
		</tr>
		<?php if(!empty($result)): ?>
		<!--遍历用户-->
		<?php foreach ($result as $k => $v):?>
		<tr class="tr">
			
			<td><?php echo $v['id'];?></td>
			<td><?php echo $v['cateid'];?></td>
			<td><?php echo $v['name'];?></td>
			<td><?php echo "<img width='100' src='../public/uploads/".$v['picture']."' />" ?></td>
			<td><?php echo $v['price'];?></td>
			<td><?php echo $v['store'];?></td>
			<td><?php echo $v['views'];?></td>
			<td><?php echo $v['buy'];?></td>
			<td>
				 
				<a href="./action.php?handler=ds&id=<?php echo $v['id'];?>&display=<?php echo $v['display'];?>"><?php echo $dodisplay[ $v['display'] ];?></a>
			</td>
			<td><?php echo $status[ $v['status'] ];?></td>
			<td><?php date_default_timezone_set('PRC');echo date('Y-m-d H:i:s',$v['addtime']);?></td>
			<td>
				
				<a href="./upd.php?id=<?php echo $v['id']?>"><button>编辑</button></a>
				<a href="./action.php?handler=del&id=<?php echo $v['id']?>"><button>删除</button></a>
			
			</td>
		</tr>
	<?php endforeach;?>
<?php endif;?>
	<tr class="tr">
		<td colspan="12">
			<?php echo '总数量' . $total;?>
			<?php echo '当前页码' . $p;?>
			<?php echo '总页码' . $page;
				$next = $p + 1;
			?>

			<a href="./commoditylist.php?p=<?php echo 1;?>">首页</a>
			<a href="./commoditylist.php?p=<?php echo $p -= 1;?>">上一页</a>
			<a href="./commoditylist.php?p=<?php echo $next;?>">下一页</a>
			<a href="./commoditylist.php?p=<?php echo $page;?>">尾页</a>

		</td>
	</tr>
	</table>
	</body>
</html>