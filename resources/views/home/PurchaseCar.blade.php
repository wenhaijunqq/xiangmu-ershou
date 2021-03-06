@extends('/layout/HomeLayout')
@section('title','我要买车')

<body>
@section('content')

<link rel="stylesheet" href="/css/h_PurchaseCar.css">
<div class="crumbs-search" id="bread">
         <div class="crumbs">
             <a href="#">瓜子二手车</a>&gt;天津二手车        </div>
         <div class="search js-search">
             <div class="search-box suggestion_widget autocomplete" data-default-count="9">
                 <input type="text" class="search-input js_search_input_index" placeholder="搜索您想要的车" >
                 <button class="search-btn"  type="button"></button>
                 <input type="hidden" value="tj" name="hiddenCity">
                 <div class="autocomplete-dropdown"></div>
             </div>
         </div>
     </div>
     <div class="list-wrap">
         <div class="screen">
             <!-- 品牌 -->
             <dl class="clearfix">
                 <dt>品牌</dt>
                 <dd>
                     <div class="dd-top">
                         <span class="a-box">
                             <!-- 不限 -->
                             <a class="active" href="###">不限</a>
                             <!-- 热门品牌 -->
                             <a  href="###">大众</a>
                             <a href="###">丰田</a>
                             <a href="###">福特</a>
                             <a href="###">奔驰</a>
                             <a href="###">宝马</a>
                             <a href="###">奥迪</a>
                             <a href="###">日产</a>
                             <a href="###">别克</a>
                             <a href="###">现代</a>
                             <a href="###">起亚</a>
                             <a href="###">比亚迪</a>
                             <a href="###">标致</a>
                             <a href="###">本田</a>
                             <a href="###">雪佛兰</a>
                             <a href="###">雪铁龙</a>
                         </span>
                         <span><span style="" id="geng"  style="font-size: 14pt;">更多</span>
                     </div>
                     <div class="dd-all clearfix js-brand js-option-hid-info" id="ping" style="display:none">
                             <ul class="xlcd">
                                 @foreach($att as $k=>$v)

                                 <li class="xlpp">
                                     <label>{{$k}}</label>
                                     <p>
                                    @foreach(explode(',',$v) as $key=>$value)
                                        <em style="display:none">{{$num=$num+1}}</em>
                                     <a  data-gzlog="tracking_type=click&amp;eventid=92458035&amp;filter=brand&amp;brand=audi" href="###" value="{{$uid[$num-1]}}">{{$value}}</a>

                                    @endforeach
                                    </p>
                                 </li>
                                 @endforeach
                            </ul>
                     </div>
                 </dd>

             </dl>
             <!-- 车系 -->
             <dl class="clearfix">
                 <dt>车系</dt>
                 <dd>
                     <div class="dd-top">


                         <span class="a-box" id="carModel">
                             <a class="active" value="0">不限</a>
                             @foreach($data as $k=>$v)
                             @if($v->tid > 0)

                              <a href="###" value="{{$v->id}}">{{$v->car_typeName}}</a>
                             @endif
                             @endforeach


                         <span class="a-box">
                             <a class="active" >不限</a>
                             <a href="###">速腾</a>
                             <a href="###">宝来</a>
                             <a href="###">迈腾</a>
                             <a href="###">朗逸</a>
                             <a href="###">高尔夫</a>
                             <a href="###">途观</a>
                             <a href="###">福克斯</a>
                             <a href="###">哈弗H6</a>
                             <a href="###">卡罗拉</a>
                             <a href="###">夏利</a>
                             <a href="###">宝马3系</a>
                             <a href="###">奥迪A6L</a>
                             <a href="###">世嘉</a>
                             <a href="###">科鲁兹</a>
                             <a href="###">凯越</a>
                         </span></div>
                     <div class="dd-car js-tag js-option-hid-info" style="display: none;">
                         <ul>
                         </ul>
                     </div>
                 </dd>
             </dl>
             <!-- 价格 -->
             <dl class="clearfix">
                 <dt>价格</dt>
                 <dd>
                     <div class="dd-top">
                         <a href="###" class="active" >不限</a>
                         <a href="###">3万以下</a>
                         <a href="###">3-5万</a>
                         <a href="###">5-7万</a>
                         <a href="###">7-9万</a>
                         <a href="###">9-12万</a>
                         <a href="###">12-16万</a>
                         <a href="###">16-20万</a>
                         <a href="###">20万以上</a>
                         <div class="rangeFilter">
                             <input type="text" value="" class="screen-price" size="4" maxlength="3" >
                             -
                             <input value="" type="text" class="screen-price js-end"  size="4" maxlength="3" id="my_price_e" name="e">
                             <b style="color: #888">万</b>
                             <button class="price-btn js-btn">确定</button>
                         </div>
                     </div>
                 </dd>
             </dl>
             <!-- 更多 -->
             <dl class="clearfix js-more">
                 <dt>更多</dt>
                 <dd>
                     <ul class="dd-more ">
                         <li class="js-hover">
                             <p class="dd-sel"><i></i>
                                 车龄
                             </p>
                             <div class="dd-option">
                                 <a href="###">不限</a>
                                 <a href="###">1年以内</a>
                                 <a href="###">3年内</a>
                             </div>
                         </li>
                         <!-- 变速箱 -->
                         <li class="js-hover">
                             <p class="dd-sel"><i></i>
                                 变速箱                    </p>
                             <div class="dd-option">
                                 <a href="###">手动</a>
                                 <a href="###">自动</a>
                             </div>
                         </li>
                         <!-- 车型 -->
                         <li class="js-hover">
                             <p class="dd-sel"><i></i>
                                 车型                    </p>
                             <div class="dd-option">
                                 <a href="###">不限</a>
                                 <a href="###">两厢轿车</a>
                                 <a href="###">三厢轿车</a>
                                 <a href="###">跑车</a>
                                 <a href="###">SUV</a>
                                 <a href="###">MPV</a>
                                 <a href="###">面包车</a>
                                 <a href="###">皮卡</a>
                             </div>
                         </li>
                         <!-- 里程 -->
                         <li class="js-hover">
                             <p class="dd-sel"><i></i>
                                 里程                    </p>
                             <div class="dd-option">
                                 <a href="###">不限</a>
                                 <a href="###">1万公里内</a>
                                 <a href="###">3万公里内</a>
                                 <a href="###">5万公里内</a>
                                 <a href="###">5万公里以上</a>
                             </div>
                         </li>
                         <!-- 排量 -->
                         <li class="js-hover">
                             <p class="dd-sel"><i></i>
                                 排量                    </p>
                             <div class="dd-option">
                                 <a href="###">不限</a>
                                 <a href="###">1.0L以下</a>
                                 <a href="###">1.0-1.6L</a>
                                 <a href="###">1.6-2.0L</a>
                                 <a href="###">2.0-3.0L</a>
                                 <a href="###">3.0L以上</a>
                             </div>
                         </li>
                         <!-- 排放标准 -->
                         <li class="js-hover">
                             <p class="dd-sel"><i></i>
                                 排放标准                    </p>
                             <div class="dd-option">
                                 <a href="###">不限</a>
                                 <a href="###">国二及以上</a>
                                 <a href="###">国三及以上</a>
                                 <a href="###">国四及以上</a>
                                 <a href="###">国五</a>
                             </div>
                         </li>
                         <!-- 座位数 -->
                         <li class="js-hover">
                             <p class="dd-sel"><i></i>
                                 座位数                    </p>
                             <div class="dd-option">
                                 <a href="###">不限</a>
                                 <a href="###">2座</a>
                                 <a href="###">4座</a>
                                 <a href="###">5座</a>
                                 <a href="###">6座</a>
                                 <a href="###">7座及以上</a>
                             </div>
                         </li>
                         <!-- 燃油类型 -->
                         <li class="js-hover">
                             <p class="dd-sel"><i></i>
                                 燃油类型                    </p>
                             <div class="dd-option">
                                 <a href="###">不限</a>
                                 <a href="###">汽油</a>
                                 <a href="###">柴油</a>
                                 <a href="###">电动</a>
                                 <a href="###">油电混合</a>
                                 <a href="###">其他</a>
                             </div>
                         </li>
                     </ul>
                 </dd>
             </dl>
         </div>
     </div>
     <div class="screen-result js-top" id="post">
         <p class="result-p1">当前筛选：</p>
         <ul class="result-li">
            <li><a href="###"><i></i><span>价格：</span>3万以下</a><i>×</i></li>
         </ul>
        <p class="result-p2"><a href="###">重置条件</a></p>
        <p class="result-p3">共为您找到412辆好车</p>
    </div>
     <div class="list-filter">
         <div class="list-tab">
             <a class="active" >全部</a>
             <em></em>
             <a class="loan">保卖车</a>
             <em></em>
             <a class="loan">付三成<i></i></a>
         </div>
         <div class="list-sort">
             <div class="hot-screen js-hover">
                 <p class="hot-sel">热门筛选 +</p>
                 <div class="hot-option">
                     <a href="###"><i></i>急售</a>
                     <a href="###"><i></i>超值</a>
                     <a href="###"><i></i>准新车</a>
                     <a href="###"><i></i>练手车</a>
                     <a href="###"><i></i>可迁全国</a>
                 </div>
             </div>
             <a class="sort-a ">里程<i class=""></i></a>
             <a class="sort-a ">车龄<i class=""></i></a>
             <a class="sort-a ">价格<i class=""></i></a>
             <a class="sort-a ">最新发布</a>
             <a class="sort-a active">默认排序</a>
         </div>
     </div>
     <div class="chezhang">
         <ul class="clearfix ">
             <li><a href="/www/xiangqing">
                     <img src="/img/qn17102216270379f5222e954b8af4bded5f5e61d64f1e.jpg" alt="">
                     <h3 class="t">丰田卡罗拉 2014款 1.6L CVT GL</h3>
                     <div class="t-i">2015年<span class="icon-pad">|</span>4.5万公里</div>
                     <div class="t-price">
                         <!-- 价格 -->
                         <p>10.70<span>万</span></p>
                         <!-- 标签 -->
                         <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">14.60万</em>
                     </div>
                     <em class="icon-sale">急降<br><span>3000</span>元</em>
                 </a>
             </li>
             <li><a href="/www/xiangqing">
                     <img src="/img/qn17102216270379f5222e954b8af4bded5f5e61d64f1e.jpg" alt="">
                     <h3 class="t">丰田卡罗拉 2014款 1.6L CVT GL</h3>
                     <div class="t-i">2015年<span class="icon-pad">|</span>4.5万公里</div>
                     <div class="t-price">
                         <!-- 价格 -->
                         <p>10.70<span>万</span></p>
                         <!-- 标签 -->
                         <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">14.60万</em>
                     </div>
                     <em class="icon-sale">急降<br><span>3000</span>元</em>
                 </a>
             </li>
             <li><a href="/www/xiangqing">
                     <img src="/img/qn17102216270379f5222e954b8af4bded5f5e61d64f1e.jpg" alt="">
                     <h3 class="t">丰田卡罗拉 2014款 1.6L CVT GL</h3>
                     <div class="t-i">2015年<span class="icon-pad">|</span>4.5万公里</div>
                     <div class="t-price">
                         <!-- 价格 -->
                         <p>10.70<span>万</span></p>
                         <!-- 标签 -->
                         <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">14.60万</em>
                     </div>
                     <em class="icon-sale">急降<br><span>3000</span>元</em>
                 </a>
             </li>
             <li><a href="/www/xiangqing">
                     <img src="/img/qn17102216270379f5222e954b8af4bded5f5e61d64f1e.jpg" alt="">
                     <h3 class="t">丰田卡罗拉 2014款 1.6L CVT GL</h3>
                     <div class="t-i">2015年<span class="icon-pad">|</span>4.5万公里</div>
                     <div class="t-price">
                         <!-- 价格 -->
                         <p>10.70<span>万</span></p>
                         <!-- 标签 -->
                         <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">14.60万</em>
                     </div>
                     <em class="icon-sale">急降<br><span>3000</span>元</em>
                 </a>
             </li>
             <li><a href="/www/xiangqing">
                     <img src="/img/qn17102216270379f5222e954b8af4bded5f5e61d64f1e.jpg" alt="">
                     <h3 class="t">丰田卡罗拉 2014款 1.6L CVT GL</h3>
                     <div class="t-i">2015年<span class="icon-pad">|</span>4.5万公里</div>
                     <div class="t-price">
                         <!-- 价格 -->
                         <p>10.70<span>万</span></p>
                         <!-- 标签 -->
                         <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">14.60万</em>
                     </div>
                     <em class="icon-sale">急降<br><span>3000</span>元</em>
                 </a>
             </li>
         </ul>
     </div>
     <div class="pageBox" >
         <ul class="pageLink clearfix">
             <li class="link-on"><a><span>1</span></a></li>
             <li><a href="###" ><span>2</span></a></li>
             <li><a href="#"><span>3</span></a></li>
             <li><a href="#" ><span>4</span></a></li>
             <li><a href="#"><span>5</span></a></li>
             <li><a href="#" ><span>6</span></a></li>
             <li><a href="#"><span>7</span></a></li>
             <li class="point"><a><span>...</span></a></li>
             <li><a href="#"><span>42</span></a></li>
             <li><a href="#" class="next"><span>下一页</span><em>&gt;</em></a></li>
         </ul>
     </div>

