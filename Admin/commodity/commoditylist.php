<?php
	//导入初始化文件
	require '../init.php';

	//1.查总数
	$sql = 'select count(*) total from commodity';
	$total = query($sql);
	$totalNum = $total[0]['total'];

	//2.定义每页显示的数目
	$num = 3;

	//2.1求出总页码
	$totalPage = ceil($totalNum / $num);


	//3.获取当前页码
	$p = isset($_GET['p']) ? $_GET['p'] : 1;//默认第一页
	//3.1对当前页的控制
	if($p > $totalPage) $p = $totalPage;
	if($p < 1) $p = 1;


	//4.求出偏移量
	$offset = ($p - 1) * $num;


	//5.拼接sql

	$sql = "select * from commodity order by id desc limit {$offset},{$num}";
	//echo $sql;
	$result = query($sql);
	echo $p;

	$dodisplay = array('下架','上架');
	$status = array('热销','新品','小而美'); 


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title></title>
	</head>
	
	<body>
		<h1 style="text-align:center;">用户浏览</h1>
		<table width="100%" border="1" cellspacing="0" cellpadding="5" style="border-color:#98bf21;">
		<tr>
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
		<!--遍历用户-->
		<?php foreach ($result as $k => $v):?>
		<tr>
			
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
				
				<a href="./upd.php?id=<?php echo $v['cateid']?>"><button>编辑</button></a>
				<a href="./action.php?handler=del&id=<?php echo $v['id']?>"><button>删除</button></a>
			
			</td>
		</tr>
	<?php endforeach;?>
	<tr>
		<td colspan="12">
			<?php echo '总数量' . $totalNum;?>
			<?php echo '当前页码' . $p;?>
			<?php echo '总页码' . $totalPage;?>

			<a href="./commoditylist.php?p=<?php echo $p = 1;?>">首页</a>
			<a href="./commoditylist.php?p=<?php echo $p - 1;?>">上一页</a>
			<a href="./commoditylist.php?p=<?php echo $p + 1;?>">下一页</a>
			<a href="./commoditylist.php?p=<?php echo $totalPage;?>">尾页</a>

		</td>
	</tr>
	</table>
	</body>
</html>