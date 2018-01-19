<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>二手车问答列表</title>
  <link rel="icon" type="image/png" href="/img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/zhang_wenda.css" />
	<link rel="stylesheet" type="text/css" href="/admins/css/paginate.css" />
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
