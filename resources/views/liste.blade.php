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

        <div class="deroul">
            <button>Par genre</button>
            <div>
                @foreach($genres as $genre)
                    <input type="button" name="genre" value="{{$genre["genre"]}}" class="buttonGenre">
                @endforeach
                <input type="button" name="tout" class="buttonGenre" value="Tout">
            </div>

            {{-- <form>
                <div>
                    <input type="radio" name="genre" value="Romance"/>
                    <label for="Romance">Romance</label>
                    <input type="radio" name="genre" value="Horreur"/>
                    <label for="Horreur">Horreur</label>
                </div>

                <div>
                    <input type="radio" name="genre" value="Crime"/>
                    <label for="Aventure">Crime</label>
                    <input type="radio" name="genre" value="Policier"/>
                    <label for="Policier">Policier</label>
                </div>

                </div>
            </form> --}}
        </div>




    </div>
    <div class="laliste">
<h2>La liste des séries</h2>


@if(!empty($séries))

        <div id="chaqueserie">
        @foreach($séries as $série)
            <div class="uneserie {{$série->genre}}">
                <a href={{route('id',$série->id)}}><img src="{{$série->urlImage}}"></a>
                <p>{{$série->nom}}</p>
                <p>{{$série->genre}}</p>
                <p>{{$série->langue}}</p>
                <p>{{$série->premiere}}
                <p>{{$série->urlAvis}}</p>
            </div>
        @endforeach
        </div>




@else
    <h3></h3>
@endif
    </div>
</div>


</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="js/rechercheGenre.js"></script>
</html>