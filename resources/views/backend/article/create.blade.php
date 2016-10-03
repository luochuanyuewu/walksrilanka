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
                        {!! Form::label('title','标题:') !!}
                        {!! Form::text('title',null,['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('content','内容:') !!}
                        {{--第二个参数是默认内容--}}
                        {!! Form::textarea('content',null,['class'=>'form-control','id'=>'article-ckeditor','rows'=>10]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('picture_id','选择图片:') !!}
                        {!! Form::file('picture_id',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('category_id','分类:') !!}
                        {!! Form::select('category_id',[''=>'选择一个分类'] + $categories,null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('创建文章',['class'=>'btn btn-info btn-block']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>


    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection