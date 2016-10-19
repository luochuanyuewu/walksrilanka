<nav class="navbar navbar-default" style="margin-bottom: 5px">
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
                <li class="active"><a href="/" class="animated"><span
                                class="fa fa-home"></span>Go to frontend</a>
                </li>

                <li class=""><a href="{{route('package.index')}}" class="animated"><span
                                class="fa fa-home"></span>Package Requests</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('article.index')}}">View Ariciles</a></li>
                        <li><a href="{{route('article.create')}}">Create New Article</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('article.show',['id'=>1])}}">Package</a></li>
                        <li><a href="{{route('article.show',['id'=>2])}}">Place</a></li>
                        <li><a href="{{route('article.show',['id'=>3])}}">Activity</a></li>
                        <li><a href="{{route('article.show',['id'=>4])}}">Food</a></li>
                        <li><a href="{{route('article.show',['id'=>5])}}">Info</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacter
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('contacter.index')}}">View Contacters</a></li>
                        <li><a href="{{route('contacter.create')}}">Create New Contacters</a></li>
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
