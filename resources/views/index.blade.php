<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index-style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor\splide-4.1.3\dist\css\splide.min.css') }}">
    <title>Document</title>
</head>

<body>
    @include('layout.barra-gov')
    <header>
        @include('layout.header-principal')
    </header>

    @include('layout.redesSociales')
    @include('layout.acessibilidad')

    <section class="banner-principal">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="img-carrusel1" src="{{ asset('img/banner4740-desktop.jpg') }}" class="d-block w-100 img-zoom" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img id="img-carrusel2" src="{{ asset('img/raspaygana.png') }}" class="d-block w-100 img-zoom" alt="Banner 2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <section class="section-info-boletos">
        <div class="div-boletos">
            <div class="boleto">
                <img id="img-boleto1" src="{{ asset('img/boleto.png') }}" alt="banner 1">
            </div>
            <div class="boleto">
                <img id="img-boleto2" class="img-1" src="{{ asset('img/boleto2.png') }}" alt="banner 2">
            </div>
        </div>
    </section>

    <footer>
        @include('layout.footer-principal')
    </footer>
    @include('layout.barra-gov')


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="{{ asset('js/index.js') }}"></script>

</html>
