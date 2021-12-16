<html lang="fr">
<head>
    <title>Liste des séries</title>
</head>
<body>
<h2>La liste des séries</h2>

@if(!empty($series))
    @if(!empty($commentaires))
        @if(!empty($episodes))
    <ul>
        @foreach($series as $elt)
            <li>{{$elt->nom}} {{$elt->resume}} {{$elt->langue}} {{$elt->note}} {{$elt->premiere}}</li>
        @endforeach
        @foreach($commentaires as $com)
                <li>{{$com->content}}</li>
            @endforeach
            @foreach($episodes as $epi)
                <li>{{$epi->saison}} {{$epi->nom}}</li>
            @endforeach
    </ul>
        @else
            <h3>si ça affiche ça c'est que c'est pas bon (episode)</h3>
        @endif
    @else
        <h3>si ça affiche ça c'est que c'est pas bon (commentaire)</h3>
    @endif

@else
    <h3>si ça affiche ça c'est que c'est pas bon (serie)</h3>
@endif


</body>
</html>