<nav class="navbar navbar-default" style="margin-bottom: 10px">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{url('/')}}" class="animated"><img src="{{asset('img_frontend/siteLogo.png')}}" alt="散步斯里兰卡"
                                                         style="margin-top: 5px"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li id="home" class="active"><a href="/" class="animated"><span
                                class="fa fa-home"></span> 首页</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">斯里兰卡
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        {{--<li><a href="#">介绍斯里兰卡</a></li>--}}
                        <li><a href="{{url('places')}}">流行的目的地</a></li>
                        <li><a href="{{url('activities')}}">有趣的项目</a></li>
                        <li><a href="{{url('foods')}}">丰富的饮食</a></li>
                        <li><a href="{{url('infos')}}">有趣的旅游信息</a></li>
                    </ul>
                </li>

                <li><a href="{{url('packages')}}"><span
                                class="fa fa-home"></span>旅游套餐</a>
                </li>

                <li><a href="{{url('contacters')}}" class="animated"><span
                                class="fa fa-fire"></span> 联系订购</a></li>

            </ul>
        </div>
    </div>
</nav>
