
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>慕课登录注册页面</title>
	<link rel="stylesheet" type="text/css" href="style/register-login.css">
</head>
<body>
<div id="box"></div>
<div class="cent-box register-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">教育网</h1>
		<h2 class="sub-title">学无止境 - 精彩</h2>
	</div>

	<div class="cont-main clearfix">
		<div class="index-tab">
			<div class="index-slide-nav">
				<a href="/login">登录</a>
				<a href="/register" class="active">注册</a>
				<div class="slide-bar slide-bar1"></div>				
			</div>
		</div>

		<div class="login form">
			<div class="group">
				<form name="myform" novalidate action="register/register" method="post" >
				<div class="group-ipt email">
					<input type="email" name="user_email" id="email" class="ipt" placeholder="邮箱地址" >
					<span class="span_email"></span>
				</div>
				<div class="group-ipt user">
					<input type="text" name="user_name" id="xname" required="" placeholder="用户名"/>
					<span class="span_name"></span>
				</div>
					<div class="group-ipt phone">
						<input type="text" name="user_phone"  id="xmobile" required="" maxlength="11" placeholder="手机号"  />
						<span class="span_phone"></span>
					</div>
				<div class="group-ipt password">
					<input type="password"  id="xpassword" required="" placeholder="密码需6-12位数字、字母" style="display:none" />
					<input type="password" name="user_password" id="xpassword1" required="" placeholder="密码需6-12位数字、字母" />
					<span class="span_pwd"></span>
				</div>
				<div  class="group-ipt code">
					<input type="text" name="validateCode" id="validateCode" required="" placeholder="请输入手机验证码"/>
					<button class="ver" type="button" id="code" >发送手机验证码</button>
					<span class="span_code"></span>
				</div>
					<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
				{{--<div class="group-ipt verify">--}}
					{{--<input type="text" name="verify" id="verify" class="ipt" placeholder="输入验证码" required>--}}
					{{--<img src="http://zrong.me/home/index/imgcode?id=" class="imgcode">--}}
				{{--</div>--}}
					<input type="submit" class="login-btn register-btn" id="button" value="注册"/>
					</form>
			</div>
		</div>

		{{--<div class="button">--}}
			{{--<button type="submit" class="login-btn register-btn" id="button">注册</button>--}}
		{{--</div>--}}
	</div>
</div>

<div class="footer">
	<p>学习网 - 学习网</p>
	<p>Designed By ZengRong & <a href="http://www.sucainiu.com">zrong.me</a> 2016</p>
</div>

<script src='js/particles.js' type="text/javascript"></script>
<script src='js/background.js' type="text/javascript"></script>
<script src='js/jquery.min.js' type="text/javascript"></script>
<script src='js/layer/layer.js' type="text/javascript"></script>
<script src='js/index.js' type="text/javascript"></script>
<script>
	$('.imgcode').hover(function(){
		layer.tips("看不清？点击更换", '.verify', {
        		time: 6000,
        		tips: [2, "#3c3c3c"]
    		})
	},function(){
		layer.closeAll('tips');
	}).click(function(){
		$(this).attr('src','http://zrong.me/home/index/imgcode?id=' + Math.random());
	})
//
//	$(".login-btn").click(function(){
//		var email = $("#email").val();
//		var password = $("#password").val();
//		var verify = $("#verify").val();
//		 $.ajax({
//		 url: '/home/register/register',
//		 type: 'post',
//		 jsonp: 'jsonpcallback',
//         jsonpCallback: "flightHandler",
//		 async: false,
//		 data: {
//		 	'email':email,
//		 	'password':password,
//		 	'verify':verify
//		 },
//		 success: function(data){
//		 	info = data.status;
//		 	layer.msg(info);
//		 }
//		 })
//
//	})
	$("#remember-me").click(function(){
		var n = document.getElementById("remember-me").checked;
		if(n){
			$(".zt").show();
		}else{
			$(".zt").hide();
		}
	})
