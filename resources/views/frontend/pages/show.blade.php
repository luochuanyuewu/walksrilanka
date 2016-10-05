@extends('frontend.layout')
@section('content')

    <div class="panel-group">
        <div class="row">
            <div class="">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img src="{{url($article->thumbnail->name)}}">
                        <h3>{{$article->title}}</h3>
                    </div>
                    <div class="panel-body">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection