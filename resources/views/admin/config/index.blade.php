@extends('/layout/AdminLayout')
@section('title','后台文章')

@section('content')
<div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 网站配置 <small>CONFIG</small></div>
                        <p class="page-header-description">此页面来管理网站配置（包括标题 版权 关键字 网站状态 网站LOGO ）</p>
                    </div>
                    <div class="am-u-lg-3 tpl-index-settings-button">
                        
                    </div>
                </div>

            </div>

            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">网站配置</div>
                                <div class="widget-function am-fr">
                                    
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" id="logoAdd" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">网站标题 <span class="tpl-form-line-small-title">TITLE</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字" value="{{$data->title}}" name="title"> 
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">网站版权 <span class="tpl-form-line-small-title">COPYING</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="请输入网站版权" style="{{$data->Copying}}" name="copying">
                                            <small>请填写网站版权10-20字左右。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">关键字 <span class="tpl-form-line-small-title">SEO</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入关键字" value="{{$data->key}}" name="seo">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">网站LOGO <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="/img/logo.png" alt="" id="myimg" style="width:134px;height:134px">
                                                </div>
                                                <div class="am-form-file">
                                                    <br>
                                                    <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                    <input id="doc-form-file" type="file" name="pic" class="myfile"><i class="am-icon-cloud-upload"></i> 修改网站LOGO
                                                    </button>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">网站维护 <span class="tpl-form-line-small-title">STATUS</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox:0}" style="display:none;" name="wstatus">
                                            @if($data->Wstatus == 1)
                                                <option value="1" selected>开启网页</option>
                                                <option value="0">关闭网页</option>
                                            @else
                                                <option value="1">开启网页</option>
                                                <option value="0" selected>关闭网页</option>
                                            @endif
                                            </select>
                                        </div>
                                    </div>  
                                    <br><br>
                                    <center>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary" id="tj" onclick="doUpload({{$data->id}})"><span class="am-icon-save"></span> 保存修改</button>
                                        <button type="reset" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 重置修改</button>
                                    </center>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">

        $(function(){
            $(".myfile").change(function(){
                uploadImg();

            })
        });
        function uploadImg(){
            //判断上传的图片后缀名
                var imgPath = $(".myfile").val();
                var strExtension = imgPath.substr(imgPath.lastIndexOf('.')+1);
                if(strExtension !='jpg'  && strExtension !='png' && strExtension !='gif' && strExtension !='bmp'){
                    layer.msg('请选择正确的图片格式');
                    return;
                }
                var formdata = new FormData($("#logoAdd")[0]);
            //console.log(formdata);
            $.ajax({
                   type: 'POST',
                   url:'/admin/config',
                   data:formdata,
                   processData:false,
                   contentType: false,
                   cache: false,
                   async :true,
                   beforeSend:function(){

                        // $("#myimg").attr('src',"/admins/img/timg.gif");

                   },
                   success:function(data){
                       //console.log(data);
                       alert(data.message);
                       arr = data;
                       //filepath = data->filePath;

                       // console.log(data.filePath+"?imageView2/3/w/134/h/134/q/75|imageslim");
                       $('#myimg').attr('src',data.filePath+"?imageView2/3/w/134/h/134/q/75|imageslim");
                   },
                   error:function(err){

                     alert("提交失败");
                   }
               });
        }

            function doUpload(id) {  
                
                 var formData = new FormData($( "#logoAdd" )[0]);  // 要求使用的html对象
                 formData.append("logo", "asdasd");   
                 console.log(formData);
                  $.ajax({  
                       url: '/admin/configedit/'+id ,  
                      type: 'POST',  
                       data: formData,  
                       async: true,  
                       // 下面三个参数要指定，如果不指定，会报一个JQuery的错误 
             　　　　　cache: false,  
                       contentType: false,  
                      processData: false,  
                       success: function (data) {  
                           alert(data);  
                       },  
                       error: function (err) {  
                           alert(err);  
                       }  
                  });  
            } 

</script>
@endsection