<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>二手车问答</title>
		<link rel="stylesheet" type="text/css" href="/css/zhang_wenda.css" />
       <link rel="icon" type="image/png" href="/img/favicon.ico">
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
       <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="/js/bootstrap.min.js"></script>
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
				<button class="ipt-btn" type="submit">搜索</button> </form>
			</div>
			<div style="margin-left:965px;">
				<button class="ipt-btn"  data-toggle="modal" data-target="#myModal">提问</button>  		   		
			</div>
			 <!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h2><img src="/img/wenicon.png"/>&nbsp;&nbsp;提问</h2>
						      </div>
						      <div class="modal-body">
						       <form class="form-horizontal am-form tpl-form-line-form"  action="/home/question" method="POST">
						           {{ csrf_field() }}
                                   {{ method_field('POST')}}
								  <div class="form-group">
								    <label for="inputtext3" class="col-sm-2 control-label">问题类别</label>
								    <div class="col-sm-10">
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
								  </div>
								  <div class="form-group">
								    <label for="inputtext3" class="col-sm-2 control-label">问题描述</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" rows="5" placeholder="请输入您的问题" name="content" style="resize:none;"></textarea>
								    </div>
								  </div>
								  				
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">不了，谢谢</button>
						        <button type="submit" class="btn btn-success">提交</button>
						      </div>
						      </form>
						    </div>
						  </div>
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
							<a target="_blank" href="/home/answer/{{$v->qid}}" style="text-decoration: none;">{{$v->content}}</a>
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
