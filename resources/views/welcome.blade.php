<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/sty.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <title></title>
</head>
<body>
    <div class="conteneur">

<!--BAR DE NAVIGATION -->
        <div class="navbarr">
            <div class="menuBottom-child" id="menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16" color="pink">
                    <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                </svg>
            </div>
            <h1><a href="{{ route('home') }}">Ivory Beauty</a></h1>
            <div class="menuBottom-child" id="panier">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16" color="pink ">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg>
            </div>
        </div>
<!--FIN BAR DE NAVIGATION -->

@yield('content')
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
            <h3><span>#</span>Categorie 1</h3>
            <li><a href="#">Produit 1</a></li>
            <li><a href="#">Produit 2</a></li>
            <li><a href="#">Produit 3</a></li>
            <h3><span>#</span>Categorie 2</h3>
            <li><a href="#">Produit 1</a></li>
            <li><a href="#">Produit 2</a></li>
            <li><a href="#">Produit 3</a></li>
            <h3><span>#</span>Categorie 3</h3>
            <li><a href="#">Produit 1</a></li>
            <li><a href="#">Produit 2</a></li>
            <li><a href="#">Produit 3</a></li>
            <h3><span>#</span>Categorie 4</h3>
            <li><a href="#">Produit 1</a></li>
            <li><a href="#">Produit 2</a></li>
            <li><a href="#">Produit 3</a></li>
            <h3><span>#</span>Categorie 5</h3>
            <li><a href="#">Produit 1</a></li>
            <li><a href="#">Produit 2</a></li>
            <li><a href="#">Produit 3</a></li>
            <h3><span>#</span>Categorie 6</h3>
            <li><a href="#">Produit 1</a></li>
            <li><a href="#">Produit 2</a></li>
            <li><a href="#">Produit 3</a></li>
            <h3><span>#</span>Categorie 7</h3>
            <li><a href="#">Produit 1</a></li>
            <li><a href="#">Produit 2</a></li>
            <li><a href="#">Produit 3</a></li>
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
            <div class="panierContain">
                <div class="haut">
                    <img src="img/z.jpg" width="70px" height="70px">
                    <p>Produit</p>
                </div>
                <div class="bas">
                    <form>
                        <button>-</button>
                        <input type="text" name="quantity" value="1">
                        <button>+</button>
                    </form>
                    <p>Prix du produit</p>
                </div>
            </div>
            <div class="panierContain">
                <div class="haut">
                    <img src="img/z.jpg" width="70px" height="70px">
                    <p>Produit</p>
                </div>
                <div class="bas">
                    <form>
                        <button>-</button>
                        <input type="text" name="quantity" value="1">
                        <button>+</button>
                    </form>
                    <p>Prix du produit</p>
                </div>
            </div>
            <div class="panierContain">
                <div class="haut">
                    <img src="img/z.jpg" width="70px" height="70px">
                    <p>Produit</p>
                </div>
                <div class="bas">
                    <form>
                        <button>-</button>
                        <input type="text" name="quantity" value="1">
                        <button>+</button>
                    </form>
                    <p>Prix du produit</p>
                </div>
            </div>
            <div class="panierContain">
                <div class="haut">
                    <img src="img/z.jpg" width="70px" height="70px">
                    <p>Produit</p>
                </div>
                <div class="bas">
                    <form>
                        <button>-</button>
                        <input type="text" name="quantity" value="1">
                        <button>+</button>
                    </form>
                    <p>Prix du produit</p>
                </div>
            </div>
            <div class="panierContain">
                <div class="haut">
                    <img src="img/z.jpg" width="70px" height="70px">
                    <p>Produit</p>
                </div>
                <div class="bas">
                    <form>
                        <button>-</button>
                        <input type="text" name="quantity" value="1">
                        <button>+</button>
                    </form>
                    <p>Prix du produit</p>
                </div>
            </div>
            <div class="panierContain">
                <div class="haut">
                    <img src="img/z.jpg" width="70px" height="70px">
                    <p>Produit</p>
                </div>
                <div class="bas">
                    <form>
                        <button>-</button>
                        <input type="text" name="quantity" value="1">
                        <button>+</button>
                    </form>
                    <p>Prix du produit</p>
                </div>
            </div>
            <div class="panierContain">
                <div class="haut">
                    <img src="img/z.jpg" width="70px" height="70px">
                    <p>Produit</p>
                </div>
                <div class="bas">
                    <form>
                        <button>-</button>
                        <input type="text" name="quantity" value="1">
                        <button>+</button>
                    </form>
                    <p>Prix du produit</p>
                </div>
            </div>
            <div class="panierContain">
                <div class="haut">
                    <img src="img/z.jpg" width="70px" height="70px">
                    <p>Produit</p>
                </div>
                <div class="bas">
                    <form>
                        <button>-</button>
                        <input type="text" name="quantity" value="1">
                        <button>+</button>
                    </form>
                    <p>Prix du produit</p>
                </div>
            </div>
            <div class="panierContain">
                <div class="haut">
                    <img src="img/z.jpg" width="70px" height="70px">
                    <p>Produit</p>
                </div>
                <div class="bas">
                    <form>
                        <button>-</button>
                        <input type="text" name="quantity" value="1">
                        <button>+</button>
                    </form>
                    <p>Prix du produit</p>
                </div>
            </div>
        </div>
        <div class="sous-total">
            <p>Le sous-total est de : </br> 45.600.000.000</p>
            <button><a href="#">Commander</a></button>
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
    </div>
<!--DEBUT CORPS DE PAGE-->  
@yield('content1')
<!--FIN CORPS DE PAGE-->
<!--DEBUT DU FOOTER-->
    <div class="footersection">
        <div class="incin">
            <p>powered by <a href="https://www.facebook.com/latif.tondossama/" class="lala">Latif</a></p>
            <p>inc. <span>IVORY BEAUTY</span> </br> &copy 2019-2022</p>
        </div>
        <div class="politicy">
            <a href="{{ route('apropos') }}">à propos de nous</a>
            <a href="{{ route('confident') }}">Politique de confidentialité</a>
            <a href="{{ route('rembourser') }}">Politique de remboursement</a>
            <a href="{{ route('contact') }}">Nous contacter</a>
        </div>
        <div class="medias">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" color="pink">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
            </a>
            
<a href="#">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" color="pink">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </svg>
</a>

    <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" color="pink">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
    </a>
        </div>
    </div>
<!--FIN DU FOOTER-->
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jstyle.js"></script>
</body>
</html>