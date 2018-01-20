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
                                <div class="widget-title  am-cf">友情链接列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span><a href="/admin/Link/create">新增</a></button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form class="am-form-inline" role="form" action="/admin/Link/show" method="GET" >
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}" name="check">
                                          <option value="1">请选择搜索类别</option>
                                          <option value="title">标题</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field " name="key">
                                        <span class="am-input-group-btn">
                                            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                        </span>
                                    </div>
                                </div>
                              </form>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr >
                                                <th>ID</th>
                                                <th>友情链接标题</th>
                                                <th>URL地址</th>
                                                <th>状态</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($res))
                                        @foreach($res as $k=>$v)
                                            <tr class="gradeX" style="text-align:center">
                                                <td>{{$v -> id}}</td>
                                                <td>{{$v -> name}}</td>
                                                <td>{{$v -> url}}</td>
                                                <td>{{$v -> status == 1 ? '开启' : '关闭'}}</td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="/admin/Link/{{$v -> id}}/edit">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="" class="tpl-table-black-operation-del" onclick="del({{$v -> id}},$(this))">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                        <td colspan="5">没有任何操作数据</td>
                                        @endif
                                            <!-- more data -->
                                            <!-- 通过ajax去删除 -->
                                                          <script>

                                                             function del(id,obj){
                                                                 // $.post("{{url('/admin/Link/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data)
                                                                $.post("{{url('/admin/Link/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}',"id":id},function(data)
                                                                 {
                                                                 if(data == 1){
                                                                       obj.parent().parent().parent().remove();

                                                                     alert('删除成功！');
                                                                 }else if(data == 0){
                                                                     alert('删除失败！');
                                                                 }
                                                                 });
                                                             }

                                                        </script>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                      @if(empty($check))
                                          {!! $res->render() !!}
                                      @else
                                          {!! $res->appends(['check'=>$check])->render() !!}
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
</body>

</html>
@endsection
