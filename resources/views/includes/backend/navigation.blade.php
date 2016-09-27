<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <a href="{{route('backend.index')}}" class="animated navbar-brand">Administrator Backend</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li id="home" class="active"><a href="/" class="animated"><span
                                class="fa fa-home"></span> 首页</a></li>
                <li>
                    <a class="animated" href="#" data-toggle="modal" data-target="#developing"><span
                                class="fa fa-gamepad"></span> 旅游套餐</a>
                </li>
                <li>
                    <a class="animated" href="#" data-toggle="modal" data-target="#developing"><span
                                class="fa fa-picture-o"></span> 旅游景点</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Package
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">View Packages</a></li>
                        <li><a href="#">Create New Packages</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacter
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">View Contacters</a></li>
                        <li><a href="#">Create New Contacters</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{session('username')}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('backend.logout')}}">Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
