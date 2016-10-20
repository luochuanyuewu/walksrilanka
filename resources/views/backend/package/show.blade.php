@extends('backend.layout')
@section('content')

    @if($package)
        <div class="container">
            <h2>套餐详情(Package dteails) <a href="{{route('package.index')}}">&nbsp;View All Request</a></h2>

            <h3>Tour Package</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Package Name</th>
                    <th>DateOfArrival</th>
                    <th>DateOfDeparture</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$package->tourPackage}}</td>
                    <td>{{$package->dateOfArrival}}</td>
                    <td>{{$package->dateOfDeparture}}</td>
                </tr>
                </tbody>
            </table>
            <h3>Peoples</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Adults</th>
                    <th>Children:5~11</th>
                    <th>Children:<5</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$package->adults}}</td>
                    <td>{{$package->childrenBetweenFiveAndEleven}}</td>
                    <td>{{$package->childrenUnderFive}}</td>
                </tr>
                </tbody>
            </table>

            <h3>Hotel Information</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>NumberOfRooms</th>
                    <th>KindOfAccommodation</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$package->numberOfRooms}}</td>
                    <td>{{$package->kindOfAccommodation}}</td>
                </tr>
                </tbody>
            </table>
            @if($package->specialRequests != "")
                <h3>Special Requests</h3>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Special Requests</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$package->specialRequests}}</td>
                    </tr>
                    </tbody>
                </table>
            @endif

            <h3>Contact Information</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>WeChat</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$package->name}}</td>
                    <td>{{$package->phone}}</td>
                    <td>{{$package->wechat_id}}</td>
                    <td>{{$package->email}}</td>
                    <td>{{$package->address}}</td>

                </tr>
                </tbody>
            </table>
        </div>
    @else
        <p>No this package!</p>
    @endif

    {!! Form::open(['method' => 'DELETE','route'=>['package.destroy',$package->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete This Request',['class'=>'btn btn-danger btn-block']) !!}
    </div>
    {!! Form::close() !!}
@endsection