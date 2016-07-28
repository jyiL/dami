<?php 
	
	// 导入初始化文件
	require './init.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Public/css/link.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/css.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/liebiao.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/jieshao.css">
	<link rel="stylesheet" type="text/css" href="./Public/css/personal.css">
</head>
<body>
<!--头部-->
	<div id="top" class="bd"><?php include('./header.php');?></div>
<!--content-->
	<div class="w">
		<div class="link_box">
			<div class="link_top"><div class="top_right"></div><div class="top_left"></div></div>	
			<div class="link_content">
				<h3 class="link_tit">友情链接</h3>
				<ul class="link_list">
						<?php
							$sql = 'select * from url';

							$result = query($sql);
							//echo '<pre>';

							//print_r($result);


						?>	
						<!--开始遍历友情链接-->
						<?php foreach($result as $k => $v):?>
						

						<li>
							<?php echo "<img width='30' src='".HTTPATH."../admin/public/logo/".$v['picname']."' />" ?>
							<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a>


						</li>
						<?php endforeach;?>
						<!--结束 遍历-->
				



				</ul>
				
			</div>
			<div class="link_bottom"><div class="bottom_right"></div><div class="bottom_left"></div></div>
		</div>
		<div class="link_box_a">
			<div class="link_top">
				<div class="top_right"></div>
				<div class="top_left"></div>
			</div>
			<div class="link_content">
				<h3 class="link_tit">申请友情链接</h3>
				<ul class="link_step">
					<li class="link_step_tit">申请步骤：</li>
					<li>
						<div class="float_Left">
							1.</div>
						<div class="margin_l_12">
							请先在贵网站做好小米的文字友情链接：
							<br> 链接文字：小米链接地址：
							<a href="//www.jd.com" target="_blank">www.xiaomi.com</a></div>
					</li>
					<li>2.做好链接后，请在右侧填写申请信息。京东只接受申请文字友情链接。</li>
					<li>
						<div class="float_Left"> 3.</div>
						<div class="margin_l_12">
							已经开通我站友情链接且内容健康，符合本站友情链接要求的网站，经小米管理员审核后，可以显示在此友情链接页面。</div>
					</li>
					<li>
						<div class="float_Left"> 4.</div>
						<div class="margin_l_12">
							请通过右侧提交申请，注明：友情链接申请。</div>
					</li>
				</ul>
				<form id="frm_submit" action="./action.php?handler=dourl" method="post" enctype="multipart/form-data">
				<table cellpadding="0" cellspacing="0" class="link_table" width="309">
					<tbody><tr>
						<td height="29" colspan="2" valign="top" class="link_step_tit">
							申请信息</td>
					</tr>
					<tr>
						<td height="29">
							网站名称：
						</td>
						<td height="29">
							<input id="name" name="name" type="text" class="w247">
						</td>
					</tr>
					<tr>
						<td height="29">
							网&nbsp;&nbsp;&nbsp;&nbsp;址：
						</td>
						<td height="29">
							<input id="url" name="url" type="text" class="w247" value="http://">
						</td>
					</tr>
					<tr>
						<td height="35">
							公司LOGO：
						</td>
						<td height="29">
							<input id="email" name="picname" type="file" class="w247">
						</td>
					</tr>
					
					<tr>
						<td height="45" colspan="2" align="center" valign="middle">
							<button>提交申请</button>
						</td>
					</tr>
				</tbody></table>
				</form>
			</div>
			<div class="link_bottom">
				<div class="bottom_right"></div>
				<div class="bottom_left"></div>
			</div>
		</div>
	</div>

<!---->
</body>
</html>