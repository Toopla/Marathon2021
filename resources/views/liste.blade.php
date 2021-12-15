<html lang="fr">
<head>
    <title>Liste des séries</title>
</head>
<body>
<h2>La liste des séries</h2>

@if(!empty($séries))
    <ul>
        @foreach($séries as $série)
            <li>{{$série->nom}}{{$série->image}}</li>
        @endforeach
    </ul>

@else
    <h3>aucune tâche</h3>
@endif

</body>
</html>