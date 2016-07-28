<?php
  require './init.php';

$id = $_SESSION['userInfo']['id'];

//echo '<pre>';

//print_r($_SESSION['userInfo']);
$oid =$_GET['oid'];


?>
<html><head>
 <title>订单</title>
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

</head>
<body data-spm="1">

<!--header-->
<?php require './header.php';?>
<!--content-->
	







<div id="page">

 <div id="content" class="grid-c">

  <div id="address" class="address" style="margin-top: 20px;" data-spm="2">

</div>

 
<form action="./action.php?handler=dodatail&id=<?php echo $id;?>&oid=<?php echo $oid;?>" method="post">
 <div>
 <h3 class="dib">确认订单信息</h3>
 <table cellspacing="0" cellpadding="0" class="order-table" id="J_OrderTable" summary="统一下单订单信息区域">
 <caption style="display: none">统一下单订单信息区域</caption>
 <thead>
 <tr>
 <th class="s-title">商品信息<hr></th>
 <th class="s-price">单价(元)<hr></th>
 <th class="s-amount">数量<hr></th>
 <th class="s-agio">优惠方式(元)<hr></th>
 <th class="s-total">小计(元)<hr></th>
 </tr>
 </thead>
     


<tbody data-spm="3" class="J_Shop" data-tbcbid="0" data-outorderid="47285539868" data-isb2c="false" data-postmode="2" data-sellerid="1704508670">
<tr class="first"><td colspan="5"></td></tr>
<tr class="shop blue-line">
 <td colspan="3">
   <a class="J_ShopName J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.6" href="http://store.taobao.com/shop/view_shop.htm?shop_id=104337282" target="_blank" title="淘米魅"></a>
     <span class="seller"><a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=ac5831c32f47bc9267fcb75b71b5eed6" target="_blank" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.15"></a></span>
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
  <?php $total = 0;?>
  <?php foreach($_SESSION['shopcar'] as $k => $v):?>
  <?php //echo '<pre>';print_r($_SESSION['shopcar']);?>
 <tr class="item" data-lineid="19614514619:31175333266:35612993875" data-pointrate="0">
 <td class="s-title">
   <a href="#" target="_blank" title="" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.5">
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
<input type="hidden" name="costprice" value="630.00" class="J_CostPrice">
</td>
 

 <td class="s-amount" data-point-url="">
         

    <input type="text" name="num" value="<?php echo $v['num'];?>" id="dity-input" class="dity-input" maxlength="2">
 
 </td>
 



 <td class="s-agio">
       <div class="J_Promotion promotion" data-point-url="">无优惠</div>
   </td>
 <td class="s-total">
   
   <span class="price ">
 <em class="style-normal-bold-red J_ItemTotal "><?php echo $p = $v['price'] * $v['num'];?></em>
  </span>
    <input id="furniture_service_list_b_47285539868" type="hidden" name="furniture_service_list_b_47285539868">
 </td>
</tr>

<?php $total += $p;?>
<?php endforeach;?>
<!--结束-->





<tr class="item-service">
 <td colspan="5" class="servicearea" style="display: none"></td>
</tr>

<tr class="blue-line" style="height: 2px;"><td colspan="5"></td></tr>


</tbody>
  <tfoot>
 <tr>
 <td colspan="5">

<div class="order-go" data-spm="4">
<div class="J_AddressConfirm address-confirm">
 <div class="kd-popup pop-back" style="margin-bottom: 40px;">
 <div class="box">
 <div class="bd">
 <div class="point-in">
   
   <em class="t">实付款：</em>  <span class="price g_price ">
 <span>¥</span><em class="style-large-bold-red" id="J_ActualFee"><?php echo $total;?></em>
 <input type="hidden" name="total" value="<?php echo $total;?>">
  </span>
</div>

  <ul>
 

 <li  style="float:left;"><em >寄送至:</em><span id="J_AddrConfirm" style="word-break: break-all;">
   
   <input type="text" name="address" value="<?php echo $_SESSION['userInfo']['address']?>">
   </span></li>
 <li style="float:left;"><em>收货人:</em><span id="J_AddrNameConfirm"><input type="text" name="name" value="<?php echo $_SESSION['userInfo']['name']?>">联系电话:<input type="text" name="tel" value="<?php echo $_SESSION['userInfo']['phone']?>"></span></li>
 


 </ul>
     </div>
 </div>
         
       <input type="submit" id="J_Go" class=" btn-go" data-point-url="" tabindex="0" value="提交订单"><b class="dpl-button"></b></a>
  </div>
 </div>

 <div class="J_confirmError confirm-error">
 <div class="msg J_shopPointError" style="display: none;"><p class="error">积分点数必须为大于0的整数</p></div>
 </div>


 <div class="msg" style="clear: both;">
 <p class="tips naked" style="float:right;padding-right: 0">若价格变动，请在提交订单后联系卖家改价，并查看已买到的宝贝</p>
 </div>
 </div>
 </td>
 </tr>
 </tfoot>
 </table>
</div>
 </form> 

</div>

<div id="footer"></div>
</div>
<div style="text-align:center;">

</div>


</body></html>