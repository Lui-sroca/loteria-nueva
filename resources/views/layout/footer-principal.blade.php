<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global-css/footer-principal-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <footer>
        <div class="div-lineas-bandera">
            <div class="linea-amarilla"></div>
            <div class="linea-verde"></div>
            <div class="linea-roja"></div>
        </div>

        <div class="div-logos-footer">
            <img class="logo" src="{{ asset('img/log-footer/escudo-colombia.webp') }}" alt="Escudo de Colombia">
            <img class="logo logo-co" src="{{ asset('img/log-footer/Colombia-Co.webp') }}" alt="Colombia Co">
            <img class="logo" src="{{ asset('img/log-footer/gobierno-digital.webp') }}" alt="Gobierno Digital">
            <img class="logo" src="{{ asset('img/log-footer/eficiente-_1_.webp') }}" alt="Eficiente">
        </div>
        <div class="div-informacion">
            <div class="ubicacion ">
                <div class="titulo-info">
                    <img src="{{ asset('img/ubicacion.png') }}" alt="Ubicacion">
                    <p>Ubicacion</p>
                </div>
                <p>
                    Dirección: Centro Av. Venezuela, Antiguo Edificio caja Agraria Oficina 409
                    Cartagena - Colombia
                </p>
            </div>
            <div class="contactos">
                <div class="titulo-info">
                    <img src="{{ asset('img/llamada-telefonica.png') }}" alt="Contactos">
                    <p>Contactos</p>
                </div>
                <div>
                    <p>
                        Teléfono- Fax: 6640842
                    </p>
                </div>
            </div>
            <div class="correo">
                <div class="titulo-info">
                    <img src="{{ asset('img/correo.png') }}" alt="Correo">
                    <p>Correo</p>
                </div>
                <div>
                    <p>
                        gerencia@lamillonariadelcaribe.com.co
                        contabilidad@lamillonariadelcaribe.com.co
                    </p>
                </div>
            </div>
            <div class="informacion">
                <div class="titulo-info">
                    <img src="{{ asset('img/informacion (1).png') }}" alt="Politicas">
                    <p>Politicas</p>
                </div>
                <div>
                    <p>
                        <a href="#">Política de Cookies</a><br>
                        <a href="#">Condiciones de uso </a><br>
                        <a href="#">Tratamiento de datos personales </a><br>
                        <a href="#">Mapa de sitio</a><br>
                        <a href="#">Glosario</a><br>

                    </p>
                </div>
            </div>
        </div>
        <div>

        </div>
        <div class="div-nombre-loteria">
            <p>© 2013 La Millonaria del Caribe</p>
        </div>

    </footer>
</body>

</html>
