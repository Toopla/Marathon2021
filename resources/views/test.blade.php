@extends('layouts.profilLayoutParam')
@section('css')
@endsection
@section('content')
    <link href="{{ asset('css/film.css') }}" rel="stylesheet">

    @if(!empty($series))
        @if(!empty($commentaires))
            @if(!empty($episodes))
                <div class="partie1">
                    <div class="conteneurfilm">
                        @foreach($series as $elt)
                            <div style="display:flex; padding-top:20px; padding-bottom:20px;margin-left:10%; width:auto;">  <div class="titrep" style="background-image: url('{{asset($elt->urlImage)}}'); width:200px; height:280px; display:flex; align-content: center;">  </div><div class="conteneurfilmlangue"><div class="titreetlangue"><div><h2>{{$elt->nom}}</h2></div><div><h1>{{$elt->langue}}</h1><br></div></div><div class="noteetfrom"> <div><p>{{$elt->note}}</p></div><div>

                                            @for($i = 0; $i< round($elt->note); $i++)

                                                <i class="fas fa-cheese"></i>



                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="leresume"><p>RÉSUMÉ</p>{{$elt->resume}}</div>
                        <div class="genrepremiere">
                            <div class="genre">GENRE <br> <p>{{$elt->genre}}</p></div>
                            <div class="premiere">DATE DE PREMIERE SORTIE<p>{{$elt->premiere}}</p></div>
          
                @endforeach
                </div>
                </div>

                <div> </div>


            @else
                <h3>si ça affiche ça c'est que c'est pas bon (episode)</h3>
            @endif
        @else
            <h3>si ça affiche ça c'est que c'est pas bon (commentaire)</h3>
        @endif

    @else
        <h3>si ça affiche ça c'est que c'est pas bon (serie)</h3>
    @endif

    <div id="form">
        <form method="POST" action="{{route('liste.store')}}">
            {{ csrf_field() }}

            <input type="text" name="serie" value="{{$elt->id}}" hidden>
            <select name="note">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <textarea name="commentaire"></textarea>
            <input type="submit" name="envoyer">
        </form>
    </div>
@endsection
