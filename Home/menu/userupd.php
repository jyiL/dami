<?PHP
	
	
	$id =  $_GET['id'];

	$sql = 'select * from users where id =' . $id;
	$list = query($sql)[0];
	

	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>修改资料</title>
		<style type="text/css">
		.tr td{
			
			padding:5px;
			font: 15px/150% Arial,Verdana,"\5b8b\4f53";
			color:#FAE3CB;
		}
		.tr{
			
			border:1px dashed #1C1C1C;
			font-family: 15px/150% Arial,Verdana,"\5b8b\4f53";


		}
		.tr a{
			color:#666;
			
			font-family: 15px/150% Arial,Verdana,"\5b8b\4f53";


		}
		.tr input{
			background-color:transparent;
		}

	</style>
	</head>
	
	<body>
		<center>
		<form action="./personal.php?ac=action&handler=doedit&id=<?= $id;?>" method="post" enctype="multipart/form-data">
		<h1>修改资料</h1>
			<table style="border: 1px solid #e5e5e5;border-collapse: collapse;text-align: center;width:70%">
				<tr class="tr">
					<td>用户名:</td>
					<td><input style="color:#FAE3CB;" type="text" name="username" value="<?= $list['username'];?>"></td>
				</tr>

				<tr class="tr">
					<td>姓名:</td>
					<td><input style="color:#FAE3CB;" type="text" name="name" value="<?= $list['name'];?>"></td>
				</tr>

				<tr class="tr">
					<td>密码:</td>
					<td><input type="text" name="pass"></td>
				</tr>

				<tr class="tr">
					<td>确认密码:</td>
					<td><input type="text" name="repass"></td>
				</tr>

				<tr class="tr">
					<td>头像:</td>
					<td><input type="file" name="myfile"></td>
					<td><?php echo "<img width='100' src='".HTTPATH."../admin/public/icon/".$list['icon']."' />" ?></td>
		            	<!-- 这个隐藏域用于传递头像的图片名 -->
		            	<input type="hidden" name='icon' value="<?= $list['icon'];?>">
		            </td>
				</tr>

				<tr class="tr">
					<td>性别:</td>
					<td>
					女<input type="radio" name="sex" value="0" <?= $list['sex'] == 0 ? 'checked' : '';?>  >
					男<input type="radio" name="sex" value="1" <?= $list['sex'] == 1 ? 'checked' : '';?>>
					保密<input type="radio" name="sex" value="2" <?= $list['sex'] == 2 ? 'checked' : '';?>>
					</td>
				</tr>

				<tr class="tr">
					<td>地址:</td>
					<td><input style="color:#FAE3CB;" type="text" name="address" value="<?= $list['address'];?>"></td>
				</tr>

				<tr class="tr">
					<td>邮编:</td>
					<td><input style="color:#FAE3CB;" type="text" name="code" value="<?= $list['code'];?>"></td>
				</tr>

				<tr class="tr">
					<td>手机号码:</td>
					<td><input style="color:#FAE3CB;" type="text" name="phone" value="<?= $list['phone'];?>"></td>
				</tr>

				<tr class="tr">
					<td>邮箱:</td>
					<td><input style="color:#FAE3CB;" type="text" name="email" value="<?= $list['email'];?>"></td>
				</tr>



				<tr class="tr">
					<td></td>
					<td><button>提交</button></td>
				</tr>

			</table>
		</form>
		</center>
	</body>
</html>