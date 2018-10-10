<?php
session_start();

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="zh-cn"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="zh-cn"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="zh-cn"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>PlantATree</title>
    <meta name="keywords" content="PlantATree" />
    <meta name="description" content="PlantATree" />
    
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/layui.css" media="all" />
   

    <!-- ////////////////////////////////// -->
    <!-- //      Javascript Files        // -->
    <!-- ////////////////////////////////// -->
    <script src="js/jquery.min.js"></script>
    
    <script src="js/theme-functions.js"></script>
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<div class="user">
    <div id="top-social">
        <div class="social-panel">
            <ul>
                <?php 
                    if ($_SESSION['login']) {
                ?>
                <li><a><?php echo $_SESSION['login']['username'];?></a></li>
                <li>|</li>
                <li><a href="logout.php">logout</a></li>
                <?php       
                    } else {
                ?>
                <li><a href="login.php">login</a></li>
                <li>|</li>
                <li><a href="register.php">register</a></li>
                <?php       
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div style="margin-top: 50px;text-align: center;">
    <form class="layui-form" action="list.php" >
       <div class="layui-inline">
                <input class="layui-input" name="key" id="key" placeholder="please enter the key words" style="width:600px">
            </div>
            <button class="layui-btn" id="search" data-type="reload">search</button>
    </form>
</div>
<section id="content-wrapper">
    <div class="row">
        <div class="twelve columns">
            
            <div class="row">
                <div class="twelve columns">
                    <div class="divider"></div>
                </div>
            </div>
            

            <ul class="pf-box-3col">
               
                <li class="ll1">
                    <span class="link-zoom">
                        <a class="fancybox" href="#" data-fancybox-group="gallery" title="a">
                            <img src="http://www.edenvalenursery.com/wp-content/uploads/2018/10/EDENVALE_FALLSALE_AD-10.18.jpg" alt="" class="fade" width="300"/>
                        </a>
                    </span>
                    <h5>1</h5>
                </li>
                <li class="ll1">
                    <span class="link-zoom">
                        <a class="fancybox" href="#" data-fancybox-group="gallery" title="a">
                            <img src="https://cdn1.vectorstock.com/i/1000x1000/20/45/summer-sale-banner-with-palm-trees-vector-17052045.jpg" alt="" class="fade" width="300"/>
                        </a>
                    </span>
                    <h5>2</h5>
                </li>
                <li class="ll1">
                    <span class="link-zoom">
                        <a class="fancybox" href="#" data-fancybox-group="gallery" title="a">
                            <img src="http://desirabletrees.com/images/little_book2.jpg" alt="" class="fade" width="300"/>
                        </a>
                    </span>
                    <h5>3</h5>
                    
                </li>
                <li class="ll1">
                    <span class="link-zoom">
                        <a class="fancybox" href="#" data-fancybox-group="gallery" title="a">
                            <img src="http://mingd.me/wp-content/uploads/2018/08/xmas-tree-sale-beacon-house-tree-sale-christmas-tree-sale-argos.jpg" alt="" class="fade" width="300" />
                        </a>
                    </span>
                    <h5>4</h5>
                </li>
                <li class="ll1">
                    <span class="link-zoom">
                        <a class="fancybox" href="#" data-fancybox-group="gallery" title="a">
                            <img src="" alt="" class="fade" width="300"/>
                        </a>
                    </span>
                    
                    
                </li>
            </ul>
        </div>
    </div>
</section>
<div style="text-align: right;">
    <!-- <a class="layui-btn" id="checkout" href="checkout.php">checkout</a> -->
</div>
<script type="text/javascript" src="layui.js"></script>
</body>
</html>