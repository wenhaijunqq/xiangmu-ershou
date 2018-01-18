
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" />
  <title>Amaze UI Admin index Examples</title>
  <meta name="description" content="这是一个 index 页面" />
  <meta name="keywords" content="index" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="renderer" content="webkit" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/admins/i/favicon.png" />
  <link rel="apple-touch-icon-precomposed" href="/admins/i/app-icon72x72@2x.png" />
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <script src="/admins/js/echarts.min.js"></script>
  <link rel="stylesheet" href="/admins/css/amazeui.min.css" />
  <link rel="stylesheet" href="/layer/skin/layer.css" />
  <link rel="stylesheet" href="/admins/css/amazeui.datatables.min.css" />
  <link rel="stylesheet" href="/admins/css/app.css" />
  <script src="/admins/js/jquery.min.js"></script>
  <script src="/layer/layer.js"></script>
 </head>
 <body data-type="widgets">
  <script src="/admins/js/theme.js"></script>
  <!-- 内容区域 -->
  <div class="tpl-content-wrapper">
   <div class="row-content am-cf">
    <div class="row">
     <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
      <div class="widget am-cf">
       <div class="widget-head am-cf">

        <div class="widget-function am-fr">
         <a href="javascript:;" class="am-icon-cog"></a>
        </div>
       </div>
       <div class="widget-body am-fr">
        <form class="am-form tpl-form-border-form tpl-form-border-br " id="carAdd" enctype="multipart/form-data">
                    {{csrf_field()}}
         <div class="am-form-group">
          <label for="user-name" class="am-u-sm-3 am-form-label" name="carName" >车辆品牌名 <span class="tpl-form-line-small-title">Title</span></label>
          <div class="am-u-sm-9">
           <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字" name="title" value="" />
           <small>请填写标题文字10-20字左右。</small>
          </div>
         </div>
         <div class="am-form-group">
          <label for="user-weibo" class="am-u-sm-3 am-form-label" style="padding-top:70px">图标 <span class="tpl-form-line-small-title">Images</span></label>
          <div class="am-u-sm-9">
           <div class="am-form-group am-form-file">
            <div class="tpl-form-file-img">
             <img src="/admins/img/timg1.gif" alt=""  id="myimg" style="width:200px;height:200px"/>
            </div>
            <button type="button" class="am-btn am-btn-danger am-btn-sm" style="width:200px"> <i class="am-icon-cloud-upload" ></i> 添加封面图片</button>
            <input id="doc-form-file " type="file" name="pic" value=""  class="myfile"/>

           </div>
           <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
             <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success" id="sumbit" >提交</button>
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
  <script src="/admins/js/amazeui.min.js"></script>
  <script src="/admins/js/amazeui.datatables.min.js"></script>
  <script src="/admins/js/dataTables.responsive.min.js"></script>
  <script src="/admins/js/app.js"></script>
 </body>
</html>

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
                var formdata = new FormData($("#carAdd")[0]);
            //console.log(formdata);
            $.ajax({
                   type: 'POST',
                   url:'/admin/CarType/' ,
                   data:formdata ,
                   processData:false,
                   contentType: false,
                   cache: false,
                   async :true,
                   beforeSend:function(){

                        //$("#myimg").attr('src',"/admins/img/timg.gif");

                   },
                   success:function(data){
                       alert(data.message);
                       arr = data;
                       //filepath = data->filePath;


                       $('#myimg').attr('src',data.filePath);
                   },
                   error:function(err){

                     alert(err);
                   }
               });

        }

            $("#sumbit").click(function(){

        $(document).on("click","#sumbit",function(){

            //判断是否上传文件
                var imgPath = $(".myfile").val();
                var title = $("#user-name").val();
                if(title == ""){
                   layer.msg('请添加品牌名称');
                   return;
                   }
                 if(imgPath == ""){

                    imgPath = $('#myimg').attr('src');
                }
                $.post("/admin/CarType/createCat",{'_token':'{{csrf_token()}}','car_typeName':title,'car_icon':arr.filePath,'tid':0},function(data){
                            //alert(data);
                        if(data == 1){
                            layer.alert('添加品牌成功', {
                              skin: 'layui-layer-molv' //样式类名
                              ,closeBtn: 0
                            }, function(){
                                    parent.location.reload();

                              });

                        }else{
                            layer.alert('添加品牌失败', {
                              skin: 'layui-layer-molv' //样式类名
                              ,closeBtn: 0
                            }, function(){
                                      window.location.reload();

                              });
                        }
                });
            })
                  

        })



</script>
