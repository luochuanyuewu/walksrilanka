@extends('backend.layout')
@section('content')

    @if(Session::has('created_article'))
        <div class="row">
            <p class="bg-danger">{{session('created_article')}}</p>
        </div>
    @endif

    @if(Session::has('uploaded_pictures'))
        <div class="row">
            <p class="bg-danger">{{session('uploaded_pictures')}}</p>
        </div>
    @endif

    <div class="row text-center">
        <div class="btn-group btn-group-justified">
            @foreach($categories as $category)
                <a href="{{route('article.show',['id'=>$category->id])}}"
                   class="btn btn-default">{{$category->name}}</a>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">所有文章(All Articles)</div>
            <div class="panel-body">
                <ul class="list-group">
                    @if(count($articles) >0)

                        @foreach($articles as $article)
                            <li class="list-group-item"><a href="#"><img
                                            src="{{url($article->thumbnail->name)}}"
                                            class=" img-responsive img-rounded" width="100" height="100"></a>
                                标题:{{$article->title}}</li>
                        @endforeach
                    @else
                        <li class="list-group-item">NO Article To Show, <a href="{{route('article.create')}}">Click
                                me</a>to create a new article.
                        </li>
                    @endif

                </ul>

            </div>
        </div>
    </div>


@endsection