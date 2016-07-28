<?php 
	
	// 导入初始化文件
	require './init.php';

?>

<html><head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="public/css/xiaomi.css">
    <script type="text/javascript" src="public/js/jquery-2.1.4.min.js" style="color: rgb(0, 0, 0);"></script>
    <script src="public/js/jquery.animate-colors-min.js"></script>
</head>
<body>
     <div class="head_box">
         <div id="head_wrap">
             <div id="head_nav">
                 <a class="head_nav_a">大米网</a>
                 <span>|</span>
                 <a class="head_nav_a">MIUI</a>
                 <span>|</span>
                 <a class="head_nav_a">米聊</a>
                 <span>|</span>
                 <a class="head_nav_a">游戏</a>
                 <span>|</span>
                 <a class="head_nav_a">多看阅读</a>
                 <span>|</span>
                 <a class="head_nav_a">云服务</a>
                 <span>|</span>
                 <a class="head_nav_a">大米移动版</a>
                 <span>|</span>
                 <a class="head_nav_a">问题反馈</a>
                 <span>|</span>
                 <a class="head_nav_a" id="Select_Region_but">Select Region</a>
             </div>
             <div id="head_right">
                 <!--如果为空代表没有登录-->
                 <?php if(empty($_SESSION['userInfo'])):?>
                 <div id="head_landing">
                     <a class="head_nav_a" href="./login.php">登陆</a>
                     <span>|</span>
                     <a class="head_nav_a" href="./#">注册</a>
                 </div>
                 <div id="head_car">
                     <a class="head_car_text" href="./login.php">购物车（0）</a>
                     <div id="car_content" style="height: 0px;width:0px ;background-color: #edffc6;z-index: 999">
                         <a class="car_text"></a>
                     </div>
                 </div>
             	<?php else:?>
             		<a class="head_nav_a" href="./action.php?handler=logout">退出登录</a>

             	<?php endif;?>

             </div>
         </div>
     </div>
     <div id="main_head_box">
         <div id="menu_wrap">
             <div id="menu_logo">
                 <img src="public/img/xiaomi_logo.png">
             </div>
             <div id="menu_nav">
                 <ul>
                     <li class="menu_li" control="xiaomiphone">大米手机</li>
                     <li class="menu_li" control="hongmiphone">红米</li>
                     <li class="menu_li" control="pingban">平板</li>
                     <li class="menu_li" control="tv">电视&nbsp;&nbsp;盒子</li>
                     <li class="menu_li" control="luyou">路由器</li>
                     <li class="menu_li" control="yingjian">智能硬件</li>
                     <li><a>服务</a></li>
                     <li><a>社区</a></li>
                 </ul>
             </div>
             <div id="find_wrap">
                 <div id="find_bar">
                     <input type="text" id="find_input">
                 </div>
                 <div id="find_but">GO</div>
             </div>
         </div>
     </div>
     <div id="menu_content_bg" style="height: 0px;">
         <div id="menu_content_wrap">
             <ul style="top: 0px;">
                 <li id="xiaomiphone">
                     <div class="menu_content">
                         <img src="public/img/mi4!160x110.jpg">
                         <p class="menu_content_tit">大米手机4</p>
                         <p class="menu_content_price">1499元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/minote!160x110.jpg">
                         <p class="menu_content_tit">大米NOTE标准版</p>
                         <p class="menu_content_price">1999元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/minotepro!160x110.jpg">
                         <p class="menu_content_tit">大米NOTE顶配版</p>
                         <p class="menu_content_price">2999元起</p>
                     </div>
                 </li>
                 <li id="hongmiphone">
                     <div class="menu_content">
                         <img src="public/img/hongmi2a!160x110.jpg">
                         <p class="menu_content_tit">红米手机2A</p>
                         <p class="menu_content_price">499元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/hongmi2!160x110.jpg">
                         <p class="menu_content_tit">红米手机2</p>
                         <p class="menu_content_price">599元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/note!160x110.jpg">
                         <p class="menu_content_tit">红米NOTE</p>
                         <p class="menu_content_price">699元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/note2!160x110.jpg">
                         <p class="menu_content_tit">红米NOTE2</p>
                         <p class="menu_content_price">799元</p>
                     </div>
                 </li>
                 <li id="pingban">
                     <div class="menu_content">
                         <img src="public/img/mipad16!160x110.jpg">
                         <p class="menu_content_tit">大米平板16G</p>
                         <p class="menu_content_price">1299元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/mipad64!160x110.jpg">
                         <p class="menu_content_tit">大米平板64G</p>
                         <p class="menu_content_price">1499元起</p>
                     </div>
                 </li>
                 <li id="tv">
                     <div class="menu_content">
                         <img src="public/img/mitv40!160x110.jpg">
                         <p class="menu_content_tit">大米电视2&nbsp;40英寸</p>
                         <p class="menu_content_price">1999元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/mitv48!160x110.jpg">
                         <p class="menu_content_tit">大米电视2S&nbsp;48英寸</p>
                         <p class="menu_content_price">2999元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/mitv49!160x110.jpg">
                         <p class="menu_content_tit">大米电视2&nbsp;49英寸</p>
                         <p class="menu_content_price">3399元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/mitv55!160x110.jpg">
                         <p class="menu_content_tit">大米电视2&nbsp;55英寸</p>
                         <p class="menu_content_price">4499元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/hezimini!160x110.jpg">
                         <p class="menu_content_tit">大米盒子MINI版</p>
                         <p class="menu_content_price">199元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/hezis!160x110.jpg">
                         <p class="menu_content_tit">大米盒子增强版</p>
                         <p class="menu_content_price">299元</p>
                     </div>
                 </li>
                 <li id="luyou">
                     <div class="menu_content">
                         <img src="public/img/miwifi!160x110.jpg">
                         <p class="menu_content_tit">全新大米路由器</p>
                         <p class="menu_content_price">699元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/miwifimini!160x110.jpg">
                         <p class="menu_content_tit">大米路由器&nbsp;MINI</p>
                         <p class="menu_content_price">129元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/miwifilite!160x110.jpg">
                         <p class="menu_content_tit">大米路由器&nbsp;青春版</p>
                         <p class="menu_content_price">79元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/wifiExtension!160x110.jpg">
                         <p class="menu_content_tit">大米WIFI放大器</p>
                         <p class="menu_content_price">39元</p>
                     </div>
                 </li>
                 <li id="yingjian">
                     <div class="menu_content">
                         <img src="http://c1.mifile.cn/f/i/15/goods/nav/scale!160x110.jpg">
                         <p class="menu_content_tit">体重称</p>
                         <p class="menu_content_price">99元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/xiaoyi!160x110.jpg">
                         <p class="menu_content_tit">摄像头</p>
                         <p class="menu_content_price">129元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/yicamera!160x110.jpg">
                         <p class="menu_content_tit">运动相机</p>
                         <p class="menu_content_price">399元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/ihealth!160x110.jpg">
                         <p class="menu_content_tit">血压计</p>
                         <p class="menu_content_price">199元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/chazuo!160x110.jpg">
                         <p class="menu_content_tit">智能插座</p>
                         <p class="menu_content_price">59元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="public/img/smart!160x110.jpg">
                         <p class="menu_content_tit">查看全部
                             <br>智能硬件</p>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
     <div id="big_banner_wrap">
         <ul id="banner_menu_wrap" style="padding-top:20px;">
             
             <!-- 在导航栏，查询出顶级分类 -->
             <?php
             	$sql = 'select * from category where pid = 0';
             	//echo $sql;
             	$topcate = query($sql);

             ?>
             <!--开始-->
             	<?php foreach($topcate as $k => $v):?>
             	<li class="" img="" style="background: none;">
                <a href="./datail.php?id=<?php echo $v['id'];?>"><?php echo $v['name'];?></a>
                <a class="banner_menu_i">&gt;</a>

             
                 <div class="banner_menu_content" style="width: 600px; top: -20px; border: 0px solid rgb(240, 240, 240); display: none;">
                     
                    <?php 
                        $sql = "select * from category where path like '0,%'";
                        echo $sql;



                    ?>
                     <ul class="banner_menu_content_ul">
                         <li>
                             <a><img src="public/img/minote.jpg"></a><a>大米NOTE</a><span>选购</span>


                        </li>
                       
                     </ul>
                     
                 </div>
             </li>
             <?php endforeach;?>
             <!--结束-->
             
             
             
             
             
             
             
             
         </ul>
         <div id="big_banner_pic_wrap">
             <ul id="big_banner_pic" style="opacity: 1; left: -3678px;">
                 <li><img src="public/img/T1hiDvBvVv1RXrhCrK.jpg"></li>
                 <li><img src="public/img/T1jrxjB_VT1RXrhCrK.jpg"></li>
                 <li><img src="public/img/T1oTJjBKKT1RXrhCrK.jpg"></li>
                 <li><img src="public/img/T1RICjB7DT1RXrhCrK.jpg"></li>
                 <li><img src="public/img/T1vWdTBKDv1RXrhCrK.jpg"></li>
             </ul>
         </div>
         <div id="big_banner_change_wrap">
             <div id="big_banner_change_prev" style="display: none;"> &lt;</div>
             <div id="big_banner_change_next" style="display: none;">&gt;</div>
         </div>
     </div>
     <div id="head_other_wrap">
         <div id="head_other">
             <ul>
                 <li>
                     <div id="div1">
                         <p>START</p>
                         <p>开房购买</p>
                     </div>
                 </li>
                 <li>
                     <div id="div2">
                         <p>GROUND</p>
                         <p>企业团购</p>
                     </div>
                 </li>
                 <li>
                     <div id="div3">
                         <p>RETROFIT</p>
                         <p>官方产品</p>
                     </div>
                 </li>
                 <li>
                     <div id="div4">
                         <p>CHANNEL</p>
                         <p>F码通道</p>
                     </div>
                 </li>
                 <li>
                     <div id="div5">
                         <p>RECHARGE</p>
                         <p>话费充值</p>
                     </div>
                 </li>
                 <li>
                     <div id="div6">
                         <p>SECURITY</p>
                         <p>防伪检查</p>
                     </div>
                 </li>
             </ul>
         </div>
         <div class="head_other_ad"><img src="public/img/T184E_BQWT1RXrhCrK.jpg"></div>
         <div class="head_other_ad"><img src="public/img/T1yvd_BQDT1RXrhCrK.jpg"></div>
         <div class="head_other_ad"><img src="public/img/T1mahQBmKT1RXrhCrK.jpg"></div>
    </div>
     <div id="head_hot_goods_wrap">
         <div id="head_hot_goods_title">
             <span class="title_span">大米明星单品</span>
             <div id="head_hot_goods_change">
                 <span id="head_hot_goods_prave" style="color: rgb(190, 190, 190);">&lt;</span>
                 <span id="head_hot_goods_next" style="color: rgb(190, 190, 190);">&gt;</span>
             </div>
         </div>
        
         <!--查询商品商品信息进行遍历-->

         <div id="head_hot_goods_content">
  		
            			
             <ul style="left: 0px;">
             <!--查询商品信息，进行遍历-->
             <?php
             	//查询数据遍历
             $sql = 'select * from commodity';
             $commoditylist = query($sql);


             ;?>
             	<!--商品开头-->
             	<?php foreach($commoditylist as $k => $v):?>
          	     <li style="border-color: rgb(255, 118, 0);">
                     <a href="./products_content.php?id=<?php echo $v['id']?>"><img src="../admin/public/uploads/<?php echo $v['picture'];?>"></a>
                     <a href="./products_content.php?id=<?php echo $v['id']?>"><?php echo $v['name'];?></a>
                     <p><?php echo $v['price'];?></p>
                     <p><?php echo $v['describe'];?></p>
                 </li>
			                 
			 <?php endforeach;?>
              <!--结束-->


             </ul>
			
			
		
        
		
         </div>
     	

     </div>

	<div style="clear:both"></div>
     <div id="main_show_box">
         <div id="floor_1">
              <div id="floor_head">
                  <span class="title_span">新品</span>
              </div>
         </div>
         <div class="floor_goods_wrap">
             <ul>
                 <li class="floor_goods_wrap_li">
                     <a><img src="public/img/T1IhLjBC_T1RXrhCrK.jpg"></a>
                 </li>
                 <!--新品-->
                 <?php 
                 $sql = 'select * from commodity where status = 1';
                 $status = query($sql);


                 ?>
                 <!--开始遍历-->
                 <?php foreach($status as $k => $v):?>
                 <li class="floor_goods_wrap_li" style="top: 0px; box-shadow: none;">
                     <a href="./products_content.php?id=<?php echo $v['id']?>" class="floor_goods_img"><img src="../admin/public/uploads/<?php echo $v['picture'];?>"></a>
                     <a href="./products_content.php?id=<?php echo $v['id']?>" class="floor_goods_tit"><?php echo $v['name'];?></a>
                     <p class="floor_goods_txt"><?php echo $v['describe'];?></p>
                     <p class="floor_goods_price"><?php echo $v['price'];?>元</p>
                 </li>
               	<?php endforeach;?>
                <!--结束-->
               
                 
                
                 
                
                 <div style="clear:both;"></div>
             </ul>
         </div>
     </div>
     <div id="foot_box">
         <div id="foot_wrap">
             <div class="foot_top">
                 <ul>
                     <li>1小时快修服务</li>
                     <li class="font_top_i">|</li>
                     <li>7天无理由退货</li>
                     <li class="font_top_i">|</li>
                     <li>15天免费换货</li>
                     <li class="font_top_i">|</li>
                     <li>满150元包邮</li>
                     <li class="font_top_i">|</li>
                     <li>520余家售后网点</li>
                 </ul>
             </div>
             <div class="foot_bottom">
                 <div class="foot_bottom_l">
                     <dl>
                         <dt>帮助中心</dt>
                         <dd>购物指南</dd>
                         <dd>支付方式</dd>
                         <dd>配送方式</dd>
                     </dl>
                     <dl>
                         <dt>服务支持</dt>
                         <dd>售后政策</dd>
                         <dd>自助服务</dd>
                         <dd>相关下载</dd>
                     </dl>
                     <dl>
                         <dt>大米之家</dt>
                         <dd>大米之家</dd>
                         <dd>服务网点</dd>
                         <dd>预约亲临到店服务</dd>
                     </dl>
                     <dl>
                         <dt>关注我们</dt>
                         <dd>新浪微博</dd>
                         <dd>大米部落</dd>
                         <dd>官方微信</dd>
                     </dl>
                 </div>
                 <div class="foot_bottom_r">
                     <a>400-100-5678</a>
                     <a>周一至周日 8:00-18:00</a>
                     <a>（仅收市话费）</a>
                     <span> 24小时在线客服</span>
                 </div>
             </div>
         </div>
         <div class="foot_note_box">
             <div class="foot_note_wrap">
                 <div class="foot_note_con">
                     <span class="foot_logo"><img src="public/img/mi-logo.png" width="38px" height="38px"></span>
						<span class="foot_note_txt">
							<a>大米网</a><h>|</h><a>MIUI</a><h>|</h><a>米聊</a><h>|</h><a>多看书城</a><h>|</h><a>大米路由器</a><h>|</h><a>大米后院</a><h>|</h><a>大米天猫店</a><h>|</h><a>大米淘宝直营店</a><h>|</h><a>大米网盟</a><h>|</h><a>问题反馈</a><h>|</h><a>Select Region</a>
						    <a> 5555555号</a>
						</span>
                 </div>

             </div>
         </div>
     </div>

<script type="text/javascript" src="public/js/xiaomi.js"></script>


</body></html>