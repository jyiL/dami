<?php
	//导入初始化文件
	require '../init.php';



	$sql = 'select * from users';

	$userlist = query($sql);
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
		<tr>
			<th>用户ID</th>
			<th>账号</th>
			<th>头像</th>
			<th>真实姓名</th>
			<th>性别</th>
			<th>地址</th>
			<th>邮编</th>
			<th>手机</th>
			<th>邮箱</th>	
			<th>级别</th>
			<th>状态</th>
			<th>添加时间</th>
			<th>操作</th>
		</tr>

		<?php foreach ($userlist as $k => $v):?>
		<tr>
			
			<td><?php echo $v['id'];?></td>
			<td><?php echo $v['username'];?></td>
			<td><a href="./upd.php?id=<?php echo $v['id'] ;?>"><?php echo "<img width='50' src='../Public/icon/{$v['icon'] }' />"; ?></a></td>
			<td><?php echo $v['name'];?></td>
			<td><?php echo $sex[ $v['sex'] ];?></td>
			<td><?php echo $v['address'];?></td>
			<td><?php echo $v['code'];?></td>
			<td><?php echo $v['phone'];?></td>
			<td><?php echo $v['email'];?></td>
			<td><?php echo $grade[ $v['grade'] ];?></td>
			<td>
				 
				<a href="./action.php?handler=grade&id=<?php echo $v['id'];?>&status=<?php echo $v['status'];?>"><?php echo $status[ $v['status'] ];?></a>
			</td>
			<td><?php date_default_timezone_set('PRC');echo date('Y-m-d H:i:s',$v['addtime']);?></td>
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