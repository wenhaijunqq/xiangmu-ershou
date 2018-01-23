
<div class="nav">
    <div class="nav-1">
    </div>
    <div class="nav-2">
      <input id="test3" type="text" name="city1" value="北京市" readOnly="readOnly" size="8" height="20" />
    </div>
    <div class="phone">400-060-6046</div>
    <div class="login"><a href="Login.html" >登录</a></div>
    <div class="nav-nav" id="xiao">
        <a href="/" class="action">首页</a>
        <a href="/www/buy">我要买车</a>
        <a href="/www/sell">我要卖车</a>
        <a href="/www/server">瓜子服务</a>
        <a href="/home/question">瓜子问答</a>
        <a href="/home/center">个人中心</a>
    </div>
</div>
<script type="text/javascript" src='/js/jquery-3.2.1.min.js'></script>
<script>
$(function(){
    var fn2 = function(city){
        c.value = city;
    };
    $('#test3').hover(function(){
        $('#test3').css("color","red");
        citypicker.show({
            left : 172,
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
