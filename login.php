<?php 
session_start();
	if ($_POST) {
		$user = $_SESSION['user'];

		$_SESSION['login'] = $_POST;
		echo json_encode(['code' => 1, 'msg' => 'Successful']);
		exit();
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
    <!-- <script src="js/theme-functions.js"></script> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<div class="main layui-clear" style="width: 600px;margin: 100px auto;border: 1px solid #ccc;padding: 50px;">
    <div class="fly-panel fly-panel-user" pad20>
        <div class="layui-tab layui-tab-brief">
            <ul class="layui-tab-title">
                <li class="layui-this">Login</li>
                <li><a href="register.php">Register</a></li>
            </ul>
            <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
                <div class="layui-tab-item layui-show">
                    <div class="layui-form layui-form-pane">
                        <form method="post">
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">Email</label>
                                <div class="layui-input-inline">
                                    <input type="text" id="username" name="username" required lay-verify="required" placeholder="please enter the email" autocomplete="off" class="layui-input" style="width: 300px">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label for="L_pass" class="layui-form-label">Password</label>
                                <div class="layui-input-inline">
                                    <input type="password" id="L_pass" name="password" required lay-verify="required" placeholder="please enter the password" autocomplete="off" class="layui-input" style="width: 300px">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <button type="button" class="layui-btn" lay-filter="sub" lay-submit>Comfirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="layui.js"></script>
<script>
    layui.use(['form', 'layer'], function () {
        var form = layui.form,$ = layui.jquery;
        // 登录提交监听
        form.on('submit(sub)', function (data) {
            var loading = layer.load(1, {shade: [0.1, '#fff']});
            $.post("login.php",data.field,function(res){
                layer.close(loading);
                res = JSON.parse(res);
                if(res.code > 0){
                    layer.msg(res.msg,{time:1000,icon:1},function(){
                        location.href = "index.php";
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
