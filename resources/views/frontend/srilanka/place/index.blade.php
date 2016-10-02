@extends('frontend.layout')
@section('content')

    <div class="text-center">
        <h2>流行的目的地</h2>
        <p>你可以查阅所有您感兴趣的地方</p>
    </div>

    <div class="panel-group">
        <div class="row">
            @foreach($places as $place)
                <div class="col-md-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            @if($place->picture != '')
                                <img src="{{url($place->picture)}}" alt="">
                            @endif
                            <h3>{{$place->title}}</h3>
                            <p>{{$place->content}}</p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>


@endsection