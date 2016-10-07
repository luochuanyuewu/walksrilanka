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
            width: 60%;
            margin: auto;
        }
    </style>
</head>
<body>
@include('backend.navigation')

<div class="container">
    @if (count($errors) > 0)
        <div class="row alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>