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
    <a href="" id="aLogo"><img src="img/logo.png" id= "imgLogo"></a>
    @if(isset($_SESSION['id']))
        <div id="headerProfil">
            <h3><a href="">Bonjour [INSERT NOM]</a></h3>
            <a href="" id="aPhotoProfil"><img src="img/faces/avatar1.png" id="imgProfil"></a>
        </div>
    @else
        <div id="headerProfil">
            <h3><a href="{{route('versConnexion')}}">Connexion</a><a href="{{route('versInscription')}}">Inscription</a></h3>
        </div>
    @endif

</header>
<div id="main">
    @yield('content')
</div>



<!-- Scripts -->
</body>
</html>
