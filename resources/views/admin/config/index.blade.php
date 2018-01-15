@extends('/layout/AdminLayout')
@section('title','后台文章')

@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 网站配置 <small>Config</small></div>
                        <p class="page-header-description">此页面来管理网站配置（包括标题 版权 关键字 网站状态 网站LOGO ）</p>
                    </div>
                    
                </div>

            </div>

            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">网站配置</div>
                                <div class="widget-function am-fr">
                       
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">网站标题 <span class="tpl-form-line-small-title">TITLE</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字" value="{{$data[0]->title}}">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">网站版权 <span class="tpl-form-line-small-title">COPYING</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入相关版权" value="{{$data[0]->copyright}}">
                                            <small>请填写网站版权10-20字左右。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">关键字 <span class="tpl-form-line-small-title">SEO</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入关键字" value="{{$data[0]->key}}">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">网站LOGO <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="/admins/img/a5.png" alt="">
                                                </div>
                                                <div class="am-form-file">
                                                    <br>
                                                    <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                    <input id="doc-form-file" type="file" multiple=""><i class="am-icon-cloud-upload"></i> 修改网站LOGO
                                                    </button>
                                                </div>
                                            </div>    
                                            

                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">网站维护 <span class="tpl-form-line-small-title">STATUS</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox:0}" style="display: none;">
                                            @if({{$data[0]->Wstatus}} == 1)
                                              <option value="a" selected>开启网页</option>
                                              <option value="b">关闭网页</option>
                                            @else
                                              <option value="a">开启网页</option>
                                              <option value="b" selected>关闭网页</option>
                                            </select>
                                            @endif
                                        </div>
                                    </div>

                                    <center>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存修改</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 重置修改</button>
                                    </center>
                            </form>
@endsection