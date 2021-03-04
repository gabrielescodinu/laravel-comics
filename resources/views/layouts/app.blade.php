<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="blue"></div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar" href="{{ url('/') }}">
                    <img width="100px" src="img/DC_Comics_logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <div class="menu">
                            <a class="nav-link" href="{{ url('/') }}">HOME</a>
                            <a class="nav-link" href="{{ route('posts') }}">COMICS</a>
                            <a class="nav-link" href="{{ route('posts') }}">MOVIES</a>
                            <a class="nav-link" href="{{ route('posts') }}">SHOP</a>
                            <a class="nav-link" href="{{route('admin.posts.index')}}">ADMIN</a>
                            <div class="search">
                                <input type="search" placeholder="Search..."> <i class="fa fa-search"></i>
                            </div>                              
                        </div>
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="sponsor">
                <a href=""><i class="fas fa-journal-whills"></i></a>
                <a href=""><i class="fas fa-tshirt"></i></a>
                <a href=""><i class="fas fa-id-card"></i></a>
                <a href=""><i class="fas fa-map-marker-alt"></i></a>
            </div>
            <div class="credits">
                <div class="credits-container">
                    <div class="links">
                        <h1>DC Comics</h1>
                        <a href=""><p>Characters</p></a>
                        <a href=""><p>Comics</p></a>
                        <a href=""><p>Movies</p></a>
                        <a href=""><p>Games</p></a>
                    </div>
                    <div class="links">
                        <h1>DC </h1>
                        <a href=""><p>Characters</p></a>
                        <a href=""><p>Comics</p></a>
                        <a href=""><p>Movies</p></a>
                    </div>
                    <div class="links">
                        <h1>Sites</h1>
                        <a href=""><p>Characters</p></a>
                        <a href=""><p>Comics</p></a>
                        <a href=""><p>Movies</p></a>
                    </div>
                </div>
                <div class="credits-container social">
                    <a class="sign-up" href="">SIGN UP NOW</a>
                    <div class="follow">
                        <h1>FOLLOW US</h1>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-pinterest"></i></a>
                        <a href=""><i class="fas fa-map-marker-alt"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
