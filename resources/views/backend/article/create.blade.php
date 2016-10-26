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
                        {!! Form::textarea('content',null,['class'=>'form-control','id'=>'article-ckeditor']) !!}
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

    <div class="row alert alert-danger">
        <ul>
            <li>You can drag lower-right corner of the text editor to resize.</li>

            <li>Thumbnail (has to be image) file szie will be lower than 512kb,min thumbnail size is 400*300, max
                thumbnail size is 800*600.
            </li>
        </ul>
    </div>


    {{--<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>--}}
    {{--<script>--}}
        {{--CKEDITOR.replace('article-ckeditor');--}}
    {{--</script>--}}

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        });
    </script>
@endsection