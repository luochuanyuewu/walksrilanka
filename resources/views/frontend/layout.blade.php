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


    <link rel="stylesheet" href="{{url('vendor/scrollToTop/css/totop.css')}}">

    <style>
        .article-carousel-inner > .item > img,
        .article-carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>
@include('frontend.includes.navigation')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            @include('frontend.includes.sideshow')
            @yield('content')
        </div>

        <div class="col-sm-3">
            @include('frontend.includes.rightside')
        </div>
    </div>

    {{--ScrollToTop容器--}}
    <div id="totopscroller"></div>

    <br>

    <footer class="text-center">
        2016~至今 散步斯里兰卡 | 版权所有
    </footer>


</div>

<script src="{{url('vendor/scrollToTop/js/jquery.totop.js')}}"></script>

<script>
    $(function(){
        $('#totopscroller').totopscroller({link:'http://www.sanbusililanka.com'});
    })
</script>


</body>
</html>