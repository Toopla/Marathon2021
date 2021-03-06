
<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<header class="container">
    <div>
        <h1><a href="">Séries</a></h1>
    </div>
    <a href="" id="aLogo"><img src="img/logo.png" id= "imgLogo"></a>
    @if(isset($_SESSION['id']))
        <div id="headerProfil">
            <h3><a href="">Bonjour [INSERT NOM]</a></h3>
            <a href="" id="aPhotoProfil"><img src="img/faces/avatar1.png" id="imgProfil"></a>
        </div>
    @else
        <div id="headerProfil">
            <h3><a href="">Connexion</a><a href="">Inscription</a></h3>
        </div>
    @endif

</header>
<div id="main">
    @yield('content')
</div>









<!-- Authentication Links -->
{{-- <nav>
    <ul>
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li> Bonjour {{ Auth::user()->name }}</li>
            @if (Auth::user())
                <li><a href="#">Des liens spécifiques pour utilisateurs connectés..</a></li>
            @endif
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest
    </ul>
</nav> --}}

<!-- Scripts -->
</body>
</html>