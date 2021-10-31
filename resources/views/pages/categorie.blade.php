@extends('layouts.app')
@section('content')

<div class="jumbotron jumbotron-fluid">
		<div class="container jum">
			<h1>{{ $showw->nomCate }}</h1>
		</div>
	</div>
	<div class="conteneur-prod">
	@foreach($showw->produits as $sh)
		<div class="card-prod">
			<a href="{{ route('produit',['id'=>$sh->id]) }}">
				<img src="{{$sh->illust}}" alt="no_image">
			</a>
			<p>{{ $sh->nameProd }}</p>
			<p>prix</p>	
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
	
@endsection