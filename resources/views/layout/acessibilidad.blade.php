<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global-css/acessibilidad-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>


<div class="div-acessibilidad">
    <div class="menu-acessibilidad" id="accessibilityMenu">
        <h2>Accesibilidad</h2>
        <div class="menu-acessibilidade-item item-1" id="increaseFontSize"><img src="{{ asset('img/aumentar.png') }}">
        </div>
        <div class="menu-acessibilidade-item item-2" id="decreaseFontSize"><img src="{{ asset('img/disminuir.png') }}">
        </div>
        <div class="menu-acessibilidade-item item-3" id="toggleContrast"><img src="{{ asset('img/contraste.png') }}"></div>
    </div>
    <img class="img-accesibilidad" src="{{ asset('img/logos/acessibilidad3.webp') }}" id="accessibilityIcon" alt="Accesibilidad">

</div>





<script src="{{ asset('js/acessibilidad.js') }}"></script>

</html>
