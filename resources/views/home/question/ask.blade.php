<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>二手车提问</title>
    <link rel="icon" type="image/png" href="/img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="/css/zhang_wenda.css" />
   <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/layer/skin/layer.css">
    <script type="text/javascript" src="/layer/layer.js"></script>
		<script type="text/javascript" src='/js/jquery-3.2.1.min.js'></script>
		<link rel="stylesheet"  href="/css/h_ss.css">
		<link rel="stylesheet" rev="stylesheet" href="/css/jock-citypicker-2.0.min.css" type="text/css" />
		<script type="text/javascript" src="/js/jock-citypicker-2.0.min.js"></script>
</head>
<body>
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
                    <a href="/IndexLogin">
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
					<a class="fl" href="/" title="瓜子二手车">首页</a>
                    <a class="fl" href="/www/buy" title="天津个人二手车">我要买车</a>
                    <a class="fl" href="/www/sell" title="天津二手车出售">我要卖车</a>
                    <a class="fl" href="/www/server" title="瓜子二手车服务保障">服务保障</a>
                    <a class="fr" href="/home/question" title="瓜子二手车问答系统">二手车问答</a>
                </div>
            </div>
        </div>
        <!-- 提问框开始 -->
<div class="ask-main-box">
  <div class="tiwen">
    <img src="/img/wenicon.png"/><p>提问</p>
    <form id="form" class="am-form tpl-form-line-form" action="/home/question" method="POST">
       {{ csrf_field() }}
      {{ method_field('POST')}}
      <div class="leibie">
        您要提问的问题类别（必选）：
        <label class="radio-inline">
        <input type="radio" name="type" id="type" value="0">买车卖车
        </label>
        <label class="radio-inline">
        <input type="radio" name="type" id="type" value="1">交易过户
        </label>
        <label class="radio-inline">
        <input type="radio" name="type" id="type" value="2">保养维修
        </label>
        <label class="radio-inline">
        <input type="radio" name="type" id="type" value="3">金融贷款
        </label>
      </div>
      <div id="wentikuang">
          <textarea class="form-control" rows="5" placeholder="请输入您的问题" name="content"></textarea>
      </div>
      <div class="submit">
      <button type="submit" class="btn btn-success btn-lg">提交</button>
      </div>
      </form>
  </div>
</div>
        <!-- 提问框结束 -->
        <!-- 页脚 -->
        <div class="footer"></div>
</body>
</html>
