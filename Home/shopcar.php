<?php
  require './init.php';

  $sql = "select * from commodity where id={$_GET['id']}";

  $list = query($sql)[0];


  $id = $_GET['id'];
  $_SESSION['shopcar'][$id] = $list;
  /*echo '<pre>';
  print_r($_SESSION['shopcar']);
*///exit;
   //unset($_SESSION['shopcar']);





?>



<html><head>
 <title>购物车</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta name="description" content="">
 <meta name="format-detection" content="telephone=no">
 <meta name="">
 
<link rel="stylesheet" href="./Public/css/tasp.css">
<link href="./Public/css/orderconfirm.css" rel="stylesheet">

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


<div id="page">

 <div id="content" class="grid-c">

  <div id="address" class="address" style="margin-top: 20px;" data-spm="2">

</div>
<form id="J_Form" name="J_Form" action="/auction/order/unity_order_confirm.htm" method="post">
 <input name="_tb_token_" type="hidden" value="IZpONoL2bm">
 <input type="hidden" name="action" value="order/confirmOrderAction">
 <input type="hidden" name="event_submit_do_confirm" value="1">
 <input type="hidden" id="J_InsuranceDatas" name="insurance_datas" value="">
 <input type="hidden" id="J_InsuranceParamCheck" name="insurance_param_check" value="">
 <input type="hidden" name="" id="J_checkCodeUrl" value="/auction/order/check_code.htm">
   <input type="hidden" name="need_not_split_sellers" value="">
   <input type="hidden" name="from" value="cart">
   <input type="hidden" name="cnData" value="">
   <input type="hidden" name="shop_id" value="0" class="J_FareParam">
   <input type="hidden" name="cartShareTag" value="">
   <input type="hidden" name="flushingPictureServiceId" value="">
   <input type="hidden" id="J_channelUrl" name="channel" value="no-detail" class="J_FareParam">
   <input type="hidden" name="cinema_id" value="">
   <input type="hidden" id="item" name="item" value="35612993875_19614514619_1_31175333266_1704508670_0_0_0_cartCreateTime~1380269540000">
   <input type="hidden" id="cartId" name="cartId" value="35612993875">
   <input type="hidden" id="verticalParams" name="verticalParams" value="">
   <input type="hidden" name="cross_shop_ids" value="">
   <input type="hidden" name="tmall_cross_shop_ids" value="NULL">
   <input type="hidden" name="buyer_from" value="cart" class="J_FareParam">
   <input type="hidden" name="tbsc_channel_id" value="0">
   <input type="hidden" name="checkCodeIds" value="35612993875_19614514619_1_31175333266_1704508670_0_0_0_cartCreateTime~1380269540000">
   <input type="hidden" id="J_OrderInfoString" name="orderInfoString" value="1704508670:2:19614514619:31175333266:">
   <input type="hidden" id="J_OrderInfoStringForCod" name="orderInfoStringForCod" value="1704508670_2,19614514619:31175333266:35612993875">
   <input type="hidden" name="encryptString" value="0A04F3D8F7EEDC813AFF8711BE47B9E5E96F6E86A391A4C2">
   <input type="hidden" name="secondDivisionCode" value="422801">
   <input type="hidden" name="use_cod" value="false" class="J_FareParam">
   <input type="hidden" name="1704508670:2|seq" value="b_47285539868">
   <input type="hidden" name="n_area" value="422801">
   <input type="hidden" name="n_city" value="422800">
   <input type="hidden" name="n_prov" value="420000">
   <input type="hidden" name="n_state" value="0">
   <input type="hidden" name="n_country" value="1">
   <input type="hidden" id="defaultId" name="defaultId" value="674944241">
   <input type="hidden" name="postCode" value="445000">
   <input type="hidden" name="deliverAddr" value="湖北民族学院（信息工程学院）  男生宿舍楼5栋102">
   <input type="hidden" name="addressId" value="674944241">
   <input type="hidden" name="deliverMobile" value="18727717260">
   <input type="hidden" name="deliverName" value="朱万雄">
   <input type="hidden" name="deliverPhone" value="">
   <input type="hidden" id="divisionCode" name="divisionCode" value="422801">
   <input type="hidden" id="J_CodAction" name="CodAction" value="http://delivery.taobao.com/cod/cod_payway.htm">
   <input type="hidden" id="event_submit_do_cod_switcher" name="event_submit_do_cod_switcher" value="1">
   <input type="hidden" id="J_CodActionNew" name="CodActionNew" value="cod/codOrder_switcher_action">
   <input type="hidden" name="guest_buyer" value="false">
     <input type="hidden" id="J_sid" name="sid" value="32457704949">
 <input type="hidden" id="J_gmtCreate" name="gmtCreate" value="1380270550897">
 <input type="hidden" name="secStrNoCCode" value="6dd2fa5d614e2ced1d3189b0c2da09c0">

 <input type="hidden" id="J_TransferWarehouseId" name="overseasWarehouseId" value="">
 <input type="hidden" id="J_TransferWarehouseDivisionId" name="overseasWarehouseDivisionId" value="">

   <input type="hidden" id="paramString" value="tuan_type=0&amp;use_cod=false&amp;shop_id=0&amp;item=35612993875_19614514619_1_31175333266_1704508670_0_0_0_cartCreateTime~1380269540000&amp;buyer_from=cart&amp;isRepost=true&amp;">
 <input type="hidden" id="J_StepPayData" value="&quot;&quot;">
 
   <input type="hidden" name="unity" value="1">

