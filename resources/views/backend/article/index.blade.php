@extends('backend.layout')
@section('content')

    @if(Session::has('created_article'))
        <div class="row">
            <p class="bg-danger">{{session('created_article')}}</p>
        </div>
    @endif


    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">所有联系人(All Contacters)</div>
            <div class="panel-body">
                <ul class="list-group">
                    所有文章
                </ul>
            </div>
        </div>
    </div>


@endsection