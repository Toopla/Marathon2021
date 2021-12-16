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
                <input id="recherche" type="text"
                       name="Recherche" placeholder="Rechercher un film/série">
                <input type="submit" name="Rechercher" value="">
            </form>
        </div>

    </div>
    <div class="laliste">
<h2>La liste des séries</h2>


@if(!empty($séries))
    <ul>
        @foreach($séries as $série)
            <a href={{route('id',$série->id)}}><img src="{{$série->urlImage}}"></a>
        @endforeach
    </ul>

@else

    <h3></h3>
@endif
    </div>
</div>


</body>
</html>