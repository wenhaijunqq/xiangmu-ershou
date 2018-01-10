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
                                    <div class="am-form-group">
                                        <label for="car-name" class="am-u-sm-3 am-form-label">车辆名：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car-name" class="tpl-form-input" id="car-name" placeholder="请输入车辆名称" style="width:300px;">
                    
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="car-border" class="am-u-sm-3 am-form-label">车辆品牌：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car-border" class="tpl-form-input" id="car-border" placeholder="车辆品牌" style="width:300px;">
                    
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="car-standard" class="am-u-sm-3 am-form-label" >国标 ：</label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" name="car-standard" style="display: none;">
                                              <option value="1">国三</option>
                                              <option value="2">国四</option>
                                              <option value="0">国五</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="car-km" class="am-u-sm-3 am-form-label">公里数：</label>
                                        <div class="am-u-sm-9">
                                            <input type="number" name="car-km" class="tpl-form-input" id="car-km" placeholder="公里数" style="width:300px;">
                    
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="car-price" class="am-u-sm-3 am-form-label">价格：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car-price" class="tpl-form-input" id="car-price" placeholder="报价" style="width:300px;">
                    
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="car_license" class="am-u-sm-3 am-form-label">上牌时间：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car_license" class="am-form-field tpl-form-no-bg" placeholder="上牌时间" id="car_license" data-am-datepicker="" style="width:300px;">
                                        </div>  
                                    </div>
                                    <div class="am-form-group">
                                        <label for="displacement" class="am-u-sm-3 am-form-label">排量：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="displacement" class="tpl-form-input" id="displacement" placeholder="排量" style="width:300px;">
                    
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="car-standard" class="am-u-sm-3 am-form-label" >变速箱 ：</label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="car-standard">
                                              <option value="1">自动挡</option>
                                              <option value="0">手动挡</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="accident" class="am-u-sm-3 am-form-label" >重大事故 ：</label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="accident">
                                              <option value="0">无</option>
                                              <option value="1">有</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="burn" class="am-u-sm-3 am-form-label" >火烧事故 ：</label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="burn">
                                              <option value="0">无</option>
                                              <option value="1">有</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="soaking_water" class="am-u-sm-3 am-form-label" >泡水事故 ：</label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="soaking_water">
                                              <option value="0">无</option>
                                              <option value="1">有</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="transfer" class="am-u-sm-3 am-form-label">过户次数：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="transfer" class="tpl-form-input" id="transfer" placeholder="过户次数" style="width:300px;">
                    
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="address" class="am-u-sm-3 am-form-label">看车地点：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="address" class="tpl-form-input" id="address" placeholder="看车地点" style="width:300px;">
                    
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="nianjian" class="am-u-sm-3 am-form-label">年检时间：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="nianjian" class="am-form-field tpl-form-no-bg" placeholder="年检时间" id="car_license" data-am-datepicker="" style="width:300px;">
                                        </div>  
                                    </div>
                                    <div class="am-form-group">
                                        <label for="constraint" class="am-u-sm-3 am-form-label">交强险到期时间：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="constraint" class="am-form-field tpl-form-no-bg" placeholder="交强险到期时间" id="car_license" data-am-datepicker="" style="width:300px;">
                                        </div>  
                                    </div>
                                    <div class="am-form-group">
                                        <label for="commerce" class="am-u-sm-3 am-form-label">商业险到期：</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="commerce" class="am-form-field tpl-form-no-bg" placeholder="商业险到期" id="car_license" data-am-datepicker="" style="width:300px;">
                                        </div>  
                                    </div>
                                    <div class="am-form-group">
                                        <label for="car-pic" class="am-u-sm-3 am-form-label">车辆图片 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="/admins/img/a5.png" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                <i class="am-icon-cloud-upload"></i> 添加车辆图片</button>
                                                <input id="doc-form-file" type="file" multiple="" name="car-pic">
                                            </div>

                                        </div>
                                    </div>
                                   
                                    <div class="am-form-group">
                                        <label for="content" class="am-u-sm-3 am-form-label">车辆内容</label>
                                        <div class="am-u-sm-9">
                                            <textarea name="content" class="" rows="10" id="content" placeholder="请输入车辆内容"></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
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