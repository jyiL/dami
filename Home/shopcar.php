<?php

error_reporting(0);

  require './init.php';

  $sql = "select * from commodity where id={$_GET['id']}";

  $list = query($sql)[0];
  //echo '<pre>';
  //print_r($list);

  $id = isset($_GET['id']) ? $_GET['id'] : '';
  //echo $id;
  
  //echo '<pre>';
  //print_r($_SESSION['shopcar']);
	//exit;
  //unset($_SESSION['shopcar']);
  //商品信息存到session
  //$num = isset($_GET['num']) ? $_GET['num'] : '';
 


  // 把商品信息和数量储存到session
	$num = isset($_GET['num']) ? $_GET['num'] : '';

	// 如果  session shopcar 里面的 id 不存在，表示该商品并没有添加到购物车里
	if(!empty($_SESSION['shopcar'][$id])){
		// 购物车已经有商品信息了，只需要把数量增加
		$_SESSION['shopcar'][$id]['num'] += $num;
	}else{

		// 没有，就添加到session
		$_SESSION['shopcar'][$id] = $list;

		$_SESSION['shopcar'][$id]['num'] = $num;
	}

	//var_dump($_SESSION['shopcar']);
	//unset($_SESSION['shopcar']);
	if(isset($_SESSION['shopcar'][''])){
		unset($_SESSION['shopcar']['']);
	}

  //$_SESSION['shopcar'][$id] = $list;

  	//$_SESSION['shopcar'][$id]['num'] = $num;




?>



<html><head>
 <title>购物车</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta name="description" content="">
 <meta name="format-detection" content="telephone=no">
 <meta name="">
 
<link rel="stylesheet" href="./Public/css/tasp.css">
<link href="./Public/css/orderconfirm.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./Public/css/css.css">
<link rel="stylesheet" type="text/css" href="./Public/css/liebiao.css">
<link rel="stylesheet" type="text/css" href="./Public/css/jieshao.css">
<style>
#page{width:auto;}
#comm-header-inner,#content{width:950px;margin:auto;}
#logo{padding-top:26px;padding-bottom:12px;}
#header .wrap-box{margin-top:-67px;}
#logo .logo{position:relative;overflow:hidden;display:inline-block;width:140px;height:35px;font-size:35px;line-height:35px;color:#f40;}
#logo .logo .i{position:absolute;width:140px;height:35px;top:0;left:0;background:url(http://a.tbcdn.cn/tbsp/img/header/logo.png);}






</style>
<!--<script type="text/javascript">
	function ac_num(ac){
    var v= document.getElementById('ac_num');
    var val= v.value;
    switch(ac){
        case 'jian':
        //alert(v.innerHTML);
        v.value=parseInt(val) - 1;
        if(v.value<=0){
        	v.value=1;
        }
        break;
        case 'jia':
        v.value = parseInt(val)+1;
        break;
        }
    }
</script>
-->
</head>
<body data-spm="1">
<!--header-->
<?php require './header.php';?>
<!--content-->
	

<div id="page">

 <div id="content" class="grid-c">

  <div id="address" class="address" style="margin-top: 20px;" data-spm="2">

</div>
<form id="J_Form" name="J_Form" action="./action.php?handler=doorder&id=<?php echo $id;?>" method="post">

           <div>
 <h3 class="dib">购物车</h3>
 <table cellspacing="0" cellpadding="0" class="order-table" id="J_OrderTable" summary="统一下单订单信息区域">
 <caption style="display: none">购物车</caption>
 <thead>
 <tr>
 <th class="s-title">商品信息<hr></th>
 <th class="s-price">单价(元)<hr></th>
 <th class="s-amount">数量<hr></th>
 <th class="s-agio">优惠方式(元)<hr></th>
 <th class="s-total">小计(元)<hr></th>
<th class="s-total">操作<hr></th>

 </tr>
 </thead>
     


