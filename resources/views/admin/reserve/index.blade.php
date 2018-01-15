@extends('/layout/adminLayout')
@section('title','后台预约信息')

@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                 <ol class="am-breadcrumb">
                      <li><a href="/admin/index">首页</a></li>
                      <li class="am-active">预约管理</li>
                    </ol>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">预约列表</div>


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
              <option value="option2">预约编号</option>
              <option value="option3">车辆id</option>
              <option value="option4">卖家id</option>
              <option value="option5">买家id</option>
              <option value="option6">评估员id</option>
            </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
          </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>预约编号</th>
                                                <th>车辆名称</th>
                                                <th>卖家编号</th>
                                                <th>买家编号</th>
                                                <th>评估员编号</th>
                                                <th>预约时间</th>
                                                <th>看车时间</th>
                                                <th>预约状态</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $k=>$v)
                                            <tr class="gradeX">
                                                <td>{{$v -> rid}}</td>
                                                <td>{{$v -> car_id}}</td>
                                                <td>{{$v -> sell_id}}</td>
                                                <td>{{$v -> buy_id}}</td>
                                                <td>{{$v -> ping_id}}</td>
                                                <td>{{$v -> yutime}}</td>
                                                <td>{{$v -> seetime}}</td>
                                                <td>{{$v -> yu_status == 1 ? '看车中' : '预约中'}}</td>
                                                <td>
                                                &nbsp;&nbsp;&nbsp;
                                                    <a href="/admin/reserve/{{$v->rid}}/edit">
                                                        <button type="button" class="am-btn am-btn-default am-radius am-btn-xs">编辑</button> 
                                                    </a> 
                                                    <a href="/admin/reserve/{{$v->rid}}">
                                                        <button type="button" class="am-btn am-btn-success am-radius am-btn-xs">查看</button> 
                                                    </a>
                                                    <form action="/admin/reserve/{{$v->rid}}" method="POST" style="display: inline;">
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