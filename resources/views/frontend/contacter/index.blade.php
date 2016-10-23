@extends('frontend.layout')

@section('content')
    @if (count($errors) > 0)
        <hr>
        <div class="row alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(Session::has('created_packageRequest'))
        <hr>
        <div class="row">
            <p class="bg-danger">{{session('created_packageRequest')}}</p>
        </div>
    @endif

    {{--联系人部分--}}
    <div class="row">
        <div class="text-center">
            <h2>联系我们</h2>
            <p>我们致力于提供优质的客户服务和体验。您可以通过以下联系人联系我们。</p>
        </div>

        @foreach($contacters as $contacter)
            <div class="col-md-4">
                <div class="list-group">
                    <div class="list-group-item">
                        <img src="{{url($contacter->avatar)}}" alt="{{$contacter->name}}"
                             width="100" height="100"
                             class="img-thumbnail img-responsive">姓名:{{$contacter->name}}
                        ,手机号:{{$contacter->phone}},
                        微信ID:{{$contacter->wechat_id}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    {{--旅游套餐请求触发按钮--}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal"
                    data-target="#TourReqestForm">提交旅游请求单
            </button>
        </div>
    </div>

    <hr>


    @include('frontend.includes.packageRequestForm')



@endsection