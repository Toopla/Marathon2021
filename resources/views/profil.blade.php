@extends('layouts.profilLayout')

@section('css')
	<link rel="stylesheet" type="text/css" href="../css/profil.css">
@endsection


@section('content')
	<div id="icon">
		<a href=""><i class="fas fa-cog"></i></a>
	</div>	
	<div id="Profil">
		<div id="imgProfil" style="background-image: url('../img/faces/avatar.png');">
			<a href=""><i class="fas fa-pen"></i></a>		
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
						@for($i=0; $i<$comment['note']; $i++)

							<i class="fas fa-cheese"></i>

						@endfor
					</div>
				</div>
			@endforeach
		</div>
	</div>	

@endsection
