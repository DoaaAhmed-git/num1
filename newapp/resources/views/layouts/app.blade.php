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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                  
                   <div> DoaaApp </div>
                   <div> <img src="data:image/jpeg;base64,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" style="height: 25px"></div>
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

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
    </div>
</body>
</html>
