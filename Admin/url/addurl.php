<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>添加友情链接</title>

		<link rel="stylesheet" href="../Public/css/input.css" type="text/css" media="screen">

	   
	</head>
	
	<body>
		<center>
		<form action="./action.php?handler=doaddurl" method="post" enctype="multipart/form-data">
		<h1>添加友情链接</h1>
			<ul class="input_test"> 
        <li> 
            <label for="inp_name">公司名：</label> 
            <p><input id="inp_name" class="input_out" name="name" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入公司名</span> 
        </li> 
        <li> 
            <label for="inp_email">URL</label> 
            <p><input id="inp_email" class="input_out" name="url" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入URL</span> 
        </li> 
       <li> 
            <label for="inp_web">公司LOGO：</label> 
            <p><input name="picname" type="file"></p> 
            <span>请上传公司LOGO</span> 
        </li>
       
    </ul> 
    	<div style="text-algin:center;"><button class="btn1">添加</button></div>
		</form>
		</center>
	</body>
</html>