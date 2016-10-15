@extends('frontend.layout')

@section('content')
    <div class="container">

        {{--联系人部分--}}
        <div class="row">
            <div class="text-center">
                <h2>联系我们</h2>
                <p>我们致力于提供优质的客户服务和体验。您可以通过以下联系人联系我们。</p>
            </div>

            <div class="panel-group">
                <div class="row">
                    @foreach($contacters as $contacter)
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
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
            </div>
        </div>

        @if (count($errors) > 0)
            <div class="row alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if(Session::has('created_packageRequest'))
            <div class="row">
                <p class="bg-danger">{{session('created_packageRequest')}}</p>
            </div>
        @endif
        {{--订单提交部分--}}
        <div class="row">
            <div class="">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle fa-fw"></i> 创建你的旅游请求单
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['method'=>'post','route'=>['request.store']]) !!}

                        {{csrf_field()}}


                        <div class="form-group">
                            {!! Form::label('tourPackage','选择你的旅游套餐:') !!}
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
                            {!! Form::label('address','您的地址:') !!}
                            {!! Form::text('address',null,['class'=>'form-control','placeholder'=>'请填写您的大致居住地址,选填.']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email','您的邮箱:') !!}
                            {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'请填写您的邮箱地址,选填.']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('phone','您的手机号:') !!}
                            {!! Form::number('phone',null,['class'=>'form-control','placeholder'=>'请填写您的名字,必填.']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('提交请求',['class'=>'btn btn-info btn-block']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection