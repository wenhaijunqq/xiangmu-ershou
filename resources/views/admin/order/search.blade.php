@extends('/layout/adminLayout')
@section('title','后台订单搜索页')

@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                 <ol class="am-breadcrumb">
                      <li><a href="/admin/index">首页</a></li>
                      <li class="am-active">订单管理</li>
                    </ol>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">订单搜索</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
                                          <option value="option1">所有类别</option>
                                          <option value="option2">订单编号</option>
                                          <option value="option3">买家id</option>
                                          <option value="option4">卖家id</option>
                                          <option value="option5">评估员id</option>
                                          <option value="option6">成交状态</option>
                                          <option value="option7">成交价格</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group tpl-form-border-form cl-p">
                                    <form class="am-form-inline" role="form">
                                          <div class="am-form-group">
                                            <input type="text" class="am-form-field am-input-sm" name="key">
                                          </div>
                                          <button type="submit" class="am-btn am-btn-default am-btn-success">搜索</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>订单编号</th>
                                                <th>卖家编号</th>
                                                <th>买家编号</th>
                                                <th>车辆编号</th>
                                                <th>评估员编号</th>
                                                <th>交易时间</th>
                                                <th>成交状态</th>
                                                <th>成交价格</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($res as $k=>$v)
                                            <tr class="gradeX">
                                                <td>{{$v -> id}}</td>
                                                <td>{{$v -> sell_id}}</td>
                                                <td>{{$v -> buy_id}}</td>
                                                <td>{{$v -> car_id}}</td>
                                                <td>&nbsp;{{$v -> ping_id}}</td>
                                                <td>{{$v -> buy_time}}</td>
                                                <td>{{$v -> buy_status == 1 ? '交易成功' : '交易失败'}}</td>
                                                <td>{{$v -> price}}</td>
                                                <td>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="/admin/order/{{$v->id}}/edit">
                                                        <button type="button" class="am-btn am-btn-success am-radius am-btn-xs">查看</button> 
                                                    </a>
                                                    <form action="/admin/order/{{$v->id}}" method="POST" style="display: inline;">
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                                            <input type="submit" value="删除" class="am-btn am-btn-danger am-radius am-btn-xs"/>
                                                    </form>           
                                                </td>
                                            </tr>
                                        @endforeach

                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                    <div id="pull_right">
                                      <div class="am-pagination-right">
                                        {!! $res->appends(['check'=>$check])->render() !!}
                                      </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
@endsection