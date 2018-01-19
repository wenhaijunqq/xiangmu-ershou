@extends('/layout/HomeLayout')
@section('title','我要卖车')

@section('content')
<link rel="stylesheet" href="/css/h_SellCar.css">
<body style="background-image: url(/img/sell-bg.290289564e5360959be1857de09bf8c4.jpg);background-repeat: no-repeat;">

		<div class="main-con">
			<div class="sell-area">
		        <div class="slogan-1">个人卖给个人,无中间商赚差价</div>
		        <div class="slogan-2">买家少花钱，卖家最高多卖20%，平均7天售出</div>
		        <div class="phone-area js-phone1">
				    <input class="phone-input js-phone-input" placeholder="请输入手机号码，1702万名车主已提交">
				    <button class="phone-btn-1 js-phone-btn">免费卖车</button>
			    	<button class="phone-btn-2 js-subAssess" data-toggle="modal" data-target="#myModal" >快速估价</button>
			    	<p class="phone-error-2 js-phone-error"></p>
				</div>
               <!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <center><h4 class="modal-title" id="myModalLabel">先估价再卖车，心里倍儿有底</h4></center>
						      </div>
						      <div class="modal-body">
						       <form class="form-horizontal">
								  <div class="form-group">
								    <label for="inputtext3" class="col-sm-2 control-label">车源地</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputtext3" placeholder="省、市">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputtext3" class="col-sm-2 control-label">车型</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputtext3" placeholder="品牌、车系、车型">
								    </div>
								  </div>
								   <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">上牌时间</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputtext3" placeholder="年份、月份">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">行驶里程</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputtext3" placeholder="单位：万公里">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">接收手机</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputtext3" placeholder="请输入您的手机号">
								    </div>
								  </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">不了，谢谢</button>
						        <button type="button" class="btn btn-success">开始估价</button>
						      </div>
						      </form>
						    </div>
						  </div>
						</div>
						<br>
				<!-- <div class="new-car-entr">
		            <a href="###" >首付10%，厂商直供，爆款新车开回家</a>
		        </div> -->
		    </div>
		    <ul class="sell-ser">
		        <li>
		            <i class="ser-icon">
		                <em class="icon-1-1"></em>
		                <em class="icon-1-2"></em>
		            </i>
		            <p><span>1.在线预约</span>评估师免费上门检测</p>
		        </li>
		        <li>
		            <i class="ser-icon">
		                <em class="icon-2-1"></em>
		            </i>
		            <p><span>2.全网代售</span>海量买家快速售出</p>
		        </li>
		        <li>
		            <i class="ser-icon ser-icon-3">
		                <em class="icon-3-1"></em>
		                <em class="icon-3-2"></em>
		            </i>
		            <p><span>3.三方约看</span>平均7日成交</p>
		        </li>
		        <li>
		            <i class="ser-icon ser-icon-4">
		                <em class="icon-4-1"></em>
		                <em class="icon-4-2"></em>
		            </i>
		            <p><span>4.签约过户</span>省心省时，全程陪同</p>
		        </li>
		    </ul>

		    <div class="recent-deal">
		        <div class="con-tit">
		            <h2>最新成交</h2>
		            <i></i>
		        </div>
		        <ul class="deal-list clearfix">
		            <div class="deal-list-wrapper clearfix" style="left: -;">
		                <li>
			                <img src="img/qn171026103824e1da9003fbad594239e68a550b082a99.jpg" alt="">
			                <h2 class="deal-p1">比亚迪F0 2009款 爱国版 1.0L 舒适型</h2>
			                <p class="deal-p2">2009年 | 4.9万公里 | 淄博</p>
			                <p class="deal-p3">成交价<em>8700元</em> 比车商多卖<i>2千元</i></p>
			                <div class="deal-day">1天<br><em>卖出</em></div>
		            	</li>
		            	<li>
			                <img src="img/qn171026103824e1da9003fbad594239e68a550b082a99.jpg" alt="">
			                <h2 class="deal-p1">比亚迪F0 2009款 爱国版 1.0L 舒适型</h2>
			                <p class="deal-p2">2009年 | 4.9万公里 | 淄博</p>
			                <p class="deal-p3">成交价<em>8700元</em> 比车商多卖<i>2千元</i></p>
			                <div class="deal-day">1天<br><em>卖出</em></div>
		            	</li>
		            	<li>
			                <img src="img/qn171026103824e1da9003fbad594239e68a550b082a99.jpg" alt="">
			                <h2 class="deal-p1">比亚迪F0 2009款 爱国版 1.0L 舒适型</h2>
			                <p class="deal-p2">2009年 | 4.9万公里 | 淄博</p>
			                <p class="deal-p3">成交价<em>8700元</em> 比车商多卖<i>2千元</i></p>
			                <div class="deal-day">1天<br><em>卖出</em></div>
		            	</li>
		            	<li>
			                <img src="img/qn171026103824e1da9003fbad594239e68a550b082a99.jpg" alt="">
			                <h2 class="deal-p1">比亚迪F0 2009款 爱国版 1.0L 舒适型</h2>
			                <p class="deal-p2">2009年 | 4.9万公里 | 淄博</p>
			                <p class="deal-p3">成交价<em>8700元</em> 比车商多卖<i>2千元</i></p>
			                <div class="deal-day">1天<br><em>卖出</em></div>
		            	</li>
		           </div>
		        </ul>
		        <a class="deal-more">查看全部成交车源</a>
		    </div>
		</div>
	<div class="guazi-qa">
	    <div class="qa-box">
	        <div class="con-tit">
	            <p>瓜子问答</p>
	            <i></i>
	        </div>
	        <ul class="qa-list clearfix">
	            <li>
	                <div class="qa-pic qa-pic-1"></div>
	                <div class="qa-con">
	                    <p class="qa-t">Q1：在瓜子卖车有什么优势？<i></i> </p>
	                    <p class="qa-txt">瓜子二手车直卖网是中国领先的二手车直卖平台，成交量遥遥领先。瓜子二手车撮合个人直接卖给个人，没有中间商赚差价，买家少花钱，卖家最高多卖20%，车辆平均7天售出，卖车流程安全省心可靠。</p>
	                </div>
	            </li>
	            <li>
	                <div class="qa-pic qa-pic-2"></div>
	                <div class="qa-con">
	                    <p class="qa-t">Q2：卖车流程是怎样的？<i></i> </p>
	                    <p class="qa-txt">1、在本页填写卖车信息或拨打400-060-6046联系我们。<br>
	                        2、接受评估师专业的上门质检，定出售价。<br>
	                        3、交易专员带领买家上门看车。<br>
	                        4、达成交易协议，瓜子二手车直卖网帮你办过户。<br></p>
	                </div>
	            </li>
	            <li>
	                <div class="qa-pic qa-pic-3"></div>
	                <div class="qa-con">
	                    <p class="qa-t">Q3：卖车需要准备什么？<i></i> </p>
	                    <p class="qa-txt">1、身份证；2、环保标；3、购置税本；4、行驶证；5、检字标；6、购置税发票；7、车辆登记证；8、交强险标；9、购车发票/最近一次过户发票；10、交强险单。</p>
	                </div>
	            </li>
	            <li>
	                <div class="qa-pic qa-pic-4"></div>
	                <div class="qa-con">
	                    <p class="qa-t">Q4：大概多久能成交？<i></i> </p>
	                    <p class="qa-txt">大部分车辆在瓜子二手车直卖网上上架7天内就可成交。</p>
	                </div>
	            </li>
	        </ul>
	    </div>
	</div>

</body>
@endsection
