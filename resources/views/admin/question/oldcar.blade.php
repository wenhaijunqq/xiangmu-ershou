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
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
              <option value="option1">所有类别</option>
              <option value="option2">过审</option>
              <option value="option3">未过审</option>
              <option value="option3">买车卖车</option>
              <option value="option3">交易过户</option>
              <option value="option3">保养维修</option>
              <option value="option3">金融贷款</option>
            </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field">
                                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
          </span>
                                    </div>
                                </div>

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
                                                      <a href="/admin/question/{{$v->qid}}/edit">
                                                            <button type="button" class="am-btn am-btn-primary am-radius am-btn-xs">编辑</button> 
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