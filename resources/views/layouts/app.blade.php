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
    </div>
        @yield('content1')
        @include('layouts/partials/footer')
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jstyle.js')}}"></script>
</body>
</html>