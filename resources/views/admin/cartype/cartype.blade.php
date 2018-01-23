@extends('/layout/adminLayout')
@section('title','后台文章')

@section('content')
<html>
 <head></head>
 <body>
  <div class="tpl-content-wrapper">
   <div class="row-content am-cf">
    <div class="row">
     <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
      <div class="widget am-cf">
       <div class="widget-head am-cf">
        <div class="widget-title  am-cf">
         文章列表
        </div>
       </div>
       <div class="widget-body  am-fr">
        <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
         <div class="am-form-group">
          <div class="am-btn-toolbar">
           <div class="am-btn-group am-btn-group-xs">
            <button type="button" class="am-btn am-btn-default am-btn-success new"><span class="am-icon-plus"></span> 新增</button>

           </div>
          </div>
         </div>
        </div>
        <form method="get" action="/admin/CarType/">
        <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
         <div class="am-form-group tpl-table-list-select">
          <select data-am-selected="{btnSize: 'sm'}" name="key">
              @if(empty($reqall['key']))

              <option value="id" >车辆ID</option>
              <option value="car_typeName">车辆名称</option>
              @else

              <option value="id" {{$reqall["key"] == "id"? "selected" :"" }}>车辆ID</option>
              <option value="car_typeName" {{$reqall["key"] == "car_typeName"? "selected" :"" }}>车辆名称</option>

              @endif
              </select>
         </div>
        </div>
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
         <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
          <input type="text" class="am-form-field " name="val"/>
          <span class="am-input-group-btn"> <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button> </span>
         </div>
        </div>
        </form>
        <div class="am-u-sm-12">
         <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
          <thead>
           <tr style="text-align:center">
            <th>ID</th>
            <th>车辆标志</th>
            <th>车辆名称</th>
            <th>操作</th>
           </tr>
          </thead>
          <tbody>
              @foreach($data as $k=>$v)
           <tr class="gradeX" style="text-align:center">
            <td class="am-text-middle" id="content">{{$v['id']}}</td>
            <td> <img src="{{$v['car_icon']}}" class="tpl-table-line-img" alt="" /></td>
            <td class="am-text-middle">{{$v['car_typeName']}}</td>
            <td class="am-text-middle">
             <div class="tpl-table-black-operation">
              <a href="javascript:;" onclick="edit({{$v['id']}})"> <i class="am-icon-pencil"></i> 编辑 </a>
              <a href="javascript:;" class="tpl-table-black-operation-del" onclick="deleteCar({{$v['id']}},$(this))"> <i class="am-icon-trash"></i> 删除 </a>
              <a href="/admin/CarType/Carlist/{{$v['id']}}" class="am-btn tpl-table-black-operation"> <i class="am-icon-archive"></i> 查看 </a>
             </div>
            </td>
           </tr>
           @endforeach
           <!-- more data -->
          </tbody>
         </table>
        </div>
        <div class="am-u-lg-12 am-cf">
         <div class="am-fr">
             @if(isset($reqall))
             {!! $data->appends($reqall)->render() !!}
             @else
             {!! $data->render() !!}
             @endif
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
    $(".new").click(function()
    {
        layer.open({
      type: 2,
      title: '车辆类别添加',
      shadeClose: true,
      shade: false,
      maxmin: true, //开启最大化最小化按钮
      area: ['893px', '600px'],
      content: '/admin/CarType/add'
            });
    });

    function edit(obj)
    {

        layer.open({
      type: 2,
      title: '车辆类别添加',
      shadeClose: true,
      shade: false,
      maxmin: true, //开启最大化最小化按钮
      area: ['893px', '600px'],
      content: '/admin/CarType/'+obj+'/edit',
        });
    }

    function deleteCar(id,obj){

        layer.confirm('您确定要删除吗?', {
              btn: ['确定','取消'] //按钮
            }, function()
            {

                $.get("/admin/CarType/"+id+"/delete/",function(data){
                        if(data ==1){

                            layer.msg('恭喜您,删除成功', {icon: 1});
                            obj.parent().parent().parent().remove();
                        }else if(data == 2){
                            layer.msg('恭喜您,删除失败', {icon: 1});
                            

                        }else{
                            layer.msg('请删除子类之后再进行操作', {icon: 3});

                        }

                })
            }, function()
            {
              layer.msg('您已取消操作', {icon: 5});
            });
    }




</script>
@endsection
