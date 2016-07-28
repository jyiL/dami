<?php 
	// 导入初始化文件
	require '../init.php';
	// 1.查询所有分类
	$sql = 'select * from category order by concat(path,id)';

	$result = query($sql);





?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>添加会员</title>

		<link rel="stylesheet" href="../Public/css/input.css" type="text/css" media="screen">

	   
	</head>
	
	<body>
		<center>
		<form action="./action.php?handler=addcommodity" method="post" enctype="multipart/form-data">
		<h1>添加商品</h1>
			<ul class="input_test"> 
        <li> 
            <label for="inp_name">分类：</label> 
            <p>
            	<select name="cateid">
            		<!--遍历所有分类-->
            		<?php
            			foreach($result as $k => $v){
            				//每次循环都初始化一个空字符
            				$disabled = '';

            				//如果是顶级分类
            				if($v['pid'] == 0){
            					$disabled = 'disabled';
            				}

            				//计算逗号的个数
            				$num = substr_count($v['path'],',');
            				//填充指定的字符串
            				$res = str_repeat('→→',$num - 1);

            				echo "<option {$disabled} value='{$v['id']}'>{$res}{$v['name']}</option>";

            			}
            		;?>
            	</select>
            </p> 
            <span>请选择您的分类</span> 
        </li> 
      
        <li> 
            <label for="inp_web">商品名：</label> 
            <p><input id="inp_web" class="input_out" name="name" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入您的商品名</span> 
        </li>
        <li> 
            <label for="inp_web">商品图片：</label> 
            <p><input name="myfile" type="file"></p> 
            <span>请上传您的商品图片</span> 
        </li>
        <li> 
            <label for="inp_web">价格：</label> 
            <p><input id="inp_web" class="input_out" name="price" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p> 
            <span>请输入您的价格</span> 
        </li>

       
        <li>
        	<label for="inp_web">库存：</label>
        	<p><input id="inp_web" class="input_out" name="store" type="text" onfocus="this.className='input_on';this.onmouseout=''" onblur="this.className='input_off';this.onmouseout=function(){this.className='input_out'};" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" /></p>
        	<span>请输入您的库存</span> 
        </li>
        <input type="hidden" mame="views" value="0">
        <input type="hidden" mame="buy" value="0">
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
        		
		         	上架：<input style="width:30px;" name="display" value="1" type="radio" checked>
		            下架：<input style="width:30px;" name="display" value="0" type="radio">
		            	
		     
		     </p>
			<span>请选择</span> 
        </li>
        <li style="float:left;">
        	<label for="inp_web">状态：</label> 
        	<p>
        		<select name="status">
        			<option value="0">热销</option>
        			<option value="1" selected>新品</option>
        			<option value="2">小而美</option>
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