@extends('frontend.layout')
@section('content')
    <div class="container">
        <div class="panel-group">
            <div class="row">
                <div class="">
                    <div class="panel panel-default ">
                        <div class="panel-heading text-center">
                            <h3>{{$article->title}}</h3>
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

                            @endif
                            <hr>
                            {!! $article->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection