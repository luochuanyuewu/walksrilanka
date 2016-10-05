@extends('frontend.layout')
@section('content')

    <div class="text-center">
        <h2>{{$page_title}}</h2>
        <p>{{$page_description}}</p>
    </div>

    <div class="panel-group">
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            <a href="{{url('show/' . $article->id)}}"><img src="{{url($article->thumbnail->name)}}" width="400" height="300"></a>
                            <h3>{{$article->title}}</h3>
                            {{--{!! $article->content !!}--}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


@endsection