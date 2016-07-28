<?php
	

	//echo '<pre>';

	//print_r($_SESSION['userInfo']);
	$id = $_SESSION['userInfo']['id'];
	//echo $id;


	$sql = 'select * from users where id = ' . $id;
	//echo $sql;
	$userlist = query($sql);
	$sex = array('女','男','保密');
	$grade = array('超级管理员','管理员','VIP会员','普通会员');
	$status = array('启动','禁用');
	//echo LOCALPATH;


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title></title>
		<style type="text/css">
		.tr td{
			
			padding:5px;
			font: 15px/150% Arial,Verdana,"\5b8b\4f53";
			color:#FAE3CB;
		}
		.tr th{
			color:#666;
			border:1px dashed #1C1C1C;
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
		<h1 style="text-align:center;">用户浏览</h1>
		<table style="border: 1px solid #e5e5e5;border-collapse: collapse;text-align: center;width:80%">
		


		<?php foreach ($userlist as $k => $v):?>
		<tr class="tr">
			<th>用户ID</th>
			<td><?php echo $v['id'];?></td>
		</tr>
		<tr class="tr">
			<th>账号</th>
			<td><?php echo $v['username'];?></td>
		</tr>	
		<tr class="tr">
			<th>头像</th>
			<td><?php echo "<img width='100' src='".HTTPATH."../admin/public/icon/".$v['icon']."' />" ?></td>	
		</tr>
		<tr class="tr">
			<th>真实姓名</th>
			<td><?php echo $v['name'];?></td>
		</tr>	
		<tr class="tr">
			<th>性别</th>
			<td><?php echo $sex[ $v['sex'] ];?></td>
		</tr>
		<tr class="tr">
			<th>地址</th>
			<td><?php echo $v['address'];?></td>
		</tr>		
		<tr class="tr">	
			<th>邮编</th>
			<td><?php echo $v['code'];?></td>
		</tr>	
		<tr class="tr">
			<th>手机</th>
			<td><?php echo $v['phone'];?></td>
		</tr>
		<tr class="tr">	
			<th>邮箱</th>
			<td><?php echo $v['email'];?></td>
		</tr>	
		<tr class="tr">
			<th>级别</th>
			<td><?php echo $grade[ $v['grade'] ];?></td>
		</tr>	
		<tr class="tr">	
			<th>添加时间</th>
			<td><?php date_default_timezone_set('PRC');echo date('Y-m-d H:i:s',$v['addtime']);?></td>
		</tr>	
		<tr class="tr">
			<th>操作</th>
			<td>
				<?php if($v['grade'] != 0):?>
				<a href="./personal.php?ac=userupd&id=<?php echo $v['id']?>"><button>编辑</button></a>
				
				<?php endif;?>
			</td>
		</tr>
	<?php endforeach;?>
	</table>
	</center>
	</body>
</html>