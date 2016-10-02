@extends('frontend.layout')
@section('content')

    <div class="text-center">
        <h2>有趣的活动</h2>
        <p>你可以查阅所有您感兴趣的活动</p>
    </div>

    <div class="panel-group">
        <div class="row">
            @foreach($activities as $activity)
                <div class="col-md-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            @if($activity->picture != '')
                                <img src="{{url($activity->picture)}}" alt="">
                            @endif
                            <h3>{{$activity->title}}</h3>
                            <p>{{$activity->content}}</p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>


@endsection