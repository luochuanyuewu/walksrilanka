@extends('frontend.layout')
@section('content')
    <div class="row">
        <div class="text-center">
            <h2>{{$page_title}}</h2>
            <p>{{$page_description}}</p>
        </div>
    </div>



    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4 col-sm-6">
                <div class="text-center animated tada thumbnail" style="background-color: lightyellow">
                    <a href="{{url('show/' . $article->id)}}"><img src="{{url($article->thumbnail->name)}}"
                                                                   width="400" height="300"
                                                                   class="img-responsive "></a>
                    <h4>{{$article->title}}</h4>
                </div>


            </div>


        @endforeach
    </div>



@endsection