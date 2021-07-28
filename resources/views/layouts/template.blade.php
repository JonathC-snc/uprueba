<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Netflix</title>

    <!-- Scripts -->
    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <!--<link rel="dns-prefetch" href="//fonts.gstatic.com">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->

    <!-- Styles -->
    <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 

    <link  rel="icon"   href="{{asset('favicon.ico')}}" type="image/png" />
</head>
<body class="box-bienvenida">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container col-md-12 d-flex">
                <ul>
                    <li style="display:inline"><a href="{{ url('/') }}"> <img src="{{asset('images/Netflixx.png')}}" alt="netflix"></a></li>
                    <li style="display:inline;">
                        <button type="button" class="btn m-1 color-button-ucabflix">
                            <a class="nav-link" style="color: white" href="{{ route('inicio') }}">{{ __('Ingresar como invitado') }}</a>
                        </button>
                    </li>
                    <li style="display:inline;" class='float-right'>
                        <button type="button" class="btn m-1 color-button-ucabflix">
                            <a class="nav-link" style="color: white" href="{{route('login')}}">{{ __('Iniciar Sesion') }}</a>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
