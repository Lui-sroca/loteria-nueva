<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/page-css/participa-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('layout/barra-gov')
    <header>
        @include('layout/header-principal')
    </header>

    @include('layout.redesSociales')
    @include('layout.acessibilidad')

    <div class="div-loader">
        {{-- <img class="fondo-loader" src="{{ asset('img/fondo-negro.avif') }}"> --}}
        <div class="lds-spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <footer>
        @include('layout.footer-principal')
    </footer>
    @include('layout.barra-gov')
</body>
</html>