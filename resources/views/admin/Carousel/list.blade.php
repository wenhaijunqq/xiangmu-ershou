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
                                <div class="widget-title  am-cf">轮播列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span><a href="/admin/Carousel/create">新增</a></button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">


                                    <div class="am-form-group tpl-table-list-select" >
                                        <select data-am-selected="{btnSize: 'sm'}" name="check">
                                         <option value="1">请选择搜索类别</option>
                                         <option value="name">标题</option>
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
                                                <th>轮播缩略图</th>
                                                <th>标题</th>
                                                <th>URL地址</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($res) == 1)
                                        @foreach($res as $v)
                                            <tr class="gradeX" style="text-align:center">
                                                <td class="am-text-middle">{{$v['id']}}</td>
                                                <td>
                                                    <img src="../../../uploads/{{$v['pic']}}" class="tpl-table-line-img" alt="" style="max-height: 100px;">
                                                </td>
                                                <td class="am-text-middle">{{$v['title']}}</td>
                                                <td class="am-text-middle">{{$v['url']}}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="/admin/Carousel/{{$v['id']}}/edit">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:void(0)" class="tpl-table-black-operation-del" onclick="del({{$v['id']}},$(this))">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                            <tr class="gradeX">
                                                <td colspan="5" align="center">没有任何操作数据</td>
                                            </tr>
                                        @endif
                                        <!-- 通过ajax去删除 -->
                                                    <script>

                                                             function del(id,obj){
                                                                 // $.post("{{url('/admin/adsense/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data)
                                                                $.post("{{url('/admin/Carousel/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}',"id":id},function(data)
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
