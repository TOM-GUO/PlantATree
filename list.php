<?php
session_start();
$list = [];
$fruit = [
    ['img' => 'https://gd1.alicdn.com/imgextra/i1/4128668879/O1CN012FSd7lya5wmvfz4_!!4128668879.jpg_400x400.jpg_.webp', 'name' => 'Lemon tree', 'age' => 6 , 'price' => 20],
    ['img' => 'https://gd4.alicdn.com/imgextra/i4/2930034893/TB2YLePtpmWBuNjSspdXXbugXXa_!!2930034893.jpg', 'name' => 'Orange tree', 'age' => 6, 'price' => 15],
    ['img' => 'https://gd3.alicdn.com/imgextra/i2/4128668879/O1CN012FSd82N2macNMql_!!4128668879.jpg', 'name' => 'Peach tree', 'age' => 10, 'price' => 28],
];
$hedge = [
    ['img' => 'https://gd3.alicdn.com/imgextra/i3/298849820/T22lTXXXxbXXXXXXXX_!!298849820.jpg', 'name' => 'Pink Rose', 'age' => 20, 'price' => 35],
    ['img' => 'https://www.jacksonandperkins.com/images/xxl/30513.jpg', 'name' => 'Red Rose', 'age' => 20, 'price' => 40],
    ['img' => 'https://img.alicdn.com/imgextra/i3/3511767916/TB2yF93uk7mBKNjSZFyXXbydFXa_!!3511767916-2-item_pic.png_430x430q90.jpg', 'name' => 'Red Leaf', 'age' => 12, 'price' => 10],
];
$evergreen = [
    ['img' => 'https://gd4.alicdn.com/imgextra/i1/1907794113/TB2WMjWaYaI.eBjSszdXXaB6XXa_!!1907794113.jpg', 'name' => 'Aspidistra elatior Blume', 'age' => 15, 'price' => 200],
    ['img' => 'https://img.alicdn.com/imgextra/i3/3447494439/TB2IYh4EHSYBuNjSspfXXcZCpXa_!!3447494439-0-item_pic.jpg_430x430q90.jpg', 'name' => 'Chlorophytum comosum', 'age' => 5, 'price' => 60],
    ['img' => 'https://img.alicdn.com/imgextra/i4/3481351611/TB1TE4BcwjN8KJjSZFgXXbjbVXa_!!0-item_pic.jpg_430x430q90.jpg', 'name' => 'Mini bamboo', 'age' => 10, 'price' => 30],
]; 
$nznative = [
    ['img' => 'https://gd1.alicdn.com/imgextra/i1/27459040/O1CN012GeMtal6OVSYdQp_!!27459040.jpg', 'name' => 'Wild flower', 'age' => 5, 'price' => 80],
    ['img' => 'https://gd3.alicdn.com/imgextra/i1/27459040/O1CN012GeMtEB3fnL2rAz_!!27459040.jpg', 'name' => 'Native plant', 'age' => 6, 'price' => 50],
    ['img' => 'https://gd2.alicdn.com/imgextra/i4/104365526/TB2ld2xlFXXXXaPXXXXXXXXXXXX_!!104365526.jpg', 'name' => 'Flax plants', 'age' => 12, 'price' => 120],
]; 
$gumtree = [
    ['img' => 'https://gd4.alicdn.com/imgextra/i1/0/TB1NbOrI4SYBuNjSspjXXX73VXa_!!0-item_pic.jpg', 'name' => 'Japanese gum tree', 'age' => 2, 'price' => 60],
    ['img' => 'https://gd1.alicdn.com/imgextra/i1/2266202737/TB257Qje9YH8KJjSspdXXcRgVXa_!!2266202737.jpg', 'name' => 'Chinese gum tree', 'age' => 2, 'price' => 5],
    ['img' => 'https://gd4.alicdn.com/imgextra/i4/TB14gYueTtYBeNjy1XdYXFXyVXa_M2.SS2', 'name' => 'European gum tree', 'age' => 2, 'price' => 20],
]; 
$palmtree = [
    ['img' => 'https://gd1.alicdn.com/imgextra/i1/1637896835/TB2s9UJAgaTBuNjSszfXXXgfpXa_!!1637896835.jpg', 'name' => 'Desktop mini palm tree', 'age' => 2, 'price' => 30],
    ['img' => 'https://gd4.alicdn.com/imgextra/i2/0/TB1UzlwlY9YBuNjy0FgXXcxcXXa_!!0-item_pic.jpg', 'name' => 'Coconut tree', 'age' => 6, 'price' => 60],
    ['img' => 'https://gd4.alicdn.com/imgextra/i2/0/TB1uxm0PpXXXXXZaXXXXXXXXXXX_!!0-item_pic.jpg', 'name' => 'Jiana palm tree', 'age' => 90, 'price' => 600],
]; 
$hardwood = [
    ['img' => 'https://gd4.alicdn.com/imgextra/i4/2014019802/TB2PJ86r98YBeNkSnb4XXaevFXa_!!2014019802.jpg', 'name' => 'Ficus macrocarpa', 'age' => 3, 'price' => 120],
    ['img' => 'https://img.alicdn.com/imgextra/i3/1113401174/TB1FR7QsGmWBuNjy1XaXXXCbXXa_!!0-item_pic.jpg_430x430q90.jpg', 'name' => 'Ficus virens', 'age' => 3, 'price' => 120],
    ['img' => 'https://gd1.alicdn.com/imgextra/i1/2560404299/O1CN011hcz8uuNnQKZIcg_!!2560404299.jpg', 'name' => 'Cedar', 'age' => 12, 'price' => 350],
];
if (isset($_GET['key'])) {
    switch ($_GET['key']) {
        case 'fruit tree':
            $list = $fruit;
            break;
        case 'hedge':
            $list = $hedge;
            break;
        case 'evergreen':
            $list = $evergreen;
            break;
        case 'NZ native':
            $list = $nznative;
            break;
        case 'gum tree':
            $list = $gumtree;
            break;
        case 'palm tree':
            $list = $palmtree;
            break;
        case 'hardwood':
            $list = $hardwood;
            break;
        default:
            $list = array_merge($fruit, $hedge,$evergreen, $nznative, $gumtree, $palmtree, $hardwood);
            break;
    }
}
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
    <meta name="keywords" content="PlanATree" />
    <meta name="description" content="PlanATree" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/layui.css" media="all" />
    <script src="js/jquery.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/tinynav.min.js"></script>
    <script src="js/jquery.ui.totop.min.js"></script>
    <script src="js/jquery.fancybox.js?v=2.0.6"></script>
    <script src="js/jquery.fancybox-media.js?v=1.0.3"></script>
    <script src="js/jquery.twitter.js"></script>
    <script src="js/theme-functions.js"></script>
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
                <li><a href="reg.php">register</a></li>
                <?php       
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
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
               <?php foreach ($list as $key => $value) { ?>
                <li class="ll1">
                    <span class="link-zoom">
                        <a class="fancybox" href="#" data-fancybox-group="gallery" title="a">
                            <img src="<?php echo $value['img'];?>" alt="" class="fade" width="300"/>
                        </a>
                    </span>
                    <div style="margin-bottom: 10px">name: <?php echo $value['name']; ?></div>
                    <div style="margin-bottom: 10px">age: <?php echo $value['age']; ?></div>
                    <div>price: <span class="price"><?php echo $value['price']; ?></span></div>
                    <div class="layui-inline" style="float: right;margin-right: 30px">
						<div class="layui-input-inline minus" style="margin-right: 5px;font-size: 26px;cursor: pointer;">-</div>
						<div class="layui-input-inline"><input value="0" style="width: 20px; height: 20px;text-align: center;" readonly class="num" /></div>
						<div class="layui-input-inline plus" style="margin-left: 5px;font-size: 20px;cursor: pointer;">+</div>
					</div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>
<div style="position: fixed;right: 0;bottom: 0">
    <button class="layui-btn" id="checkout">checkout</button>
</div>
<script type="text/javascript" src="layui.js"></script>
<script>
   layui.use(['form', 'layer'], function () {
        var form = layui.form,$ = layui.jquery;
        // // 登录提交监听
        // form.on('submit(sub)', function (data) {
        //     var loading = layer.load(1, {shade: [0.1, '#fff']});
        //     $.post("register.php",data.field,function(res){
        //         layer.close(loading);
        //         res = JSON.parse(res);
        //         console.log(res)
        //         if(res.code > 0){
        //             layer.msg(res.msg,{time:1000,icon:1},function(){
        //                 location.href = "login.php";
        //             });
        //         }else{
        //             layer.msg(res.msg,{time:1000,icon:2});
        //         }
        //     });
        // })
        $('.plus').on('click', function(){
            var num = $(this).siblings().find('.num').val();
            $(this).siblings().find('.num').val(parseInt(num)+1)
        })
        $('.minus').on('click', function(){
            var num = $(this).siblings().find('.num').val();
            if (num > 0) {
                $(this).siblings().find('.num').val(parseInt(num)-1)
            }
        })

        $('#checkout').on('click', function(){
            var loading = layer.load(1, {shade: [0.1, '#fff']});
            var data = {}
            var price = 0,count = 0
            $('.num').each(function(i,o){
                var uprice = 0
                var num = parseInt($(o).val());
                if (num > 0) {
                    uprice = $(o).parents('.layui-inline').siblings().find('.price').text();
                    price += parseInt(uprice) * num
                    count += num
                }
            })
            data = {
                price : price,
                num: count
            }
            $.post("checkout.php",data,function(res){
                layer.close(loading);
                res = JSON.parse(res);
                if(res.code > 0){
                    layer.msg(res.msg,{time:1000,icon:1},function(){
                        location.href = "checkout.php";
                    });
                }else{
                    layer.msg(res.msg,{time:1000,icon:2});
                }
            });
        })
    })
</script>
</body>
</html>