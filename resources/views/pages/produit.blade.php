@extends('welcome')
@section('content')

<div class="jumbotron jumbotron-fluid">
		<div class="container jum">
			<h1>HELLO WORLD</h1>
		</div>
	</div>
	<div class="conteneur-prod">
		<div class="card-prod">
			<img src="https://via.placeholder.com/350">
			<p>American compagnie make everything</p>
			<p>prix</p>	
			<form>
				<div class="contenurLabquant">
					<label class="quantlab" forid="quant">Quantité -</label>
					<input class="quant" id="quant" type="text" name="quantity" value="1">
				</div>
				<button><a href="#">Ajouter au panier</a></button>
				<button><a href="#">Commander cet produit</a></button>
			</form>
		</div>
		<div class="card-prod">
			<img src="https://via.placeholder.com/350">
			<p>American compagnie make everything</p>
			<p>prix</p>	
			<form>
				<div class="contenurLabquant">
					<label class="quantlab" forid="quant">Quantité -</label>
					<input class="quant" id="quant" type="text" name="quantity" value="1">
				</div>
				<button><a href="#">Ajouter au panier</a></button>
				<button><a href="#">Commander cet produit</a></button>
			</form>
		</div>
		<div class="card-prod">
			<img src="https://via.placeholder.com/350">
			<p>American compagnie make everything</p>
			<p>prix</p>	
			<form>
				<div class="contenurLabquant">
					<label class="quantlab" forid="quant">Quantité -</label>
					<input class="quant" id="quant" type="text" name="quantity" value="1">
				</div>
				<button><a href="#">Ajouter au panier</a></button>
				<button><a href="#">Commander cet produit</a></button>
			</form>
		</div> 
	</div>
	
@endsection