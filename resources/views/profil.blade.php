@extends('layouts.profilLayout')

@section('css')
	<link rel="stylesheet" type="text/css" href="css/profil.css">

@endsection


@section('content')
	<div id="Profil">
		<div id="imgProfil" style="background-image: url('img/faces/{{$user['avatar']}}.png');">
			<img src="img/crayon.png">		
		</div>	
		<div>
			<h1>{{$user['nom']}}</h1>
		</div>	
	</div>

	<div id="commentArea">
		<div>
			<h1>VOS COMMENTAIRES</h1>
		</div>
		<div id="commentList">
			@foreach($user['commentaires'] as $comment)
				<div id="comment">
					<div id="contenue">
						<p>{{$comment['content']}}</p>
					</div>
					<div id="note">
						{{$comment['note']}}
					</div>
				</div>
			@endforeach
		</div>
	</div>	

@endsection
