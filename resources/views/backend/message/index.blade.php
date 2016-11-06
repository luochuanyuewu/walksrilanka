@extends('backend.layout')
@section('content')

    @if(Session::has('deleted_feedback'))
        <div class="row">
            <p class="bg-danger">{{session('deleted_feedback')}}</p>
        </div>
    @endif

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">所有反馈(All Feedbacks)</div>
            <div class="panel-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{$message->name}}</td>
                            <td>{{$message->content}}</td>
                            <td>{{$message->email}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    @if(count($messages) >0)
    {!! Form::open(['method' => 'DELETE','route'=>['message.destroy',0]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete All Messages',['class'=>'btn btn-danger btn-block']) !!}
    </div>
    {!! Form::close() !!}
    @endif
@endsection