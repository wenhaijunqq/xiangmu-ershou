@extends('/layout/AdminLayout')
@section('title','后台文章')

@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

           

           
                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">友情链接表单</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/Link" method="post">
                                        {{ csrf_field() }}
                                    <div class="am-form-group">
                                        <label for="user_name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user_name" placeholder="请输入标题文字" name="name" >
                                            <small>请填写标题</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">URl地址 <span class="tpl-form-line-small-title">URL</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="url"  placeholder="URl地址">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">链接状态 <span class="tpl-form-line-small-title">STATUS</span></label>
                                        <div class="am-u-sm-9">
                                              <div class="am-u-sm-12 am-u-md-6 am-u-lg-3 am-u-sm-9">
                                                <div class="am-form-group tpl-table-list-select">
                                                    <select data-am-selected="{btnSize: 'sm'}" name="status" >
                                                      <option value=""></option>
                                                      <option value="1">开启</option>
                                                      <option value="2">关闭</option>
                                                    </select>
                                                </div>
                                              </div>

                                        </div>
                                    </div>

                                    

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>
                                </form>
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