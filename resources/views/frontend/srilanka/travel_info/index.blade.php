@extends('frontend.layout')
@section('content')

    <div class="text-center">
        <h2>旅游信息</h2>
        <p>你可以查阅所有旅游相关的信息</p>
    </div>

    <div class="panel-group">
        <div class="row">
            @foreach($infos as $info)
                <div class="col-md-6">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            @if($info->picture != '')
                                <img src="{{url($info->picture)}}" alt="">
                            @endif
                            <h3>{{$info->title}}</h3>
                            <p>{{$info->content}}</p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>


@endsection