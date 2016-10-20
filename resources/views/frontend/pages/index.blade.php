@extends('frontend.layout')
@section('content')
    <div class="container-fluid">
        <div class="text-center">
            <h2>{{$page_title}}</h2>
            <p>{{$page_description}}</p>
        </div>

        <div class="">
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-4 col-sm-6 text-center">
                        <a href="{{url('show/' . $article->id)}}"><img src="{{url($article->thumbnail->name)}}"
                                                                       width="400" height="300" class="img-responsive img-thumbnail"></a>
                        <h3>{{$article->title}}</h3>
                    </div>
                @endforeach
            </div>

        </div>
    </div>


@endsection