<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>APP下载</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/yan_gzfw.css"/>
    <link rel="stylesheet" type="text/css" href="css/yan_appdown.css"/>
    <link rel="stylesheet" type="text/css" href="css/mdui.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/mdui.js"></script>
    <script type="text/javascript" src='/js/jquery-3.2.1.min.js'></script>
    <link rel="stylesheet" rev="stylesheet" href="/css/jock-citypicker-2.0.min.css" type="text/css" />
    <script type="text/javascript" src="/js/jock-citypicker-2.0.min.js"></script>
</head>
<body>
    <!-- 头部-->
    <div id="header">
        <!-- 头部上部-->
        <div class="top">
            <div class="top_icon"></div>

            <!--地区选择下拉框-->
            <div class="city">
                <input id="test3" type="text" name="city1" value="北京市" readOnly="readOnly" size="8" height="20" style="border:0px" />
            </div>
            <script type="text/javascript">

            $(function(){
                var fn2 = function(city){
                    c.value = city;
                };
                $('#test3').hover(function(){
                    $('#test3').css("color","red");
                    citypicker.show({
                        left : 450,
                        top  : 45,
                        selected : fn2
                    });

                });
                $('body').click(function(){
                    $('#test3').css("color","black");
                    $('#div_select_city_sub_menu').hide();
                });

            });
            </script>

            <!--登录 -->
            <div class="uc">
                <a href="Login.html">
                    <span>登录</span>
                </a>
            </div>

            <!--热线电话-->
            <div class="hot-phone">
                <i></i>
                <span>400-023-1529</span>
            </div>

            <!--搜索框-->
            <div class="search-box">
                <div class="search">
                    <input type="text" class="search-input" placeholder="搜索您想要的车"/>
                    <button class="search-btn" type="button">搜索</button>
                </div>
            </div>

        </div>

        <!--头部导航栏-->
        <div class="nav">
            <div class="w">
                <a class="fl" href="index.html" title="瓜子二手车">首页</a>
                <a class="fl" href="PurchaseCar.html" title="天津个人二手车">我要买车</a>
                <a class="fl" href="SellCar.html" title="天津二手车出售">我要卖车</a>
                <a class="fl" href="ServerPro.html" title="瓜子二手车服务保障">服务保障</a>
                <a class="fl hot-icon" href="CarPur.html" title="二手车分期付款">
                    分期购车
                    <i></i>
                </a>
                <a class="fr app-web" href="APPDown.html" title="瓜子二手车直卖网APP">APP下载</a>
                <a class="fr" href="OldCarCon.html" title="瓜子二手车问答系统">二手车问答</a>
            </div>
        </div>
    </div>
    <!--内容-->
    <div id="adown-body">
        <div class="w">
            <div class="bgce">
                <a class="icon-android" href="http://app.guazistatic.com/2017101216215390_guazi_android_pub_3.4.2.0_app_self_guaziweb.apk" >Android下载</a>
                <a class="icon-ios" href="https://itunes.apple.com/cn/app/gan-ji-hao-che-zui-kao-pu/id990531994?mt=8">iPhone下载</a>
                <div class="erweima"></div>
            </div>
        </div>
    </div>
    <!--底部-->
    <div class="footer">
        <div class="company-info">
            <div class="footer-logo"></div>
            <div class="phone-eamil">
                <p>
                    咨询电话：
                    <i>400-023-1529</i>
                    <br>
                    <span>（周一至周日 8:00-21:00）</span>
                </p>
                <p>
                    售后服务专线：
                    <i>400-066-8780</i>
                    <br>
                    <span>（周一至周日 9:00-21:00）</span>
                </p>
            </div>
            <img src="img/ewm-wx-2.png" class="gz-ewm">
            <p class="ewm-tit">关注微信</p>
            <img src="img/ewm-app-2.png" class="gz-ewm">
            <p class="ewm-tit">下载APP</p>
            <div class="basic-info">
                <div class="info-link">
                    <a target="_blank">关于瓜子</a>
                    <a target="_blank">加入我们</a>
                    <a target="_blank">联系我们</a>
                    <a target="_blank">服务保障</a>
                </div>
                <p class="arc-info">Copyright 2017 www.guazi.com All Rights Reserved</p>
                <p class="arc-info">京ICP备15053955号  ICP证151071号 </p>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $(function () {
        var city = new mdui.Select('#citySelect');
    });
</script>
