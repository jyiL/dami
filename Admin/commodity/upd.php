<?php 
	// 导入初始化文件
	require '../init.php';
	
	
	$id = $_GET['id'];
	$sql = 'select * from commodity where id = ' . $id;
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
		<form action="./action.php?handler=edit&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
		<h1>修改商品</h1>
			<ul class="input_test"> 
        
      	
        <li> 
            <label for="inp_web">商品名：</label> 
            <p><input value="<?php echo $result['name'];?>" id="inp_web" class="input_out" name="name" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入您的商品名</span> 
        </li>
        <li> 
            <label for="inp_web">商品图片：</label> 
            <p><input name="myfile" type="file"></p> 
            <input type="hidden" name="picture" value="<?php echo $result['picture'];?>">
            <span>请上传您的商品图片</span>
             
        </li>
        <li> 
            <label for="inp_web">价格：</label> 
            <p><input  value="<?php echo $result['price'];?>" id="inp_web" class="input_out" name="price" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入您的价格</span> 
        </li>

       
        <li>
        	<label for="inp_web">库存：</label>
        	<p><input value = "<?php echo $result['store'];?>" id="inp_web" class="input_out" name="store" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p>
        	<span>请输入您的库存</span> 
        </li>
        <li>
        	<label for="inp_web">描述：</label>
        	<p>
        	<textarea name="describe" id="" cols="30" rows="10">
        	</textarea>
        	</p>
        	<span>请输入您的描述</span> 
        </li>
      
        <li style="float:left;">
        	<label for="inp_web">上下架：</label> 
        	<p>
        		
		         	上架：<input style="width:30px;" name="display" value="1" type="radio" <?php echo $result['display'] == 1 ? 'checked' : ''?>>
		            下架：<input style="width:30px;" name="display" value="0" type="radio" <?php echo $result['display'] == 0 ? 'checked' : ''?>>
		            	
		     
		     </p>
			<span>请选择</span> 
        </li>
        <li style="float:left;">
        	<label for="inp_web">状态：</label> 
        	<p>
        		<select name="status">
        			<option value="0" <?php echo $result['status'] == 0 ? 'selected' : ''?>>热销</option>
        			<option value="1" <?php echo $result['status'] == 1 ? 'selected' : ''?>>新品</option>
        			<option value="2" <?php echo $result['status'] == 2 ? 'selected' : ''?>>小而美</option>
        		</select>
			</p>
			<span>请选择您的状态</span> 
        </li>

        <li>
        <label for="inp_web">&nbsp;</label> 
			<p><button class="btn1">提交</button></p>
        </li>
    </ul> 

    	
		</form>
		</center>
	</body>
</html>