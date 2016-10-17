@extends('backend.layout')
@section('content')

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">所有旅游套餐(All Packages)</div>
            <div class="panel-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Package Name</th>
                        <th>Visitor</th>
                        <th>Request Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($packages as $package)
                        <tr>
                            <td>{{$package->tourPackage}}</td>
                            <td>{{$package->name}}</td>
                            <td>{{$package->created_at->format('Y-m-d')}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection