@extends('/layout/adminLayout')
@section('title','后台已经评估')

@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">已评估</div>


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
                                <form method="get" action="/admin/estimate/already">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">

                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}" name="key">
              @if(empty($reqall['key']))                          
              <option value="rid" >预约单号</option>
              <option value="car_name" >车辆名称</option>
              <option value="sell_id">拥有者编号</option>
              @else                         
              <option value="rid" {{$reqall["key"] == "rid"? "selected" :"" }}>预约单号</option>
              <option value="car_name" {{$reqall["key"] == "car_name"? "selected" :"" }}>车辆名称</option>
              <option value="sell_id" {{$reqall["key"] == "sell_id"? "selected" :"" }}>拥有者编号</option>
              @endif
            </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field " name="val" value="{{isset($reqall['val'])? $reqall['val'] :'' }}">
                                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
          </span>
                                    </div>
                                </div>
                                </form>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>预约单号</th>
                                                <th>车辆名称</th>
                                                <th>拥有者编号</th>
                                                <th>基本信息(已审核不能修改)</th>
                                                <th>评估时间</th>
                                                <th>审核状态</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($data as $key=>$val)
                                            <tr class="gradeX">
                                                <td>{{$val['rid']}}</td>
                                                <td>{{$val['car_name']}}</td>
                                                <td>{{$val['sell_id']}}</td>
                                                <td><a href="/admin/seeinformation/{{$val['car_id']}}">查看与修改基本信息</a></td>
                                                <td>{{$val['assess_time']}}</td>
                                                @if($val['audit_status'] == 0)
                                                <td>未审核</td>
                                                @else
                                                <td>已审核</td>
                                                @endif
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        @if($val['audit_status'] == 0)
                                                        <a href="/admin/estimate/writeassess/{{$val['car_id']}}/edit">
                                                            <i class="am-icon-pencil"></i>修改评估
                                                        </a>
                                                        @else
                                                        <a style="color:#aaa;border:1px #aaa solid">
                                                            <i class="am-icon-pencil" ></i>修改评估
                                                        </a>
                                                        @endif
                                                        <a href="javascript:;" class="tpl-table-black-operation-del" onclick="del({{$val['rid']}},$(this))">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                    @if(isset($reqall))
                                    {!! $data->appends($reqall)->render() !!}
                                    @else
                                    {!! $data->render() !!}
                                    @endif
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
    <script type="text/javascript">
        function del(id,obj)
        {
            layer.confirm('是否进行删除', {
              btn: ['是','否'] //按钮
            }, function(){
              $.post("{{url('/admin/estimate/already/')}}/"+id,{'id':id,'_method':'delete','_token':'{{csrf_token()}}'},function(data){
                if(data == 1){
                    obj.parent().parent().parent().remove();

                    layer.msg('已删除', {icon: 1});
                }
                });

            }, function(){

            });

        }
    </script>
</body>

</html>
@endsection
