@extends('layouts.form')

@section('content')

	<div id="form">
		<h1>De nouveau là !</h1>
		<form method="POST" action="{{route('connexion')}}">
			<input type="text" name="login" placeholder="Adresse Mail">
			<input type="password" name="mdp" placeholder="Votre mot de passe">
			<input type="submit" name="connexion" value="Se connecter">
		</form>
	</div>

@endsection