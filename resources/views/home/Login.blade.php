<!DOCTYPE HTML>
<html>
	<style type="text/css">
	.yzm{
		background: #22AC38;
		color: #FFF;
		font-size: 24px;
		padding: 8px 7px;
		width: 32%;
		height:30%
		font-weight: 400;
		border-radius: 6px;
		-webkit-border-radius: 19px;
		-moz-border-radius: 6px;
		-o-border-radius: 6px;
		outline: none;
		border: none;

	}

	</style>
	<head>
		<title>用户登陆</title>
		<meta charset="utf-8" />
		<link rel='stylesheet' type='text/css' href="css/zhang_login.css">
	</head>

	<body>
		<div class="login">
			<h2>用户登录</h2>
			<div class="login-top">
				<h1>用户登录</h1>
				<form>
					<input type="text" value="用户名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}">
					<input type="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
					<input type="text" value="请输入手机号" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入手机号';}">
					<input type="text" value="请输入验证码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入验证码';}" style="width:200px">
					<input type="button" value="验证码" class="yzm" style="">
				</form>
				<div class="forgot">
					<a href="#"><font style="color:#fff">忘记密码</font></a>
					<input type="submit" value="登陆">
				</div>
			</div>
			<div class="login-bottom">
				<h3>新用户 &nbsp;<a href="/IndexRegister">注册</a></h3>
			</div>
		</div>
		<div class="copyright">
			<p>瓜子二手车登陆 2017.10.25
				<a target="_blank" href="#"></a>
			</p>
		</div>

	</body>

</html>
