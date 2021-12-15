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
            <form>
                <input id="recherche"  type="text"
                       name="Recherche" placeholder="Rechercher un film/série">
                <input type="submit" name="Rechercher" value="">
            </form>
        </div>

    </div>
    <div class="laliste">
        @if(!empty($user))
            <h1>{{ $user["nom"] }}</h1>
            @if(!empty($user["commentaires"]))
                @foreach($user["commentaires"] as $com)
                    {{ $com["note"] }}
                <br>
                    {{ $com["content"] }}
                    <br>
                    <br>
                @endforeach
            @else
                <h4>pas de commentaire</h4>
            @endif
            @if(!empty($user["series"]))
                @foreach($user["series"] as $com)
                    {{ $com->nom }}
                    <br>
                    {{ $com->resume }}
                    <br>
                    <br>
                @endforeach
            @else
                <h4>pas de commentaire</h4>
            @endif
        @endif
    </div>
</div>


</body>
</html>