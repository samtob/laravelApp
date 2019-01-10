<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <style>
                .bg-blueviolet {
                    background-color: blueviolet;
                    color: #ffffff;
                    font-weight: 800;
                }
                .bg-blueviolet a {
                    color: #ffffff !important;
                }
                .bg-blueviolet a:hover {
                    color: lightcoral !important;
                }
                </style>
    <div id="app">
        <nav class="bg-blueviolet navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/start') }}">
                    {{ config('app.name', 'WittStack') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                                <a class="nav-link" href="{{ url("/payment/donate") }}">Donate</a>
                            </li>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("/dashboard") }}">Dashboard</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="color: #000 !important;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    
        <div id="menu20" class="nav-scroller bg-white shadow-sm">
                <nav class="nav nav-underline">
                  <a style="background:coral; color: #fff; padding: 10px 10px;" class="nav-link active" href="#">Dashboard</a>
                  <a class="nav-link" href="#">
                    Html
                    <span class="badge badge-pill bg-light align-text-bottom">27</span>
                  </a>
                  <a   class="nav-link" href="#">CSS3</a>
                  <a class="nav-link" href="#">BootStrap 3</a>
                  <a  class="nav-link" href="#">Bootstrap 4</a>
                  <a  class="nav-link" href="#">JavaScript</a>
                  <a  class="nav-link" href="#">VueJs</a>
                  <a  class="nav-link" href="#">ReactJs</a>
                  <a  class="nav-link" href="#">NodeJs</a>
                </nav>
              </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
