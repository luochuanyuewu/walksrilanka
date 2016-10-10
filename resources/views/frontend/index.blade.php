@extends('frontend.layout')

@section('content')
    <div class="container">

        <div class="row">
            <div class="text-center">
                <h2>欢迎来到散步斯里兰卡</h2>
                <p>我们拥有多年的旅游与服务行业经验,我们重视提供优质的服务,时刻保持高标准的行业服务态度。同时,斯里兰卡是一个充满神秘与多样性的国家,
                    这恰好为我们的专业团队提供了充足的机会来满足游客门对旅游斯里兰卡的美好向往,加入我们吧!与我们一起参观斯里兰卡,带回属于您的真正的斯里兰卡假日回忆!</p>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <h2>为什么选择我们?</h2>
            <div class="col-md-3">
                <img src="{{url('img_frontend/index/prices.png')}}" alt="价格">
                <span>最好的价格保证</span>
            </div>
            <div class="col-md-3">
                <img src="{{url('img_frontend/index/hotel.png')}}" alt="酒店">
                <span>独家酒店优惠</span>
            </div>
            <div class="col-md-3">
                <img src="{{url('img_frontend/index/other.png')}}" alt="其他">
                <span>额外优惠</span>
            </div>
            <div class="col-md-3">
                <img src="{{url('img_frontend/index/team.png')}}" alt="团队">
                <span>24/7团队</span>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <h2>最新旅游套餐</h2>
            @foreach($packages as $package)
                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            <a href="{{url('show/' . $package->id)}}"><img src="{{url($package->thumbnail->name)}}"
                                                                           width="200" height="150"></a>
                            <h3>{{$package->title}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
            <a href="{{url('packages')}}" class="btn btn-success" role="button">查看所有套餐</a>
        </div>
        <hr>
    </div>
    </div>





@endsection