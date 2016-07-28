<?php
	$link = mysqli_connect('localhost','root','P@ssw0rd','message1');

	// 2.判断
	if(mysqli_connect_errno()){
		exit( '连接失败！原因：' . mysqli_connect_error() );
	}

	// 3.字符集
	mysqli_set_charset($link,'utf8');
	
	// 4.sql语句
	$sql = 'select * from ms';

	// 5.发送执行
	$result  = mysqli_query($link,$sql);
	
	// 6.处理结果集
	$list = array();
	while($row = mysqli_fetch_assoc($result)){
		$list[] = $row;
	}
	
	
	// 7.释放结果集资源
	mysqli_free_result($result);

	// 8.关闭连接
	mysqli_close($link);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>message</title>
</head>
<body bgcolor=#fff;>

<center>
<a href="./ms.php" style="text-decoration:none;color:blue">主页</a>
	<table width="70%" border="1" cellspacing="0" cellpadding="0" style="background-color:#fff;">
		<tr>
			<th>标题</th>
			<th>内容</th>
			<th>添加时间</th>
			<th>操作</th>
		</tr>

		<?php foreach ($list as $k => $v):?>
		<tr>
			
			<td><?php echo $v['title'];?></td>
			<td><?php echo $v['content'];?></td>
			<td><?php echo date('Y-m-d H:i:s',$v['addtime']);?></td>
			<td><a href="./del.php?title=<?php echo $v['title'];?>">删除</a></td>
		</tr>
	<?php endforeach;?>	

	</table>

	</center>


</body>
</html>