@extends('layouts.form')

@section('content')
	<div id="form">
		<h1>Bienvenue à toi !</h1>
		<form method="POST" action="{{route('inscription')}}">
			<input type="text" name="login" placeholder="Nom d'utilisateur">
			<input type="password" name="mdp" placeholder="Votre mot de passe">
			<input type="password" name="confirm_mdp" placeholder="Confirmer le mot de passe">
			<input type="email" name="mail" placeholder="Votre mot de passe">
			<input type="email" name="confirm_mail" placeholder="Confirmer votre email">
			<input type="submit" name="inscription" value="S'inscrire">
		</form>
	</div>
@endsection