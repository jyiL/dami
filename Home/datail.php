<?php
    // 导入init
    require './init.php';







?>


<html><head>
<meta charset="utf-8">
<title>Index</title>
<link rel="stylesheet" type="text/css" href="./Public/css/css.css">
<link rel="stylesheet" type="text/css" href="./Public/css/liebiao.css">

</head>
<body>
<!--header-->
<?php require './header.php';?>
<!--content-->
<div class="page-main">
             <?php
                    $id = $_GET['id'];
                    //echo $id;
                    $sql = 'select * from category where id=' . $id;
                    $result = query($sql)[0];


             ?>

    <div class="container breadcrumbs">
        <a href="#">首页</a>
        <span>/</span><?php echo $result['name'];?>
    </div>
    <div class="container channel-nav">
        <ul>
            



            <?php 
                $sql = "select * from commodity limit 6";
                $result = query($sql);
               // echo '<pre>';
                //print_r($result);
            
            ?>
            

            <?php foreach($result as $k => $v):?>
            <li><a href="./products_content.php?id=<?php echo $v['id'];?>"><?php echo $v['name'];?></a></li>
            <?php endforeach;?>
            











            <li><a href="#">查看全部&gt;</a></li>
        










        </ul>
    </div>
    <div class="container channel-focus"><a><img src="./Public/img/channel-focus.jpg"></a></div>  
    <div class="container channel-list">
        <ul>
            <!--根据传递过来的id遍历商品-->
            <?php
                $id = $_GET['id'];
                //echo $id;
                $sql = 'select * from commodity where cateid = ' . $id;
                //echo $sql;

                $result = query($sql);
               // echo '<pre>';
                //print_r($result);
            ?>

            <?php foreach($result as $k => $v):?>
            <li class="span10">
                <div class="channel-list-img"><a><img src="../admin/public/uploads/<?php echo $v['picture'];?>"></a></div>
                <div class="channel-list-con">
                    <dl class="channel-list-des">
                        <dt>
                            <?php echo $v['name'];?>
                            <b><?php echo $v['price']?></b>
                            <span>元</span>
                        </dt>
                        <dd><?php echo $v['describe']?></dd>
                    </dl>
                    <p class="channel-list-btn"><a class="buy-btn" href="#">立即购买</a></p>
                </div>
            </li>
            <?php endforeach;?>

    
        </ul>
    </div>
</div>


<!--footer-->

<?php 
    require './footer.php';

?>
</body></html>