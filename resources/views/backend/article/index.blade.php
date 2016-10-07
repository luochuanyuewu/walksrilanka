@extends('backend.layout')
@section('content')

    @if(Session::has('created_article'))
        <div class="row">
            <p class="bg-danger">{{session('created_article')}}</p>
        </div>
    @endif
    @if(Session::has('deleted_article'))
        <div class="row">
            <p class="bg-danger">{{session('deleted_article')}}</p>
        </div>
    @endif

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">所有文章(All Articles)</div>
            <div class="panel-body">
                <ul class="list-group">
                    @if(count($articles) >0)

                        @foreach($articles as $article)
                            <div class="col-md-6">
                                <li class="list-group-item"><a
                                            href="{{route('article.edit',['id'=>$article->id])}}"><img
                                                src="{{url($article->thumbnail->name)}}"
                                                class=" img-responsive img-rounded" width="100" height="100"></a>
                                    Title:{{$article->title}}, Category:{{$article->category->name}},
                                    Created_at:{{$article->created_at->format('Y-m-d') }},
                                    Updated_at:{{$article->updated_at->format('Y-m-d')}}</li>
                            </div>

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