@extends('frontend.layout')

@section('content')
        {{--介绍部分--}}
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2 class="text-center animated fadeInLeft">欢迎来到散步斯里兰卡</h2>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们拥有多年的旅游与服务行业经验,我们重视提供优质的服务,时刻保持高标准的行业服务态度。同时,斯里兰卡是一个充满神秘与多样性的国家,
                    这恰好为我们的专业团队提供了充足的机会来满足游客门对旅游斯里兰卡的美好向往,加入我们吧!与我们一起参观斯里兰卡,带回属于您的真正的斯里兰卡假日回忆!</p>
            </div>
        </div>
        <hr>
        {{--商标部分--}}
        <div class="row text-center">
            <div class="col-sm-12   col-md-8 col-md-offset-2">
                <h2 class=" animated fadeInLeft">为什么选择我们?</h2>
                <div class="col-sm-3">
                    <img src="{{url('img_frontend/index/prices.png')}}" alt="价格">
                    <span>最好的价格保证</span>
                </div>
                <div class="col-sm-3">
                    <img src="{{url('img_frontend/index/hotel.png')}}" alt="酒店">
                    <span>独家酒店优惠</span>
                </div>
                <div class="col-sm-3">
                    <img src="{{url('img_frontend/index/other.png')}}" alt="其他">
                    <span>额外优惠</span>
                </div>
                <div class="col-sm-3">
                    <img src="{{url('img_frontend/index/team.png')}}" alt="团队">
                    <span>24/7团队</span>
                </div>
            </div>

        </div>
        <hr>
        {{--最新套餐部分--}}
        <div>
            <div class="row ">
                <h2 class="text-center animated fadeInLeft">最新旅游套餐</h2>
                @foreach($packages as $package)
                    <div class="col-md-4">
                        <div class="thumbnail animated flipInX"
                             style="background-color: lightyellow">
                            <p class="text-center">{{$package->title}}</p>
                            <a href="{{url('show/' . $package->id)}}">
                                <img src="{{url($package->thumbnail->name)}}" class="img-responsive "
                                     style="width:300px;height:225px">
                            </a>
                        </div>

                    </div>
                @endforeach

            </div>
            <br>
            <div class="row text-center">
                <a href="{{url('packages')}}" class="btn btn-success" role="button">查看所有套餐</a>
            </div>
        </div>

        <hr>

        {{--关于斯里兰卡部分--}}
        <div class="row">
            <h2 class="text-center animated fadeInLeft">关于斯里兰卡</h2>
            <div class="col-sm-6">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;天堂,是描述斯里兰卡的最佳形容词之一,
                    斯里兰卡是一个拥有金色的沙滩和湛蓝的海水的美丽热带岛屿。我们的国家因丰富多样的文化而得名,我们国家的美丽风景以及悠久的历史文化可以追溯到公元前543年。
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;想要旅行斯里兰卡的游客们,观光斯里兰卡的游客们可以在丰富多彩的活动中选择自己喜欢的项目,从慵懒地躺在沙滩上享受阳光的沐浴到在珊瑚礁周围潜水,从观察野生动物到探索古代寺庙或废墟。
                    只有您能想到,没有您做不到。
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赶紧前往斯里兰卡,体验这场迷人的旅行,这些美好的记忆将会伴随您一生!
                </p>

            </div>
            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="http://player.youku.com/embed/XMTQ0MDM3NTg0NA=="
                            frameborder=0
                    'allowfullscreen'></iframe>
                </div>
            </div>
        </div>

        <hr>

        {{--旅游景点部分--}}
        <div>
            <div class="row text-center">
                <h2 class="animated fadeInLeft">旅游景点</h2>
                <div class="col-md-6">
                    @foreach($places as $place)
                        <div class="col-md-6 col-sm-12">
                            <div class="thumbnail animated flipInX"
                                 style="background-color: lightyellow;">
                                <p class="text-center">{{$place->title}}</p>
                                <a href="{{url('show/' . $place->id)}}">
                                    <img src="{{url($place->thumbnail->name)}}" class="img-responsive "
                                         style="width:300px;height:auto">
                                </a>
                            </div>

                        </div>
                    @endforeach

                </div>
                <div class="col-md-6">
                    <img src="{{url('img_frontend/index/map.gif')}}" alt="地图"
                         class="img-responsive animated fadeIn" style="width: 500px;">
                </div>

            </div>
            <br>
            <div class="row text-center">
                <a href="{{url('places')}}" class="btn btn-success" role="button">查看所有景点</a>
            </div>
        </div>
        <hr>

        {{--最新活动部分--}}
        <div>
            <div class="row ">
                <h2 class="text-center animated fadeInLeft">最新活动项目</h2>
                @foreach($activities as $activity)
                    <div class="col-md-4">
                        <div class="thumbnail animated flipInX"
                             style="background-color: lightyellow">
                            <p class="text-center">{{$activity->title}}</p>
                            <a href="{{url('show/' . $activity->id)}}">
                                <img src="{{url($activity->thumbnail->name)}}" class="img-responsive "
                                     style="width:300px;height:225px">
                            </a>
                        </div>

                    </div>
                @endforeach

            </div>
            <br>
            <div class="row text-center">
                <a href="{{url('activities')}}" class="btn btn-success" role="button">查看所有项目</a>
            </div>
        </div>

        <hr>
@endsection