<!DOCTYPE HTML>
<html>

	<head>
		<title>用户登录</title>
		<meta charset="utf-8" />
		<link rel='stylesheet' type='text/css' href="{{ url('css/zhang_login.css') }}">
		<script type="text/javascript" src="{{asset('layer/layer.js')}}"></script>
	    <script type="text/javascript" src="{{asset('shops/login/js/jquery-1.12.3.min.js')}}"></script>
	</head>

	<body>
		<div class="login">
	
			<div class="login-top">
				<h1>用户登录</h1>
				<form>
					{{ csrf_field()}}
					<input type="text" name="phone" id="phone" value="请输入手机号码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入手机号码';}">
					<input id= "text" type="text" value="请输入手机验证码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入手机验证码';}">
					<input type="button" id="dyMobileButton" value="获取验证码">
				</form>
				<form  method="post" action="{{ url('home/dotelregister') }}">
				<div class="forgot">
		
					<input type="submit" value="登 录">
				</div>
				</form>
				
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
	<script type="text/javascript">

		//检查电话号码
		$('input[name=phone]').blur(function(){
		    var phone = $(this).val();
		    $.post('home/phone',{'phone':phone,'_token':'{{csrf_token()}}'},function(data){
		          switch(data){
		            case 'no':
		                layer.tips('电话号码格式不正确', '#phone');
		                $('#btn').attr('disabled','disabled');
		                break;
		            case 'not':
		                layer.tips('电话号码输入错误', '#phone');
		                $('#btn').attr('disabled','disabled');
		                break;
		            case 'ok':
		                $('#btn').removeAttr('disabled');
		                break;
		        }
		    });
		});


		//发送验证码
		var time = 0;
		$('#btn').click(function(){
		    if(time == 0){
		        var phone = $('input[name=phone]').val();
		        $.post('home/code',{'phone':phone,'_token':'{{csrf_token()}}'},function(data){
		            alert(data);
		        });
		        $('#btn').attr('disabled','disabled');
		    }
		    if (time == 0) {
		            time = 10; 
		            var index = setInterval(function(){
		                time--;
		                if (time == 0) {
		                    clearInterval(index);
		                    time = 0;
		                    $('#btn').removeAttr('disabled');
		                }
		            }, 1000);
		        }
		});

		//执行登录
		$('#dynamicLogon').click(function(){
		    var code = $('#dynamicPWD').val();
		    var phone = $('input[name=phone]').val();
		    $.post('/shop/dologin',{'code':code,'phone':phone,'_token':'{{csrf_token()}}'},function(data){
		        if(data == 0){
		            layer.tips('验证码不正确', '#dynamicPWD');
		        }else{
		            location.href='/shop/index';
		        }
		    });
		});
	</script>
</html>


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