@extends('backend.layout')
@section('content')

    @if($package)
        <div class="container">
            <h2>Bordered Table</h2>
            <p>套餐详情(Package dteails)</p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Tour Package</th>
                    <th>NumberOfRooms</th>
                    <th>Phone</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$package->tourPackage}}</td>
                    <td>{{$package->numberOfRooms}}</td>
                    <td>{{$package->phone}}</td>
                </tr>

                </tbody>
            </table>
        </div>
    @else
        <p>No this package!</p>
    @endif
@endsection