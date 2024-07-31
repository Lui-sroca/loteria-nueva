<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global-css/header-principal-styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">
    <title>Responsive Menu</title>
</head>

<body>
    <header>
        <div class="header-principal">
            <div class="div-logo">
                <a href="{{ route('inicio') }}"><img class="logo-loteria" src="{{ asset('img/logo.jpg') }}"
                        alt="Logo la millornaria de bolivar"></a>
            </div>
            <div class="div-menu-principal">
                <div class="menu-item">
                    <a href="#" class="enlaces-menu">Lotería de Bolívar</a>
                    <div class="dropdown-content">
                        <a href="{{ route('Nosotros') }}">Nuestra Empresa</a>
                        <a href="{{ route('Nosotros') }}">Misión y Visión</a>
                    </div>
                </div>
                <div class="menu-item">
                    <a href="{{ route('Transparencia') }}" class="enlaces-menu">Transparencia</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('AtencionCiudadano') }}" class="enlaces-menu">Atención al Ciudadano</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('Participa') }}" class="enlaces-menu">Participa</a>
                </div>
                <div class="menu-item">
                    <a href="#" class="enlaces-menu">Nuestros productos</a>
                    <div class="dropdown-content">
                        <a href="#">Promocional 1</a>
                        <a href="#">Promocional 2</a>
                        <a href="#">Promocional 3</a>
                    </div>
                </div>
                <div class="menu-item">
                    <a href="{{ route('pqrsd') }}" class="enlaces-menu">PQRSDF</a>
                </div>
            </div>
            <div class="div-buscador">
                <input type="text" name="buscador" class="input-buscador" placeholder="Ingresa término de búsqueda">
                <button class="boton-buscador"><img class="img-buscador" src="{{ asset('img/lupa.png') }}"
                        alt="Buscar"></button>
            </div>

            <div class="menu-alterno">
                <button class="boton-menu-alterno">
                    <img class="img-menu-alterno" src="{{ asset('img/menu.png') }}" alt="Menú">
                </button>
            </div>
        </div>
        <div class="div-slider">
            <div class="slider-track">
                <div class="slide">
                    <p>Últimos resultados: </p>
                </div>
                <div class="slide">
                    <img src="{{ asset('img/logo_tradicional.png') }}" alt="Logo Tradicional">
                </div>
                <div class="slide">
                    <img src="{{ asset('img/apostar.png') }}" alt="Apostar">
                </div>
            </div>
        </div>
        <div class="div-lineas-bandera">
            <div class="linea-amarilla"></div>
            <div class="linea-verde"></div>
            <div class="linea-roja"></div>
        </div>
    </header>
    
    <script src="{{ asset('js/header.js') }}">
       
    </script>
</body>

</html>
