<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="./public/css/login.css">
</head>
<body>
<div class="beijing">
	<div class="content-box">
		<div class="header-tit">
			<em class="milogo"><img src="./public/img/mi.jpg"></em>
			<h4 class="header_tit_txt">小米帐号登录</h4>
		</div>
		<div class="login_area">
		
				<div class="c_b">
					<div class="lgn_inputbg">
					<form action="./action.php?handler=dologin" method="post">
						<input class="text-sty" style="width:358px" type="text" name="username" placeholder='&nbsp;&nbsp;账号/邮箱/手机号' /><p>
						<input class="text-sty" style="width:358px" type="password" name="pass" placeholder='&nbsp;&nbsp;密码' /><p>
						<input class="text-sty" style="width:180px" type="text" name="yzm" placeholder='&nbsp;&nbsp;验证码' />
						<img src="../Common/yzm.php" style="cursor:pointer;" onclick='this.src = "../Common/yzm.php?id=" + Math.random();'/><p>
						<input type="submit" class="subbtn" value="立即登录" />
					</form>
					</div>
					
					<div>
						<img src="./public/img/otherlogin.jpg" class="logimg">
					</div>
				</div>
			
		</div>
		<div class="n_links_area">
			<a href="#">注册小米帐号</a>
			<span>|</span>
			<a href="#">忘记密码？</a>
		</div>
	</div>

	<div class="f_mi">小米公司版权所有-京ICP备10046444-<span><img src="./public/img/ghs.png"></span>京公网安备1101080212535-京ICP证110507号</div>
</div>
</body>
</html>