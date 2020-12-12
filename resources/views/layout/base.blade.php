<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} :: @yield('titulo')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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