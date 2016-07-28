-- 创建数据库   
create database `xiaomi_shop`;


-- 创建会员表
create table if not exists `users`(
	`id` int unsigned not null auto_increment primary key,
	`username` varchar(32) unique not null,
	`name` varchar(16) not null,
	`pass` char(32) not null,
	`sex` enum('0','1') not null,
	`address` varchar(255) not null,
	`code` char(6),
	`phone` varchar(16),
	`email` varchar(50) not null,
	`icon` varchar(255) default 'default.jpg',
	`grade` enum('0','1','2','3') default 3,
	`status` enum('0','1','2') default 1,
	`addtime` int unsigned not null 
)engine=innodb default charset=utf8;


-- 添加超级管理(只有一个，不能删除)
insert into `users` values(null,'ljy','haha',md5(116138),'1','广东省广州市天河区','52000','13888888888','123456@hotmail.com','default.jpg',0,1,unix_timestamp());


-- 创建商品分类表
create table if not exists `category`(
	`id` int unsigned not null auto_increment primary key,
	`pid` int unsigned not null comment '父级ID',
	`name` varchar(255) not null comment '分类名',
	`path` varchar(255) not null comment '分类路径',
	`addtime` int unsigned not null 
)engine=innodb default charset=utf8;




-- 创建商品信息表
create table if not exists `commodity`(
	`id` int unsigned not null auto_increment primary key,
	`cateid` int unsigned not null comment '商品分类ID', 
	`name` varchar(255) not null,
	`picture` varchar(255) not null,
	`price` float(8,2) not null,
	`store` int unsigned default 0,
	`views` int unsigned default 0,
	`buy` int unsigned default 0,
	`describe` text comment '描述',
	`display` tinyint(1) default 1 comment '0:下架，1：上架',
	`status` tinyint(1) default 1 comment '0：热销，1：新品，2：猜你喜欢',
	`addtime` int unsigned not null 
)engine=innodb default charset=utf8;


-- 订单表
create table `shop_orders`(
	`id` int unsigned not null auto_increment primary key,
	`uid` int unsigned not null,//用户id
	`name` varchar(255) not null,
	`tel` char(11) not null,
	`address` varchar(255) not null,
	`price` float(10,2) not null,商品总价
	`status` tinyint(1) default 1,发货未发货
	`addtime` int unsigned not null
)engine=innodb default charset=utf8;

insert into shop_orders (`uid`,`name`,`tel`,`address`,`price`,`status`,`addtime`) 
	values (27,'chen','13345343532','等萨法味儿玩儿玩儿额外','233.00',1,unix_timestamp()),
			(29,'zhang','13912343327','喝萨法货快','1233.00',1,unix_timestamp()),
			(28,'xu','13943213327','沙发斯蒂芬斯蒂芬双方货快','2333.00',1,unix_timestamp()),
			(29,'zhang','13989832427','喝点法萨芬可发货快','324332.00',1,unix_timestamp()),
			(27,'chen','12349872327','阿发汪峰晚饭','4334.00',1,unix_timestamp()),
			(28,'xu','13453255327','四大房东说发送方','2345.00',1,unix_timestamp()),
			(27,'chen','13983253454','重新装vzvsasdvgfsafe','86645.00',1,unix_timestamp()),
			(28,'xu','13983246745','sa撒发发阿凡达分','1234.00',1,unix_timestamp()),
			(29,'zhang','13983245324','萨芬持续热网我确认','4532.00',1,unix_timestamp());

--订单详情表
create table `shop_orderdetail`(
	`id` int unsigned not null auto_increment primary key,
	`uid` int unsigned not null,用户id
	`oid` int unsigned not null,订单id
	`gid` int unsigned not null,商品id
	`goodsname` varchar(255) not null,
	`price` float(10,2) not null,
	`buy` int unsigned not null
)engine=innodb default charset=utf8;
-- 创建关系表  goods和orders
create table if not exists `goods_and_orders`(
	`id` int unsigned not null auto_increment primary key,
	`order_id` int not null,
	`goods_id` int unsigned not null
)engine=innodb default charset=utf8;


-- 创建订单表
create table if not exists `orders`(
	`id` int unsigned not null auto_increment primary key,
	`uid` int not null,
	`linkman` varchar(32),
	`address` varchar(255),
	`code` char(6),
	`phone` varchar(16),
	`addtime` int unsigned not null,
	`total` double(8,2) not null,
	`status` enum('0','1','2','3') not null
)engine=innodb default charset=utf8;

-- 订单详情表  detail
create table if not exists `detail`(
	`id` int unsigned not null auto_increment primary key,
	`orderid` int unsigned not null,
	`goodsid` int,
	`name` varchar(32),
	`price` double(6,2),
	`num` int,
	foreign key (`orderid`) references orders(`id`)
)engine=innodb default charset=utf8;

-- 商品评价表
create table if not exists `content`(
	`id` int unsigned not null auto_increment primary key,
	`orderid` int unsigned not null,
	`goodsid` int,
	`name` varchar(32),
	`price` double(6,2),
	`content` text,
	`score` tinyint,
	foreign key (`orderid`) references orders(`id`)
)engine=innodb default charset=utf8;


-- 创建友情链接表
create table if not exists `url`(
	`id` int unsigned not null auto_increment primary key,
	`name` varchar(128) not null,
	`url` varchar(255) not null default '#',
	`picname` varchar(255)
)engine=innodb default charset=utf8;

-- 创建购物车表
create table if not exists `buy_car`(
	`id` int unsigned not null auto_increment primary key,
	`usersid` varchar(128) not null,
	`goodsid` varchar(255) not null,
	`gouwunum` tinyint
)engine=innodb default charset=utf8;