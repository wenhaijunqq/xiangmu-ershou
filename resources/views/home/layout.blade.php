<html>
    <head>
        <!-- 引入公共样式-->
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/h_index.css">
        <link rel="stylesheet" href="css/h_public.css">
    </head>
    <body>

        <!-- 引入页面内容-->
        @section('content');

        @show
        <!-- 公共尾部引入-->

    </body>

</html>
