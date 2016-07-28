<?php
	//导入初始化文件
	require '../init.php';



	$sql = "select * from category order by concat(path,id)";

	$userlist = query($sql);
	

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title></title>
	</head>
	
	<body>
		<h1 style="text-align:center;">分类浏览</h1>
		<table width="100%" border="1" cellspacing="0" cellpadding="5" style="border-color:#98bf21;">
		<tr>
			<th>ID</th>
			<th>PID</th>
			<th>分类名</th>
			<th>Path</th>
			<th>添加时间</th>
			<th>操作</th>
			
		</tr>

		<?php foreach ($userlist as $k => $v):?>
		<tr>
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
	</body>
</html>