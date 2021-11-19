@extends('layouts.app')
@section('content')

<div class="jumbotron jumbotron-fluid">
		<div class="container jum">
			<h1>{{ $nom }}</h1>
		</div>
</div>
<div class="apercu">
	@foreach($images as $img)
		<img src="{{ $img->pathImg }}">
	@endforeach
</div>


@endsection