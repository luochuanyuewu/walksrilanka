@extends('backend.layout')
@section('content')
    <div class="row">
        <div class="">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> 创建新联系人(Create New Contacter)
                </div>
                <div class="panel-body">
                    {!! Form::open(['method'=>'post','route'=>['contacter.store'],'files'=>true]) !!}

                    {{csrf_field()}}

                    <div class="form-group">
                        {!! Form::label('name','姓名:') !!}
                        {!! Form::text('name','无',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone','手机号:') !!}
                        {!! Form::text('phone','无',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('wechat_id','微信ID:') !!}
                        {!! Form::text('wechat_id','无',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('avatar','选择新头像:') !!}
                        {!! Form::file('avatar',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('创建联系人',['class'=>'btn btn-info btn-block']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>
@endsection