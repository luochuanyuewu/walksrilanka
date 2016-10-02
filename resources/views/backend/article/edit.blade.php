@extends('backend.layout')

@section('content')

    @if($article)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-clock-o fa-fw"></i> Edit Article
                    </div>
                    <div class="panel-body">

                        {!! Form::model($article,['method'=>'PATCH','route'=>['article.update',$article->id],'files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::label('title','Title:') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id','Title:') !!}
                            {!! Form::select('category_id',[''=>'Category'] + $categories,null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('content','Content:') !!}
                            {{--第二个参数是默认内容--}}
                            {!! Form::textarea('content',null,['class'=>'form-control','rows'=>15]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update Article',['class'=>'btn btn-info btn-block col-sm-6']) !!}
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="">
            {{--载入显示错误的界面--}}
            @include('includes.form_error')
        </div>

    </div>
@endsection
