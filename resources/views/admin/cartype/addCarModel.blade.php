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

                                <form class="am-form tpl-form-line-form">



                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">品牌：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;">
                                              <option value="0">请选择汽车品牌</option>
                                              @if($id>0)
                                              @foreach($data as $k=>$v)
                                              @if($id == $v->id)
                                              <option value="{{$v->id}}" >{{$v->car_typeName}}</option>
                                              @endif
                                              @endforeach
                                              @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">车型：<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="title" placeholder="请输入车辆型号">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success " id="Msubmit">提交</button>
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
<script type="text/javascript">
    $("#Msubmit").click(function(){
        $.post('/admin/CarType/addCarModel',{'_token':'{{csrf_token()}}','car_typeName':$("#title").val(),'tid':$("option:selected").val()},function(data){
            if(data == 1){
                layer.alert('添加修改成功', {
                  skin: 'layui-layer-molv' //样式类名
                  ,closeBtn: 0
                }, function(){
                        parent.location.reload();

                  });

            }else{
                layer.alert('添加修改失败', {
                  skin: 'layui-layer-molv' //样式类名
                  ,closeBtn: 0
                }, function(){
                          window.location.reload();

                  });
            }
        });
    })
</script>
@endsection
