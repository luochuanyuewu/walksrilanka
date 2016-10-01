@extends('frontend.layout')

@section('content')


    <div class="container">
        <div class="row ">
            <div class="">

                <h2>联系我们</h2>
                <h4>我们致力于提供优质的客户服务和体验。您可以通过以下联系人联系我们。</h4>

                <ul class="list-group">
                    @foreach($contacters as $contacter)
                        <li class="list-group-item"><img src="{{url($contacter->avatar)}}" alt="{{$contacter->name}}"
                                                         width="100" height="100"
                                                         class="img-thumbnail img-responsive">姓名:{{$contacter->name}}
                            ,手机号:{{$contacter->phone}},
                            微信ID:{{$contacter->wechat_id}}</li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
@endsection