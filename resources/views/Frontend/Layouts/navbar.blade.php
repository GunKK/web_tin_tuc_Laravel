<nav class="navbar navbar-expand-lg bg-light shadow-sm navbar-fixed-top" style="background-image: linear-gradient(var(--primary-color), #FFFF00);" role="navigation">
    <div class="container">
        <div class="row">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">Laravel Blog</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('home') }}">HOME</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">ABOUT</a>
                    </li>
                    <li>
                        <a href="{{ route('posts') }}">POSTS</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">CONTACT</a>
                    </li>
                </ul>
    
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-warning">Search</button>
                </form>
    
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="{{ route('signUp') }}">Sign up</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    {{-- <li>
                        <a>
                            <span class ="glyphicon glyphicon-user"></span>
                            Nguyễn Đức Hậu
                        </a>
                    </li>
    
                    <li>
                        <a href="#">Đăng xuất</a>
                    </li> --}}
    
                </ul>
            </div>
    
    
    
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container -->
</nav>