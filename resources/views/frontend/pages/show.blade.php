@extends('frontend.layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">{{$article->title}}</h3>
            @include('frontend.includes.gallery')
            <hr>
            <div class="row">
                {!! $article->content !!}
                @if($article->category_id == 1)
                    <hr>
                    <div class="row text-center">
                        <a href="{{url('contacters/' . $article->id)}}"
                           class="btn col-md-2 col-md-offset-5 btn-success" role="button">选择套餐</a>
                    </div>
                @endif
            </div>


        </div>

    </div>

@endsection