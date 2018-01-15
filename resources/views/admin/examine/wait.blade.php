@extends('/layout/adminLayout')
@section('title','待评估')

@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">待评估</div>


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
              <option value="option2"></option>
              <option value="option3"></option>
              <option value="option3"></option>
              <option value="option3"></option>
              <option value="option3"></option>
              <option value="option3"></option>
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
                                                <th>预约单号</th>
                                                <th>车辆名称</th>
                                                <th>拥有者编号</th>
                                                <th>评估员编号</th>
                                                <th>基本信息</th>
                                                <th>评估状态</th>
                                                <th>评估报告</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key=>$val)
                                            <tr class="gradeX">
                                                <td>{{$val['rid']}}</td>
                                                <td>{{$val['car_name']}}</td>
                                                <td>{{$val['sell_id']}}</td>
                                                <td>{{$val['ping_id']}}</td>
                                                <td><a href="/admin/seeinformation/{{$val['car_id']}}">查看车辆基础信息</a></td>
                                                @if($val['assess_status']==0)
                                                <td>未评估</td>
                                                @else($val['assess_status']==1)
                                                <td>已评估</td>
                                                @endif     
                                                <td><a>查看评估报告</a></td>
                                                @if($val['assess_status']==1)
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;" onclick="add({{$val['car_id']}})">
                                                            <i class="am-btn-success"></i> 审核通过
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del" onclick="del({{$val['car_id']}},$(this))">
                                                            <i class="am-btn-trash" ></i> 审核不通过
                                                        </a>
                                                    </div>
                                                </td>
                                                @else($val['assess_status']==0)
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a style="color:#aaa;border:1px #aaa solid">
                                                            <i class="am-btn-success"></i> 审核通过
                                                        </a>
                                                        <a style="color:#aaa;border:1px #aaa solid">
                                                            <i class="am-btn-trash"></i> 审核不通过
                                                        </a>
                                                    </div>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
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
    <script type="text/javascript">

        function add(id)
        {
            layer.confirm('确定通过审核', {
              btn: ['是','否'] //按钮
            }, function(){
              window.location.href = '/admin/examine/wait/'+id+'/edit';
              layer.msg('已提交', {icon: 1});
            }, function(){
              
            });
        }
        function del(id,obj)
        {
            //alert($);
            layer.confirm('确定不通过审核', {
              btn: ['是','否'] //按钮
            }, function(){
               $.post("{{url('/admin/examine/wait/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}',"id":id},function(data)
                {
                    if(data == 1){
                        obj.parent().parent().parent().remove();
                        layer.msg('没有通过审核', {icon: 1});
                    }
                    
                });
              
              
            }, function(){
              
            });
           
        }
    </script>
</body>

</html>
@endsection