@extends('frontend.layout')

@section('content')
    <div class="container">
        <div class="text-center">
            <h2>联系我们</h2>
            <p>我们致力于提供优质的客户服务和体验。您可以通过以下联系人联系我们。</p>
        </div>

        <div class="panel-group">
            <div class="row">
                @foreach($contacters as $contacter)
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="{{url($contacter->avatar)}}" alt="{{$contacter->name}}"
                                     width="100" height="100"
                                     class="img-thumbnail img-responsive">姓名:{{$contacter->name}}
                                ,手机号:{{$contacter->phone}},
                                微信ID:{{$contacter->wechat_id}}
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

        </div>
    </div>

@endsection