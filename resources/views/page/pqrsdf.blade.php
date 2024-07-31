<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/page-css/pqrsd-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">
    <title>Formulario PQRSD</title>
</head>

<body>
    @include('layout/barra-gov')
    <header>
        @include('layout/header-principal')
    </header>

    @include('layout.redesSociales')
    @include('layout.acessibilidad')
    
    <div class="container">

        <div class="form-section">
            <h1>PQRSD</h1>
            <p>
                Formulario de peticiones, quejas, reclamos, sugerencias, denuncias y solicitud de información pública
            </p>
            <form id="pqrsd-form">
                <label for="pqrsd-type">Seleccione opción de su PQRSD:</label>
                <select id="pqrsd-type" name="pqrsd-type">
                    <option value="petition">Petición</option>
                    <option value="complaint">Queja/Reclamo</option>
                    <option value="information">Solicitud de información</option>
                    <option value="denunciation">Denuncia</option>
                    <option value="suggestion">Sugerencia/Propuesta</option>
                </select>

                <label for="full-name">Nombre y apellidos:</label>
                <input type="text" id="full-name" name="full-name" required>

                <label for="document-type">Tipo de documento:</label>
                <select id="document-type" name="document-type">
                    <option value="cc">Cédula de ciudadanía</option>
                    <option value="nuip">NUIP</option>
                    <option value="ce">Cédula de extranjería</option>
                    <option value="nit">NIT</option>
                    <option value="passport">Pasaporte</option>
                </select>

                <label for="document-number">Número de documento:</label>
                <input type="text" id="document-number" name="document-number" required>

                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email">

                <label for="phone">Número de contacto:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="address">Dirección:</label>
                <input type="text" id="address" name="address" required>

                <label for="barrio">Barrio / Vereda / Corregimiento:</label>
                <input type="text" id="barrio" name="barrio" required>

                <label for="city">Municipio / Distrito:</label>
                <input type="text" id="city" name="city" required>

                <label for="country">País:</label>
                <input type="text" id="country" name="country">

                <label for="subject">Objeto de su PQRSD:</label>
                <textarea id="subject" name="subject" required></textarea>

                <label for="upload">Adjuntar documentos o anexos:</label>
                <input type="file" id="upload" name="upload" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">

                <input type="submit" value="Enviar">
            </form>
        </div>
        {{-- <div class="image-section">
            <img src="{{ asset('img/imagen-formulario.jpg') }}" alt="Imagen" class="header-image">
        </div> --}}
    </div>
    <footer>
        @include('layout.footer-principal')
    </footer>
    @include('layout.barra-gov')
</body>

</html>
