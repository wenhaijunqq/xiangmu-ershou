@extends('/layout/adminLayout')
@section('title','后台文章')

@section('content')
        

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">文章列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button onclick="window.open('/admin/UserManagement/xinzeng')" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
                                          <option value="option0">所有用户</option>
                                          <option value="option1">管理员</option>
                                          <option value="option2">审核员</option>
                                          <option value="option3">评估员</option>
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
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>用户名</th>
                                                <th>手机号</th>
                                                <th>年龄</th>
                                                <th>身份权限</th>
                                                <th>邮箱</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($type as $k=>$v)
                                            <tr class="gradeX">
                                                
                                                <td class="am-text-middle">{{$v['id']}}</td>
                                              
                                                <td class="am-text-middle">{{$v['name']}}</td>
                                                <td class="am-text-middle">{{$v['phone']}}</td>
                                                <td class="am-text-middle">
                                                     {{$v['sex']}}
                                                </td>
                                                <td class="am-text-middle"><!-- {{$v['position']}} -->
                                                     @if($v->position == '0' || $v->position == null) 普通用户 @elseif($v->position == '1') 管理员 @elseif($v->position == '2') 审核员 @elseif($v->position == '3') 评估员 @endif 
                                                </td>
                                                <td class="am-text-middle">{{$v['email']}}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                       
                                                       
                                                        <a href="#" onclick="deleteCar({{$v['id']}},$(this))" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>

                                                        @if ($v['status'] == 0)
                                                            <a href="/admin/UserManagement/qiyong/{{$v['id']}}" id="qiyong">
                                                            <i class="am-icon-pencil"></i> 启用
                                                            </a>
            
                                                        @else
                                                          <a id="jinyong" href="/admin/UserManagement/qiyong/{{$v['id']}}" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 禁用
                                                        </a>
                                                        @endif
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                                            
                                           @endforeach
                                            <!-- more data -->
                                        </tbody>
                                    </table>
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
       

        function deleteCar(id,obj){

        layer.confirm('您确定要删除吗?', {
              btn: ['确定','取消'] //按钮
            }, function()
            {

                $.get("/admin/CarType/"+id+"/shanchu/",function(data){
                        if(data ==1){

                            layer.msg('恭喜您,删除成功', {icon: 1});
                            obj.parent().parent().parent().remove();
                        }else{


                        }

                })
            }, function()
            {
              layer.msg('您已取消操作', {icon: 5});
            });
    }
   </script>
</html>
@endsection