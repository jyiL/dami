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
			<h4 class="header_tit_txt">小米帐号注册</h4>
		</div>
		<div class="login_area">
			<form action="./action.php?handler=doregister" method="post">
				<div class="c_b">
					<div class="lgn_inputbg">
						<!--<input type="hidden" value="1" name="sex">-->
						<!--<input type="hidden" value="4" name="grade">-->
						<input class="text-sty" style="width:358px" type="text" name="username" placeholder='&nbsp;&nbsp;账号/邮箱/手机号' /><p>
						<input class="text-sty" style="width:358px" type="password" name="pass" placeholder='&nbsp;&nbsp;密码' /><p>
						<input class="text-sty" style="width:358px" type="password" name="repass" placeholder='&nbsp;&nbsp;重复密码' /><p>
						<input class="text-sty" style="width:180px" type="text" name="yzm" placeholder='&nbsp;&nbsp;图片验证' />
						<img src="../Common/yzm.php" style="cursor:pointer;" onclick='this.src = "../Common/yzm.php?id=" + Math.random();'/><p>
						<input type="submit" class="subbtn" value="立即登录" />
					</div>
				<!--	<div class="login_error">
						<?php
							//$msg = '';
							//$errno = isset($_GET['errno'])? $_GET['errno']: '';
							//if(!empty($errno)){
							//	switch($errno){
							//		case 1: $msg .= '验证码错误!';break;
							//		case 2: $msg .= '账号以有人注册!';break;
							//		case 3: $msg .= '密码错误!';break;
							//		default: $msg .= '未知错误!';break;
							//	}
							//}
							//echo '<span >'.$msg.'</span>';
						?>
					</div>
					-->
				</div>
			</form>
		</div>
		<!--
				<div class="n_links_area">
							<a href="#">注册小米帐号</a>
							<span>|</span>
							<a href="#">忘记密码？</a>
						</div>

		-->
		
	</div>
	<div class="f_mi">小米公司版权所有-京ICP备10046444-京公网安备1101080212535-京ICP证110507号</div>
</div>
</body>
</html>