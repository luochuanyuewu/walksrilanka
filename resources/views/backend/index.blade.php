@extends('backend.layout')
@section('content')

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Welcome to backend, You can manage all of your site content here!</div>
            <div class="panel-body">
                <ul class="list-group">
                    <div class="row text-center">
                        <h3>You can browse all article by <a href="{{route('article.index')}}">click me</a> or you can
                            click button below to browse articles by category!</h3>

                        <div class="btn-group btn-group-justified">
                            @foreach($categories as $category)
                                <a href="{{route('article.show',['id'=>$category->id])}}"
                                   class="btn btn-default">{{$category->name}}</a>
                            @endforeach
                        </div>
                        <hr>
                        <h3>You can also do actions below.</h3>
                        <div class="">
                            <a href="{{route('article.create')}}" class="btn-block btn-lg btn-primary">Create a new
                                article</a><br>
                            <a href="{{route('contacter.create')}}" class="btn-block btn-lg btn-primary">Create a new
                                contacter</a><br>
                            <a href="{{route('contacter.index')}}" class="btn-block btn-lg btn-primary">View all contacters</a><br>
                            <a href="#" class="btn-block btn-lg btn-primary">Check custom plan requests.</a><br>
                            <a href="#" class="btn-block btn-lg btn-primary">Check package requests.</a><br>
                            <a href="#" class="btn-block btn-lg btn-primary">Check guest messages.</a><br>

                        </div>
                    </div>
                </ul>

            </div>
        </div>
    </div>
@endsection