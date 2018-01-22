@extends('/layout/AdminLayout')
@section('title','后台文章')

@section('content')

        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

   

            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">添加用户</div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" action="/admin/UserManagement/tijiao" method="POST" enctype="multipart/form-data">
                                 {{csrf_field()}}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="name" id="user-name" placeholder="请输入管理员姓名">
                                            <small>请填写标题文字2-6字左右。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">手机号：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" name="phone" placeholder="请输入账号">
                                            <small>请填写账号8-16字左右，请勿输入特殊符号。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">权限：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" name="position" style="display: none;">
                                              <option value="0">请选择权限</option>
                                              <option value="1">管理员</option>
                                              <option value="2">审核员</option>
                                              <option value="3">评估员</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">密码：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name="password" placeholder="请输入用户密码">
                                            <small>请填写密码以大小写字母开头6-14位左右，请勿输入特殊符号。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">密码：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name="repass" placeholder="请输入用户密码">
                                            <small>请填写密码以大小写字母开头6-14位左右，请勿输入特殊符号。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">头像：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img" name="head">
                                                    <!-- <img src="/admins/img/a5.png" alt=""> -->
                                                </div>
                                                <button type="button" name="head" class="am-btn am-btn-danger am-btn-sm">添加头像图片</button>
                                                <input id="doc-form-file" name="head" type="file" multiple="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">邮箱： <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="email" id="user-weibo" name="email" placeholder="请添加用户邮箱">
                                            <div>

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
<script type="text/javascript">
    $('.repass').check(function(){
        if('.repass'=='.password'){
            
        }

    })
</script>
</html>
@endsection