<html>
    <head>
        <!-- 引入公共样式-->
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <!-- 公共css样式-->
        <link rel="stylesheet" href="/css/h_public.css">

        <!-- 买车页css样式-->
        <link rel="stylesheet" href="/css/h_PurchaseCar.css">
        <!-- 卖车页css样式-->
        <link rel="stylesheet" href="/css/h_SellCar.css">
        <link rel="stylesheet" href="/layer/skin/layer.css">
        <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="/layer/layer.js"></script>
    </head>
    
        @include('/home/header')
        <!-- 引入页面内容-->
        @section('content')

        @show
        <!-- 公共尾部引入-->
        @include('/home/footer')



</html>
