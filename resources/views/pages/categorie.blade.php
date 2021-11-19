@extends('layouts.app')
@section('content')

<div class="jumbotron jumbotron-fluid">
		<div class="container jum">
			<h1>{{ $categorie->nomCate }}</h1>
		</div>
	</div>
	<div class="conteneur-prod">
	@foreach($categorie->produits as $sh)
		<div class="card-prod">
			<a href="{{ route('produit',['name'=>$sh->nameProd]) }}">
				<img src="{{$sh->illust}}" alt="no_image">
			</a>
			<p>{{ $sh->nameProd }}</p>
			<p>{{ $sh->prixCFA }} FCFA / {{ $sh->prixCAD }}$ USD</p>	
			<form method="POST" action="{{ route('forml',['id'=>$sh->id]) }}">
				@csrf
				<div class="contenurLabquant">
					<label class="quantlab" forid="quant">Quantité -</label>
					<input class="quant" id="quant" type="text" name="quantity" value="1">
				</div>
				<button name="ensession">Ajouter au panier</button>
				<button name="prvalider">Commander cet produit</button>
			</form>
		</div>
	@endforeach
	</div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jstyle.js"></script>
@endsection