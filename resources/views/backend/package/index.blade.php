@extends('backend.layout')
@section('content')

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">所有旅游套餐(All Packages)</div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($packages as $package)
                        <li class="list-group-item">ID:<a
                                    href="{{route('package.show',['id'=>$package->id])}}">{{$package->id}}</a>
                            Guest Name:{{$package->name}}, Phone:{{$package->phone}}, Package
                            Name:{{$package->tourPackage}},
                            Created_at:{{$package->created_at->format('Y-m-d') }},
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection