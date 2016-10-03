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

</head>
<body>
@include('includes.backend.navigation')


{{--<div class="container" style="margin: 56px 0px 0px 0px;">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-4">--}}
            {{--@include('includes.backend.leftside')--}}
        {{--</div>--}}
        {{--<div class="col-md-12">--}}
            {{--@yield('content')--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}

<div class="container">
    @yield('content')
</div>

</body>
</html>