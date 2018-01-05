<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>我要买车</title>
        <link rel="stylesheet" href="/css/h_PurchaseCar.css">
        <link rel="stylesheet" href="/css/h_public.css">
    </head>
    <body>
        <header class="head">
            @include('header');
        </header>
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
                        </div>
                    </dd>
                </dl>
                <!-- 车系 -->
                <dl class="clearfix">
                    <dt>车系</dt>
                    <dd>
                        <div class="dd-top">
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
            <p class="result-p3">共为您找到1670辆好车</p>
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
                <li><a href="">
                </img src="/img/7aab69e905b387698076e3d988064d60.png" alt="">
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
                        <em class="icon-sale">急降<br><span>3000</span>元</em>
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
                        <em class="icon-sale">急降<br><span>3000</span>元</em>
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
                        <em class="icon-sale">急降<br><span>3000</span>元</em>
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
        <div class="footer">
            <!--加载footer 信息部分 -->
            <div class="company-info clearfix">
                <div class="footer-logo"></div>
                <div class="phone-email">
                    <p>
                        咨询电话：<i>400-060-6046</i> <br>
                        <span>（周一至周日 8:00-21:00）</span>
                    </p>
                    <p>
                        售后服务专线：<i>400-066-8780</i> <br>
                        <span>（周一至周日 9:00-21:00）</span>
                    </p>
                </div>
                </img src="/img/ewm-wx-2.png" alt="" class="gz-ewm">
                <p class="ewm-tit">关注微信</p>
                </img src="/img/ewm-app-2.png" alt="" class="gz-ewm">
                <p class="ewm-tit">下载APP</p>
                <div class="basic-info">
                    <div class="info-link">
                        <a rel="nofollow" href="###aboutus/" target="_blank">关于瓜子</a>
                        <a rel="nofollow" href="###"  target="_blank">加入我们</a>
                        <a rel="nofollow" href="###" target="_blank">联系我们</a>
                        <a rel="nofollow" href="###" target="_blank">服务保障</a>
                    </div>
                    <p class="arc-info">Copyright 2017 www.guazi.com All Rights Reserved</p>
                    <p class="arc-info">京ICP备15053955号  ICP证151071号 </p>
                    <div class="protect clearfix">
                        <a class="police" rel="nofollow" target="_blank" href="#">京公网安备11010802020161号</a>
                    </div>
                    <div class="protect protect-icon-xin315 clearfix">
                        <a href="#" class="icon-xin" target="_blank"></a>
                        <a  href="#" class="icon-315" target="_blank"></a>
                    </div>
                </div>
            </div>
            <!--seo 链接 -->

            <div class="friendly-link">
                <p class="link-tit">热门品牌：</p>
                <span class="open-box"></span>
                <span class="close-box" data-role="is_show_box"></span>
                <a href="###" target="_blank">天津二手大众</a>
                <a href="###" target="_blank">天津二手丰田</a>
                <a href="###" target="_blank">天津二手福特</a>
                <a href="##" target="_blank">天津二手奔驰</a>
                <a href="###" target="_blank">天津二手宝马</a>
                <a href="###" target="_blank">天津二手奥迪</a>
                <a href="###" target="_blank">天津二手别克</a>
                <a href="###" target="_blank">天津二手现代</a>
                <a href="###" target="_blank">天津二手日产</a>
                <a href="###" target="_blank">天津二手起亚</a>
                <a href="###" target="_blank">天津二手比亚迪</a>
                <a href="###" target="_blank">天津二手标致</a>
                <a href="###" target="_blank">天津二手本田</a>
                <a href="###" target="_blank">天津二手雪佛兰</a>
                <a href="###" target="_blank">天津二手雪铁龙</a>
                <a href="###" target="_blank">天津二手哈弗</a>
                <a href="###" target="_blank">天津二手吉利</a>
                <a href="###" target="_blank">天津二手夏利</a>
                <a href="###" target="_blank">天津二手长安</a>
                <a href="###" target="_blank">天津二手一汽</a>
                <a href="###" target="_blank">天津二手奇瑞</a>
                <a href="###" target="_blank">天津二手长城</a>
                <a href="###" target="_blank">天津二手五菱</a>
                <a href="###" target="_blank">天津二手路虎</a>
                <a href="###" target="_blank">天津二手马自达</a>
                <a href="###" target="_blank">天津二手斯柯达</a>
                <a href="###" target="_blank">天津二手江淮</a>
                <a href="###" target="_blank">天津二手保时捷</a>
                <a href="###" target="_blank">天津二手MINI</a>
                <a href="###" target="_blank">天津二手众泰</a>
                <a href="###" target="_blank">天津二手海马</a>
                <a href="###" target="_blank">天津二手传祺</a>
                <a href="###" target="_blank">天津二手铃木</a>
                <a href="###" target="_blank">天津二手MG</a>
                <a href="###" target="_blank">天津二手沃尔沃</a>
            </div>
            <div class="friendly-link">
                <p class="link-tit">热门车系：</p>
                <span class="open-box"></span>
                <span class="close-box" data-role="is_show_box"></span>
                <a href="###" target="_blank">天津二手大众速腾</a>
                <a href="###" target="_blank">天津二手大众宝来</a>
                <a href="###" target="_blank">天津二手大众迈腾</a>
                <a href="### " target="_blank">天津二手大众朗逸</a>
                <a href="### " target="_blank">天津二手大众高尔夫</a>
                <a href="### " target="_blank">天津二手大众途观</a>
                <a href="### - " target="_blank">天津二手大众大众PO...</a>
                <a href="### " target="_blank">天津二手大众捷达</a>
                <a href="### - " target="_blank">天津二手福特福克斯</a>
                <a href="### " target="_blank">天津二手哈弗哈弗H6</a>
                <a href="### " target="_blank">天津二手丰田卡罗拉</a>
                <a href="###  " target="_blank">天津二手丰田普拉多</a>
                <a href="### " target="_blank">天津二手丰田威驰</a>
                <a href="### " target="_blank">天津二手丰田凯美瑞</a>
                <a href="#####" target="_blank">天津二手夏利夏利</a>
                <a href="###" target="_blank">天津二手宝马宝马3系</a>
                <a href="####" target="_blank">天津二手宝马宝马5系</a>
                <a href="###" target="_blank">天津二手奥迪奥迪A6...</a>
                <a href="###" target="_blank">天津二手奥迪奥迪A4...</a>
                <a href="###" target="_blank">天津二手奥迪奥迪Q5</a>
                <a href="###" target="_blank">天津二手别克凯越</a>
                <a href="#####" target="_blank">天津二手别克君威</a>
                <a href="####" target="_blank">天津二手别克君越</a>
                <a href="#####" target="_blank">天津二手雪铁龙世嘉</a>
                <a href="####" target="_blank">天津二手雪佛兰科鲁兹</a>
                <a href="####" target="_blank">天津二手雪佛兰赛欧</a>
                <a href="####" target="_blank">天津二手奔驰奔驰C级</a>
                <a href="####" target="_blank">天津二手奔驰奔驰E级</a>
                <a href="####" target="_blank">天津二手日产轩逸</a>
                <a href="####" target="_blank">天津二手日产天籁</a>
                <a href="####" target="_blank">天津二手标致标致20...</a>
                <a href="####" target="_blank">天津二手比亚迪秦</a>
                <a href="####" target="_blank">天津二手本田本田CR...</a>
                <a href="###" target="_blank">天津二手起亚智跑</a>
                <a href="####" target="_blank">天津二手现代现代ix...</a>
            </div>
            <div class="friendly-link">
                <p class="link-tit">友情链接：</p>
                <span class="open-box"></span>
                <span class="close-box" data-role="is_show_box"></span>
                <a href="###">天津厂房出租</a>
                <a href="###">天津学车</a>
                <a href="###">天津二手车</a>
                <a href="###">天津百姓网</a>
                <a href="###">天津天气预报15天</a>
                <a href="###">天津信息网</a>
                <a href="###">天津二手车</a>
                <a href="###">天津车市</a>
                <a href="###">天津二手车</a>
                <a href="###">天津房产网</a>
                <a href="###">天津建材网</a>
                <a href="###">天津二手车</a>
                <a href="###">天津车展</a>
                <a href="###">天津汽车网</a>
                <a href="###">天津二手车</a>
                <a href="###">天津汽车网</a>
                <a href="###">天津汽车陪练</a>
                <a href="###">天津信息港</a>
                <a href="###">搜狐汽车天津站</a>
                <a href="###">天津二手车</a>
                <a href="###">天津二手设备回收</a>
                <a href="###">天津二手车</a>
                <a href="###">天津地图</a>
                <a href="###">天津汽车网</a>
                <a href="###">天津分类信息</a>
                <a href="###">天津汽车票</a>
                <a href="###">高速路况查询</a>
            </div>

            <div class="friendly-link">
                <p class="link-tit">热门城市：</p>
                <span class="open-box"></span>
                <span class="close-box" data-role="is_show_box"></span>
                <a href="##">全国二手车</a>
                <a href="##">郑州二手车</a>
                <a href="##">上海二手车</a>
                <a href="##">沈阳二手车</a>
                <a href="##">昆明二手车</a>
                <a href="##">北京二手车</a>
                <a href="##">南宁二手车</a>
                <a href="##">长春二手车</a>
                <a href="##">成都二手车</a>
                <a href="###">天津二手车</a>
                <a href="##">广州二手车</a>
                <a href="##">重庆二手车</a>
                <a href="##">东莞二手车</a>
                <a href="##">大连二手车</a>
                <a href="##">石家庄二手车</a>
                <a href="##">杭州二手车</a>
                <a href="##">兰州二手车</a>
                <a href="##">青岛二手车</a>
                <a href="##">西安二手车</a>
                <a href="##">宁波二手车</a>
                <a href="##">济南二手车</a>
                <a href="##">深圳二手车</a>
                <a href="##">贵阳二手车</a>
                <a href="##">唐山二手车</a>
                <a href="##">哈尔滨二手车</a>
                <a href="##">苏州二手车</a>
                <a href="##">武汉二手车</a>
                <a href="##">佛山二手车</a>
                <a href="##">福州二手车</a>
                <a href="##">南京二手车</a>
                <a href="#">长沙二手车</a>
                <a href="#">二手车</a>
            </div>



            <div class="friendly-link">
                <p class="link-tit">移动版：</p>
                <a href="###">瓜子二手车天津移动页</a>
            </div>

            <div class="friendly-link">
                <p class="link-tit">热门页面：</p>
                <span class="open-box"></span>
                <span class="close-box" data-role="is_show_box"></span>
                <a href="#">1万元二手车</a>
                <a href="#">2万左右二手车</a>
                <a href="#">3万的二手车</a>
                <a href="#">4万的二手车</a>
                <a href="#">5万以下二手车</a>
                <a href="#">二手越野车</a>
                <a href="#">二手商务车</a>
                <a href="#">二手跑车</a>
                <a href="#">自动挡二手车</a>
                <a href="#">急卖二手车</a>
                <a href="#">低价出售二手车</a>
                <a href="#">二手车评估</a>
                <a href="#">二手车分期付款</a>
                <a href="#">二手豪华车</a>
                <a href="#">二手柴油越野车</a>
                <a href="#">7座二手车</a>
                <a href="#">便宜二手奥迪</a>
                <a href="#">柴油二手车</a>
                <a href="#">二手电动汽车</a>
                <a href="#">最新二手车</a>
                <a href="#">买卖二手车</a>
                <a href="#">二手七座商务车</a>
                <a href="#">全国二手车</a>
                <a href="#">天津二手车交易网</a>
                <a href="#">网站地图</a>
            </div>


            <!--公司信息-->
            <p style="text-align:center;line-height:20px;font-size:12px;color:#666; padding-top:20px;">
                车好多旧机动车经纪（北京）有限公司   
                北京市丰台区南四环中路260号北京新发地汽车交易市场旧车经营区B区178号   
                010-57317000
            </p>
        </div>
    </body>
</html>
