<!DOCTYPE HTML>
<html>

	<head>
		<title>用户登陆</title>
		<meta charset="utf-8" />
		<link rel='stylesheet' type='text/css' href="css/zhang_login.css">
	</head>

	<body>
		<div class="login">
	
			<div class="login-top">
				<h1>用户登录</h1>
				<form>
					<input type="text" value="请输入手机号码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入手机号码';}">
					<input id= "text" type="text" value="请输入手机验证码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入手机验证码';}">
					<input type="submit" value="获取验证码">
				</form>
				<div class="forgot">
		
					<input type="submit" value="登 录">
				</div>
			</div>
			<div class="login-bottom">
				<!-- <h3>新用户 &nbsp;<a href="/IndexRegister">注册</a></h3> -->
			</div>
		</div>
		<div class="copyright">
			<p>瓜子二手车登陆
				<a target="_blank" href="#"></a>
			</p>
		</div>
	</body>
</html>
<script>
	

</script>

<!-- 
<?php
    // use Flc\Dysms\Client;
    // use Flc\Dysms\Request\SendSms;

    // $config = [
    //     'accessKeyId'    => 'LTAIJ33Rm3OWNv7b',
    //     'accessKeySecret' => 'ViXzSAUkYRLQC73lCvyVT6waz8FzbS',
    // ];

    // $client  = new Client($config);
    // $sendSms = new SendSms;
    // $sendSms->setPhoneNumbers('17610330283');
    // $sendSms->setSignName('飞天科技');
    // $sendSms->setTemplateCode('SMS_120365798');
    // $sendSms->setTemplateParam(['code' => rand(100000, 999999)]);
    // $sendSms->setOutId('demo');

    // print_r($client->execute($sendSms));

 ?> -->