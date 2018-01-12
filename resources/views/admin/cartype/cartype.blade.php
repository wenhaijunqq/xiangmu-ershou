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
        <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
         <div class="am-form-group tpl-table-list-select">
          <select data-am-selected="{btnSize: 'sm'}"> <option value="option1">所有类别</option> <option value="option2">IT业界</option> <option value="option3">数码产品</option> <option value="option3">笔记本电脑</option> <option value="option3">平板电脑</option> <option value="option3">只能手机</option> <option value="option3">超极本</option> </select>
         </div>
        </div>
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
         <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
          <input type="text" class="am-form-field " />
          <span class="am-input-group-btn"> <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button> </span>
         </div>
        </div>
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
            <td class="am-text-middle">{{$v['id']}}</td>
            <td> <img src="{{$v['car_icon']}}" class="tpl-table-line-img" alt="" /></td>
            <td class="am-text-middle">{{$v['car_typeName']}}</td>
            <td class="am-text-middle">
             <div class="tpl-table-black-operation">
              <a href="javascript:;" onclick="edit({{$v['id']}})"> <i class="am-icon-pencil"></i> 编辑 </a>
              <a href="javascript:;" class="tpl-table-black-operation-del"> <i class="am-icon-trash"></i> 删除 </a>
              <a href="javascript:;"class="am-btn tpl-table-black-operation"> <i class="am-icon-archive"></i> 查看 </a>
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
          <ul class="am-pagination tpl-pagination">
           <li class="am-disabled"><a href="#">&laquo;</a></li>
           <li class="am-active"><a href="#">1</a></li>
           <li><a href="#">2</a></li>
           <li><a href="#">3</a></li>
           <li><a href="#">4</a></li>
           <li><a href="#">5</a></li>
           <li><a href="#">&raquo;</a></li>
          </ul>
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
    $(".new").click(function(){
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
    function edit(obj){
        layer.open({
      type: 2,
      title: '车辆类别添加',
      shadeClose: true,
      shade: false,
      maxmin: true, //开启最大化最小化按钮
      area: ['893px', '600px'],
      content: '/admin/CarType/edit'
  });

    }
</script>
@endsection
