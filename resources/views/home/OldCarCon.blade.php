<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>二手车问答</title>
		<link rel="stylesheet" type="text/css" href="/css/zhang_wenda.css" />
       <link rel="icon" type="image/png" href="/img/favicon.ico">
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
		<div class="banimg">
			<div class="search">
				<input class="ipt-text" type="text" placeholder="查找问题"/>
				<button class="ipt-btn" type="button">搜索</button>

				<a href="/home/question/create"><button class="ipt-btn" type="button">提问</button></a>
			</div>
			<div class="hot-question">
				<a href="">如何过户上牌？</a>
				<a href="">买什么车合适？</a>
				<a href="">瓜子质保包括什么？</a>
				<a href="">福克斯怎么样？</a>
				<a href="">异地怎么过户？</a>
			</div>
		</div>
		<div class="w hide1">
			<ul class="index-list">
				<li class="box-item bore4">
					<h3 class="buy-tit">买车卖车</h3>

					<ul class="list sale-list">
                       @foreach($data as $k=>$v)
						<li>
							<span class="icon-circle"></span>
							<a target="_blank" href="/home/answer/{{$v->qid}}">{{$v->content}}</a>
						</li>
						 @endforeach
					</ul>

					<div class="extra">
						<a href="/home/asklist/{{$type[0]}}" target="_blank">查看更多>></a>
					</div>
				</li>
				<li class="box-item bore4">
					<h3 class="sale-tit">交易过户</h3>
					<ul class="list sale-list">
					@foreach($data1 as $k=>$v)
						<li>
							<span class="icon-circle"></span>
							<a target="_blank" href="/home/answer/{{$v->qid}}">{{$v->content}}</a>
						</li>
					@endforeach
					</ul>
					<div class="extra">
						<a href="/home/asklist/{{$type[1]}}" target="_blank">查看更多>></a>
					</div>
				</li>
				<li class="box-item bore4">
					<h3 class="policy-tit">保养维修</h3>
					<ul class="list sale-list">
					@foreach($data2 as $k=>$v)
						<li>
							<span class="icon-circle"></span>
							<a target="_blank" href="/home/answer/{{$v->qid}}">{{$v->content}}</a>
						</li>
					@endforeach
					</ul>
					<div class="extra">
						<a href="/home/asklist/{{$type[2]}}" target="_blank">查看更多>></a>
					</div>
				</li>
				<li class="box-item bore4">
					<h3 class="loan-tit">金融贷款</h3>
					<ul class="list sale-list">
					@foreach($data3 as $k=>$v)
						<li>
							<span class="icon-circle"></span>
							<a target="_blank" href="/home/answer/{{$v->qid}}">{{$v->content}}</a>
						</li>
					@endforeach
					</ul>
					<div class="extra">
						<a href="/home/asklist/{{$type[3]}}" target="_blank">查看更多>></a>
					</div>
				</li>

			</ul>
		</div>

		<div class="footer"></div>
	</body>
</html>
