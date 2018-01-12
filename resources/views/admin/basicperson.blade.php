@extends('/layout/adminLayout')
@section('title','后台文章')

@section('content')
<!-- 内容区域 -->

        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
             <div class="row">
            <ol class="am-breadcrumb">
                      <li><a href="/admin/index">首页</a></li>
                      <li><a href="/admin/order">分类</a></li>
                      <li class="am-active">内容</li>
                    </ol>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">人员基本信息</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br">
                                    <div class="am-form-group">
                                        <label for="car-title" class="am-u-sm-3 am-form-label">订单信息：</label>
                                        <div class="am-u-sm-10">
                                            <label for="car-title" class="am-u-sm-2 am-form-label">订单编号：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="car-title" class="am-u-sm-3 am-form-label">卖家基本信息：</label>
                                        <div class="am-u-sm-10">
                                            <label for="car-title" class="am-u-sm-2 am-form-label">卖家ID：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                            <label for="car-title" class="am-u-sm-2 am-form-label">卖家姓名：  </label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                            <label for="car-title" class="am-u-sm-2 am-form-label">卖家手机号：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                        </div>
                                    </div>
                                   <div class="am-form-group">
                                        <label for="car-title" class="am-u-sm-3 am-form-label">买家基本信息：</label>
                                        <div class="am-u-sm-10">
                                            <label for="car-title" class="am-u-sm-2 am-form-label">买家ID：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                            <label for="car-title" class="am-u-sm-2 am-form-label">买家姓名：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                            <label for="car-title" class="am-u-sm-2 am-form-label">买家手机号：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="car-title" class="am-u-sm-3 am-form-label">评估员基本信息：</label>
                                        <div class="am-u-sm-10">
                                            <label for="car-title" class="am-u-sm-2 am-form-label">评估员ID：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                            <label for="car-title" class="am-u-sm-2 am-form-label">评估员姓名：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                            <label for="car-title" class="am-u-sm-2 am-form-label">评估员手机号：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                            <label for="car-title" class="am-u-sm-2 am-form-label">评估员职称：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;"><br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
    </div>
       
</body>

</html>
@endsection