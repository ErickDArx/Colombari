<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Venta de mascarillas y accesorios">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Listado de productos | Principal">
    <meta property="og:site_name" content="Venta de mascarillas">
    <meta property="og:url" content="https://ventademascarillas.herokuapp.com/">
    <meta property="og:description"
        content="Encuentre las mascarillas que más le agraden y no dude en llamarnos para llegar a un acuerdo y efectuar la entrega.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ventademascarillas.herokuapp.com/img/Logo.png">

    <title>Principal | Venta de mascarillas</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="borde-top"></div>
    <div id="app">
        @yield('Acceso')

        @yield('Portada')


    </div>
    <script src="{{asset('js/vue.js')}}"></script>
</body>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/carousel.js')}}"></script>

</html>