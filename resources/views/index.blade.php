<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>首页</title>
        <link rel="stylesheet" href="css/h_index.css">
        <link rel="stylesheet" href="css/h_public.css">
        <script>
            var i = 1;
            function dinashiqi(){
                if(i == 0){
                    document.getElementById('li2').style.display = 'none';
                    document.getElementById('em2').style.backgroundColor = '';
                }else{
                    document.getElementById('li'+(i-1)).style.display = 'none';
                    document.getElementById('em'+(i-1)).style.backgroundColor = '';
                }
                document.getElementById('li'+i).style.display = 'block';
                document.getElementById('em'+i).style.backgroundColor = '#000';
                i++;
                if(i == 3){
                    i = 0;
                }
            }
            function none(){
               document.getElementById('li0').style.display = 'none';
               document.getElementById('li1').style.display = 'none';
               document.getElementById('li2').style.display = 'none';
            }
            function nonecolor(){
                document.getElementById('em0').style.backgroundColor = '';
                document.getElementById('em1').style.backgroundColor = '';
                document.getElementById('em2').style.backgroundColor = '';
            }
            var int=self.setInterval("dinashiqi()",3000);
            var bei=self.setInterval("beijing()",2000);
            var y = 1;
            function beijing(){
                for (var j = 1; j < 5; j++) {
                    document.getElementById('id/img'+j).style.display = 'none';
                }
                document.getElementById('id/img'+y).style.display = 'block';
                y++;
                if(y == 5){
                    y = 1;
                }
            }

            window.onload=function(){
                var em0 = document.getElementById('em0');
                var em1 = document.getElementById('em1');
                var em2 = document.getElementById('em2');
                var zuo = document.getElementById('zuo');
                var you = document.getElementById('you');
                em0.onclick=function(){
                    int = window.clearInterval(int);
                    none();
                    document.getElementById('li0').style.display = 'block';
                    nonecolor();
                    document.getElementById('em0').style.backgroundColor = '#000';
                    int=self.setInterval("dinashiqi()",3000);
                    i = 0;
                }
                em1.onclick=function(){
                    int = window.clearInterval(int);
                    none();
                    document.getElementById('li1').style.display = 'block';
                    nonecolor();
                    document.getElementById('em1').style.backgroundColor = '#000';
                    int=self.setInterval("dinashiqi()",3000);
                    i = 1;
                }
                em2.onclick=function(){
                    int = window.clearInterval(int);
                    none();
                    document.getElementById('li2').style.display = 'block';
                    nonecolor();
                    document.getElementById('em2').style.backgroundColor = '#000';
                    int=self.setInterval("dinashiqi()",3000);
                    i = 2;
                }
                zuo.onclick = function(){
                    int = window.clearInterval(int);
                    i++;
                    if(i>2){i = 0}
                    none();
                    nonecolor();
                    document.getElementById('li'+i).style.display = 'block';
                    document.getElementById('em'+i).style.backgroundColor = '#000';
                    if (i==3) {i = 0}
                    int=self.setInterval("dinashiqi()",3000);
                }
                you.onclick = function(){
                    int = window.clearInterval(int);
                    i--;
                    if(i<0){i = 2}
                    none();
                    nonecolor();
                    document.getElementById('li'+i).style.display = 'block';
                    document.getElementById('em'+i).style.backgroundColor = '#000';
                    if (i==3) {i = 0}
                    int=self.setInterval("dinashiqi()",3000);
                }
            }
        </script>
    </head>
    <body style="background-color: #f5f5f7">
        <header class="head">
            <ul >
                <li id="li0" style="background-image: url('/img/m-1.png');background-repeat: on-repeat;"></li>
                <li id="li1" style="background-image: url('/img/m-2.png');background-repeat: on-repeat;display: none;"></li>
                <li id="li2" style="background-image: url('/img/m-3.png');display: none;background-repeat: on-repeat;"></li>
            </ul>
            @include('header');
                <span id="zuo" style="position:absolute;top:200px;left: 7px;font-size: 20px;color: #888;font-weight: 900;">&lt;</span>
                <span id="you" style="position:absolute;top:200px;right: 7px;font-size: 20px;color: #888;font-weight: 900;">&gt;</span>
                <div class="nav-btn">
                    <em id="em0" style="background-color:#000"></em>
                    <em id="em1"></em>
                    <em id="em2"></em>
                </div>
        </header>
        <div id="body">
            <div class="head-body">
                <div>
                    <div class="head-body-left">
                        <div class="head-body-youou">
                            <a href="#">我要买车 ></a>
                            <div>
                                <input type="text">
                            </div>
                        </div>
                        <div class="head-body-piaonei">
                            <a href="#"></img  src="/img/dazhong.png">大众</a>
                            <a href="#"  class="kongge">丰田</a>
                            <a href="#" class="kongge">福特</a>
                            <a href="#" class="kongge">奔驰</a>
                            <a href="#" class="kongge">宝马</a>
                            <a href="#" class="kongge">奥迪</a>
                            <a href="#" class="kongge">...更多</a>
                        </div>
                        <div class="head-body-piaonei">
                            <a href="#">3万以下</a>
                            <a href="#"  class="kongge">3-5万</a>
                            <a href="#" class="kongge">5-7万</a>
                            <a href="#" class="kongge">7-9万</a>
                            <a href="#" class="kongge">9-12万</a>
                            <a href="#" class="kongge">12-16万</a>
                            <a href="#" class="kongge">16-20万</a>
                        </div>
                        <div class="head-body-piaonei">
                            <a href="#">超值</a>
                            <a href="#"  class="kongge">急售</a>
                            <a href="#" class="kongge">练手车</a>
                            <a href="#" class="kongge">准新车</a>
                            <a href="#" class="kongge">保卖车</a>
                            <a href="#" class="kongge">SUV</a>
                            <a href="#" class="kongge">MPV</a>
                        </div>

                    </div>
                    <div class="head-body-right">
                        <div class="head-body-haha">
                            <a href="#">我要买车 ></a>
                            <span>已有<span  class="phone-number">16891648</span>人提交申请</span>
                        </div>
                        <div>
                            <input type="text" class="phone-in" placeholder="请输入手机号">
                        </div>
                        <div>
                            <button class="btn-woyao" style="background: #3cb46d;">我要买车</button>
                            <button class="btn-woyao" style="background: #88ba00;margin-left: 5px">免费估计</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="channel-operate-title">
                <h3>瓜子金融</h3>
                <span>上千种精选金融产品 l 最快30分钟完成审批 l 98%以上申请可通过 l 金融专员全程服务</span>
            </div>
            <ul class="channel-operate-body">
                <li>
                    <a href="#"></img src="/img/02781cc7e2415d2be8c8c82fac35b23d.png" alt=""></a>
                </li>
                <li class="channel-operate-li1" style="">
                    <a href="#">
                        </img src="/img/6c0406e9ebdff3cb8dd0c6403244a790.png" alt="">
                        <p>日供十元贷回家</p>
                        <p style="color: #f76367;font-weight: 0">五万以 内练新车</p>
                    </a>
                </li>
                <li style="width: 470px;height: 165px;margin-bottom: 16px;">
                    </img src="//img/f6e60e0f1837835de646be1f3bfb646c.png" style="margin-top:40px;" alt="">
                    <div class="operate-item-text">
                        <p>千元月供买好车</p>
                        <p style="color: #f76367;font-weight: 0">5-10万 中产车</p>
                    </div>
                </li>
                <li style="width: 470px;height: 165px;">
                    </img src="/img/8c0d350f2603b2708eb707c5ce64aac9.png" style="margin-top:40px;" alt="">
                    <div class="operate-item-text">
                        <p>五万首付高品质</p>
                        <p style="color: #f76367;font-weight: 0">10-20万 热门车</p>
                    </div>
                </li>
                <li style="margin-left: 16px;margin-top:-180px;">
                    </img src="/img/7aab69e905b387698076e3d988064d60.png" alt="">
                </li>
            </ul>
            <div class="jaioyiguohu">
                <div class="id/img" id="id/img1"></img  style="height: 400px;margin-left: -210px;" src="/img/02zhuanrendaikan@2x.jpg" alt=""></div>
                <div class="id/img" id="id/img2"></img  style="height: 400px;margin-left: -210px;" src="/img/01yuyuekanche@2X.jpg" alt=""></div>
                <div  class="id/img" id="id/img3"></img  style="height: 400px;margin-left: -210px;" src="/img/03qianshuhetong@2x.jpg" alt=""></div>
                <div class="id/img" id="id/img4"></img  style="height: 400px;margin-left: -210px;" src="/img/buy-step-deal.jpg" alt=""></div>
                <div class="zeyan" ></img  style="height: 400px;margin-left: -80px;" src="/img/mask.3642195d3f6eed370c899cc57e6f772e.png" alt=""></div>
                <div class="wenzi">
                    <span class="pppp">买车流程</span>
                    <span>|</span>
                    <span>卖车流程</span>
                    <div class="tishi">
                        <p class="bigkanche">预约看车</p>
                        <p class="xianxi">拨打400-060-6046或在线预约</p>
                    </div>
                    <div class="tupian">
                        <p  style="float: left;"></img src="/img/h--20171025164607.jpg" alt=""><br>预约看车&nbsp;&nbsp;&nbsp;>>&nbsp;</p>
                        <p style="float: left;"></img src="/img/57x4920171025170200.jpg" alt=""><br>专人带看&nbsp;&nbsp;&nbsp;>>&nbsp;</p>
                        <p style="float: left;"></img src="/img/57X4920171025170443.jpg" alt=""><br>预约看车&nbsp;&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
                        <p style="float: left;"></img src="/img/57x4920171025170548.jpg" alt=""><br>预约看车&nbsp;&nbsp;&nbsp;>>&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="nerongbianti">
                <span class="pppp">猜您喜欢</span>
                <span>保卖车</span>
                <span>最新上架</span>
                <span>降价急售</span>
                <span>准新车</span>
                <span>练手车</span>
                <span>SUV</span>
            </div>
            <div class="chezhang  ">
                <ul class="clearfix ">
                    <li><a href="">
                            </img src="/img/qn17102216270379f5222e954b8af4bded5f5e61d64f1e.jpg" alt="">
                            <h3 class="t">丰田卡罗拉 2014款 1.6L CVT GL</h3>
                            <div class="t-i">2015年<span class="icon-pad">|</span>4.5万公里</div>
                            <div class="t-price">
                                <!-- 价格 -->
                                <p>10.70<span>万</span></p>
                                <!-- 标签 -->
                                <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">14.60万</em>
                            </div>
                        </a>
                    </li>
                    <li><a href="">
                            </img src="/img/qn17102216270379f5222e954b8af4bded5f5e61d64f1e.jpg" alt="">
                            <h3 class="t">丰田卡罗拉 2014款 1.6L CVT GL</h3>
                            <div class="t-i">2015年<span class="icon-pad">|</span>4.5万公里</div>
                            <div class="t-price">
                                <!-- 价格 -->
                                <p>10.70<span>万</span></p>
                                <!-- 标签 -->
                                <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">14.60万</em>
                            </div>
                        </a>
                    </li>
                    <li><a href="">
                            </img src="/img/qn17102216270379f5222e954b8af4bded5f5e61d64f1e.jpg" alt="">
                            <h3 class="t">丰田卡罗拉 2014款 1.6L CVT GL</h3>
                            <div class="t-i">2015年<span class="icon-pad">|</span>4.5万公里</div>
                            <div class="t-price">
                                <!-- 价格 -->
                                <p>10.70<span>万</span></p>
                                <!-- 标签 -->
                                <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">14.60万</em>
                            </div>
                        </a>
                    </li>
                    <li><a href="">
                            </img src="/img/qn17102216270379f5222e954b8af4bded5f5e61d64f1e.jpg" alt="">
                            <h3 class="t">丰田卡罗拉 2014款 1.6L CVT GL</h3>
                            <div class="t-i">2015年<span class="icon-pad">|</span>4.5万公里</div>
                            <div class="t-price">
                                <!-- 价格 -->
                                <p>10.70<span>万</span></p>
                                <!-- 标签 -->
                                <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">14.60万</em>
                            </div>
                        </a>
                    </li>
                    <li><a href="">
                            </img src="/img/qn17102216270379f5222e954b8af4bded5f5e61d64f1e.jpg" alt="">
                            <h3 class="t">丰田卡罗拉 2014款 1.6L CVT GL</h3>
                            <div class="t-i">2015年<span class="icon-pad">|</span>4.5万公里</div>
                            <div class="t-price">
                                <!-- 价格 -->
                                <p>10.70<span>万</span></p>
                                <!-- 标签 -->
                                <i class="i-orange">超值</i><i class="i-green">准新车</i><em class="line-through">14.60万</em>
                            </div>
                        </a>
                    </li>

                </ul>
                <div class="index-carmore">
                    <a style="font-size: 13px;font-weight: 700" href="###buy/">更多猜您喜欢 <span style="border: 1px solid #08A506;border-radius: 50%;padding:0 4px;color: #08A506">></span></a>
                </div>
            </div>
            <div class="index-foot-buysell">
                <div class="w1200 clearfix">
                    <span class="iconbg"></span>
                    <p class="foot-buysell-tel fl"><span class="iconbg"></span>免费咨询电话：400-060-6046</p>
                    <div class="foot-buysell-btn fl">
                        <a href="###buy/" class="foot-btn-buy">我要买车</a>
                        <a href="###sell/" class="foot-btn-sell" >我要卖车</a>
                    </div>
                </div>
            </div>
        </div>
        @include('footer');
    </body>
</html>
