@extends('frontend.layout')
@section('content')

    <div class="row">
        <div class="panel-group">
            <div class="panel panel-default ">
                <div class="panel-heading text-center">
                    <h3 class="text-center">{{$article->title}}</h3>
                </div>
                <div class="panel-body">
                    @if(count($pictures) > 0)
                        <h4 class="text-center">展示图</h4>
                        <div class="row">
                            <div id="article-carousel" class="carousel slide" data-ride="carousel"
                                 data-interval="500">

                                <ol class="carousel-indicators">
                                    <li data-target="#article-carousel" data-slide-to="0" class="active"></li>
                                    @for($i=1;$i<count($pictures);$i++)
                                        <li data-target="#article-carousel" data-slide-to={{$i}}></li>
                                    @endfor
                                </ol>

                                <div class="article-carousel-inner carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="{{$pictures->first()->name}}"
                                             class="img-responsive  img-rounded">
                                    </div>
                                    @for($i=1;$i<count($pictures);$i++)
                                        <div class="item">
                                            <img src="{{$pictures[$i]->name}}"
                                                 class="img-responsive  img-rounded">
                                        </div>
                                    @endfor
                                </div>

                            </div>
                        </div>

                    @endif
                    <hr>
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
    </div>






@endsection