</script>
<script src="js/jquery.js" type="text/javascript"></script>
<script>
	//获取验证码
	$("#code").click(function(){
		var n = 59;
		var timer = setInterval(function () {
			if (n < 0){
				$(".ver").css("background-color","red");
				$(".ver").html("<button style='background-color: red; border: none; color: Menu'>获取验证码<tton>");
				return clearInterval(timer);
			}
			$(".ver").html("<button  disabled='true' style='background-color:#999999; border: none; color: Menu'>重新获取("+n+")<tton>");
			n -= 1;
		}, 1e3);
		var phone=$("input[name='user_phone']").val();
		$.ajax({
			type: "GET",
			url:"/register/phone_code",
			data :{
				phone:phone
			},
			success: function(html){

			}
		})
	});
	//定义全局变量
	var flag_email=0;
	var flag_name = 0;
	var flag_phone = 0;
	var flag_pwd = 0;
	var flag_code = 0;
	var code = "";
	//验证邮箱格式
	$("#email").blur(function(){
		var user_email = $("#email").val();
		if(user_email == "") {
			$(".span_email").html("<font color='red'>邮箱不能为空!</font>");
		} else {
			//正则验证用户名为2-5位汉字
			var reg_email =/^[0-9a-z_]+@(([0-9a-z]+)[.]){1,2}[a-z]{2,3}$/;
			if(reg_email.test(user_email)) {
				$(".span_email").html("<font color='green'>√</font>");
				flag_name = 1;
			} else {
				$(".span_email").html("<font color='red'>邮箱格式不正确</font>");
			}
		}
	});
	//验证用户名
	$("#xname").blur(function(){
		var user_name = $("#xname").val();
		if(user_name == "") {
			$(".span_name").html("<font color='red'>用户名不能为空!</font>");
		} else {
			//正则验证用户名为2-5位汉字
			var reg_name = /^[\u4e00-\u9fa5]{2,5}$/;
			if(reg_name.test(user_name)) {
				$(".span_name").html("<font color='green'>√</font>");
				flag_name = 1;
			} else {
				$(".span_name").html("<font color='red'>用户名位2-5位汉字!</font>");
			}
		}
	});
	//验证手机号
	$("#xmobile").blur(function(){
		var user_phone = $(this).val();
		var reg_phone=/^1[3,5,8,7]\d{9}$/;
		if(user_phone == "") {
			$(".span_phone").html("<font color='red'>手机号不能为空!</font>");
		} else {
			if(reg_phone.test(user_phone)) {
				$.ajax({
					type: "get",
					url: "/register/check_phone",
					data: "user_phone="+user_phone,
					success: function(msg){
						if(msg == 0) {
							$(".span_phone").html("<font color='red'>该手机号已经被注册过了!</font>");
						} else {
							$(".span_phone").html("<font color='green'>√</font>");
							flag_phone = 1;
						}
					}
				});

			} else {
				$(".span_phone").html("<font color='red'>手机号格式不正确!</font>");
			}
		}
	});
	//验证验证码是否输入正确
	$("#validateCode").blur(function(){
		var user_code = $(this).val();
		if(user_code == "") {
			$(".span_code").html("<font color='red'>请输入验证码!</font>");
		} else {
			$(".span_code").html("<font color='green'>√</font>");
			flag_code = 1
		}
	});
	//验证密码
	$("#xpassword1").blur(function(){
		var user_password = $("#xpassword1").val();
		var reg_pwd =/^\w{6,12}$/;
		if (user_password == "") {
			$(".span_pwd").html("<font color='red'>密码不能为空!</font>");
		} else {
			if (reg_pwd.test(user_password)) {
				$(".span_pwd").html("<font color='green'>√</font>");
				flag_pwd = 1;
			} else {
				$(".span_pwd").html("<font color='red'>密码为6-12位组成!</font>");
			}
		}
	});
	//    //点击注册时的验证
//	$("#nextButton").click(function(){
//		if(flag_name==1 && flag_phone==1 && flag_pwd==1 &&flag_code==1) {
//			return true;
//		} else {
//			return false;
//		}
//	})
</script>
</body>
</html>