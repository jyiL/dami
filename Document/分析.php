项目：

商城 网上商城(电子商务)

分类 ：
	B2C:  商户 对 客户
	C2C:  个人与个人
	B2B:  商户对商户 
	O2O:  线上对线下

购物流程：
	www.jd.com 首页
	图

[后台]
	用于对数据的管理
[模块分析]

	用户管理：添加，删除用户，修改，浏览用户
	商品管理：添加，删除商品，修改，浏览商品
	分类管理：添加，删除分类，修改，浏览分类(无限级分类)
	订单管理：浏览订单，订单详情，处理订单
	
加分
	商品评论
	留言
	站内信

	友情连接

[前台]
	网站首页，商品详情，商品列表页，购物车，添加订单页，订单成功提示页，登录页，注册页，个人中心

	扒
		右键，另存为-->指定文件名与目录 --> 进入模板，修改路径
		如：
			<link rel="stylesheet" href="css/index.css" type="text/css" media="screen">
			<link rel="stylesheet" href="./public/css/index.css" type="text/css" media="screen">

			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="./public/js/jquery.js"></script>

--------------------------
表的设计
	数据库   g14_shop

	用户表   shop_users
	商品表	 shop_goods
	分类表   shop_categorys

	订单表 	 shop_orders
	订单详情表



用户查询  --- 新建 userlist.php  --- 连接数据库，找数据，再遍历 functions.php





lamp_shop 目录结构
	|---- document 基本分析，数据表，数据字典
		|---- 分析.php 
		|---- 数据字典.xlsx   通过数据字典，编辑sql语句
		|---- 流程.docx 
		|---- shop.sql     建表语句
		|---- 模板目录
	|---- Admin  	网站后台
		|---- index.php  		后台主页
		|---- userlist.php  	用户浏览
		|---- adduser.php  		用户添加
		|---- action.php  		业务逻辑处理文件
		|---- public 目录   一些公共使用的资料
			|---- css		css样式表
			|---- js
			|---- fonts
			|---- icon  	存用户的头像
			|---- uploads  	用户上传的文件
	|---- Home  	网站前台
	|---- Common 目录     
		|---- fonts 字体目录   存放了验证码需要的字体
		|---- config.php   	数据库的配置文件
		|---- functions.php   	自定义的公共函数库
		|---- yzm.php   	验证码文件 







