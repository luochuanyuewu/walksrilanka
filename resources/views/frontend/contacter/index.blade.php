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
            <div class="animated bounceInUp  col-md-6">
                <table class="table table-bordered  table-responsive" style="background-color: lightyellow;">
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


    <div class="row">
        <div class="text-center">
            <h2 class="animated fadeInLeft">旅游请求单</h2>
            <p>通过填写以下请求单，我们将会在24小时内联系并与您沟通。</p>
        </div>

        <div class="thumbnail" style="background-color: lightyellow;">
            {!! Form::open(['method'=>'post','route'=>['request.store']]) !!}

            {{csrf_field()}}


            <div class="form-group">
                {!! Form::label('tourPackage','选择您的旅游套餐:') !!}
                <select name="tourPackage" class="form-control">
                    @if($packageName)
                        <option value="{{ $packageName }}">{{ $packageName }}</option>
                    @else
                        @foreach($packages as $package)
                            <option value="{{ $package }}">{{ $package }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="form-group">
                {!! Form::label('dateOfArrival','到达日期:') !!}
                {!! Form::date('dateOfArrival',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('dateOfDeparture','离开日期:') !!}
                {!! Form::date('dateOfDeparture',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('adults','成年人数:') !!}
                {!! Form::number('adults',0,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('childrenBetweenFiveAndEleven','5~11岁的小孩:') !!}
                {!! Form::number('childrenBetweenFiveAndEleven',0,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('childrenUnderFive','低于五岁的小孩:') !!}
                {!! Form::number('childrenUnderFive',0,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('numberOfRooms','房间个数:') !!}
                {!! Form::number('numberOfRooms',0,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('kindOfAccommodation','住宿类型:') !!}
                {!! Form::select('kindOfAccommodation', ['Budget Guesthouses' => '普通宾馆',
                '2-3 Star Hotels' => '2~3星级酒店','4-5 Star Hotels'=>'4~5星级酒店'], 'Budget Guesthouses',['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('specialRequests','特殊要求:') !!}
                {!! Form::textarea('specialRequests',null,['class'=>'form-control','placeholder'=>'请填写您的其他要求.选填','rows'=>4]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('name','您的姓名:') !!}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'请填写您的名字,必填.']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('phone','您的手机号:') !!}
                {!! Form::number('phone',null,['class'=>'form-control','placeholder'=>'请填写您的手机号以便我们联系,必填.']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('wechat_id','您的微信ID:') !!}
                {!! Form::text('wechat_id',null,['class'=>'form-control','placeholder'=>'请填写您的微信ID以便我们联系,建议填写!']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email','您的邮箱:') !!}
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'请填写您的邮箱地址,选填.']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('address','您的地址:') !!}
                {!! Form::text('address',null,['class'=>'form-control','placeholder'=>'请填写您的大致居住地址,选填.']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('提交请求',['class'=>'btn btn-info btn-block']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>







    {{--旅游套餐请求触发按钮--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal"--}}
    {{--data-target="#TourReqestForm">提交旅游请求单--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}

    <hr>


    {{--@include('frontend.includes.packageRequestForm')--}}



@endsection