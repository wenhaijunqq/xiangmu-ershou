<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
    <link type="text/css" rel="stylesheet" href="css/zhang_register.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<body class="login_bj" >

<div class="zhuce_body">
    <div class="zhuce_kong">
    	<div class="zc">
        	<div class="bj_bai">
            <h3>欢迎注册</h3>
       	  	  <form action="" method="get">
                <input id="phone" type="text" class="kuang_txt phone" placeholder="手机号" value="">
                <input id="email" type="text" class="kuang_txt email" placeholder="邮箱" value="">
                <input id="pwd" type="text" class="kuang_txt possword" placeholder="密码" value="">
                <input id="icode" type="text" class="kuang_txt possword" placeholder="邀请码" value="">
                <input id="vcode" type="text" class="kuang_txt yanzm" placeholder="验证码" value="">
                <div>
                	<div class="hui_kuang"><img src="img/zc_22.jpg" width="92" height="31"></div>
                	<div class="shuaxin"><a href="#"><img src="imgs/zc_25.jpg" width="13" height="14"></a></div>
                </div>
                <div>
               		<input name="" type="checkbox" value=""><span>已阅读并同意<a href="#" target="_blank"><span class="lan">《XXXXX使用协议》</span></a></span>
                </div>
                <input name="注册" type="button" class="btn_zhuce" value="注册" onclick="regist()">

                </form>
            </div>
        	<div class="bj_right">
            	<p>使用以下账号直接登录</p>
                <a href="#" class="zhuce_qq">QQ注册</a>
                <a href="#" class="zhuce_wb">微博注册</a>
                <a href="#" class="zhuce_wx">微信注册</a>
                <p>已有账号？<a href="/IndexLogin">立即登录</a></p>

            </div>
        </div>
        <P>瓜子二手车  2017.10.26<a href="#" target="_blank"></a></P>
    </div>

</div>
</body>
</html>
<script>
	function regist(){
		var phone=document.getElementById('phone').value;
		var email=document.getElementById('email').value;
		var pwd=document.getElementById('pwd').value;
		var icode=document.getElementById('icode').value;
		var vcode=document.getElementById('vcode').value;
		var Email = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
		if(phone=="")
		  alert("请输入手机号");
		  else if(email=="")
		  	alert("请输入邮箱");
		  else if(!Email.test(email)){
			alert("邮箱格式有误");
			return false;
		  }else if(pwd=="")
		  	alert("请输入密码");
		  else if(vcode=="")
		    alert("请输入验证码");
	}


</script>
