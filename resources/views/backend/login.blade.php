<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台登陆</title>

    <link rel="stylesheet" href="{{url('css/app.css')}}">

    <script src="{{url('js/app.js')}}"></script>
</head>
<body>
<div class="row">
    <div class="col-md-4  col-md-offset-4">
        <div class="container-fluid">
            <h2>You need to login to manage your website!</h2>
            @if(Session::has('login_error'))
                <p class="bg-danger">{{session('login_error')}}</p>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('backend.login')}}" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="name">Your name:</label>
                    <input type="text" name="name" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" id="pwd">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>