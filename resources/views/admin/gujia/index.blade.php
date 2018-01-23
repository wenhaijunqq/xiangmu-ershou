@extends('/layout/adminLayout')
@section('title','后台估价页')

@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                 <ol class="am-breadcrumb">
                      <li><a href="/admin/index">首页</a></li>
                      <li class="am-active">估价管理</li>
                    </ol>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">估价列表</div>


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
                               
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>预约单号</th>
                                                <th>电话号码</th>
                                                <th>车源地</th>
                                                <th>车辆类型</th>
                                                <th>上牌时间</th>
                                                <th>行驶公里</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $k=>$v)
                                            <tr class="gradeX">
                                                <td align="center">{{$v -> id}}</td>
                                                <td align="center">{{$v -> phone}}</td>
                                                <td>{{$v -> from}}</td>
                                                <td align="center">{{$v -> models}}</td>
                                                <td align="center">{{$v -> register}}</td>
                                                <td align="center">{{$v -> kilometres}}</td>
                                                <td align="center">
                                                        
                                                           <button id="pg" class="am-btn am-btn-success am-radius am-btn-xs" onclick="add({{$v -> phone}},$(this))">
                                                               <i class="am-btn-success"></i> 通过评估
                                                           </button> 
                                                    <form action="/admin/gujia/{{$v->id}}" method="POST" style="display: inline;">
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
                                        {!! $data->render() !!}
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
 <script type="text/javascript">

        function add(id,obj){
            layer.confirm('确定生成预约', {
              btn: ['是','否'] //按钮
            }, function(){
                $.get("{{url('/admin/gujia/')}}/"+id,function(data){
                    if(data == 1){
                        layer.msg('已提交', {icon: 1});
                        $(obj).parent().parent().remove();
                    }
                });
            }, function(){
              
            });
        }
        
 </script>
</html>
@endsection