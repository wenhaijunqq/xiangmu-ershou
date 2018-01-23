<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>二手车问答列表</title>
  <link rel="icon" type="image/png" href="/img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/zhang_wenda.css" />
	<link rel="stylesheet" type="text/css" href="/admins/css/paginate.css" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
		<script type="text/javascript" src='/js/jquery-3.2.1.min.js'></script>
		<link rel="stylesheet" rev="stylesheet" href="/css/jock-citypicker-2.0.min.css" type="text/css" />
		<script type="text/javascript" src="/js/jock-citypicker-2.0.min.js"></script>
</head>
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
        <!-- 列表开始 -->

<div class="listbox">
<div class="dh">
       <a href="/">首页</a>   <em>&gt;</em>
       <a href="/home/question" title="二手车问答">二手车问答</a>  <em>&gt;</em>
       <span>{{$types[$type]}}</span>
 </div>
      <div class="search2">
          <form action="/home/question/show" method="GET" class="form-inline">
            <input class="search2-input" type="text" placeholder="查找问题"  name="key"/>
            <button class="search2-btn" type="submit">搜索</button>
          </form>

      </div>
   <div class="find-tit">
           为您找到<strong class="co22">“5条”</strong>相关记录
    </div>
   <div class="wentilist">
      <table class="table table-hover" style="width:870px; margin: -20px auto 50px;">
       @for($i=0;$i<count($res);$i++)
        <tr>
          <td class="wt"><a href="/home/answer/{{$res[$i]->qid}}" target="_blank">{{$res[$i]->content}}</a></td>
          <td class="twtime">2018-01-09 14:57:24</td>
        </tr>
        @endfor
      </table>
      <div id="pull_right">
          <div class="am-pagination-centered">
            {!! $res->render() !!}
          </div>
    </div>
   </div>
</div>
       <!-- 列表结束 -->
          <!-- 页脚 -->
        <div class="footer"></div>
</body>
</html>
