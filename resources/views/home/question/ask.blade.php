<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>二手车提问</title>
    <link rel="icon" type="image/png" href="/img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="/css/zhang_wenda.css" />
   <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
</head>
<body>
	<div id="header">

            <!-- 头部上部-->
            <div class="top">
                <div class="top_icon"></div>

                <!--地区选择下拉框-->
                <div class="city">
                    <select  class="form-control">
                        <option value="1">天津</option>
                        <option value="2">上海</option>
                        <option value="3">北京</option>
                        <option value="4">深圳</option>
                        <option value="4">广州</option>
                    </select>
                </div>

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
                    <a class="fr" href="/www/oldcar" title="瓜子二手车问答系统">二手车问答</a>
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
        <input type="radio" name="type" id="inlineRadio1" value="0">买车卖车
        </label>
        <label class="radio-inline">
        <input type="radio" name="type" id="inlineRadio2" value="1">交易过户
        </label>
        <label class="radio-inline">
        <input type="radio" name="type" id="inlineRadio3" value="2">保养维修
        </label>
        <label class="radio-inline">
        <input type="radio" name="type" id="inlineRadio4" value="3">金融贷款
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