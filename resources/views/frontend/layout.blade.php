<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>散步斯里兰卡 ｜ 斯里兰卡 旅游 旅行 度假 假日 活动 应有尽有！</title>

    <meta name="description"
          content="你拥有无比的好奇心,想要体验生活中最大的乐趣吗?那么欢迎大家来到斯
        里兰卡。在这里,名胜古迹,美丽的风景,激流壮阔的海浪,舒适的的气候和天气,特色的美食等等应有尽有。在这里你什么都能看到。。而我们,则希望给你们带来最美好的生活体验。"/>
    <meta name="keywords" content="sanbusililanka, 旅游, 斯里兰卡, 散步, 旅行社, 美丽的地方, travel sri lanka, 锡兰, 旅游斯里兰卡,散步斯里兰卡, 宾馆, 风景"/>


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



<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>



</body>
</html>