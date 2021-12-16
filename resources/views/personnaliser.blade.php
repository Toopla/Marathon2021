@extends('layouts.profilLayout')

@section('css')
	<link rel="stylesheet" type="text/css" href="../css/personnaliser.css">
@endsection

@section('content')
    <div class="container" id="personnaliser">
        <h1>Personnalisez votre profil</h1>
    	<form method="POST" action="{{route('changerProfil', Auth::user()->id)}}">
            {{ csrf_field() }}

    		<input type="text" name="mail" value="{{Auth::user()->email}}">
    		<div id="avatar">

                    <div>
                        <label for="avatar"><img src="../img/faces/avatar.png"></label>
                        <input type="radio" name="avatar" id="avatar" value="img/faces/avatar.png">
                    </div>
                    <div>
                        <label for="avatar1"><img src="../img/faces/avatar1.png"></label>
                        <input type="radio" name="avatar" id="avatar1" value="img/faces/avatar1.png">
                    </div>
                    <div>
                        <label for="avatar2"><img src="../img/faces/avatar2.png"></label>
                        <input type="radio" name="avatar" id="avatar2" value="img/faces/avatar2.png">
                    </div>
                    <div>
                        <label for="avatar3"><img src="../img/faces/avatar3.png"></label>
                        <input type="radio" name="avatar" id="avatar3" value="img/faces/avatar3.png">
                    </div>
                    <div>
                        <label for="avatar4"><img src="../img/faces/avatar4.png"></label>
                        <input type="radio" name="avatar" id="avatar4" value="img/faces/avatar4.png">
                    </div>
                    <div>
                        <label for="avatar5"><img src="../img/faces/avatar5.png"></label>
                        <input type="radio" name="avatar" id="avatar5" value="img/faces/avatar5.png">
                    </div>

            </div>

            <input type="password" name="old_mdp">
            <input type="password" name="new_mdp">
            <input type="password" name="confirm_new_mdp">

            <input type="submit" name="changerProfil">
    	</form>
    </div>    
    @if(isset($success))
        <h1>{{$success}}</h1>

    @endif
    @if(isset($erreur))
        <h1>{{$erreur}}</h1>
    @endif
@endsection