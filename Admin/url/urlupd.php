<?php 
	// 导入初始化文件
	require '../init.php';
	
	
	$id = $_GET['id'];
	$sql = 'select * from url where id = ' . $id;
	$result = query($sql)[0];
	//echo '<pre>';
	//print_r($result);




?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		

		<link rel="stylesheet" href="../Public/css/input.css" type="text/css" media="screen">

	   
	</head>
	
	<body>
		<center>
		<form action="./action.php?handler=doedit&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
		<h1>修改友情链接</h1>
			<ul class="input_test"> 
        <img src="../Public/logo/<?= $result['picname'];?>" alt="">
      	
        <li> 
            <label for="inp_web">公司名：</label> 
            <p><input value="<?php echo $result['name'];?>" id="inp_web" class="input_out" name="name" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入公司名</span> 
        </li>
         <li> 
            <label for="inp_web">URL：</label> 
            <p><input  value="<?php echo $result['url'];?>" id="inp_web" class="input_out" name="url" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入URL</span> 
        </li>


        	

        <li> 
            <label for="inp_web">公司LOGO：</label>
             
      
            <p><input name="myfile" type="file"></p>
            
            <input type="hidden" name="picname" value="<?php echo $result['picname'];?>">
            <span>请上传公司LOGO</span>
             
        </li>
        
       

       

        <li style="">
        <label for="inp_web">&nbsp;</label> 
			<p><button class="btn1">提交</button></p>
        </li>
    </ul> 

    	
		</form>
		</center>
	</body>
</html>