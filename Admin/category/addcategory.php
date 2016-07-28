<?php 
	//echo '添加分类';
	// 到入初始化文件
	//require '../init.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="../Public/css/input.css" type="text/css" media="screen">

	   
	</head>
	
	<body>
		<center>
		<form action="./action.php?handler=addcate" method="post" enctype="multipart/form-data">
		<h1>添加分类</h1>
			<ul class="input_test"> 
        <li> 
            <label for="inp_name">分类名：</label> 
            <p><input id="inp_name" class="input_out" name="catename" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p>
            <input type="hidden" name='pid' value='0'>
		    <input type="hidden" name='path' value='0,'>
            <span>请输入分类名</span> 
        </li> 
        
    </ul> 
    	<div style="text-algin:center;"><button class="btn1">提交</button></div>
		</form>
		</center>
	</body>
</html>
