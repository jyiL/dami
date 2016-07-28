<?php

	//开启回话跟踪
	session_start();

	//判断是否登陆
	if(empty($_SESSION['result'])){

		header('location:./login.php');
		exit;
	}


	$grade = array('超级管理员','管理员');





?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bootstrap后台模板</title>

<link rel="stylesheet" href="./public/css/index.css" type="text/css" media="screen">

<script type="text/javascript" src="./public/js/jquery.js"></script>
<script type="text/javascript" src="./public/js/tendina.js"></script>
<script type="text/javascript" src="./public/js/common.js"></script>

</head>
<body>
    <!--顶部-->
    <div class="layout_top_header">
            <div style="float: left"><span style="font-size: 16px;line-height: 45px;padding-left: 20px;color: #8d8d8d">管理后台<?php date_default_timezone_set('PRC');echo date('Y-m-d H:i:s',time());?></div>
            <div id="ad_setting" class="ad_setting">
                <a class="ad_setting_a" href="javascript:;">
                    <i class="icon-user glyph-icon" style="font-size: 20px"></i>
                    <span><?php echo $grade[ $_SESSION['result']['grade'] ] . $_SESSION['result']['name'];?></span>
                    <i class="icon-chevron-down glyph-icon"></i>
                </a>
                <ul class="dropdown-menu-uu" style="display: none" id="ad_setting_ul">
                    <!--<li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-user glyph-icon"></i> 个人中心 </a> </li>
                    <li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-cog glyph-icon"></i> 设置 </a> </li>-->



                    <li class="ad_setting_ul_li"> <a href="./action.php?handler=logout"><i class="icon-signout glyph-icon"></i> <span class="font-bold">退出</span> </a> </li>
                </ul>
            </div>
    </div>
    <!--顶部结束-->
    <!--菜单-->
    <div class="layout_left_menu">
        <ul class="tendina" id="menu">
            
            <li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>会员管理</a>
                <ul style="display: none;">
                    <li><a href="./user/userlist.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>浏览会员</a></li>
                    <li><a href="./user/addlist.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加会员</a></li>
                </ul>
            </li>
            <li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>商品管理</a>
                <ul style="display: none;">
                    <li><a href="./commodity/commoditylist.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>浏览商品</a></li>
                    <li><a href="./commodity/addcommodity.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加商品</a></li>
                </ul>
            </li>
            <li class="childUlLi">
                <a href="#"> <i class="glyph-icon  icon-location-arrow"></i>分类管理</a>
                <ul style="display: none;">
                    <li><a href="./category/catelist.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>查看分类</a></li>
                    <li><a href="./category/addcategory.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加顶级分类</a></li>
                    
                </ul>
            </li>


            <li class="childUlLi">
                <a href="#"> <i class="glyph-icon  icon-location-arrow"></i>订单管理</a>
                <ul style="display: none;">
                    <li><a href="./order/orderlist.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>浏览订单</a></li>
                    
                    
                </ul>
            </li>
             <li class="childUlLi">
                <a href="#"> <i class="glyph-icon  icon-location-arrow"></i>友情链接</a>
                <ul style="display: none;">
                    <li><a href="./url/urllist.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>查看链接</a></li>
                    <li><a href="./url/addurl.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>添加链接</a></li>

                    
                </ul>
            </li>
        </ul>
    </div>
    <!--菜单-->
    <div id="layout_right_content" class="layout_right_content">
        
        <div class="mian_content">
            <div id="page_content">
                <iframe id="menuFrame" name="menuFrame" src="./index.jpg" style="overflow:visible;" scrolling="yes" frameborder="no" height="100%" width="100%"></iframe>
            </div>
        </div>
    </div>
    <div class="layout_footer">
        <p>Copyright © 2014 - XXXX科技</p>
    </div>
</body></html>