<tbody data-spm="3" class="J_Shop" data-tbcbid="0" data-outorderid="47285539868" data-isb2c="false" data-postmode="2" data-sellerid="1704508670">
<tr class="first"><td colspan="5"></td></tr>
<tr class="shop blue-line">
 <td colspan="3">
   <!--店铺：--><a class="J_ShopName J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.6" href="http://store.taobao.com/shop/view_shop.htm?shop_id=104337282" target="_blank" title="淘米魅"></a>
     <span class="seller"><!--卖家：--><a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=ac5831c32f47bc9267fcb75b71b5eed6" target="_blank" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.15"></a></span>
     <span class="J_WangWang" data-nick="淘米魅" data-display="inline"></span>
    
    </td>
 <td colspan="2" class="promo">
 <div>
   <ul class="scrolling-promo-hint J_ScrollingPromoHint">
       </ul>
   </div>
 </td>
</tr>

  <!-- 开始 -->

  <?php $total = 0;
	 if(isset($_SESSION['shopcar'])): 
	 ?>
  <?php foreach($_SESSION['shopcar'] as $k => $v):?>
 <tr class="item" data-lineid="19614514619:31175333266:35612993875" data-pointrate="0">
 <td class="s-title">
   <a href="#" target="_blank" title="Huawei/华为 G520新款双卡双待安卓系统智能手机4.5寸四核手手机" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.5">
     <img src="../admin/public/uploads/<?php echo $v['picture'];?>" class="itempic"><span class="title J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.5"><?php echo $v['name'];?></span></a>
    
   <div class="props">
     <span><?php echo $v['describe'];?></span>
   
         </div>
 <a title="消费者保障服务，卖家承诺商品如实描述" href="#" target="_blank">
<img src="http://img03.taobaocdn.com/tps/i3/T1bnR4XEBhXXcQVo..-14-16.png">
</a>
    <div>
 <span style="color:gray;">卖家承诺72小时内发货</span>
 </div>
     </td>
 <td class="s-price">
   
  <span class="price ">
 <em class="style-normal-small-black J_ItemPrice"><?php echo $v['price'];?></em>
  </span>

</td>
 

 

 <td class="s-amount" data-point-url="">
    
 	
	<input type="text" value="<?php echo $v['num'];?>" id="dity-input" class="dity-input" maxlength="2">
	
 </td>


 <td class="s-agio">
       <div class="J_Promotion promotion" data-point-url="">无优惠</div>
   </td>
 <td class="s-total">
   


   <span class="price ">
	 <em class="style-normal-bold-red J_ItemTotal "><?php echo $p = $v['price'] * $v['num'];?></em>
  </span>
   
 </td>

<td class="s-total">

   <span class="price ">
	 <em class="style-normal-bold-red J_ItemTotal "><a href="./action.php?handler=del&id=<?php echo $v['id']?>">删除</a></em>
  </span>
   
 </td>






</tr>
<?php $total += $p;?>

<?php endforeach;?>
<!--结束-->
<?php endif;?>


<tr class="item-service">
 <td colspan="6" class="servicearea" style="display: none"></td>
</tr>

<tr class="blue-line" style="height: 2px;"><td colspan="6"></td></tr>


<tr class="shop-total blue-line">
 <td colspan="6">合计(<span class="J_Exclude" style="display: none">不</span>含运费<span class="J_ServiceText" style="display: none">，服务费</span>)：
   <span class="price g_price ">
 <span>¥</span><em class="style-middle-bold-red J_ShopTotal"><?php echo $total;?></em>
  </span>
  
<input type="hidden" name="total" value="<?php echo $total;?>">

   </td>
</tr>

</tbody>
  

 </table>
<button style="width:80px;height:60px;float:right;">结算</button> 
</div>
  

</form>
</div>

<div id="footer"></div>
</div>
<div style="text-align:center;">
<!--<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>-->
</div>


</body></html>