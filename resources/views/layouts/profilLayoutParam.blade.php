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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<header class="container">
    <div>
        <h1><a href="{{route('listeSerie')}}">Séries</a></h1>
    </div>
    <a href="{{route('accueil')}}" id="aLogo"><img src="../img/logo.png" id= "imgLogo"></a>
    @guest
        <div id="headerProfil">
            <h3><a href="{{ route('login') }}">Connexion</a><a href="{{ route('register') }}">Inscription</a></h3>
        </div>
    @else
        <div id="headerProfil">
            <h3><a href="{{route('profil', Auth::user()->id)}}">Bonjour {{ Auth::user()->name }}</a></h3>
            <a href="{{route('profil', Auth::user()->id)}}" id="aPhotoProfil"><img src="img/faces/{{ Auth::user()->avatar }}.png" id="imgProfil"></a>
        </div>










    @endguest

</header>
<div id="main">
    @yield('content')
</div>



<!-- Scripts -->
</body>
</html>
