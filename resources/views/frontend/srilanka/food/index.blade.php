@extends('frontend.layout')
@section('content')

    <div class="text-center">
        <h2>美食</h2>
        <p>你可以查阅所有美食</p>
    </div>

    <div class="panel-group">
        <div class="row">
            @foreach($foods as $food)
                <div class="col-md-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            @if($food->picture != '')
                                <img src="{{url($food->picture)}}" alt="">
                            @endif
                            <h3>{{$food->title}}</h3>
                            <p>{{$food->content}}</p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>


@endsection