</body>

<script type="text/javascript">

    $("#pingpai a").click(function(){
        $("#pingpai>a").attr("class",'');
        $(this).attr("class","active");
        $(".xlcd li p a").attr("class",'');
        $("#ping").attr("style","display:none");
        $("#geng").html("更多");
        $(this).parent().parent().parent().prev().html();
        $(this).attr("value");
        $.post('/www/buy/car',{'_token':'{{csrf_token()}}','tid':$(this).attr("value")},function(data){
            text ="<a class='active' href='###' value='0'>不限</a>";
            $.each(data.data, function(i, val) {
                text+="<a href='###' value='"+val.id+"'>"+val.car_typeName+"</a>"
            });
            $('#carModel').html(text);
        })

    })

    $(".xlpp p a").click(function(){
        $(".xlcd li p a").attr("class",'');
        $(this).attr("class","active");
        $("#pingpai a").attr("class",'');
        $("#ping").attr("style","display:none");
        $("#geng").html("更多");
        //console.log($(this).parent().parent().parent().prev().html());
        //console.log($(this).attr("value"));
        $.post('/www/buy/car',{'_token':'{{csrf_token()}}','tid':$(this).attr("value")},function(data){
            text ="<a class='active' href='###' value='0'>不限</a>";
            $.each(data.data, function(i, val) {
                text+="<a href='###' value='"+val.id+"'>"+val.car_typeName+"</a>"
            });
            $('#carModel').html(text);
        })
    })

    $("#carModel").on('click','a',function(){
        $("#carModel a").attr("class",'');
        $("#pingpai a").attr("class",'');
        $(this).attr("class","active");
        //console.log($(this).parent().parent().parent().prev().html());
        console.log($(this).attr("value"));
        $.post('/www/buy/carType',{'_token':'{{csrf_token()}}','id':$(this).attr("value")},function(data){
            text ="<a  href='###' value='0'>不限</a>";
            $.each(data.data, function(i, val) {
                text+="<a href='###' value='"+val.id+"'>"+val.car_typeName+"</a>"
            });
            $('#carModel').html(text);
            $("#pingpai a[value='"+data.id+"']").attr("class",'active');
            $("#carModel a[value='"+data.tid+"']").attr("class",'active');
        })
    })
    //移入移除变换颜色
    $("#geng").mouseover(function(){
        $(this).attr("style","color:green");
    }).mouseout(function(){
        $(this).attr("style","");
    });

    $("#geng").click(function(){

    if($("#geng").html() == '更多'){
        $("#ping").attr("style","display:block");
        $(this).html("收起");
    }else{
        $("#ping").attr("style","display:none");
        $(this).html("更多");
    }
    })

    $(".dd-option a").click(function(){
        $(this).parent().prev().text($(this).text());
    })
    $(".clearfix a").click(function(){
        console.log($(this).text());
    })



</script>


</body>

@endsection
