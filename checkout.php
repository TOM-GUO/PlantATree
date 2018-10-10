<?php 
  session_start();
  if ($_POST) {
      $data = $_POST;
      $_SESSION['price'] = $data['price'];
      $_SESSION['count'] = $data['num'];
      echo json_encode(['code' => 1, 'msg' => 'Successful']);
      exit();
  }
  if (isset($_SESSION['price'])) {
      $price = $_SESSION['price'];
  } else {
      $price = 0;
  }
  if (isset($_SESSION['count'])) {
      $count = $_SESSION['count'];
  } else {
      $count = 0;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PlanATree</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/layui.css"  media="all">
</head>
<body>
 <div style="width: 600px;margin:150px auto;border: 1px solid #ccc">    
<form class="layui-form" action="" style="margin-top: 20px;">
 	<div class="layui-form-item">
 		<label class="layui-form-label" style="width:120px"></label>
	    <div class="layui-input-block">
	      <input class="type" type="radio" name="type" value="pickup" title="PickUp" checked="">
	      <input class="type" type="radio" name="type" value="delivery" title="Delivery">
	    </div>
  	</div>
  	<div class="layui-form-item delivery">
  		<div class="layui-inline">
		    <label class="layui-form-label" style="width:120px">Contact Number</label>
		    <div class="layui-input-inline" style="width:300px">
		      <input type="text" name="contact_mumber" autocomplete="off" placeholder="Contact Number" class="layui-input">
		    </div>
	    </div>
  	</div>
  	<div class="layui-form-item delivery">
  		<div class="layui-inline">
		    <label class="layui-form-label" style="width:120px">Address</label>
		    <div class="layui-input-inline" style="width:300px">
		      <input type="text" name="address" autocomplete="off" placeholder="Address" class="layui-input">
		    </div>
	    </div>
  	</div>
  	<div class="layui-form-item">
  		<div class="layui-inline">
		    <label class="layui-form-label" style="width:120px">Card Number</label>
		    <div class="layui-input-inline" style="width:300px">
		      <input type="text" name="card_mumber" lay-verify="number" autocomplete="off" placeholder="Card Number" class="layui-input">
		    </div>
	    </div>
  	</div>
  	<div class="layui-form-item">
		<div class="layui-inline">
	      	<label class="layui-form-label" style="width:120px">Card Expiry</label>
	      	<div class="layui-input-inline" style="width: 100px;">
		        <input type="text" name="min" placeholder="MM" autocomplete="off" class="layui-input" lay-verify="two">
	      	</div>
	      	<div class="layui-form-mid">/</div>
	      	<div class="layui-input-inline" style="width: 100px;">
		        <input type="text" name="max" placeholder="YY" autocomplete="off" class="layui-input" lay-verify="two">
	      	</div>
	    </div>
  	</div>
  	<div class="layui-form-item">
	  	<div class="layui-inline">
		    <label class="layui-form-label" style="width:120px">Card Name</label>
		    <div class="layui-input-inline" style="width:300px">
		      <input type="text" name="cardname" lay-verify="letter" placeholder="Card Name" autocomplete="off" class="layui-input">
		    </div>
	   </div>
  	</div>
  
	<div class="layui-form-item">
		<div class="layui-inline">
		    <label class="layui-form-label" style="width:120px">CSC</label>
		    <div class="layui-input-inline" style="width:300px">
		      <input type="text" name="csc" lay-verify="number|three" placeholder="CSC" autocomplete="off" class="layui-input">
		    </div>
	    </div>
  	</div>
 <hr>
  <div class="layui-form-item">
    <div class="layui-input-block" style="text-align: right;margin-right: 20px;">
    	   Amount: <span id="price"><?php echo $price;?></span>
      	<button class="layui-btn" lay-submit="" lay-filter="demo1" style="margin-left: 50px">Confirm</button>
    </div>
  </div>
</form>
</div>          
<script src="layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use(['form'], function(){
  var form = layui.form,layer = layui.layer,$ = layui.jquery
  $('.delivery').hide()
 	
  //自定义验证规则
  form.verify({
    two: function(value){
      if(value.length > 2){
        return 'No more than 2 numbers';
      }
    }
    ,three: function(value){
    	console.log(value.length)
      if(value.length > 3){
        return 'No more than 3 numbers';
      }
    }
    ,letter: [/[a-zA-Z]$/,'Invalid name']
  });
  var price = $('#price').text();
  var count = <?php echo $count; ?>;
  $('.layui-form-radio').on('click',function(){
      
  		var type = $(this).find('span').text();
  		if (type == 'Delivery') {
  			$('.delivery').show();
        if (count < 10) {
            $('#price').text(parseInt(price) + 80)
        } else {
            $('#price').text(price)
        }
  		} else {
  			$('.delivery').hide();
        $('#price').text(price)
  		}
  })
  //监听提交
  form.on('submit(demo1)', function(data){
    layer.alert('Successful', {
      closeBtn: 0
      ,title: 'Confirm'
      ,yes:function(){
         location.href = "list.php?key="
      }
    })
    return false;
  });

  
});
</script>

</body>
</html>