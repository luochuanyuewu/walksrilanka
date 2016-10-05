@extends('backend.layout')
@section('content')
    <div class="row">
        <div class="">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i> 创建新文章(Create New Article)
                </div>
                <div class="panel-body">
                    {!! Form::open(['method'=>'post','route'=>['article.store'],'files'=>true]) !!}

                    {{csrf_field()}}

                    <div class="form-group">
                        {!! Form::label('thumbnail','Thumbnail:') !!}
                        {!! Form::file('thumbnail',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('title','Title:') !!}
                        {!! Form::text('title',null,['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('content','Content:') !!}
                        {{--第二个参数是默认内容--}}
                        {!! Form::textarea('content',null,['class'=>'form-control','id'=>'article-ckeditor','rows'=>10]) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('category_id','Category:') !!}
                        {!! Form::select('category_id',[''=>'Choose a category'] + $categories,null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create Article',['class'=>'btn btn-info btn-block']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>


    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
@endsection