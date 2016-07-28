<?php 
	// 初始化文件，可以做项目的一些配置

	// 开启会话跟踪
    session_start();

	// 设置字符集
	header('Content-Type:text/html;charset=utf-8');

	// 本地路径
	$localpath = str_replace('\\','/',dirname(__FILE__) . '/');
	define('LOCALPATH',$localpath);



	// 切割出协议
	$http =  explode('/',$_SERVER['SERVER_PROTOCOL'])[0];
	// 拼接协议和主机名
	$http .= '://' . $_SERVER['HTTP_HOST'];
	// 执行替换
	// http://192.168.11.253/g14/php26_object03/lamp_shop/Admin/
    //             D:/htdocs/g14/php26_object03/lamp_shop/Admin/
	$httpath = str_replace($_SERVER['DOCUMENT_ROOT'],$http,$localpath);





		// 导入配置文件
	require  LOCALPATH . '../Common/config.php';
	// 导入公共函数库
	require  LOCALPATH . '../Common/functions.php';


	// 定义协议路径
	define('HTTPATH',$httpath);



 	// header()  可以跳转相对路径  ./xxx.php
 	// header()  不可以跳转本地路径  c:/xxx.php

 	// 重定向    
