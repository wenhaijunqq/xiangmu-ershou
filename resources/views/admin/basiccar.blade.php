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
                                <div class="widget-title am-fl">基本信息</div>
                                <div class="widget-function am-fr">
                                    <a href="/admin/order"><button type="button" class="am-btn am-btn-success">返回订单列表</button></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">
                                <!-- <fieldset disabled> -->
                                <form class="am-form tpl-form-border-form tpl-form-border-br">
                                    <div class="am-form-group">
                                        <label for="car-name" class="am-u-sm-3 am-form-label">车辆名：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car-name" class="tpl-form-input" id="car-name" placeholder="请输入车辆名称" style="width:300px;" value="{{$data[0]->car_name}}" readonly>
                    
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="car-border" class="am-u-sm-3 am-form-label">车辆品牌：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car-border" class="tpl-form-input" id="car-border" placeholder="车辆品牌" style="width:300px;" value="{{$data[0]->Vbrand}}" readonly>
                    
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="car-standard" class="am-u-sm-3 am-form-label" >国标 ：</label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" name="car-standard" style="display: none;" disabled="disabled">
                                            @if($data[0]->standard == 1)
                                              <option value="1" selected>国三</option>
                                              <option value="2">国四</option>
                                              <option value="0">国五</option>
                                            @elseif($data[0]->standard == 2)
                                              <option value="1">国三</option>
                                              <option value="2" selected>国四</option>
                                              <option value="0">国五</option>
                                            @else
                                              <option value="1">国三</option>
                                              <option value="2">国四</option>
                                              <option value="0" selected>国五</option>
                                            @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="car-km" class="am-u-sm-3 am-form-label">公里数：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car-km" class="tpl-form-input" id="car-km" placeholder="公里数" style="width:300px;" value="{{$data[0]->km}}" readonly>
                    
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="car-price" class="am-u-sm-3 am-form-label">价格：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car-price" class="tpl-form-input" id="car-price" placeholder="报价" style="width:300px;" value="{{$data[0]->pice}}" readonly>
                    
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="car_license" class="am-u-sm-3 am-form-label">上牌时间：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car_license" class="am-form-field tpl-form-no-bg" placeholder="上牌时间" id="car_license" data-am-datepicker="" style="width:300px;" value="{{$data[0]->car_license}}" readonly>
                                        </div>  
                                    </div>
                                    <div class="am-form-group">
                                        <label for="displacement" class="am-u-sm-3 am-form-label">排量：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="displacement" class="tpl-form-input" id="displacement" placeholder="排量" style="width:300px;" value="{{$data[0]->displacement}}" readonly>
                    
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="transfer" class="am-u-sm-3 am-form-label">过户次数：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="transfer" class="tpl-form-input" id="transfer" placeholder="过户次数" style="width:300px;" value="{{$data[0]->transfer}}" readonly>
                    
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="address" class="am-u-sm-3 am-form-label">看车地点：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="address" class="tpl-form-input" id="address" placeholder="看车地点" style="width:300px;" value="{{$data[0]->address}}" readonly>
                    
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="nianjian" class="am-u-sm-3 am-form-label">年检时间：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="nianjian" class="am-form-field tpl-form-no-bg" placeholder="年检时间" id="car_license" data-am-datepicker="" style="width:300px;" value="{{$data[0]->nianjian}}" readonly>
                                        </div>  
                                    </div>
                                    <div class="am-form-group">
                                        <label for="constraint" class="am-u-sm-3 am-form-label">交强险到期时间：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="constraint" class="am-form-field tpl-form-no-bg" placeholder="交强险到期时间" id="car_license" data-am-datepicker="" style="width:300px;" value="{{$data[0]->constraint}}" readonly>
                                        </div>  
                                    </div>                                  
                                    <div class="am-form-group">
                                        <label for="content" class="am-u-sm-3 am-form-label">车辆内容</label>
                                        <div class="am-u-sm-9">
                                            <textarea name="content" class="" rows="10" id="content" placeholder="请输入车辆内容" readonly>{{$data[0]->content}}</textarea>
                                        </div>
                                    </div>
                                </form>
                                <!-- </fieldset> -->
                            </div>
                        </div>
                    </div>
                </div>

    </div>
    </div>
       
</body>

</html>
@endsection