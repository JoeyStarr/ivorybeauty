@extends('layouts.app')
@section('content')
<!-- CAROUSSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
            <img id="img1" src="/shooting/dove_b.png" class="d-block w-100 mimi" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img id="img2" src="/img/de.png" class="d-block w-100 mimi" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img id="img3" src="/img/deu.png" class="d-block w-100 mimi" alt="...">
        </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>
<!--FIN CAROUSSEL  -->
@endsection


@section('content1')
    <div class="Ivorybeautysection">
        <div class="boxbox">
            <div class="images">
                <img src="{{ asset('img/mape.jpeg') }}">
            </div>
            <div class="write">
                <h1>Chez nous ,<br> tout commence par un regard .</h1> 
                <p>Découvrez notre gamme de produits dans l'air du temps avec les cils les plus hypes du moment tels CANDY, LUNA.. En cliquant sur le menu déroulant en haut à gauche .<br> Nous vous invitons aussi a vous informez sur nous pour mieux comprendre notre vision 💗.</p>
                <button><a href="{{route('apropos')}}">S'informer sur nous</a></button>
            </div>
        </div>
        <div class="boxbox web">
            <div class="write">
                <h1>Pour vous satisfaire ,</h1><h2>Nous nous forçons d'être hautement disponible.</h2> 
                <p>Notre entreprise livre aux quatres coins du glôbe , asseyez-vous et commandez , nous viendrons à vous mes chéries 😘 .</p>
                <button><a href="{{route('rembourser')}}">Chaine de distrubution</a></button>
            </div>
            <div class="images">
                <img src="{{ asset('img/courier.jpg') }}">
            </div>
        </div>
        <div class="boxbox mob">
            <div class="images">
                <img src="{{ asset('img/courier.jpg') }}">
            </div>
            <div class="write">
                <h1>Pour vous satisfait ,<br> Nous nous forçons d'être hautement disponible.</h1> 
                <p>Notre entreprise livre aux quatres coins du glôbe , asseyez-vous et commandez , nous viendrons à vous mes chéries &#x1F618; .</p>
                <button><a href="{{route('rembourser')}}">Chaine de distrubution</a></button>
            </div>
            
        </div>
    </div>
@endsection