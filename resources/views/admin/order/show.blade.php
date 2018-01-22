@extends('/layout/AdminLayout')
@section('title','后台文章')
@section('content')


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">


            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 订单查询页 <small>Order</small></div>
                        <p class="page-header-description">此页面来管理网页订单信息</p>
                    </div>
                    
                </div>


            </div>


            <div class="row-content am-cf">

                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">订单信息</div>
                                <div class="widget-function am-fr">
                                    <a href="/admin/order"><button type="button" class="am-btn am-btn-success">返回订单列表</button></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">
                                
                                <form class="am-form tpl-form-border-form tpl-form-border-br">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 订单编号 <span class="tpl-form-line-small-title">NUMBER</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data->id}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 卖家编号 <span class="tpl-form-line-small-title">SELL_ID</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data->sell_id}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 买家编号 <span class="tpl-form-line-small-title">BUY_ID</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data->buy_id}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 车辆编号 <span class="tpl-form-line-small-title">CAR_ID</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data->car_id}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 评估员编号 <span class="tpl-form-line-small-title">PING_ID</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data->ping_id}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 交易时间 <span class="tpl-form-line-small-title">BUY_TIME</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data->buy_time}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 成交价格 <span class="tpl-form-line-small-title">PRICE</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data->price}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 交易状态 <span class="tpl-form-line-small-title">BUY_STATUS</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data->buy_status == 1 ? '交易成功' : '交易失败'}}" readonly>
                                        </div>
                                    </div>
                                    <center>                                      
                                        <a href="/admin/basicperson/{{$data->id}}" class="am-btn am-btn-success" target="_blank"><span class="am-icon-archive"></span> 查看人员具体信息</a></button>
                                       <a href="/admin/basiccar/{{$data->car_id}}" class="am-btn am-btn-secondary" target="_blank"><span class="am-icon-archive"></span> 查看车辆具体信息</a></button>
                                    </center>
                                </form>

                                    
@endsection                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          