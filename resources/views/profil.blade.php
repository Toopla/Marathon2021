@extends('layouts.profilLayout')

@section('css')
	<link rel="stylesheet" type="text/css" href="css/profil.css">

@endsection


@section('content')
	<div id="Profil">
		<div id="imgProfil" style="background-image: url('img/faces/avatar.png');">
			<img src="img/crayon.png">		
		</div>	
		<div>
			<h1>Bidule Truc</h1>
			<h2>Rang Plongeur</h2>
		</div>	
	</div>

	<div id="commentArea">
		<div>
			<h1>VOS COMMENTAIRES</h1>
		</div>
		<div id="commentList">
			@foreach()
				<div id="comment">
					<div id="contenue">
						<p></p>
					</div>
					<div id="note">
						
					</div>
				</div>
			@endforeach
		</div>
	</div>	

@endsection
