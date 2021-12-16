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
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>

<header class="container">
    <a href="{{route('accueil')}}"><img src="img/logo.png" id="logo"></a>
</header>

<div id="main">
    @yield('content')
</div>

<!-- Scripts -->
</body>
</html>
