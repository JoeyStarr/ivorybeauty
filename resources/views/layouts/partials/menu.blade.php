<!-- MENU LATERAL GAUCHE-->
    <div class="menug-lateral" id="menmen">
        <div class="menu-entete">
            <h2>Découvrez nos </br>chics produits</h2>
            <div class="croix" id="croixmen">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                </svg>
            </div>
        </div>
        <div class="segpa"></div>
        <div class="listelateralgauche">
            <ul>
                <li><span>#</span>
                    <a href="{{ route('acc') }}">Accessoires</a>
                </li>
                <li><span>#</span>
                    <a href="{{ route('box') }}">Box</a>
                </li>
                <li><span>#</span>
                    <a href="{{ route('long') }}">Cils longs</a>
                </li>
                <li><span>#</span>
                    <a href="{{ route('moyen') }}">Cils moyens</a>
                </li>
                <li><span>#</span>
                    <a href="{{ route('court') }}">Cils courts</a>
                </li>
            </ul>
        </div>
    </div>
<!-- FIN MENU LATERAL GAUCHE-->

<!-- MENU LATERAL DROIT-->
    <div class="menud-lateral" id="menpan">
        <div class="menu-entete">
            <h2>Votre panier</h2>
            <div class="croix" id="croixpan">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                </svg>
            </div>
        </div>
        <div class="segpa"></div>
        <div class="conteneur-panier">
            @php
                $compt = 0 ;
                $valum1 = 0 ;
                $valum2 = 0 ;
            @endphp
            @foreach($panier as $pan)
                <div class="panierContain">
                <div class="haut">
                    <img src="{{asset('$pan->illust')}}" width="70px" height="70px">
                    <p>{{$pan->nameProd}}</p>
                </div>
                <div class="bas">
                    <form method="POST" action="{{ route('modifier',['id'=>$pan->id]) }}">
                        @csrf
                        <button name="less">-</button>
                        <input type="text" name="quantity" value="{{ $valeur[$compt]['1']}}">
                        <button name="more">+</button>
                    </form>
                    <p><?php $valum1 += $valeur[$compt]['1'] * $pan->prixCFA ?> {{  $valeur[$compt]['1'] * $pan->prixCFA}} CFA |<?php $valum2 += $valeur[$compt]['1'] * $pan->prixCAD ?> {{ $valeur[$compt]['1'] * $pan->prixCAD}} USD</p>
                </div>
                </div>
                @php
                    $compt++;
                @endphp
            @endforeach
        </div>
        <div class="sous-total">
            <p>Le sous-total est de : </br> {{$valum1}} CFA | {{$valum2}} USD </p>
            <button><a href="{{route('validation')}}">Passer commande</a></button>
        </div>
    </div>
<!-- FIN MENU LATERAL DROIT-->
<!-- MENU DU BAS POUR MOBILE -->
        <div class="menuBas">
            <div class="menuBottom-child" id="menumob">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16" color="pink">
                    <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                </svg>
            </div>
            <div class="menuBottom-child" id="paniermob">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16" color="pink">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg>
            </div>
        </div>
<!--FIN MENU DU BAS POUR MOBILE -->