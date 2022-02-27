<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/sty.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <title></title>
</head>
<body>
    <div class="conteneur">
        @include('layouts/partials/navbar')
        @yield('content')
        @include('layouts/partials/menu')
        <div class="whalog">
            <img src="/img/whatlog.png" width="100px">
        </div>
        <div class="whaDis">
            <div class="tchatHaus">
                <h3>Chat with us!!!</h3>
                <div class="croixWha" id="croixmen">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                    </svg>
                </div>
            </div>
            <div class="tchatBas">
                <div class="gow">
                   <a href="https://wa.me/14182622289">
                       <img src="img/mp.jpeg">
                       <p>Stephanie<br><span>#Pour les produits</span></p>
                   </a>  
                </div>
                <hr class="mur">
                <div class="gow">
                    <a href="https://wa.me/22578263714">
                        <img src="img/mp.jpeg">
                       <p>Marie-Paul<br><span>#Pour les commandes</span></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
        @yield('content1')
        @include('layouts/partials/footer')
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jstyle.js')}}"></script>
</body>
</html>