<input type="hidden" name="buytraceid" value="">
<input type="hidden" name="activity" value="">
<input type="hidden" name="bankfrom" value="">
<input type="hidden" name="yfx315" value="">

<input type="hidden" id="J_channelUrl" name="channel" value="no-detail" class="J_FareParam">
   <input type="hidden" id="J_actId" name="actId" value="">
   <input type="hidden" name="etkv" value="">
   <input type="hidden" name="havePremium" value="false">
 <input type="hidden" name="cartShareTag" value="">
 <input type="hidden" name="flushingPictureServiceId" value="">
           <div>
 <h3 class="dib">确认订单信息</h3>
 <table cellspacing="0" cellpadding="0" class="order-table" id="J_OrderTable" summary="统一下单订单信息区域">
 <caption style="display: none">统一下单订单信息区域</caption>
 <thead>
 <tr>
 <th class="s-title">店铺宝贝<hr></th>
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
   店铺：<a class="J_ShopName J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.6" href="http://store.taobao.com/shop/view_shop.htm?shop_id=104337282" target="_blank" title="淘米魅">淘米魅</a>
     <span class="seller">卖家：<a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=ac5831c32f47bc9267fcb75b71b5eed6" target="_blank" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.15">淘米魅</a></span>
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
  <?php foreach($_SESSION['shopcar'] as $k => $v):?>
 <tr class="item" data-lineid="19614514619:31175333266:35612993875" data-pointrate="0">
 <td class="s-title">
   <a href="#" target="_blank" title="Huawei/华为 G520新款双卡双待安卓系统智能手机4.5寸四核手手机" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.5">
     <img src="../admin/public/uploads/<?php echo $v['picture'];?>" class="itempic"><span class="title J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.5"><?php echo $v['name'];?></span></a>

   <div class="props">
     <span><?php echo $v['describe'];?></span>
   <span>手机套餐: 套餐二 </span>
   <span>机身内存: 4G </span>
   <span>版本: 中国大陆 </span>
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
         <input type="hidden" class="J_Quantity" value="1" name="19614514619_31175333266_35612993875_quantity">1
 
 </td>
 <td class="s-agio">
       <div class="J_Promotion promotion" data-point-url="">无优惠</div>
   </td>
 <td class="s-total">
   
   <span class="price ">
 <em class="style-normal-bold-red J_ItemTotal ">630.00</em>
  </span>
    <input id="furniture_service_list_b_47285539868" type="hidden" name="furniture_service_list_b_47285539868">
 </td>
</tr>
<?php endforeach;?>
<!--结束-->



<tr class="item-service">
 <td colspan="5" class="servicearea" style="display: none"></td>
</tr>

<tr class="blue-line" style="height: 2px;"><td colspan="5"></td></tr>


<tr class="shop-total blue-line">
 <td colspan="5">店铺合计(<span class="J_Exclude" style="display: none">不</span>含运费<span class="J_ServiceText" style="display: none">，服务费</span>)：
   <span class="price g_price ">
 <span>¥</span><em class="style-middle-bold-red J_ShopTotal">630.00</em>
  </span>
  <input type="hidden" name="1704508670:2|creditcard" value="false">
<input type="hidden" id="J_IsLadderGroup" name="isLadderGroup" value="false">

   </td>
</tr>
</tbody>
  
 </table>
</div>
  
 <input type="hidden" id="J_useSelfCarry" name="useSelfCarry" value="false">
 <input type="hidden" id="J_selfCarryStationId" name="selfCarryStationId" value="0">
 <input type="hidden" id="J_useMDZT" name="useMDZT" value="false">
 <input type="hidden" name="useNewSplit" value="true">
 <input type="hidden" id="J_sellerIds" name="allSellIds" value="1704508670">
</form>
</div>

<div id="footer"></div>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>


</body></html>