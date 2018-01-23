<html>
    <head>
        <!-- 引入公共样式-->
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <!-- 公共css样式-->
        <link rel="stylesheet" href="/css/h_public.css">
        <link rel="stylesheet"  href="/css/h_ss.css">
    		<link rel="stylesheet" rev="stylesheet" href="/css/jock-citypicker-2.0.min.css" type="text/css" />
    		<script type="text/javascript" src="/js/jock-citypicker-2.0.min.js"></script>
        <!-- 买车页css样式-->
        <link rel="stylesheet" href="/css/h_PurchaseCar.css">
        <!-- 卖车页css样式-->
        <link rel="stylesheet" href="/css/h_SellCar.css">
        <link rel="stylesheet" href="/layer/skin/layer.css">
        <!--  -->

    </head>

        @include('/home/header')
        <!-- 引入页面内容-->
        @section('content')

        @show
        <!-- 公共尾部引入-->
        @include('/home/footer')


</html>
