<html>
    <head>
        <!-- 引入公共样式-->
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="keywords" content="{{$config[0]->key}}">
        <!-- 公共css样式-->
        <link rel="stylesheet" href="/css/h_public.css">
        <!-- 卖车页css样式-->
        <link rel="stylesheet" href="/layer/skin/layer.css">

        <script src="/admins/js/jquery.min.js"></script>
        <script src="/layer/layer.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    </head>
       <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/layer/layer.js"></script>

        @include('/home/header')
        <!-- 引入页面内容-->
        @section('content')

        @show
        <!-- 公共尾部引入-->
        @include('/home/footer')



</html>
