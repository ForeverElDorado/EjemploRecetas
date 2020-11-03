<html>

<head>
    <title> @yield('titulo')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    h1 {
        margin-top: 1cm;
        margin-left: 12cm;
    height: min-content;
        background-color: grey;
        width: min-content;
    }
    body{
        background-size: cover;
        background-image:url("img/cocina.jpg")
        
    }
    p{
        background-color: grey;
    }
    a {
        margin-left: 6cm;
        margin-top: 2cm;
    }
</style>

<body style='background-image:url("img/cocina.jpg")'>
    @section('barralateral')
    Esto es la barra lateral
    @show

    <div class="container">
        @yield('contenido')
    </div>
</body>

</html>