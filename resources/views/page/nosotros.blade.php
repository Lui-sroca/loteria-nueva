<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/nosotros/nosotros-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Banner</title>
</head>

<body>
    @include('layout/barra-gov')
    <header>
        @include('layout/header-principal')
    </header>

    @include('layout.redesSociales')
    @include('layout.acessibilidad')

    
    <section>
        <div class="div-banner">
            <img class="img-banner" src="{{ asset('img/banner-nosotros.jpg') }}" alt="Banner">
            <div class="overlay-banner">
                <p class="texto-banner">Nuestra empresa</p>
                <div class="linea-banner"></div>
            </div>
        </div>
    </section>
    <main>
        <div class="div-contenido">
            <aside>
                <div class="div-menu-nosotros">
                    <button class="opciones" data-content="historia" onclick="fetchContent('option1')">Nuestra
                        historia</button>
                    <button class="opciones" data-content="mision-vision" onclick="fetchContent('option2')">Misión y
                        Visión</button>
                    <button class="opciones" data-content="objetivos"
                        onclick="fetchContent('option3')">Objetivos</button>
                    <button class="opciones" data-content="valores" onclick="fetchContent('option4')">Valores</button>
                    <button class="opciones" data-content="principios"
                        onclick="fetchContent('option5')">Principios</button>
                </div>
            </aside>

            <div class="div-menu-contenido" id="contenido">
                @include('layout.nosotros.historia')
            </div>

        </div>
    </main>


    <footer>
        @include('layout.footer-principal')
    </footer>
    @include('layout.barra-gov')
</body>
<script src="{{ asset('js/nosotros.js') }}"></script>

</html>
