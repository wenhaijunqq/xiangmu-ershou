<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>瓜子服务</title>
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="/css/yan_gzfw.css"/>
        <link rel="stylesheet" type="text/css" href="/css/mdui.css"/>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
        <script src="/js/bootstrap.js"></script>
        <script src="/js/jquery-3.2.1.js"></script>
        <script src="/js/mdui.js"></script>
    </head>
    <body>
        <!-- 头部-->
        <div id="header">
            <!-- 头部上部-->
            <div class="top">
                <div class="top_icon"></div>

                <!--地区选择下拉框-->
                <div class="city">
                    <select class="mdui-select" id="citySelect">
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

                    <a class="fr app-web" href="APPDown.html" title="瓜子二手车直卖网APP">
                        APP下载
                        <div class="app-guide">
                            <div class="guide-ewm"></img src="/img/ewm-app-3.png" alt="瓜子二手车app下载"></div>
                            <div class="guide-txt">
                                <p class="guide-txt-1">下载APP使用更多功能</p>
                                <p class="guide-txt-2">收藏查看-更方便</p>
                                <p class="guide-txt-2">降价提醒-更及时</p>
                                <p class="guide-txt-2">账户管理-更智能</p>
                                <p class="guide-txt-2">新车上架-更实时</p>
                            </div>
                        </div>
                    </a>
                    <a class="fr" href="/www/oldcar" title="瓜子二手车问答系统">二手车问答</a>
                </div>
            </div>
        </div>
        <!-- 广告部分--->
        <div id="banner">
            <div class="logo-con">
                <span class="logo-gz"></span>
                <div class="linebox"><p>成交量遥遥领先</p></div>
            </div>

            <div class="text-instruction">
                无中间商赚差价
                <i>●</i>
                259项检测
                <i>●</i>
                14天可退
                <i>●</i>
                1年2万公里质保
            </div>

            <div class="ban-hot-phone">
                <a href="javascript:void(0);">售后咨询热线 400-066-8780</a>
            </div>
        </div>
        <div class="w">
            <h3>直接和车主交易,无中间商赚差价</h3>
            <div class="s_bg1"></div>
        </div>
        <div id="security">
            <div class="s-w">
                <h3>259项全车检测,安全</h3>
                <ul class="li-top">
                    <li>
                        <p class="p1">259项专业检测</p>
                        <p class="p2">
                            原奥迪中国二手车业务总监
                            <br>
                            领衔制定
                        </p>
                    </li>
                    <li>
                        <p class="p1">完备的检测流程</p>
                        <p class="p2">
                            车辆上架前严格审核质量
                            <br>
                            成交过户前车况复检
                        </p>
                        <span class="green-icon">排除重大事故</span>
                    </li>
                    <li>
                        <p class="p1">专业的评估师团队</p>
                        <p class="p2">
                            岗前培训
                            <br>
                            考核上岗 经验丰富
                        </p>
                    </li>
                </ul>
                <div class="car-abox">
                    <div class="car-a1"></div>
                    <div class="car-a1 car-a2"></div>
                    <div class="car-a1 car-a3"></div>
                    <div class="round-box">
                        <a class="point" href="javascript:void(0)"></a>
                        <a class="point" href="javascript:void(0)"></a>
                        <a class="point" href="javascript:void(0)"></a>
                    </div>
                </div>
                <ul class="li-bottom">
                    <li>
                        <span class="green-icon">排除火烧车</span>
                        <p>发动机线束及橡胶制品无熏烟/火烧；</p>
                        <p>舱内保险丝盒熏烟/火烧；</p>
                        <p>车辆覆盖件及驾驶舱无熏烟/火烧；</p>
                        <p>防火墙无熏烟/火烧；</p>
                    </li>
                    <li class="pad-li">
                        <p>内饰无泥沙、水痕；</p>
                        <p>发动机舱无泥痕；</p>
                        <p>保险丝盒内无泥痕；</p>
                        <p>散热器无水痕；</p>
                    </li>
                    <li>
                        <span class="green-icon">排除泡水车</span>
                        <p>音响喇叭底部无水痕；</p>
                        <p>驾驶舱地毯无水痕；</p>
                        <p>后备箱及备胎槽无水痕；</p>
                        <p>座椅滑轨内无水痕；</p>
                    </li>
                    <li class="pad-li">
                        <p>后排座椅无水痕；</p>
                        <p>安全带底部是否有水浸痕迹；</p>
                        <p>全车地胶地毯是否有水浸痕迹</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w">
            <h3>全程陪同交易,省心</h3>
            <ul class="four-list"></ul>
        </div>
        <div class="s_back">
            <div class="w">
                <h3>14天可退1年质保,无忧</h3>
                <ul>
                    <li>
                        <p class="p1">重大事故14天可退</p>
                        <span class="/img1"></span>
                        <p class="p2">
                            担心买到问题车？
                            <br>
                            14天可退，瓜子二手车提供兜底保障
                        </p>
                    </li>
                    <li>
                        <p class="p1">一年两万公里质保</p>
                        <span class="/img2"></span>
                        <p class="p2">
                            二手车也有新车般保障
                            <br>
                            1年两万公里质保，买后无担忧
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="question"></div>

        <!------------------------底部------------------------------------------------------->
        <div class="footer">
            <div class="company-info">
                <div class="footer-logo"></div>
                <div class="phone-eamil">
                    <p>
                        咨询电话：
                        <i>400-023-1529</i>
                        <br>
                        <span>（周一至周日 8:00-21:00）</span>
                    </p>
                    <p>
                        售后服务专线：
                        <i>400-066-8780</i>
                        <br>
                        <span>（周一至周日 9:00-21:00）</span>
                    </p>
                </div>
                </img src="/img/ewm-wx-2.png" class="gz-ewm">
                <p class="ewm-tit">关注微信</p>
                </img src="/img/ewm-app-2.png" class="gz-ewm">
                <p class="ewm-tit">下载APP</p>
                <div class="basic-info">
                    <div class="info-link">
                        <a target="_blank">关于瓜子</a>
                        <a target="_blank">加入我们</a>
                        <a target="_blank">联系我们</a>
                        <a target="_blank">服务保障</a>
                    </div>
                    <p class="arc-info">Copyright 2017 www.guazi.com All Rights Reserved</p>
                    <p class="arc-info">京ICP备15053955号  ICP证151071号 </p>
                    <div class="protect"></div>
                    <div class="protect-icon"></div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    var currentIndex=1;
    var holder;
    var securityDiv;
    var points;

    $(function () {
        var city = new mdui.Select('#citySelect');


        securityDiv=$(".car-a1").select();
        points=$(".point");
        holder=setInterval("changeImage()",3000);

    });

    function  changeImage() {
        securityDiv.each(function (index,element) {
           if(index==currentIndex)
               securityDiv[index].style.display="block";
           else
               securityDiv[index].style.display="none";
        });
        points[currentIndex].className="point";
        currentIndex=(++currentIndex)%securityDiv.length;
        points[currentIndex].className="point active";
    }
</script>
