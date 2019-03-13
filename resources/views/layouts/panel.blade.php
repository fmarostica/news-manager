<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Panel de control | NewsManager</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pdc-styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/sweetalert.min.js') }}" defer></script>
    </head>
    <body>
        
        <header>
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="75.352px" height="75.351px" viewBox="0 0 75.352 75.351" 
                            style="enable-background:new 0 0 75.352 75.351;"
                            xml:space="preserve" fill="#fff">
                            <g>
                                <path d="M24.733,51.242c2.07,4.397,5.162,8.602,9.208,12.516c-8.026-1.172-14.841-5.933-18.798-12.616L24.733,51.242z
                                    M33.787,11.806c-7.736,1.168-14.37,5.719-18.35,12.118l9.299,0.102C26.78,19.716,29.826,15.614,33.787,11.806z M36.903,24.156
                                    l0.138-12.637c-0.004,0-0.021,0-0.028,0c-4.445,3.88-7.827,8.079-10.081,12.525L36.903,24.156z M15.439,28.081l-1.836-0.017
                                    l-1.814-0.023l-0.143,13.125L4.297,27.961L2.245,27.94l-2.044-0.022L0,46.592l1.826,0.027l1.818,0.017l0.145-13.463L11.35,46.72
                                    l1.948,0.022l1.943,0.023L15.439,28.081z M32.904,31.586l0.016-1.665l0.021-1.654l-13.753-0.147l-0.201,18.684l14.18,0.148
                                    l0.019-1.66l0.016-1.656l-10.275-0.109l0.051-4.875l9.136,0.098l0.016-1.602l0.016-1.612l-9.134-0.096l0.044-3.961L32.904,31.586z
                                    M51.548,42.033L51.548,42.033l-2.56-13.591l-2.083-0.022l-2.073-0.026l-2.814,13.648l-2.975-13.707l-2.028-0.023l-2.029-0.024
                                    l4.997,18.74l1.853,0.021l1.859,0.023l3.091-14.685l2.842,14.743l1.863,0.027l1.851,0.019l5.401-18.629l-1.974-0.021l-1.973-0.021
                                    L51.548,42.033z M39.047,11.542c-0.009,0-0.021,0-0.027,0l-0.136,12.635l9.979,0.105C46.698,19.788,43.411,15.519,39.047,11.542z
                                    M60.359,24.403c-3.844-6.479-10.377-11.169-18.096-12.506c3.887,3.889,6.843,8.054,8.796,12.408L60.359,24.403z M41,63.833
                                    c8.045-0.999,14.957-5.613,19.067-12.215l-9.592-0.101C48.313,55.87,45.124,60.005,41,63.833z M48.265,51.495l-9.673-0.105
                                    l-0.131,12.067C42.718,59.75,46.009,55.726,48.265,51.495z M74.025,38.38c-0.913-0.805-2.715-1.529-5.429-2.158
                                    c-1.866-0.448-3.089-0.815-3.659-1.132c-0.582-0.306-0.874-0.743-0.867-1.306c0.005-0.769,0.292-1.393,0.86-1.819
                                    c0.559-0.414,1.339-0.626,2.326-0.613c1.144,0.009,2.069,0.285,2.776,0.807c0.703,0.524,1.086,1.228,1.141,2.12l3.801,0.047
                                    c-0.121-1.881-0.835-3.366-2.136-4.482c-1.298-1.117-2.997-1.685-5.091-1.705c-2.233-0.025-4.015,0.49-5.34,1.527
                                    c-1.321,1.049-1.992,2.498-2.01,4.301c-0.019,1.619,0.463,2.815,1.441,3.593c0.994,0.773,2.97,1.511,5.922,2.199
                                    c1.605,0.374,2.65,0.741,3.143,1.067c0.493,0.338,0.742,0.852,0.735,1.561c-0.007,0.714-0.365,1.259-1.068,1.656
                                    c-0.707,0.393-1.674,0.584-2.924,0.57c-1.209-0.014-2.153-0.288-2.822-0.83c-0.677-0.536-1.023-1.296-1.056-2.298l-3.759-0.038
                                    c0.068,2.016,0.766,3.576,2.085,4.685c1.318,1.118,3.161,1.68,5.52,1.702c2.361,0.022,4.227-0.461,5.621-1.482
                                    c1.396-1.018,2.096-2.4,2.114-4.156C75.38,40.452,74.931,39.178,74.025,38.38z M36.482,63.422l0.131-12.054l-9.673-0.104
                                    C29.113,55.539,32.312,59.631,36.482,63.422z"/>
                            </g>
                        </svg>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/panel/profile">{{ __('mi_profile.title') }}</a>
                            </li>
                            @if($request->user()->hasRole('admin') || $request->user()->hasRole('editor'))
                                <li class="nav-item">
                                    <a class="nav-link" href="/panel/articles">{{ __('articles.title') }}</a>
                                </li>
                            @endif
                            @if($request->user()->hasRole('admin') || $request->user()->hasRole('editor'))
                                <li class="nav-item">
                                    <a class="nav-link" href="/panel/categories">{{ __('categories.title') }}</a>
                                </li>
                            @endif
                            @if($request->user()->hasRole('admin'))
                                <li class="nav-item">
                                    <a class="nav-link" href="/panel/users">{{ __('users.title') }}</a>
                                </li>
                            @endif
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('auth.login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('auth.register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('auth.logout') }}
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
        </header>
        <div class="secondary-nav">
            <div class="container">
                @yield('commands-menu')
            </div>
        </div>
        <div class="container py-4">
            @yield('content')
        </div>

    </body>
</html>