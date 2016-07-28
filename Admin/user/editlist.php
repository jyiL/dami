<?PHP
		//导入初始化文件
	require '../init.php';
	
	
	$id =  $_GET['id'];

	$sql = 'select * from users where id =' . $id;
	$list = query($sql)[0];
	

	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>修改资料</title>

	</head>
	
	<body>
		<center>
		<form action="./action.php?handler=doedit&id=<?= $id;?>" method="post" enctype="multipart/form-data">
		<h1>修改资料</h1>
			<table cellspacing='0' cellpadding="5">
				<tr>
					<td>用户名:</td>
					<td><input type="text" name="username" value="<?= $list['username'];?>"></td>
				</tr>

				<tr>
					<td>姓名:</td>
					<td><input type="text" name="name" value="<?= $list['name'];?>"></td>
				</tr>

				<tr>
					<td>密码:</td>
					<td><input type="text" name="pass"></td>
				</tr>

				<tr>
					<td>确认密码:</td>
					<td><input type="text" name="repass"></td>
				</tr>

				<tr>
					<td>头像:</td>
					<td><input type="file" name="myfile"></td>
					<td><img src="../Public/icon/<?= $list['icon'];?>" alt="">
		            	<!-- 这个隐藏域用于传递头像的图片名 -->
		            	<input type="hidden" name='icon' value="<?= $list['icon'];?>">
		            </td>
				</tr>

				<tr>
					<td>性别:</td>
					<td>
					女<input type="radio" name="sex" value="0" <?= $list['sex'] == 0 ? 'checked' : '';?>  >
					男<input type="radio" name="sex" value="1" <?= $list['sex'] == 1 ? 'checked' : '';?>>
					保密<input type="radio" name="sex" value="2" <?= $list['sex'] == 2 ? 'checked' : '';?>>
					</td>
				</tr>

				<tr>
					<td>地址:</td>
					<td><input type="text" name="address" value="<?= $list['address'];?>"></td>
				</tr>

				<tr>
					<td>邮编:</td>
					<td><input type="text" name="code" value="<?= $list['code'];?>"></td>
				</tr>

				<tr>
					<td>手机号码:</td>
					<td><input type="text" name="phone" value="<?= $list['phone'];?>"></td>
				</tr>

				<tr>
					<td>邮箱:</td>
					<td><input type="text" name="email" value="<?= $list['email'];?>"></td>
				</tr>

				<tr>
					<td>级别:</td>
					<td>
					<select name="grade">
						<option value="3" <?= $list['grade'] == 3 ? 'selected' : '';?>>普通会员</option>
						<option value="2" <?= $list['grade'] == 2 ? 'selected' : '';?>>VIP会员</option>
						<option value="1" <?= $list['grade'] == 1 ? 'selected' : '';?>>管理员</option>
					</select>
					</td>
				</tr>

				<tr>
					<td>状态:</td>
					<td>
					启用<input type="radio"  name="status" value="1" <?= $list['status'] == 1 ? 'checked' : '';?>>
					禁用<input type="radio"  name="status" value="2" <?= $list['status'] == 2 ? 'checked' : '';?>>
					</td>
				</tr>

				<tr>
					<td></td>
					<td><button>提交</button></td>
				</tr>

			</table>
		</form>
		</center>
	</body>
</html>