@extends('/layout/AdminLayout')
@section('title','后台文章')

@section('content')

        <!-- 内容区域 -->
      

            <div class="row-content am-cf">


                

                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">广告修改</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">
                              
                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/adsense/{{$res->id}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name"  name="title" value="{{$res->title}}" placeholder="请输入标题文字">
                                            <small>请填写标题。</small>
                                        </div>
                                    </div>

                                    

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">URl 地址 <span class="tpl-form-line-small-title">url</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="url" value="{{$res->url}}" placeholder="输入url地址">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">广告图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-table-line-img">
                                                    <img src="../../../uploads/{{$res->pic}}" class="tpl-table-line-img" style="max-width:500px;"alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                <i class="am-icon-cloud-upload"></i> 添加广告图片</button>
                                                <input id="doc-form-file" type="file" name="pic" multiple="">
                                            </div>

                                        </div>
                                    </div>
                                 
                                    


                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">修改</button>
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