<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>二手车问答</title>
		<link rel="stylesheet" type="text/css" href="/css/zhang_wenda.css" />
       <link rel="icon" type="image/png" href="/img/favicon.ico">
			 <script type="text/javascript" src='/js/jquery-3.2.1.min.js'></script>
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
                        <input type="text" class="search-input" placeholder="搜索您想要的车" name="key"/>
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
		<div class="banimg">
			<div class="search">
	          <form action="/home/question/show" method="GET" class="form-inline">
		        <input class="ipt-text" type="text" placeholder="查找问题"  name="key"/>
				<button class="ipt-btn" type="submit">搜索</button>
				<a href="/home/question/create"><button class="ipt-btn" type="button">提问</button></a>
		      </form>
			</div>
			<div class="hot-question">
				<a href="/home/answer/6">如何过户上牌？</a>
				<a href="/home/answer/31">买什么车合适？</a>
				<a href="/home/answer/13">瓜子服务费谁出？</a>
				<a href="/home/answer/32">福克斯怎么样？</a>
				<a href="/home/answer/16">异地二手车如何过户？</a>
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
