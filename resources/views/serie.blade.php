@extends('layouts.serieLayout')

@section('css')
	<link rel="stylesheet" type="text/css" href="css/pageSerie.css">
@endsection

@section('content')
	<div>
		<img src="">
		<div>
			<div>
				<h1></h1>
				<img src="">
			</div>
			<div>
				<h3></h3>
				<a href=""><img src=""></a>
			</div>	
		</div>
	</div>
	<div id="grid">
		<div>
			
		</div>
		<div>
			
		</div>
		<div>
			
		</div>
		<div>
			
		</div>
	</div>
	<form>
		<h1>Ajouter un commmentaire</h1>
		<input type="text" name="titre" placeholder="Ajoutez un titre">
		<div></div>
		<textarea name="description" placeholder="Un descriptif"></textarea>
	</form>
	<h1>Commentaires</h1>
	<div>
		@foreach()
			<div class="commentaire">
				<h3>Titre</h3>
				<p>Contenue</p>
				<p>Note</p>
			</div>
		@endforeach
		<button>Voir plus</button>
	</div>
@endsection