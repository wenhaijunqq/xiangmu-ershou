<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>二手车回答页</title>
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
        <!-- 列表开始 -->

<div class="answerbox">
    <div class="dh">
       <a href="/">首页</a>   <em>&gt;</em>
       <a href="/home/question" title="二手车问答">二手车问答</a>  <em>&gt;</em>
       <span>{{$data[0]->content}}</span>
     </div>
     <div class="search2">
          <input type="text" class="search2-input"/>
          <button class="search2-btn" type="button">搜索</button>
     </div>
     <div class="wen">
       <p style="font-size:20px;">
         {{$data[0]->content}}
       </p> 
       <p></p>
       <p id="time1"><font color="#8A8B86">2016-06-03 16:26:11　浏览：3458 &nbsp;<a class="btn btn-default" href="/www/buy" target="_blank" role="button">查找全部车源</a></font></p>
     </div>
     <div class="da">
       <img src="/img/smallicon.png" style="float:left;">
       <img src="/img/logo.png" alt="..." class="img-circle photos" style="width:40px; height:40px; ">
        <p class="user-name">瓜子官方</p>
        <p class="fabutime">2018-01-09  11:25:05</p>
        <button type="button" class="btn btn-success user-like"><img src="/img/like.png"></img>&nbsp;<e id="likenumber">{{$data[0]->like}}</e></button>
        <div class="huida-content">{{$data[0]->reply_content}}</div>
     </div>
</div>
       <!-- 列表结束 -->
          <!-- 页脚 -->
        <div class="footer"></div>
</body>
</html>
