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
            <h2 class="animated fadeInLeft">联系我们</h2>
            <p>我们致力于提供优质的客户服务和体验。您可以通过以下联系人联系我们。</p>
        </div>

        @foreach($contacters as $contacter)
            <div class="table-responsive animated bounceInUp thumbnail col-md-6" style="background-color: lightyellow;">
                <table class="table">
                    <thead>
                    <tr>
                        <th>头像</th>
                        <th>姓名</th>
                        <th>手机号</th>
                        <th>微信号</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="{{url($contacter->avatar)}}" alt="{{$contacter->name}}"
                                 width="100" height="100"
                                 class="img-responsive"></td>
                        <td>{{$contacter->name}}</td>
                        <td>{{$contacter->phone}}</td>
                        <td>{{$contacter->wechat_id}}</td>
                    </tr>
                    </tbody>
                </table>
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