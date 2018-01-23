@extends('/layout/adminLayout')
@section('title','后台预约展示')

@section('content')
<!-- 内容区域 -->

        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
             <div class="row">
            <ol class="am-breadcrumb">
                      <li><a href="/admin/index">首页</a></li>
                      <li><a href="/admin/reserve">分类</a></li>
                      <li class="am-active">内容</li>
                    </ol>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">人员基本信息</div>
                                <div class="widget-function am-fr">
                                     <a href="/admin/reserve"><button type="button" class="am-btn am-btn-success">返回预约列表</button></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">
                                <form class="am-form tpl-form-border-form tpl-form-border-br">
                                    <fieldset disabled>
                                    <div class="am-form-group">
                                        <label for="car-title" class="am-u-sm-3 am-form-label">订单信息：</label>
                                        <div class="am-u-sm-10">
                                            <label for="car-title" class="am-u-sm-2 am-form-label">订单编号：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;" value="{{$data[0]->rid}}"><br>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="car-title" class="am-u-sm-3 am-form-label">卖家基本信息：</label>
                                        <div class="am-u-sm-10">
                                            <label for="car-title" class="am-u-sm-2 am-form-label">卖家ID：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;" value="{{$sell[0]->id}}"><br>
                                            <label for="car-title" class="am-u-sm-2 am-form-label">卖家手机号：</label><input type="text" name="car-title" class="tpl-form-input" id="car-title" style="width:150px;" value="{{$sell[0]->phone}}"><br>
                                        </div>
                                    </div>
                                  
                                    </fieldset>
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
