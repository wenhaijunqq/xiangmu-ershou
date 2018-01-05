<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分期购车</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/yan_fqgc.css"/>
    <link rel="stylesheet" type="text/css" href="css/yan_gzfw.css"/>
    <link rel="stylesheet" type="text/css" href="css/mdui.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/mdui.js"></script>
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


            <!--热线电话-->
            <div class="hot-phone">
                <i></i>
                <span>400-023-1529</span>
            </div>


        </div>

        <!--头部导航栏-->
        <div class="nav">
            <div class="w">
                <a class="fl" href="index.html" title="瓜子二手车">首页</a>
                <a class="fl" href="PurchaseCar.html" title="天津个人二手车">我要买车</a>
                <a class="fl" href="SellCar.html" title="天津二手车出售">我要卖车</a>
                <a class="fl" href="ServerPro.html" title="瓜子二手车服务保障">服务保障</a>
                <a class="fl hot-icon" href="CarPur.html" title="二手车分期付款">
                    分期购车
                    <i></i>
                </a>
                <a class="fr app-web" href="APPDown.html" title="瓜子二手车直卖网APP">APP下载</a>
                <a class="fr" href="OldCarCon.html" title="瓜子二手车问答系统">二手车问答</a>
            </div>
        </div>
    </div>
    <!--广告区域-->
    <div id="bannerArea">
        <div class="wrapper">
            <div class="infoArea" id="applyForm">
                <div class="selfSupport" style="display: block;">
                    <div class="infoTitle">
                        定制方案
                        <span>资质越好，方案越划算</span>
                    </div>
                    <div class="inArea codeBtnArea">
                        <input class="fullInput" type="text" maxlength="11" id="selfPhone" placeholder="请输入您的手机号码"/>
                        <div class="codeBtn" id="codeBtn">获取验证码</div>
                    </div>
                    <div class="inArea">
                        <input class="fullInput" type="text" id="verify_code" maxlength="4" placeholder="请输入验证码"/>
                    </div>
                    <div class="btnArea">
                        <div class="loanBtn" id="selfLoanBtn">立即申请</div>
                        <div class="errorTip" id="selfErrorTip"></div>
                    </div>
                </div>
                <!--<div class="unSelfSupport hide"></div>-->
                <div class="infoTitle infoTitle2">正在申请人数</div>
                <div class="counterArea">
                    <div class="counterItem"><div class="counterContent">0</div></div>
                    <div class="counterItem"><div class="counterContent">4</div></div>
                    <div class="counterItem"><div class="counterContent">7</div></div>
                    <div class="counterItem"><div class="counterContent">4</div></div>
                    <div class="counterItem"><div class="counterContent">9</div></div>
                    <div class="counterItem"><div class="counterContent">0</div></div>
                </div>
            </div>
        </div>
    </div>
    <!--介绍区域-->
    <div id="introArea">
        <div class="introlWrapper">
            <div class="introlItem">
                <div class="iconArea">
                    <div class="icon"></div>
                </div>
                <div class="introTextArea">
                    <div class="introTitle">选择多</div>
                    <div class="introDescription">上千种精选金融产品</div>
                </div>
            </div>
            <div class="introlItem">
                <div class="iconArea">
                    <div class="icon icon3"></div>
                </div>
                <div class="introTextArea">
                    <div class="introTitle">审核快</div>
                    <div class="introDescription">最快30分钟完成审批</div>
                </div>
            </div>
            <div class="introlItem">
                <div class="iconArea">
                    <div class="icon icon2"></div>
                </div>
                <div class="introTextArea">
                    <div class="introTitle">通过率高</div>
                    <div class="introDescription">98%以上申请可通过</div>
                </div>
            </div>
            <div class="introlItem">
                <div class="iconArea">
                    <div class="icon icon4"></div>
                </div>
                <div class="introTextArea">
                    <div class="introTitle">一对一服务</div>
                    <div class="introDescription">金融专员全程服务</div>
                </div>
            </div>
        </div>
    </div>
    <!--壁纸展示区域-->
    <div id="wrapper">
        <div class="publicTitle">最受欢迎的分期购车</div>
        <div class="hotBuyArea">
            <a href="#" target="_blank">
                <div class="focusArea"></div>
            </a>
            <div class="hotCar">
                <div class="hotCarGroup">
                    <div class="hotCarItem">
                        <a href="#" target="_blank">
                            <div class="hotCarTitle">日供10元贷回家</div>
                            <div class="hotCarDescription">5万内练手车</div>
                            <div class="hotCardPic hotCar1"></div>
                        </a>
                    </div>
                    <div class="hotCarItem">
                        <a href="#" target="_blank">
                            <div class="hotCarTitle">月供只要1500</div>
                            <div class="hotCarDescription">工薪族最爱</div>
                            <div class="hotCardPic hotCar2"></div>
                        </a>
                    </div>
                    <div class="hotCarItem">
                        <a href="#" target="_blank">
                            <div class="hotCarTitle">同首付,买辆宽敞的</div>
                            <div class="hotCarDescription">SUV家庭代步首选</div>
                            <div class="hotCardPic hotCar3"></div>
                        </a>
                    </div>
                </div>
                <div class="hotCarGroup">
                    <div class="hotCarItem">
                        <a href="#" target="_blank">
                            <div class="hotCarTitle">低首付高品质</div>
                            <div class="hotCarDescription">准新车</div>
                            <div class="hotCardPic hotCar4"></div>
                        </a>
                    </div>
                    <div class="hotCarItem">
                        <a href="#" target="_blank">
                            <div class="hotCarTitle">每天一杯星巴克</div>
                            <div class="hotCarDescription">奔驰宝马开回家</div>
                            <div class="hotCardPic hotCar5"></div>
                        </a>
                    </div>
                    <div class="hotCarItem">
                        <a href="#" target="_blank">
                            <div class="hotCarTitle">买得早不如刚刚好</div>
                            <div class="hotCarDescription">车主急售实惠</div>
                            <div class="hotCardPic hotCar6"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="publicTitle">客户体验</div>
        <!--客户展示区域-->
        <div class="storyArea">
            <!--客户一-->
            <div class="storyItem">
                <div class="storyPic storyPic2"></div>
                <div class="storyTitle">
                    张小姐
                    <span class="storyDescription">白领</span>
                    <span class="storyMotto">申请超快超简单</span>
                </div>
                <div class="storyPrice">
                    <span class="priceTag">首付</span>
                    <span>¥</span>
                    <span class="price">1.38万</span>
                    <span class="priceTag ml20">月供</span>
                    <span>¥</span>
                    <span class="price">1152</span>
                </div>
                <div class="storyDetail">
                    贷款最怕就是一耗半个月，没想到半小时就通过了，这个夏天，终于可以美滋滋自驾了。
                </div>
            </div>
            <!--客户二-->
            <div class="storyItem">
                <div class="storyPic storyPic1"></div>
                <div class="storyTitle">
                    王先生
                    <span class="storyDescription">上班族</span>
                    <span class="storyMotto">服务太贴心了</span>
                </div>
                <div class="storyPrice">
                    <span class="priceTag">首付</span>
                    <span>¥</span>
                    <span class="price">1.26万</span>
                    <span class="priceTag ml20">月供</span>
                    <span>¥</span>
                    <span class="price">1763</span>
                </div>
                <div class="storyDetail">
                    瓜子专员全程跑前跑后，不到半天就完成了所有的手续，省下了不少时间，真是太贴心了！
                </div>
            </div>
            <!--客户三-->
            <div class="storyItem">
                <div class="storyPic storyPic3"></div>
                <div class="storyTitle">
                    李先生
                    <span class="storyDescription">个体户</span>
                    <span class="storyMotto">轻轻松松开豪车</span>
                </div>
                <div class="storyPrice">
                    <span class="priceTag">首付</span>
                    <span>¥</span>
                    <span class="price">5.7万</span>
                    <span class="priceTag ml20">月供</span>
                    <span>¥</span>
                    <span class="price">7975</span>
                </div>
                <div class="storyDetail">
                    想换一辆体面的车去跑生意，但几十万压力实在大。多亏瓜子金融，首付低费率低，搞定！
                </div>
            </div>
        </div>
        <div class="publicTitle">
            服务范围
            <span class="publicDescription">
                覆盖全国
                <span class="publicRed">24</span>个省
                精选<span class="publicRed">100</span>多家金融机构
                <span class="publicRed">1000</span>多位金融专员
            </span>
        </div>
        <div class="serviceArea"></div>
        <div class="publicTitle">贷款流程</div>
        <div class="loanProcessArea">
            <div class="processItem">
                <div class="processIconArea">
                    <div class="processIcon processIcon1"></div>
                </div>
                <div class="processText1">30秒申请</div>
                <div class="processText2">
                    需要分期购车，
                    <br>
                    提交基本信息即可申请
                </div>
            </div>
            <div class="processItem">
                <div class="processIconArea">
                    <div class="processIcon processIcon2"></div>
                </div>
                <div class="processText1">电话回访</div>
                <div class="processText2">
                    金融专员一对一沟通，
                    <br>
                    定制金融方案
                </div>
            </div>
            <div class="processItem">
                <div class="processIconArea">
                    <div class="processIcon processIcon3"></div>
                </div>
                <div class="processText1">极速审批</div>
                <div class="processText2">
                    资料提交后立即审批，
                    <br>
                    最快30分钟内告知结果
                </div>
            </div>
            <div class="processItem">
                <div class="processIconArea">
                    <div class="processIcon processIcon4"></div>
                </div>
                <div class="processText1">放款提车</div>
                <div class="processText2">
                    瓜子助您完成车辆过户、
                    <br>
                    抵押等手续后，当天放款
                </div>
            </div>
        </div>
        <div class="publicTitle">合作机构</div>
        <div class="linkArea">
            <div class="linkContent">
                <div class="linkItem"><img src="img/hezuo1.png"/></div>
                <div class="linkItem"><img src="img/hezuo2.png"/></div>
                <div class="linkItem"><img src="img/hezuo3.png"/></div>
                <div class="linkItem"><img src="img/hezuo4.png"/></div>
                <div class="linkItem"><img src="img/hezuo5.png"/></div>
                <div class="linkItem"><img src="img/hezuo6.png"/></div>
                <div class="linkItem"><img src="img/hezuo7.png"/></div>
                <div class="linkItem"><img src="img/hezuo8.png"/></div>
                <div class="linkItem"><img src="img/hezuo9.png"/></div>
                <div class="linkItem"><img src="img/hezuo10.png"/></div>
                <div class="linkItem"><img src="img/hezuo11.png"/></div>
                <div class="linkItem"><img src="img/hezuo12.png"/></div>
            </div>
            <div class="btnContent">
                <a href="#applyForm">
                    <div class="btn2">立即申请</div>
                </a>
            </div>
        </div>
    </div>

    <!--页面底部-->
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
            <img src="img/ewm-wx-2.png" class="gz-ewm">
            <p class="ewm-tit">关注微信</p>
            <img src="img/ewm-app-2.png" class="gz-ewm">
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
            </div>
        </div>
    </div>
</body>
</html>
<script>
    var city = new mdui.Select('#citySelect');
</script>