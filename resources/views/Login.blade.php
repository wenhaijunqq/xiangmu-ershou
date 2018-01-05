<!DOCTYPE HTML>
<html>

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
				</form>
				<div class="forgot">
					<a href="#">忘记密码</a>
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
