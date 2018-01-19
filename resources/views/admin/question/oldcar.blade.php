@extends('/layout/adminLayout')
@section('title','后台文章')

@section('content')
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
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="/admin/question/show" method="GET" class="am-form-inline" role="form">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}" name="check">
                                          <option value="2">所有类别</option>
                                          <option value="1">已审核</option>
                                          <option value="0">未审核</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                    
                                        <div class="am-form-group">
                                       <input type="text" class="am-form-field " placeholder="请输入关键字" name="key"/>
                                       </div>
                                        <button type="submit" class="am-btn am-btn-success am-icon-search"></button>
                                           
                                    </div>
                                </div>
                                </form> 
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>问题ID&nbsp;&nbsp;</th>
                                                <th>问题内容</th>
                                                <th>提问者</th>
                                                <th>时间</th>
                                                <th>审核&nbsp;&nbsp;</th>
                                                <th>类型分区</th>
                                                <th>回复</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($data as $k=>$v)
                                            <tr class="gradeX">
                                                <td align="center">{{$v->qid}}</td>
                                                <td>{{$v->content}}</td>
                                                <td>{{$v->uid}}</td>
                                                <td>{{$v->ask_time}}</td>
                                                <td>{{$v->check ==1 ? '通过':'未审核'}}</td>
                                                <td>{{$type[$v->type]}}</td>
                                                <td>{{$v->reply_content =='' ? '未回复':'已回复'}}</td>
                                                <td>
                                                      <form action="/admin/question/{{$v->qid}}/edit" method="GET" style="display: inline;">
                                                        <input type="submit" value="编辑" class="am-btn am-btn-primary am-radius am-btn-xs"/>
                                                    </form>
                                                        <form action="/admin/question/{{$v->qid}}" method="POST" style="display: inline;">
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

</html>

@endsection