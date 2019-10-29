<nav class="navbar-expand-md navbar-light bg-light fixed-top navbar-shadow">
    <div class="container">
        <a href="{{route('index')}}" class="navbar-brand">My Blog
        </a>
{{--        用get傳遞keyword參數給homeController的search--}}
        <form action="{{route('search')}}" method="GET" class="form-inline" role="search">
            <input type="search" class="form-control form-control-md mr-md-2" name="keyword"
                   placeholder="search articles" aria-label="search">
            <button type="submit" class="btn btn-md btn-outline-info my-2 my-md-0">
                <i class="fas fa-search"></i>Search
            </button>
        </form>
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--                aria-controls="navbarSupportContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

{{--                驗證有無登入--}}
                @auth
                    <li class="nav-item">
                        <a href="#" class="nav-link">

{{--                            取得登入者姓名--}}
                            {{Auth::user()->name}}

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link"
                           onclick="event.preventDefault(); $('#logout-form').submit();">登出</a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">

{{--                           使用blade語法產生csrf權杖--}}
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">登入</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<div style="padding-top: 70px;"></div>
