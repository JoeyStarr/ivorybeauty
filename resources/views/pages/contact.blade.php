@extends('layouts.app')

@section('content')
<div class="centt">
	<form method="POST" action="{{ route('mailenv')}}">
		@csrf
		<label>Nom</label>
		<input type="text" name="nom" placeholder="Votre nom" required>
		<label>Email</label>
		<input type="text" name="email" placeholder="Votre addresse email" required>
		<label>Commentaire</label>
		<textarea class="comment" type="text" name="commentaire" placeholder="Ecrivez votre recommandation" required></textarea> 
		<button>Soummettre</button>
	</form>
</div>
@endsection