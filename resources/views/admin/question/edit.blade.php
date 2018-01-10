@extends('/layout/AdminLayout')
@section('title','后台文章')
@section('content')


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">


            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 问题编辑页 <small>Config</small></div>
                        <p class="page-header-description">此页面来管理网站配置</p>
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
                                    <label class="am-u-sm-3 am-form-label">是否通过审核 <span class="tpl-form-line-small-title">CHECK</span></label>
                                      <label class="am-radio-inline">
                                        <input type="radio"  value="" name="docInlineRadio"> 通过
                                      </label>
                                      <label class="am-radio-inline">
                                        <input type="radio" name="docInlineRadio"> 否决
                                      </label>
                                    </div>
                                
                                     <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">类型分区 <span class="tpl-form-line-small-title">TYPE</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox:0}" style="display: none;">
                                              <option value="a">卖车卖车</option>
                                              <option value="b">交易过户</option>
                                              <option value="c">保养维修</option>
                                              <option value="d">金融贷款</option>
                                            </select>
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