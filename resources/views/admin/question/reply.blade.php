@extends('/layout/AdminLayout')
@section('title','后台文章')
@section('content')


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">


            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 问题回复页 <small>Config</small></div>
                        <p class="page-header-description">此页面来管理问题回复</p>
                    </div>
                    
                </div>


            </div>

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">问题详情</div>
                                <div class="widget-function am-fr">
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">问题内容 <span class="tpl-form-line-small-title">CONTENT</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字">
                                            <small>请填写问题在10-20字左右。</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">提问者<span class="tpl-form-line-small-title">USERNAME</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入相关版权">
                                            <small>请填写网站版权10-20字左右。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">回复内容 <span class="tpl-form-line-small-title">REPLY</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入关键字">
                                        </div>
                                    </div>
                                    <center>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存修改</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 重置修改</button>
                                    </center>


                                    
@endsection           