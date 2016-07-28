


<div>
<div class="site-topbar">
	<div class="topbar_nav">
		<a href="./index.php">小米</a>
		<span class="sep">|</span>
		<a href="./index.php">MIUI</a>
		<span class="sep">|</span>
		<a href="./index.php">米聊</a>
		<span class="sep">|</span>
		<a href="./index.php">游戏</a>
		<span class="sep">|</span>
		<a href="./index.php">多看阅读</a>
		<span class="sep">|</span>
		<a href="./index.php">云服务</a>
		<span class="sep">|</span>
		<a href="./index.php">小米网移动版</a>
		<span class="sep">|</span>
		<a href="./index.php">问题反馈</a>
		<span class="sep">|</span>
		<a href="./index.php">Select Region</a></div>
	<div class="topbar_cart">
		<a class="cart"><i class="iconfont"><img src="./Public/img/car.jpg"></i>购物车<span>(0)</span></a>
	</div>
	<div class="topbar_info">
		
		 <!--如果为空代表没有登录-->
         <?php if(empty($_SESSION['userInfo'])):?>
		<a>登录</a>
		<span class="sep">|</span>
		<a>注册</a>
		<?php else:?>
         <a class="head_nav_a" href="./personal.php">个人中心</a>
         <a class="head_nav_a" href="./action.php?handler=logout">退出登录</a>

    	<?php endif;?>



	</div></div>
<div class="site-header" style="background-color:#fff;">
	<div class="container">
		<div class="header-logo">
			<a><img src="./Public/img/mi.jpg"></a>
		</div>
		<div class="header-nav">
			<ul class="nav-list">
			
				<?php
					$sql = 'select * from category limit 4';
					$result = query($sql);

				?>
				<?php foreach($result as $k => $v):?>
				<li><a href="./datail.php?id=<?php echo $v['id'];?>" class="link"><span class="text"><?php echo $v['name'];?></span></a></li>
				<?php endforeach;?>
		
				<li><a href="./ms.php">留言板&gt;</a></li>
			</ul>
		</div>
		<div class="header-search">
			<input type="text" style="width:200px;height:45px;" >
			<img src="./Public/img/search.jpg">
		</div>
	</div>
</div>
</div>