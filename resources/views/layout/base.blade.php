<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} :: @yield('titulo')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">

    <script type="text/javascript" src="{{ asset('js/jquery-3.5.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</head>
<body>

    <div class="logo">
        <img width="100px" src="{{ asset('img/cadastro.png') }}" alt="">
    </div>
    
    <div class="container">
        @yield('conteudo')
    </div>


    <footer>
        <center><p>Marcello Albuquerque</p></center>
    </foorter>
</body>
</html>