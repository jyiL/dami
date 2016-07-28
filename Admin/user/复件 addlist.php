<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>添加会员</title>

		<link rel="stylesheet" href="../Public/css/input.css" type="text/css" media="screen">

	   
	</head>
	
	<body>
		<center>
		<form action="./action.php?handler=doadduser" method="post" enctype="multipart/form-data">
		<h1>添加会员</h1>
			<table cellspacing='0' cellpadding="5" style="font-size:25px;">
				<tr>
					<td>用户名</td>
					<td><input type="text" name="username" style= "width:150px;height:21px;border:solid 1px black "></td>
				</tr>

				<tr>
					<td>姓名</td>
					<td><input type="text" name="name"></td>
				</tr>

				<tr>
					<td>密码</td>
					<td><input type="text" name="password"></td>
				</tr>

				<tr>
					<td>头像</td>
					<td><input type="file" name="icon"></td>
				</tr>

				<tr>
					<td>性别</td>
					<td>
					男<input type="radio" name="sex" value="0">
					女<input type="radio" name="sex" value="1">
					保密<input type="radio" name="sex" value="2" checked>
					</td>
				</tr>

				<tr>
					<td>地址</td>
					<td><input type="text" name="address"></td>
				</tr>

				<tr>
					<td>邮编</td>
					<td><input type="text" name="code"></td>
				</tr>

				<tr>
					<td>手机号码</td>
					<td><input type="text" name="phone"></td>
				</tr>

				<tr>
					<td>邮箱</td>
					<td><input type="text" name="email"></td>
				</tr>

				<tr>
					<td>级别</td>
					<td>
					<select name="grade">
						<option value="3" selected>普通会员</option>
						<option value="2">VIP会员</option>
						<option value="1">管理员</option>
					</select>
					</td>
				</tr>

				<tr>
					<td>状态</td>
					<td>
					启用<input type="radio"  name="status" value="1" checked>
					禁用<input type="radio"  name="status" value="2">
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