<?php

	// 导入初始化文件 
	require '../init.php';

	//echo '<pre>';
	//print_r($_GET);



	//接收父级ID
	$id = $_GET['id'];

	// 不知道父级分类的相关信息，查找父级信息
	$sql = "select * from category where id = " . $id;

	//echo $sql;
	$parent = query($sql)[0];

	//echo '<pre>';
	//print_r($parent);

	// 服装的自增ID就是子类的PID
	$pid = $id;



?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="../Public/css/input.css" type="text/css" media="screen">

	   
	</head>
	
	<body>
		<center>
		<form action="./action.php?handler=addson" method="post" enctype="multipart/form-data">
		<h1>添加 <?php echo $parent['name']; /*  输出父级分类名   */?> 分类</h1>
			<ul class="input_test"> 
        <li>
            <label for="inp_name">分类名：</label> 
            <p><input id="inp_name" class="input_out" name="catename" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p>
            <input type="hidden" name='pid' value='<?= $parent['id'];?>'>
		    <input type="hidden" name='path' value='<?= $parent['path'];?>'>
            <span>请输入分类名</span> 
        </li> 
        
    </ul> 
    	<div style="text-algin:center;"><button class="btn1">提交</button></div>
		</form>
		</center>
	</body>
</html>
