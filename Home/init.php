<?php
	
	// 开启会话跟踪
    session_start();


	//初始化文件

	//设置字符集
	header('content-type:text/html;charset=utf-8');


	//本地路径

	$localpath = str_replace('\\','/',dirname(__FILE__) . '/');
	define('LOCALPATH',$localpath);

	//echo LOCALPATH;





	// 切割出协议
	$http =  explode('/',$_SERVER['SERVER_PROTOCOL'])[0];
	// 拼接协议和主机名
	$http .= '://' . $_SERVER['HTTP_HOST'];
	$httpath = str_replace($_SERVER['DOCUMENT_ROOT'],$http,$localpath);

	// 导入配置文件
	require  LOCALPATH . '../Common/config.php';
	// 导入公共函数库
	require  LOCALPATH . '../Common/functions.php';


	// 定义协议路径
	define('HTTPATH',$httpath);