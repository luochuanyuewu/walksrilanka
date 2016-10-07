@extends('backend.layout')

@section('content')

    @if(Session::has('updated_article'))
        <div class="row">
            <p class="bg-danger">{{session('updated_article')}}</p>
        </div>
    @endif

    @if(Session::has('uploaded_picture'))
        <div class="row">
            <p class="bg-danger">{{session('uploaded_picture')}}</p>
        </div>
    @endif

    @if(Session::has('deleted_picture'))
        <div class="row">
            <p class="bg-danger">{{session('deleted_picture')}}</p>
        </div>
    @endif


    @if($article)
        <div class="row">
            <div class="">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-clock-o fa-fw"></i> 编辑文章(Edit Article)
                    </div>
                    <div class="panel-body">
                        <img src="{{url($article->thumbnail->name)}}" alt="">
                        {!! Form::model($article,['method'=>'PATCH','route'=>['article.update',$article->id],'files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::label('thumbnail','New Thumbnail:') !!}
                            {!! Form::file('thumbnail',['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('title','Title:') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id','Title:') !!}
                            {!! Form::select('category_id',[''=>'Choose a category'] + $categories,null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('content','Content:') !!}
                            {{--第二个参数是默认内容--}}
                            {!! Form::textarea('content',null,['class'=>'form-control','rows'=>15,'id'=>'article-ckeditor']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update Article',['class'=>'btn btn-info btn-block']) !!}
                        </div>

                        {!! Form::close() !!}

                        {!! Form::open(['method' => 'DELETE','route'=>['article.destroy',$article->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete Article',['class'=>'btn btn-danger btn-block']) !!}
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-clock-o fa-fw"></i> 为文章增加图片(Adding Pictures For Article)
                    </div>
                    <div class="panel-body">
                        @if(count($pictures) > 0)
                            <div class="container">
                                <div id="article-carousel" class="container carousel slide" data-ride="carousel"
                                     data-interval="500">
                                    <div class="article-carousel-inner carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="{{$pictures->first()->name}}" width="300" height="300">
                                        </div>
                                        @for($i=1;$i<count($pictures);$i++)
                                            <div class="item">
                                                <img src="{{$pictures[$i]->name}}" width="300" height="300">
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        @else
                            No pictures for this article's slideshow, Please use form below to upload pictures!
                        @endif
                        <br>
                        {!! Form::open(['method'=>'POST','route'=>['picture.store'],'files'=>true]) !!}
                        <div class="form-group">
                            {!! Form::hidden('article_id', $article->id)!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('picture','New Picture:') !!}
                            {!! Form::file('picture',['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Upload Picture',['class'=>'btn btn-info btn-block']) !!}
                        </div>

                        {!! Form::close() !!}

                        @for($i=0;$i<count($pictures);$i++)
                            {!! Form::open(['method' => 'DELETE','route'=>['picture.destroy',$pictures[$i]->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete Picture ' . $i,['class'=>'btn btn-danger btn-block']) !!}
                            </div>
                            {!! Form::close() !!}
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
@endsection
