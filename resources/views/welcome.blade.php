@extends('layouts.app')

@section('content')
    C'est la page générale du site,
    <br />
    on doit y voir les dernières séries par exemple.

    @if(!empty($series))
        <ul>
            @foreach($series as $serie)
                <li>{{$serie->id}} {{$serie->urlImage}}</li>
            @endforeach
        </ul>

    @else
        <h3>aucune tâche</h3>
    @endif
@endsection