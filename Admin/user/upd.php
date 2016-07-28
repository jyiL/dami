<?php
	//导入初始化文件
	require '../init.php';

	
	$id = $_GET['id'];

	$sql = 'select * from users where = ';
	echo $sql;

	$userlist = query($sql);
	echo $userlist;
	
	$sex = array('女','男','保密');
	$grade = array('超级管理员','管理员','VIP会员','普通会员');
	$status = array('启动','禁用');



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

		<?php foreach ($userlist as $k => $v):?>
		<tr>
			<th>用户ID</th>
			<td><?php echo $v['id'];?></td>
		</tr>
		<tr>
			<th>账号</th>
			<td><?php echo $v['username'];?></td>
		</tr>
		<tr>
			<th>头像</th>
			<td><?php echo "<img width='50' src='../Public/icon/{$v['icon'] }' />"; ?></td>
		</tr>
		<tr>
			<th>真实姓名</th>
			<td><?php echo $v['name'];?></td>
		</tr>
		<tr>
			<th>性别</th>
			<td><?php echo $sex[ $v['sex'] ];?></td>
		</tr>
		<tr>
			<th>地址</th>
			<td><?php echo $v['address'];?></td>
		</tr>
		<tr>
			<th>邮编</th>
			<td><?php echo $v['code'];?></td>
		</tr>
		<tr>
			<th>手机</th>
			<td><?php echo $v['phone'];?></td>
		</tr>
		<tr>
			<th>邮箱</th>		
			<td><?php echo $v['email'];?></td>
		</tr>
		<tr>
			<th>级别</th>
			<td><?php echo $grade[ $v['grade'] ];?></td>
		</tr>
		<tr>	
			<td>
				<th>状态</th>
				<a href="./action.php?handler=grade&id=<?php echo $v['id'];?>&status=<?php echo $v['status'];?>"><?php echo $status[ $v['status'] ];?></a>
			</td>
		</tr>
		<tr>
			<th>添加时间</th>
			<td><?php date_default_timezone_set('PRC');echo date('Y-m-d H:i:s',$v['addtime']);?></td>
		</tr>	
		<tr>
			<th>操作</th>
			<td>
				<?php if($v['grade'] != 0):?>
				<a href="./editlist.php?id=<?php echo $v['id']?>"><button>编辑</button></a>
				<a href="./action.php?handler=del&id=<?php echo $v['id']?>"><button>删除</button></a>
				<?php endif;?>
			</td>
		</tr>
		
	<?php endforeach;?>
	</table>
	</body>
</html>