
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>慕课登录注册页</title>
	<link rel="stylesheet" type="text/css" href="style/register-login.css">
</head>
<body>
<div id="box"></div>
<div class="cent-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">教育网</h1>
		<h2 class="sub-title">学无止境 - 精彩</h2>
	</div>

	<div class="cont-main clearfix">
		<div class="index-tab">
			<div class="index-slide-nav">
				<a href="/login" class="active">登录</a>
				<a href="/register">注册</a>
				<div class="slide-bar"></div>				
			</div>
		</div>

		<div class="login form">
			<div class="group">
				<form  name="myform" novalidate action="login/login_pro" method="post" >
				<div class="group-ipt email">
					<input type="text" name="user_name" id="xname" required="" placeholder="用户名"/>
					<span class="span_name"></span>
				</div>
				<div class="group-ipt password">
					<input type="password"  id="xpassword" required="" placeholder="密码需6-12位数字、字母" style="display:none" />
					<input type="password" name="user_password" id="xpassword1" required="" placeholder="密码需6-12位数字、字母" />
					<span class="span_pwd"></span>
				</div>
				{{--<div class="group-ipt verify">--}}
					{{--<input type="text" name="verify" id="verify" class="ipt" placeholder="输入验证码" required>--}}
					{{--<img src="http://zrong.me/home/index/imgcode?id=" class="imgcode">--}}
				{{--</div>--}}

					<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
					<input type="submit" class="login-btn register-btn" id="button" value="登录"/>
				</form>
			</div>
		</div>

		{{--<div class="button">--}}
			{{--<button type="submit" class="login-btn register-btn" id="button">登录</button>--}}
		{{--</div>--}}

		<div class="remember clearfix">
			<label class="remember-me"><span class="icon"><span class="zt"></span></span><input type="checkbox" name="remember-me" id="remember-me" class="remember-mecheck" checked>记住我</label>
			<label class="forgot-password">
				<a href="#">忘记密码？</a>
			</label>
		</div>
		<div class="side-bar">
			<h3>第三方账号登录</h3>
			<a href="http://shequ.jb51.net/account/openid/weibo/bind/return_url-aHR0cDovL3NoZXF1LmpiNTEubmV0Lw==" class="btn btn-block btn-weibo"><i class="icon icon-weibo"></i> 微博登录</a>

			<a href="http://shequ.jb51.net/account/openid/qq/bind/return_url-aHR0cDovL3NoZXF1LmpiNTEubmV0Lw==" class="btn btn-block btn-qq"><i class="icon icon-qq"></i> QQ 登录</a>
		</div>
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
	});
	$("#remember-me").click(function(){
		var n = document.getElementById("remember-me").checked;
		if(n){
			$(".zt").show();
		}else{
			$(".zt").hide();
		}
	});
</script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>
	//定义全局变量
	var flag_name = 0;
	var flag_pwd = 0;
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
</script>
{{--<script>--}}
{{--$('.imgc').click(function () {--}}
{{--$(this).attr('src','/login/create?random='+ Math.random());--}}
{{--})--}}
{{--</script>--}}

</body>
</html>