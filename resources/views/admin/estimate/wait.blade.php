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
                                <form method="get" action="/admin/estimate/wait">
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
                                                <th>基本信息(蓝色未添加)</th>
                                                <th>评估报告</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key=>$val)
                                            <tr class="gradeX">
                                                <td>{{$val['rid']}}</td>
                                                <td>{{$val['car_name']}}</td>
                                                <td>{{$val['sell_id']}}</td>
                                                @if ($val['add_status'] == 0)
                                                <td ><a href="/admin/estimate/basicinformation/{{$val['car_id']}}" >添加基本信息</a></td>
                                                @else
                                                <td ><a style="color:#aaa">添加基本信息</a></td>
                                                @endif
                                                @if ($val['add_assess'] == 0)
                                                <td><a href="/admin/estimate/writeassess/{{$val['car_id']}}">填写评估报告</a></td>
                                                @else
                                                <td ><a style="color:#aaa">填写评估报告</a></td>
                                                @endif
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;" onclick="add({{$val['car_id']}},{{$val['add_assess']}},{{$val['add_status']}},$(this))">
                                                            <i class="am-btn-success"></i> 提交
                                                        </a>
                                                        <a href="javascript:;" onclick="update({{$val['car_id']}},{{$val['add_assess']}},{{$val['add_status']}})">
                                                            <i class="am-icon-pencil" ></i> 修改
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del" onclick="del({{$val['car_id']}},$(this))">
                                                            <i class="am-icon-trash"></i> 取消评估
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
        function update(id,add_assess,add_status)
        {
            //询问框
            layer.confirm('请选择您要修改的信息', {
              btn: ['基础信息','评估信息'] //按钮
            }, function(){
                if(add_status == 1){
                    window.location.href = '/admin/estimate/basicinformation/'+id+'/edit';
                }else{
                    layer.msg('请先填写基础信息！');
                }
            }, function(){
                if(add_assess == 1){
                  window.location.href = '/admin/estimate/writeassess/'+id+'/edit';
                }else{
                    layer.msg('请先填写评估信息！');
                }
            });
        }
        function del(pid,obj)
        {
               
                //alert($);
                layer.confirm('是否取消评估', {
                  btn: ['是','否'] //按钮
                }, function(){
                   $.post("{{url('/admin/estimate/wait/')}}/"+pid,{'_method':'delete','_token':'{{csrf_token()}}',"id":pid},function(data)
                    {
                        if(data == 1){
                            obj.parent().parent().parent().remove();
                             layer.msg('已取消', {icon: 1});
                        }
                       
                    });
                   
                  
                }, function(){
                  
                });
            
           
        }
        function add(aid,add_assess,add_status,obj)
        {
            console.log(add_assess);
            console.log(add_status);
            if(add_assess == 0 || add_status == 0 ){
                layer.msg('请先填写评估信息和基础信息！');

            }else{ 
                layer.confirm('是否进行提交', {
                  btn: ['是','否'] //按钮
                }, function(){
                 $.get("{{url('/admin/estimate/wait/')}}/"+aid,{"id":aid},function(data)
                    {
                        if(data == 1){
                            obj.parent().parent().parent().remove();
                             layer.msg('已提交', {icon: 1});
                        }
                       
                    });
                }, function(){
                  
                });
            }
        }
    </script>
</body>

</html>
@endsection