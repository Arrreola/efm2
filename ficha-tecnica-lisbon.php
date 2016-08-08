<!DOCTYPE html>
<html>
<head>
    <!-- Iso -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title is the first phrase you see as a search result. -->
    <title>EFM Capital</title>

    <!-- Description of your website. Max 160 Characters-->
    <meta name="description" content="Page description. No longer than 155 characters."/>


    <!-- Most important word to use on specific page. / No more than 10 keyword phrases -->
    <meta name="keywords" content="words">

    <!-- Favicon -->

    <!-- Allows robots to crawl your website. https://yoast.com/robots-meta-tags/ -->
    <meta name="robots" content="selection">

    <!-- Schema.org markup for Google+ and Pinterest  http://schema.org/docs/gs.html-->
    <meta itemprop="name" content="The Name or Title Here">
    <meta itemprop="description" content="This is the page description">
    <meta itemprop="image" content="http://www.example.com/image.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="EFM Capital">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Page Title">
    <meta name="twitter:description" content="Page description less than 200 characters">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="http://www.example.com/image.jpg">

    <!--
    Twitter thumbnail: 120x120px
    Twitter large image: 280x150px
    Facebook: Standards vary, but an image at least 200x200px works best.
    Facebook recommends large images up to 1200x630px wide.
    -->

    <!-- Open Graph data for sharing in Facebook -->
    <meta property="og:title" content="EFM Capital"/>
    <meta property="og:type" content="EFM Capital"/>
    <meta property="og:url" content="http://www.efmcapital.com/"/>
    <meta property="og:image" content="http://example.com/image.jpg"/>
    <meta property="og:description" content="Description Here"/>
    <meta property="og:site_name" content="EFM Capital, i.e. Moz"/>
    <meta property="og:locale:alternate" content="es_MX"/>
    <meta property="og:locale:alternate" content="en_US"/>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Scripts src -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="js/parallax-js/parallax.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<?php @include 'includes/navbar.php' ?>
<section class="ficha-tecnica-section-1">
    <div class="ficha-tecnica-header">
        <hr class="ficha-tecnica-slide-hr">
        <span class="ficha-tecnica-heading">Ficha técnica: Lisboa</span>
        <hr class="ficha-tecnica-slide-hr">
    </div>
    <div class="ficha-tecnica-content">
        <div class="operaciones-section-1-text-box">
            <span class="operaciones-section-1-heading">Gracias por su interés en nuestros proyectos.</span>
            <p class="operaciones-section-1-text">
                Nuestra especialidad es preparar a las empresas mexicanas para que puedan ser receptoras de capital privado proveniente de fondos de inversión, compradores estratégicos o de Family Offices. Nos definimos como “Fondo Puente”, ya que somos un vínculo entre la empresa familiar mexicana y los profesionales del sector de Private Equity o Venture Capital.
            </p>
            <p class="operaciones-section-1-text">
                El empresario que decide integrar nuevos socios o vender su compañía nos formaliza un mandato de búsqueda y establecemos un convenio de colaboración con el objetivo de corregir contingencias de índole financiero, jurídico, laboral, fiscal y comercial. Contamos con una estructura de asociación amplia; conforme a las necesidades, adquirimos acciones de la entidad legal, colocamos deuda convertible o tomamos una opción de compra preferente con un acuerdo de servicio.
            </p>
            <p class="operaciones-section-1-text">
                A los especialistas del sector de fusiones y adquisiciones les proporcionamos acceso a un pipeline de empresas auditadas, así como una estructura documental que facilita el due diligence. Nuestro equipo de especialistas proporciona detalles específicos sobre las condiciones de la empresa en todas las áreas de negocio. Actualmente nos enfocamos principalmente en la industria médica, energética, telecomunicaciones y retail.
            </p>
        </div>
        <div class="operaciones-section-1-form">
            <div class="operaciones-side-b-1">
                <img src="img/logos/pdf-icon.png" alt="Pdf Icono">
                <a href="/descargas/lisbon-es.pdf" target="_blank"><button class="operaciones-side-b-button-descarga">Descargar</button></a>
                <hr>
                <p class="operaciones-side-b-text-1">
                    Si este proyecto cumple con sus criterios y desea participar en el proceso por favor, continúe en este enlace.
                </p>
                <button class="operaciones-side-b-button-descarga">Solicitar información</button>
                <p class="operaciones-side-b-text-1">
                    EFM Capital se reserva la decisión sobre las autorizaciones de acceso a la plataforma, conforme a sus propios criterios institucionales y no garantiza el envío del convenio de cofidencialidad.
                </p>
            </div>
            <div class="operaciones-side-b-2"></div>
        </div>
    </div>
</section>
<section class="index-section-7">
    <div class="index-section-7-content">
        <div class="index-section-7-a">
            <span class="index-section-7-text">Torre Helicon, Piso 24B, José Clemente Orozco No. 329 Valle Oriente, San Pedro Garza García, Nuevo León, México. C.P. 66278 </span>
            <span class="index-section-7-text">Teléfono: +52 (81) 1223 0890 • Email: info@efmcapital.com</span>
            <span
                class="index-section-7-text">Horario: Lunes a Viernes, 8:00AM a 6:00PM (Tiempo del centro de México)</span>
        </div>
        <div class="index-section-7-b">
            <span
                class="index-section-7-text"><b>Contacto para banqueros, fondos de inversión y clientes registrados:</b></span>
            <span class="index-section-7-text">Everardo Hiarmes Martínez </span>
            <span class="index-section-7-text">Teléfono de oficina: +52 (81) 1223 0890 </span>
            <span class="index-section-7-text">Email: info@efmcapital.com</span>
        </div>
    </div>
</section>
<section class="index-section-8">
    <span>Todos los derechos reservados 2016</span>
</section>
<script>
    function validateForm(idObj) {

        var _form = $('#' + idObj);
        var _stringVar = _form.serialize();

    //console.log('cadena de variables='+_stringVar

        $.ajax({
            method: "POST",
            url: "send-operaciones.php",
            data: _stringVar
        }).success(function (msg) {
            // alert("Data Saved: " + msg);
            if (msg == 'success')
                $('.msg').text('GRACIAS POR ENVIAR TUS DATOS');

        });
    }
</script>
</body>
</html>