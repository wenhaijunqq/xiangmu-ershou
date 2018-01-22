<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>瓜子二手车</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/admins/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/admins/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/admins/css/amazeui.min.css" />
    <link rel="stylesheet" href="/admins/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/admins/css/app.css">
    <script type="text/javascript" src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
    <link rel="stylesheet" href="/layer/skin/layer.css" />
    <script type="text/javascript" src='/layer/layer.js'></script>

    
</head>

<body data-type="login">
    <script src="/admins/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">
                </div>
                <form class="am-form tpl-form-line-form">
                 {!! csrf_field() !!}
                    <div class="am-form-group">
                        <input type="text" name="phone" class="tpl-form-input" id="phone" value="" placeholder="请输入账号">

                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="userPwd" value="" placeholder="请输入密码">

                    </div>

                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox">
                        <label for="remember-me">
                        记住密码
                         </label>
                    </div>
                    <div class="am-form-group">

                        <button type="button" id="dynamicLogon" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/admins/js/amazeui.min.js"></script>
    <script src="/admins/js/app.js"></script>

</body>
<script type="text/javascript">

    //检查电话号码
    $('input[name=phone]').blur(function(){

        var phone = $(this).val();
        $.post('/admin/phone',{'phone':phone,'_token':'{{csrf_token()}}'},function(data){
              switch(data){
                case 'no':
                    layer.tips('用户不存在', '#phone');
                    break;
                case 'not':
                    layer.tips('格式错误', '#phone');
                    break;
                case 'ok':
                    layer.tips('输入正确', '#phone');
                    break;
           
                
            }
        });
    });


    // //发送验证码
    // var time = 0;
    // $('#btn').click(function(){
    //     if(time == 0){
    //         var phone = $('input[name=phone]').val();
    //         $.post('/admin/code',{'phone':phone,'_token':'{{csrf_token()}}'},function(data){
    //             alert(data);
    //         });
    //         $('#btn').attr('disabled','disabled');
    //     }
    //     if (time == 0) {
    //             time = 10; 
    //             var index = setInterval(function(){
    //                 time--;
    //                 if (time == 0) {
    //                     clearInterval(index);
    //                     time = 0;
    //                     $('#btn').removeAttr('disabled');
    //                 }
    //             }, 1000);
    //         }
    // });

    //执行登录
    $('#dynamicLogon').click(function(){
        var code = $('#userPwd').val();
        var phone = $('input[name=phone]').val();
        $.post('/admin/dologin',{'code':code,'phone':phone,'_token':'{{csrf_token()}}'},function(data){
            if(data == 0){
                layer.tips('验证码不正确', '#userPwd');
            }else{
                location.href='/admin/index';
            }
        });
    });
</script>

</html>