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
                                <div class="widget-title am-fl">修改资料</div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" action="/admin/UserManagement/baocun/{{$data['id']}}" enctype="multipart/form-data" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="请输入新管理员姓名" value="{{$data['name']}}" disabled="disabled">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">手机号：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="phone" class="am-form-field tpl-form-no-bg" placeholder="请输入手机号" value="{{$data['phone']}}" disabled="disabled">
                                      
                                        </div>
                                    </div>

                           

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">新密码：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password" name="password" placeholder="请输入新密码">
                                            <small>请填写密码以大小写字母开头6-14位左右，请勿输入特殊符号。</small>
                                        </div>
                                    </div>     

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">确认密码：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="password"  placeholder="请再输入一次新密码">
                                            <small>请填写密码以大小写字母开头6-14位左右，请勿输入特殊符号。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">修改头像：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img" name="head">
                                                    <img src="http://p2dtsikvg.bkt.clouddn.com/{{$data['head']}}" onerror="this.src='/img/vip.png'" name="head" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">修改头像</button>
                                                <input id="doc-form-file" type="file" name="head" multiple="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">邮箱： <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="email" id="user-weibo" name="email" placeholder="修改用户邮箱" value="{{$data['email']}}">
                                            <div>

                                            </div>
                                        </div>
                                    </div>       

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">保存</button>
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

</html>
@endsection