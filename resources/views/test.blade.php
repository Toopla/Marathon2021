<html lang="fr">
<head>
    <title>Liste des séries</title>
    <link href="{{ asset('css/liste.css') }}" rel="stylesheet">
</head>
<body>
<div class="listecontainer">
    <div class="menuliste">
        <div class="recherchelogo">
            <a href="{{route('accueil')}}"><img src="img/logo.png"></a>
            <form method="POST" action="#">
                <input id="recherche"  type="text" name="Recherche" placeholder="Rechercher un film/série">
                <input type="submit" name="Rechercher" value="">
            </form>
        </div>

    </div>
    <div class="laliste">
        @if(!empty($list))
            @foreach($list as $l)
                <h1>{{ $l->content }}</h1>
            @endforeach
        @else
            <h1>y'a r</h1>
        @endif
    </div>
</div>


</body>
</html>