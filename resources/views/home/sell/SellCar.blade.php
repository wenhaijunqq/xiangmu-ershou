@extends('/layout/HomeLayout')
@section('title','我要卖车')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
       <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="/js/bootstrap.min.js"></script>
       <style type="text/css">
		span{
			padding-left: 15px;
			font-size: 12px;
		}
	</style>
<body style="background-image: url(/img/sell-bg.290289564e5360959be1857de09bf8c4.jpg);background-repeat: no-repeat;">

		<div class="main-con">
			<div class="sell-area">
		        <div class="slogan-1">个人卖给个人,无中间商赚差价</div>
		        <div class="slogan-2">买家少花钱，卖家最高多卖20%，平均7天售出</div>
		        <div class="phone-area js-phone1">
		       	<center>	
		        	<input class="phone-input js-phone-input" placeholder="请输入手机号码，1702万名车主已提交" style="width:550px;" type="text" id="tel">
			    	<button class="phone-btn-2 js-subAssess" data-toggle="modal" data-target="#myModal" style="width:160px;" id="bon">我要卖车</button>
			    </center>
				</div>
               <!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <center><h3 class="modal-title" id="myModalLabel">只差1步，多卖20%，平均7天成交</h4></center>
						      </div>
						      <div class="modal-body">
						       <form class="form-horizontal" action="/home/sell" method="POST" id="myform">
						        {{ csrf_field() }}
     							{{ method_field('POST')}}
								  <div class="form-group">
								    <label for="inputtext3" class="col-sm-2 control-label">车源地</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="from" placeholder="省、市" name="from"><span></span>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputtext3" class="col-sm-2 control-label">车型</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="models" placeholder="品牌、车系、车型" name="models"><span></span>
								    </div>
								  </div>
								   <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">上牌时间</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="register" placeholder="年份-月份-日期" name="register"><span></span>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">行驶里程</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="kilometres" placeholder="单位：万公里" name="kilometres"><span></span>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">接收手机</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="phone" placeholder="请输入您的手机号" name="phone"><span></span>
								    </div>
								  </div>
								  <center><h4 class="modal-title" id="myModalLabel">免费咨询 400-023-1529</h4></center>							
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">不了，谢谢</button>
						        <input type="submit" class="btn btn-success" value="开始估价">
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
			                <img src="{{$car1->car_pic}}" alt="">
			                <h2 class="deal-p1">{{$car1->Vbrand}} {{$car1->car_name}} {{$car1->displacement}} </h2>
			                <p class="deal-p2">{{$car1->car_license}} | {{$car1->km}}公里 | {{$car1->add}}</p>
			                <p class="deal-p3">成交价<em>{{$data[0]->price}}元</em> 
		            	</li>
		            	<li>
			                <img src="{{$car2->car_pic}}" alt="">
			                <h2 class="deal-p1">{{$car2->Vbrand}} {{$car2->car_name}} {{$car2->displacement}} </h2>
			                <p class="deal-p2">{{$car2->car_license}} | {{$car2->km}}公里 | {{$car2->add}}</p>
			                <p class="deal-p3">成交价<em>{{$data[1]->price}}元</em> 
		            	</li>
		            	<li>
			                <img src="{{$car3->car_pic}}" alt="">
			                <h2 class="deal-p1">{{$car3->Vbrand}} {{$car3->car_name}} {{$car3->displacement}} </h2>
			                <p class="deal-p2">{{$car3->car_license}} | {{$car3->km}}公里 | {{$car3->add}}</p>
			                <p class="deal-p3">成交价<em>{{$data[2]->price}}元</em> 
		            	</li>
		            	<li>
			                <img src="{{$car4->car_pic}}" alt="">
			                <h2 class="deal-p1">{{$car4->Vbrand}} {{$car4->car_name}} {{$car4->displacement}} </h2>
			                <p class="deal-p2">{{$car4->car_license}} | {{$car4->km}}公里 | {{$car4->add}}</p>
			                <p class="deal-p3">成交价<em>{{$data[3]->price}}元</em> 
		            	</li>
		           </div>
		        </ul>
				<p></p>
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
	<script type="text/javascript">
		//绑定手机号按钮
		$('#bon').click(function(){
			var pho = $('#tel').val();
			// alert(pho);
			document.getElementById("phone").value = pho;
		});
		//弹出框
		var preg_from = /\S{1,}/;
		var preg_models = /\S{1,}/;
		var preg_kilometres = /^([1-9]|10)$/;
		var preg_register = /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/;
		var preg_phone = /^1[3|4|5|7|8]\d{9}$/;
		//获取标签
		var span = document.getElementsByTagName('span');
		var myform = document.getElementById('myform');
		// 标识符
		var isFrom = false;
		var isModels = false;
		var isKilometres = false;
		var isRegister = false;
		var isPhone = false;
		//绑定点击事件
		myform.onsubmit = function(){

			var from = this.from.value;
			var models = this.models.value;
			var kilometres = this.kilometres.value;
			var register = this.register.value;
			var phone = this.phone.value;

			//检测车源地
			if(preg_from.test(from)){
				// 匹配成功
				span[3].innerHTML = '<font color="green">车源地格式正确</font>'; 
				isFrom = true;
			}else{m
				// 匹配失败
				span[3].innerHTML = '<font color="red">请输入车源地</font>';
				isFrom = false;
			}

			//检测车型
			if(preg_models.test(models)){
				// 匹配成功
				span[4].innerHTML = '<font color="green">车型格式正确</font>'; 
				isModels = true;
			}else{
				// 匹配失败
				span[4].innerHTML = '<font color="red">请输入车辆型号</font>';
				isModels = false;
			}

			//检测上牌时间
			if(preg_register.test(register)){
				// 匹配成功
				span[5].innerHTML = '<font color="green">上牌日期格式正确</font>'; 
				isRegister = true;
			}else{
				// 匹配失败
				span[5].innerHTML = '<font color="red">请输入上牌时间或您输入的时间格式不正确</font>';
				isRegister = false;
			}

			//检测公里数
			if(preg_kilometres.test(kilometres)){
				// 匹配成功
				span[6].innerHTML = '<font color="green">公里数格式正确</font>'; 
				isKilometres = true;
			}else{
				// 匹配失败
				span[6].innerHTML = '<font color="red">请输入公里数或您输入的公里数格式不正确</font>';
				isKilometres = false;
			}


			//检测手机号
			if(preg_phone.test(phone)){
				// 匹配成功
				span[7].innerHTML = '<font color="green">恭喜手机号可用</font>'; 
				isPhone = true;
			}else{
				// 匹配失败
				span[7].innerHTML = '<font color="red">抱歉手机号不合法</font>';
				isPhone = false;
			}
			// console.log(isPhone);
			// console.log(isFrom);
			// console.log(isKilometres);
			// console.log(isModels);
			// console.log(isRegister);

			if(isPhone && isFrom && isKilometres && isRegister && isModels){
				return true;
			}
				return false;

		}
	</script>
</body>
@endsection
