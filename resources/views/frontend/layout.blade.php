<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>散步斯里兰卡</title>

    <meta name="description"
          content="{{Setting::get('Site.Description','Site Description')}}"/>
    <meta name="keywords" content="{{Setting::get('Site.Keywords','Site Keywords')}}"/>


    <link rel="stylesheet" href="{{url('css/app.css')}}">

    <script src="{{url('js/app.js')}}"></script>
    <style>
        .article-carousel-inner > .item > img,
        .article-carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>
@include('frontend.navigation')
@include('frontend.sideshow')

@yield('content')
<br>
<footer class="text-center" style="background-color: black">
    2016~至今 散步斯里兰卡 | 版权所有
</footer>
</body>
</html>