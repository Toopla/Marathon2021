@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container">
        <h1>CHILL&CHEESE</h1>
        <form>
            <input id="recherche"  type="text"
               name="Recherche" placeholder="Rechercher un film/série">
            <input type="submit" name="Rechercher" value="">
        </form>


        <h1> FILMS A L'AFFICHE </h1>
        <div class="lesfilms">

            <div class="film1"></div>
            <div class="film2"></div>
            <div class="film3"></div>
            <div class="film4"></div>
            <div class="film5"></div>

        </div>
        <h1>VIDEOS D'AVIS</h1>
        <div class="lavideo">
        <video width="600" height="400" controls>

            <source src="/build/videos/arcnet.io(7-sec).mp4" type=video/mp4>
        </video>
        </div>
    </div>




@endsection
