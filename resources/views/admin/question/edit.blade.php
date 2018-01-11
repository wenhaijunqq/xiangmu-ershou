@extends('/layout/AdminLayout')
@section('title','后台文章')
@section('content')


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
           <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 问题编辑页 <small>Config</small></div>
                        <p class="page-header-description">此页面来管理问题信息</p>
                        <a href="/admin/question"><p>>>返回问题列表</p></a>
                    </div>                  
                </div>
             </div>
           <div class="row-content am-cf">
             <div class="row">
                   <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">问题详情</div>
                                <div class="widget-function am-fr">
                                </div>
                            </div>
                            <div class="widget-body am-fr">
                              
                                <form id="form" class="am-form tpl-form-line-form" action="/admin/question/{{$data->qid}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT')}}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">问题内容 <span class="tpl-form-line-small-title">CONTENT</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="content" id="user-name" placeholder="请输入标题文字" value="{{$data->content}}">
                                            <small>请填写问题在10-20字左右。</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">提问者ID<span class="tpl-form-line-small-title">USERNAME</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入相关版权" disabled="disabled" value="{{$data->uid}}">
                                            <small>请填写网站版权10-20字左右。</small>
                                        </div>
                                    </div>
                                     @if(empty($data->check))
                                    <div class="am-form-group">
                                    <label class="am-u-sm-3 am-form-label">是否通过审核 <span class="tpl-form-line-small-title">CHECK</span></label>
                                      <label class="am-radio-inline">
                                        <input type="radio"  name="check" value="1" > 通过
                                      </label>
                                      <label class="am-radio-inline">
                                        <input type="radio" name="check" value="0"> 否决
                                      </label>
                                    </div>
                                      @else
                                      @endif
                                     <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">类型分区 <span class="tpl-form-line-small-title">TYPE</span></label>
                                        <div class="am-u-sm-9">
                                            <select name="type" data-am-selected="{searchBox:0}" style="display: none;">
                                              <option value="1">卖车卖车</option>
                                              <option value="2">交易过户</option>
                                              <option value="3">保养维修</option>
                                              <option value="4">金融贷款</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">回复内容<span class="tpl-form-line-small-title">REPLY</span></label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro" name="reply_content" placeholder="请输入回复内容">{{$data->reply_content}}</textarea>
                                        </div>
                                    </div>

                                    <center>
                                        <input type="submit" class="am-btn am-btn-default am-btn-secondary">
                                        <input type="reset" class="am-btn am-btn-default am-btn-warning">
                                    </center>
                                 </form>
                             <script type="text/javascript">
                            
                               // $('button').click(function(){
                               //     var aaa = $("input[type='radio']").attr("checked");
                               //    alert(aaa);

                                  // if (empty($(input[type='radio']).val())) {
                                  //    alert('请选择审核状态');
                                  //    // return false;
                                  // }else{
                                  //   return true;
                                  // }
                                 
                               });
                         </script>
                                    
@endsection           