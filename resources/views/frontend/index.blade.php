@extends('frontend.layout')

@section('content')
    <div class="container-fluid">

        {{--介绍部分--}}
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="text-center">欢迎来到散步斯里兰卡</h2>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们拥有多年的旅游与服务行业经验,我们重视提供优质的服务,时刻保持高标准的行业服务态度。同时,斯里兰卡是一个充满神秘与多样性的国家,
                    这恰好为我们的专业团队提供了充足的机会来满足游客门对旅游斯里兰卡的美好向往,加入我们吧!与我们一起参观斯里兰卡,带回属于您的真正的斯里兰卡假日回忆!</p>
            </div>
        </div>
        <hr>
        {{--商标部分--}}
        <div class="row text-center">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>为什么选择我们?</h2>
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
            <div class="row text-center">
                <h2>最新旅游套餐</h2>
                @foreach($packages as $package)
                    <div class="col-sm-4 text-center">
                        <a href="{{url('show/' . $package->id)}}"><img src="{{url($package->thumbnail->name)}}"
                                                                       width="400" height="300"
                                                                       class="img-rounded img-circle"></a>
                        <h4>{{$package->title}}</h4>
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
            <div class="col-sm-10 col-sm-offset-1">
                <h2 class="text-center">关于斯里兰卡</h2>
                <div class="col-sm-6">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;天堂,是描述斯里兰卡的最佳形容词之一,
                        斯里兰卡是一个拥有金色的沙滩和湛蓝的海水的美丽热带岛屿。我们的国家因丰富多样的文化而得名,我们国家的美丽风景以及悠久的历史文化可以追溯到公元前543年。
                    </p>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;想要旅行斯里兰卡的游客们,有丰富多彩的活动可以进行选择,比如慵懒地躺在
                        观光斯里兰卡的游客们可以在丰富多彩的活动中选择自己想要的,从慵懒地躺在沙滩上享受阳光的沐浴到在珊瑚礁周围潜水,从观察野生动物到探索古代寺庙或废墟。
                        只有您能想到到,没有您做不到到。
                    </p>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赶紧前往斯里兰卡,体验这场迷人到旅行,这些美好的记忆将会伴随您一生!
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
        </div>

        <hr>

        @if(count($places)>=8)
            {{--旅游景点部分--}}
            <div>
                <div class="row text-center">
                    <h2>旅游景点</h2>
                    <div class="col-md-6">
                        @for($i = 0;$i<8;$i+=2)
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{url('show/' . $places[$i]->id)}}"><img
                                                src="{{url($places[$i]->thumbnail->name)}}"
                                                width="300" height="225" class=" "></a>
                                    <h4>{{$places[$i]->title}}</h4>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{url('show/' . $places[$i+1]->id)}}"><img
                                                src="{{url($places[$i+1]->thumbnail->name)}}"
                                                width="300" height="225" class=" "></a>
                                    <h4>{{$places[$i+1]->title}}</h4>
                                </div>
                            </div>
                        @endfor

                    </div>
                    <div class="col-md-6">
                        <img src="{{url('img_frontend/index/map.gif')}}" alt="地图"
                             class=" " width="700" height="1083">
                    </div>

                </div>
                <br>
                <div class="row text-center">
                    <a href="{{url('places')}}" class="btn btn-success" role="button">查看所有景点</a>
                </div>
            </div>
            <hr>
        @endif

    </div>








@endsection