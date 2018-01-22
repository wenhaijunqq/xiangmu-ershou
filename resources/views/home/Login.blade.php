<!DOCTYPE HTML>
<html>

	<head>
		<title>用户登录</title>
		<meta charset="utf-8" />
		<link rel='stylesheet' type='text/css' href="{{ url('css/zhang_login.css') }}">
	</head>
	<script type="text/javascript" src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/layer/layer.js')}}"></script>
	<body>
		<div class="login">
	
			<div class="login-top">
				<h1>用户登录</h1>
				<form >
					{{ csrf_field()}}
					<input type="text" name="phone" id="phone" placeholder="请输入手机号码"><span class="box1"</span>
					<input id= "text" type="text" placeholder="请输入手机验证码" >
					<input type="button" id="btn" class="btn_mfyzm" id="dyMobileButton" value="获取验证码">
					<br><br>
					<div align="center">
						<input type="submit" value="登 录" id="deng">
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
		 $('#phone').blur(function(){

            //设置一个判断手机号是否合法的正则表达式
            var string = "^[1][3,4,5,7,8][0-9]{9}$";

            var res = $('#phone').val().match(string);

            if(res == null){
                 layer.tips('手机号码格式不正确,请重新输入', '#phone');
               
            }else{
                 layer.tips('手机号码格式正确', '#phone');
              
                    $.post('/home/phone', {phone: $('#phone').val(), '_token': '{{csrf_token()}}'}, function (data) {
                      
                    });
            }

        });

		 $('#deng').click(function(){
		 	yzm();
		 	// console.log(111);
		 	// alert('1');

           	    $.get('/home/code', {phone: $('#phone').val()}, function (data) {

           	    });
		 });
		 function yzm() {
             var timer = "";
             var nums = 60;
             var validCode = true;//定义该变量是为了处理后面的重复点击事件
             $("#yzm").on('click', function () {
                 // console.log("111");
                 var code = $(this);
                 if (validCode) {
                     validCode = false;
                     timer = setInterval(function () {
                         if (nums > 0) {
                             nums--;
                             code.val(nums + "秒后重新发送");
                             code.attr('disabled', 'disabled');
                         }
                         else {
                             clearInterval(timer);
                             nums = 60;//重置回去
                             validCode = true;
                             code.removeAttr('disabled');
                             code.val("发送验证码");
                         }
                     }, 1000)
                 }
             })
         }
	</script>
</html>
