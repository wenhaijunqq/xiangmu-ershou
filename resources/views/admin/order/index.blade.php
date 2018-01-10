@extends('/layout/adminLayout')
@section('title','后台订单页')

@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">订单列表</div>


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
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
                                           <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button" ></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>订单编号</th>
                                                <th>卖家id</th>
                                                <th>买家id</th>
                                                <th>车辆id</th>
                                                <th>评估员id</th>
                                                <th>交易时间</th>
                                                <th>成交状态</th>
                                                <th>成交价格</th>
                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $k=>$v)
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
                                                    <a href="javascript:;">
                                                        <button type="button" class="am-btn am-btn-danger am-radius am-btn-xs">删除</button> 
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
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