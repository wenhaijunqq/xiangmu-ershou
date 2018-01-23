<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="/css/gerenzhongxin/base.css"/>
    <link rel="stylesheet" type="text/css" href="/css/gerenzhongxin/city.css"/>
    <link rel="stylesheet" type="text/css" href="/css/gerenzhongxin/common.css"/>
    <link rel="stylesheet" type="text/css" href="/css/gerenzhongxin/footer.css" />
    <link rel="stylesheet" type="text/css" href="/css/gerenzhongxin/page2016_9d570cf.css" />
    <link rel="stylesheet" type="text/css" href="/css/gerenzhongxin/popup_68f8bb9.css" />
            <link rel="stylesheet" href="/css/h_public.css">
            <link rel="stylesheet" href="/css/h_index.css">
    <script src="/js/jquery-3.2.1.js"></script>
    <link rel="stylesheet"  href="/css/h_ss.css">
    <script type="text/javascript" src='/js/jquery-3.2.1.min.js'></script>
		<link rel="stylesheet" rev="stylesheet" href="/css/jock-citypicker-2.0.min.css" type="text/css" />
		<script type="text/javascript" src="/js/jock-citypicker-2.0.min.js"></script>

</head>
    <body class="bg-f0">
      <script type="text/javascript">

      $(function(){
          var fn2 = function(city){
              c.value = city;
          };
          $('#test3').hover(function(){
              $('#test3').css("color","red");
              citypicker.show({
                  left : 315,
                  top  : 40,
                  selected : fn2
              });

          });
          $('body').click(function(){
              $('#test3').css("color","black");
              $('#div_select_city_sub_menu').hide();
          });

      });
      </script>


        <div class="_ckcity" data-cityname="beijing" data-type="1" style="display:none"></div>
        <!--20141203新版头部开始-->
        <div class="fixed-head-wrap ">
            <div class="fixed-head rel">
                        <div class="nav-1">
                </div>
                <div class="nav-2">
                    <input id="test3" type="text" name="city1" value="北京市" readOnly="readOnly" size="8" height="20" style="border:0px;" />
                </div>
                <div class="phone">400-060-6046</div>
                <div class="login"><a href="{{ url('home/login') }}" >登录</a></div>
                <div class="nav-nav" id='h' style="width:600px">
                    <a href="/">首页</a>
                    <a href="/www/buy">我要买车</a>
                    <a href="/www/sell">我要卖车</a>
                    <a href="/www/server">瓜子服务</a>
                    <a href="/home/question">瓜子问答</a>
                    <a href="/home/center">个人中心</a>
                </div>

            </div>
        </div>


    <div class="mcar-center clearfix">
        <div class="left" style="height: 435px;">
      <ul class="list">
        <li><a href="http://www.chenghang.com/home/baodian" class=" active ">我的宝典</a></li>
        <li><a href="http://www.chenghang.com/home/shoucang" class="">我的收藏</a></li>
        <li><a href="http://www.chenghang.com/home/duibi" class="">对比记录</a></li>
        <li><a href="http://www.chenghang.com/home/maiche" class="">我买的车</a></li>
        <li><a href="http://www.chenghang.com/home/shouche" class="">我卖的车</a></li>
        <li><a href="http://www.chenghang.com/home/huiyuan" class="">会员身份</a></li>
        <li><a href="http://www.chenghang.com/home/mima" class="">修改密码</a></li>

      </ul>
    </div>
        <div class="right">
            <div class="ncar-tip">
                <img src="/img/error_people.png">
                <div class="con fr">
                        <p>主人，您暂时还没有提问，赶紧去宝典看看有没有想问的吧！</p>
                        <a href="https://www.xin.com/qa/lists/" target="_blank">去宝典看看&nbsp;&gt;</a>
                </div>
            </div>
        </div>
    </div>



    </body>
</html>
