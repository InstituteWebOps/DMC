<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}">Disaster Management Committee</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{route('blog.index')}}">Blog</a>
                </li>
                <li>
                    <a href="{{route('gallery')}}">Gallery</a>
                </li>
                <li>
                    <a href="{{route('vol.create')}}">Volunteer</a>
                </li>
                <li>
                    <a href="{{route('contact')}}">Contact</a>
                </li>
                </ul>
            <!-- <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form> -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{route('about')}}">About</a>
                </li>
                <li>
                    <a href="http://www.iitm.ac.in"> IIT Madras
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/6/69/IIT_Madras_Logo.svg/1200px-IIT_Madras_Logo.svg.png" width="17px">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->

