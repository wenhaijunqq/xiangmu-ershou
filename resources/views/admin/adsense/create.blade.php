@extends('/layout/AdminLayout')
@section('title','后台文章')

@section('content')

        <!-- 内容区域 -->


            <div class="row-content am-cf">




                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12" >
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">广告添加</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/adsense" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" name="title"  placeholder="请输入标题文字">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>



                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">URl 地址 <span class="tpl-form-line-small-title">url</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="url"  placeholder="输入url地址">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">广告图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="/admins/img/a5.png" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                <i class="am-icon-cloud-upload"></i> 添加广告图片</button>
                                                <input id="doc-form-file" name="pic"  type="file" multiple="">
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
