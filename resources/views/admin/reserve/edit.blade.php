@extends('/layout/AdminLayout')
@section('title','后台预约修改')
@section('content')


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">


            <div class="container-fluid am-cf">
                <div class="row">
                <ol class="am-breadcrumb">
                      <li><a href="/admin/index">首页</a></li>
                      <li><a href="/admin/reserve">分类</a></li>
                      <li class="am-active">内容</li>
                    </ol>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 预约修改页 <small>RESERVE</small></div>
                        <p class="page-header-description">此页面来管理网页预约信息</p>
                    </div>
                    
                </div>


            </div>


            <div class="row-content am-cf">

                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">预约信息</div>
                                <div class="widget-function am-fr">
                                     <a href="/admin/reserve"><button type="button" class="am-btn am-btn-success">返回预约列表</button></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">
            
                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/reserve/{{$data[0]->rid}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT')}}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 预约编号 <span class="tpl-form-line-small-title">NUMBER</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data[0]->rid}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 买家编号 <span class="tpl-form-line-small-title">BUY_ID</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data[0]->buy_id}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 卖家编号 <span class="tpl-form-line-small-title">SELL_ID</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data[0]->sell_id}}" readonly>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 车辆编号 <span class="tpl-form-line-small-title">CAR_ID</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data[0]->car_id}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 派遣评估员 <span class="tpl-form-line-small-title">PING_ID</span></label>
                                        <div class="am-u-sm-9 am-form-select">
                                            <select data-am-selected="{searchBox:1}" class="am-input-sm" name="ping_id">
                                            @foreach($ping as $k=>$v)
                                              <option value="{{$v->id}}">{{$v->id}}号评估员{{$v->name}}</option>
                                            @endforeach
                                            </select>

                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 预约时间 <span class="tpl-form-line-small-title">YU_TIME</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="{{$data[0]->yutime}}" readonly>
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label"> 预约状态 <span class="tpl-form-line-small-title">YU_STATUS</span></label>
                                        <div class="am-u-sm-9">
                                        @if($data[0] -> yu_status  == 1)
                                            <div class="am-radio">
                                              <label>
                                                <input type="radio" name="yu_status" value="1" checked>
                                                看车中
                                              </label>
                                            </div>
                                            <div class="am-radio">
                                              <label>
                                                <input type="radio" name="yu_status" value="0">
                                                卖车中
                                              </label>
                                            </div>
                                        @else
                                            <div class="am-radio">
                                              <label>
                                                <input type="radio" name="yu_status" value="1">
                                                看车中
                                              </label>
                                            </div>
                                            <div class="am-radio">
                                              <label>
                                                <input type="radio" name="yu_status" value="0" checked>
                                                卖车中
                                              </label>
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                    <center>                                      
                                        <input type="submit" class="am-btn am-btn-primary " value="提交">
                                        <input type="reset" class="am-btn am-btn-warning " value="重置">
                                    </center>
                                </form>

                                    
@endsection                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          