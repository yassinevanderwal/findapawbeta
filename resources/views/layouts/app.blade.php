<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Find A Paw</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/490b756c7b.js" crossorigin="anonymous"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="http://localhost:8000/home" class="logo_findapaw"><img src="../img/findapaw_identity.png"></a> 
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
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Inloggen') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registreren') }}</a>
                                </li>
                            @endif
                        @else
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="" role="button">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Uitloggen') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <div class="w-screen mt-4 footer-bg">
        <div class="container p-footer">
            <div class="row">
                <div class="col-sm-3">
                <h2>Vind jouw <br> perfecte match <br> uit het asiel</h2>
                </div>
                    <div class="col-sm-2 footer-text">
                        <a href="">Over ons</a><br>
                        <a href="">Partners</a><br>
                        <a href="">Dierenoverzicht</a><br>
                        <a href="">Ervaringsverhalen</a>
                    </div>
                    <div class="col-sm-3 footer-text">
                        <a href="">Contact</a><br>
                        <a href="">Veelgestelde vragen</a><br>
                        <a href="">Doneren</a><br>
                        <a href="">Inloggen</a>
                    </div>
                    <div class="col-sm-4 form-group">
                        <h3>Meld je aan voor de nieuwsbrief</h3>
                            <div class="input-group">
                                <input type="email" class="form-control-footer" placeholder="E-mail">
                                <button class="button" type="submit">
                                <span class="fas fa-arrow-right" aria-hidden="true"></span>
                                </button>
                            </div>
                    </div>
            </div>
            <div class="row footer-text mt-5">
                    <div class="col-3">
                        <a href="http://localhost:8000/" class="logo_findapaw"><img src="../img/findapaw_identity_white.png"></a> 
                    </div>
                <div class="col">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-youtube"></a>
                </div>
                <div class="col text-right">
                © Find a Paw  2019  |  Disclaimer  |  Privacy
                </div>
        </div>
    </div>
</body>
</html>
