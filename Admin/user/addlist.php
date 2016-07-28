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
			<ul class="input_test"> 
        <li> 
            <label for="inp_name">用户名：</label> 
            <p><input id="inp_name" class="input_out" name="username" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入您的用户名</span> 
        </li> 
        <li> 
            <label for="inp_email">姓名：</label> 
            <p><input id="inp_email" class="input_out" name="name" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入您的姓名</span> 
        </li> 
        <li> 
            <label for="inp_web">密码：</label> 
            <p><input id="inp_web" class="input_out" name="password" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入您的密码</span> 
        </li>
        <li> 
            <label for="inp_web">头像：</label> 
            <p><input name="icon" type="file"></p> 
            <span>请上传您的头像</span> 
        </li>
        <li>
        	<label for="inp_web">性别：</label> 
        	<p>男<input type="radio" name="sex" value="0">
			女<input type="radio" name="sex" value="1">
			保密<input type="radio" name="sex" value="2" checked></p>
			<span>请选择您的性别</span> 
        </li>

        <li>
        	<label for="inp_web">地址：</label>
        	<p><input id="inp_web" class="input_out" name="address" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p>
        	<span>请输入您的地址</span> 
        </li>
        <li>
        	<label for="inp_web">邮编：</label>
        	<p><input id="inp_web" class="input_out" name="code" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p>
        	<span>请输入您的邮编</span> 
        </li>
        <li>
        	<label for="inp_web">手机号码：</label>
        	<p><input id="inp_web" class="input_out" name="phone" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p>
        	<span>请输入您的手机号码</span> 
        </li>
        <li>
        	<label for="inp_web">邮箱：</label>
        	<p><input id="inp_web" class="input_out" name="email" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p>
        	<span>请输入您的邮箱</span> 
        </li>
        <li>
        	<label for="inp_web">级别：</label> 
        	<p><select name="grade">
				<option value="3" selected>普通会员</option>
				<option value="2">VIP会员</option>
				<option value="1">管理员</option>
			</select></p>
			<span>请选择您的级别</span> 
        </li>
        <li>
        	<label for="inp_web">状态：</label> 
        	<p>启用<input type="radio"  name="status" value="1" checked>
			禁用<input type="radio"  name="status" value="2"></p>
			<span>请选择您的状态</span> 
        </li>
    </ul> 
    	<div style="text-algin:center;"><button class="btn1">提交</button></div>
		</form>
		</center>
	</body>
</html>