@extends('backend.layout')
@section('content')

    @if(Session::has('updated_contacter'))
        <div class="row">
            <p class="bg-danger">{{session('updated_contacter')}}</p>
        </div>
    @endif


    @if($contacter)
        <div class="row">
            <div class="">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle fa-fw"></i> 编辑联系人(Edit Contacter)
                    </div>
                    <div class="panel-body">
                        <img src="{{url($contacter->avatar) }}"
                             class="img-thumbnail img-responsive img-rounded" width="100" height="100">
                        {!! Form::model($contacter,['method'=>'PATCH','route'=>['contacter.update',$contacter->id],'files'=>true]) !!}

                        {{csrf_field()}}

                        <div class="form-group">
                            {!! Form::label('name','Name:') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('phone','Phone Number:') !!}
                            {!! Form::text('phone',$contacter->phone,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('wechat_id','We Chat ID:') !!}
                            {!! Form::text('wechat_id',$contacter->wechat_id,['class'=>'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('avatar','Choose New Avatar:') !!}
                            {!! Form::file('avatar',['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update Contacter',['class'=>'btn btn-info btn-block']) !!}
                        </div>

                        {!! Form::close() !!}

                        {!! Form::open(['method' => 'DELETE','route'=>['contacter.destroy',$contacter->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete Contacter',['class'=>'btn btn-danger btn-block']) !!}
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

        </div>
    @endif

@endsection