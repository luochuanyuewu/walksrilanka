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
                <li id="home" class="active"><a href="/" class="animated"><span
                                class="fa fa-home"></span>Main Site</a></li>
                <li>
                    <a class="animated" href="#" data-toggle="modal" data-target="#developing"><span
                                class="fa fa-gamepad"></span>Custom Plan</a>
                </li>
                <li>
                    <a class="animated" href="#" data-toggle="modal" data-target="#developing"><span
                                class="fa fa-picture-o"></span>Place To Go</a>
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacter
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('contacter.index')}}">View Contacters</a></li>
                        <li><a href="{{route('contacter.create')}}">Create New Contacters</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('article.index')}}">View Articles</a></li>
                        <li><a href="{{route('article.create')}}">Create New Articles</a></li>
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
