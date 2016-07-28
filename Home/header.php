


<div>
<div class="site-topbar">
	<div class="topbar_nav">
		<a>小米</a>
		<span class="sep">|</span>
		<a>MIUI</a>
		<span class="sep">|</span>
		<a>米聊</a>
		<span class="sep">|</span>
		<a>游戏</a>
		<span class="sep">|</span>
		<a>多看阅读</a>
		<span class="sep">|</span>
		<a>云服务</a>
		<span class="sep">|</span>
		<a>小米网移动版</a>
		<span class="sep">|</span>
		<a>问题反馈</a>
		<span class="sep">|</span>
		<a>Select Region</a></div>
	<div class="topbar_cart">
		<a class="cart"><i class="iconfont"><img src="./Public/img/car.jpg"></i>购物车<span>(0)</span></a>
	</div>
	<div class="topbar_info">
		<a>登录</a>
		<span class="sep">|</span>
		<a>注册</a>
	</div></div>
<div class="site-header">
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
		
				<li><a href="#">查看全部&gt;</a></li>
			</ul>
		</div>
		<div class="header-search">
			<input type="text" style="width:200px;height:45px;" >
			<img src="./Public/img/search.jpg">
		</div>
	</div>
</div>
</div>