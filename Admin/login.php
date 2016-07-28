
<?php
	
	// 导入初始化文件
	require './init.php';

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<!-- Custom Theme files -->
<link href="./Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<!--<link href='http://fonts.useso.com/css?family=Roboto:500,900italic,900,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>-->
<!--Google Fonts-->
</head>
<body>
<div class="login">
	<h2>登陆小米商城后台管理系统</h2>
	<div class="login-top">
		<h1>Login</h1>
		<form action="./action.php?handler=dologin" method="post">
			<input type="text" value="用户帐号" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户帐号';}">
			<input type="password" value="password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
			<input type="text" value="验证码" name="yzm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '验证码';}">
			<div style="float:left;">
				<div><img onclick='this.src = "../common/yzm.php" + "?id=" + Math.random();' src="<?php echo HTTPATH;?>../common/yzm.php"></div>
			</div>



			<div class="forgot">
	    		
	    		<input type="submit" value="登录" >
	    	</div>
	    </form>
	    
	</div>
	<div class="login-bottom">
		<h3>mi &nbsp;<a href="../home/index.php">小米</a>&nbsp mi</h3>
	</div>
</div>	
<div class="copyright">
	<p>Copyright &copy; 2015.Company name All rights reserved.<a href="http://www.mycodes.net/" target="_blank">小米</a></p>
</div>

<!--<script src="http://www.mycodes.net/js/tongji.js"></script>
<script src="http://www.mycodes.net/js/youxia.js" type="text/javascript"></script>-->

</body>
</html>