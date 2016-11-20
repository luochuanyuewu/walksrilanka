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


    <link rel="stylesheet" href="{{url('vendor/scrollToTop/css/totop.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/blueimp-gallery.min.css')}}">

    <style>
        .article-carousel-inner > .item > img,
        .article-carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body style="background-color: lightgoldenrodyellow">


<div class="container">
    <div class="row">
        @include('frontend.includes.navigation')
    </div>

    <div class="row">
        <div class="col-sm-9">
            @yield('content')
        </div>

        <div class="col-sm-3">
            @include('frontend.includes.rightside')
        </div>
    </div>

    {{--ScrollToTop容器--}}
    <div id="totopscroller"></div>

    <br>


    @include('frontend.includes.footer')
    @include('frontend.includes.feedbackBox')

</div>

<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>


<script src="{{url('js/app.js')}}"></script>

<script src="{{url('vendor/scrollToTop/js/jquery.totop.js')}}"></script>

<script>
    $(function () {
        $('#totopscroller').totopscroller({link: 'http://www.sanbusililanka.com'});
    })
</script>

<script src="{{url('js/blueimp-gallery.min.js')}}"></script>

<script>
    document.getElementById('article-gallery').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>


</body>
</html>