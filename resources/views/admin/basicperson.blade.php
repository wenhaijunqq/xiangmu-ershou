@extends('/layout/adminLayout')
@section('title','后台文章')

@section('content')
<!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
             <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">基本信息</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br">
                                    <div class="am-form-group">
                                        <label for="car-title" class="am-u-sm-3 am-form-label">车辆标题：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car-title" class="tpl-form-input" id="car-title" placeholder="请输入车辆标题" style="width:500px;">
                    
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