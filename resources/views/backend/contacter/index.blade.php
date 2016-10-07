@extends('backend.layout')
@section('content')

    @if(Session::has('created_contacter'))
        <div class="row">
            <p class="bg-danger">{{session('created_contacter')}}</p>
        </div>
    @endif

    @if(Session::has('deleted_contacter'))
        <div class="row">
            <p class="bg-danger">{{session('deleted_contacter')}}</p>
        </div>
    @endif

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">所有联系人(All Contacters)</div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($contacters as $contacter)

                        <li class="list-group-item col-md-6"><a href="{{route('contacter.edit',['id'=>$contacter->id])}}"><img
                                        src="{{url($contacter->avatar) }}"
                                        class=" img-responsive img-rounded" width="100" height="100"></a>
                            姓名:{{$contacter->name}}, 手机号:{{$contacter->phone}}, 微信ID:{{$contacter->wechat_id}},
                            Created_at:{{$contacter->created_at->format('Y-m-d') }},
                            Updated_at:{{$contacter->updated_at->format('Y-m-d')}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


@endsection