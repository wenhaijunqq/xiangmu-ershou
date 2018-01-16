<!DOCTYPE html>
<html>
<head>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>好饿呀店铺后台</title>
  <script type="text/javascript" src="{{asset('shops/login/js/jquery-1.12.3.min.js')}}"></script>
  <link type="text/css" href="{{asset('shops/login/css/main.min814b.css')}}" rel="stylesheet" />
  <link href="{{asset('shops/login/css/acount6aa4.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="{{asset('layer/layer.js')}}"></script>
</head>

<body style="background: url('../shops/login/images/bg.jpg') no-repeat;">
    <div class="login_border" style="padding:10px;">
      <div class="login" style="display: block;">
        <ul class="login-tab">
          <li class="login-on">普通登录</li>
          <li>手机登录</li>
        </ul>
        <div class="login-body">
          <div class="login-style" style="display: block;">
            <dl><dd><input name="txtUser" type="text" id="txtUser" placeholder="用户名/邮箱/手机号" /></dd></dl>
            <dl>
              <dd><input type="password" id="Userpwd" onkeydown="enterHandler(event)" placeholder="请输入您的密码" /></dd>
            </dl>
            <div class="tishi"></div>
            <button onclick="cliLogin()" id="logbtn" style="outline:none">登 录</button>
          </div>
          <div class="login-style">
            <dl><dd><input name="phone" type="text" id="phone" placeholder="您的手机号码" /></dd></dl>
            <dl>
                            <dd><input type="text" id="dynamicPWD"  style="width: 133px;" placeholder="短信验证码" /><input type="button" id="btn" class="btn_mfyzm" value="获取动态密码" onclick="Sendpwd(this)"  disabled="disabled" /></dd>
            </dl>
            <div class="tishi"></div>
            <button type="button" id="dynamicLogon" style="outline:none">登 录</button>
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
      </div>
    </div>


<script type="text/javascript" src="{{asset('shops/login/js/style.js')}}"></script>

</body>

</html>

<script type="text/javascript">

    //检查电话号码
    $('input[name=phone]').blur(function(){
        var phone = $(this).val();
        $.post('/shop/phone',{'phone':phone,'_token':'{{csrf_token()}}'},function(data){
              switch(data){
                case 'no':
                    layer.tips('电话号码格式不正确', '#phone');
                    $('#btn').attr('disabled','disabled');
                    break;
                case 'not':
                    layer.tips('电话号码输入错误', '#phone');
                    $('#btn').attr('disabled','disabled');
                    break;
                case 'ok':
                    $('#btn').removeAttr('disabled');
                    break;
            }
        });
    });


    //发送验证码
    var time = 0;
    $('#btn').click(function(){
        if(time == 0){
            var phone = $('input[name=phone]').val();
            $.post('/shop/code',{'phone':phone,'_token':'{{csrf_token()}}'},function(data){
                alert(data);
            });
            $('#btn').attr('disabled','disabled');
        }
        if (time == 0) {
                time = 10;
                var index = setInterval(function(){
                    time--;
                    if (time == 0) {
                        clearInterval(index);
                        time = 0;
                        $('#btn').removeAttr('disabled');
                    }
                }, 1000);
            }
    });

    //执行登录
    $('#dynamicLogon').click(function(){
        var code = $('#dynamicPWD').val();
        var phone = $('input[name=phone]').val();
        $.post('/shop/dologin',{'code':code,'phone':phone,'_token':'{{csrf_token()}}'},function(data){
            if(data == 0){
                layer.tips('验证码不正确', '#dynamicPWD');
            }else{
                location.href='/shop/index';
            }
        });
    });
</script><!DOCTYPE html>
<html>
<head>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>好饿呀店铺后台</title>
  <script type="text/javascript" src="{{asset('shops/login/js/jquery-1.12.3.min.js')}}"></script>
  <link type="text/css" href="{{asset('shops/login/css/main.min814b.css')}}" rel="stylesheet" />
  <link href="{{asset('shops/login/css/acount6aa4.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="{{asset('layer/layer.js')}}"></script>
</head>

<body style="background: url('../shops/login/images/bg.jpg') no-repeat;">
    <div class="login_border" style="padding:10px;">
      <div class="login" style="display: block;">
        <ul class="login-tab">
          <li class="login-on">普通登录</li>
          <li>手机登录</li>
        </ul>
        <div class="login-body">
          <div class="login-style" style="display: block;">
            <dl><dd><input name="txtUser" type="text" id="txtUser" placeholder="用户名/邮箱/手机号" /></dd></dl>
            <dl>
              <dd><input type="password" id="Userpwd" onkeydown="enterHandler(event)" placeholder="请输入您的密码" /></dd>
            </dl>
            <div class="tishi"></div>
            <button onclick="cliLogin()" id="logbtn" style="outline:none">登 录</button>
          </div>
          <div class="login-style">
            <dl><dd><input name="phone" type="text" id="phone" placeholder="您的手机号码" /></dd></dl>
            <dl>
                            <dd><input type="text" id="dynamicPWD"  style="width: 133px;" placeholder="短信验证码" /><input type="button" id="btn" class="btn_mfyzm" value="获取动态密码" onclick="Sendpwd(this)"  disabled="disabled" /></dd>
            </dl>
            <div class="tishi"></div>
            <button type="button" id="dynamicLogon" style="outline:none">登 录</button>
          </div>
        </div>
      </div>
    </div>


<script type="text/javascript" src="{{asset('shops/login/js/style.js')}}"></script>

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
                        }else{


                        }

                })
            }, function()
            {
              layer.msg('您已取消操作', {icon: 5});
            });
    }




</script>
@endsection
