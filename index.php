<?php
include 'controller.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Iso -->
    <meta charset="UTF-8">
    <!--    <base href="http://localhost:8888/efm-new/" target="_top">-->
    <base href="http://clientes.v09.mx/efm_4.0/" target="_top">
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
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">
    <!-- bxSlider CSS file -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" />

</head>
<body>
<div id="overlay" class="overlay" onclick="showLight('','')"></div>

<div id="Lightbox" class="sugerencias">
    <div id="btn_cerrar_term"><a href="javascript:void(0)" onclick="showLight('','')">x</a></div>
    <div id="infoBox">

    </div>
</div>
<nav>
    <div class="nav-content">
        <a href="<?= $len; ?>/"><img src="img/logos/logo94x495x2.png" alt="Logotipo EFM" class="navbar-logo"></a>
        <figure class="navbar-menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                 id="Untitled-2" x="0px" y="0px" width="18px" height="12px" viewBox="0 0 18 12"
                 enable-background="new 0 0 18 12" xml:space="preserve">
        <path fill="none" d="z"/>
                <g id="Layer_x25_201">
                    <rect width="18" height="2"/>
                    <rect y="5" width="18" height="2"/>
                    <rect y="10" width="18" height="2"/>
                </g>
                <path fill="none" d="z"/>
                <div xmlns="http://www.w3.org/1999/xhtml"></div>
      </svg>
        </figure>
        <ul class="navbar-breadcrumbs offcanvas-menu">
            <li class="navbar-crumbs-news hide-mobile">

                <?php if ($len == 'es'): ?>
                    <a href="es/noticias">
                        <button class="navbar-dataroom-button">
                            Fórum
                        </button>
                    </a>
                <?php else: ?>
                    <a href="en/news">
                        <button class="navbar-dataroom-button">
                            Forum
                        </button>
                    </a>
                <?php endif; ?>

            </li>
            <li class="navbar-crumbs-2">
                <a target="_blank"
                   href="<?= $len; ?>/<?= ($len == 'es') ? 'cuarto-de-datos-virtual' : 'virtual-data-room'; ?>">
                    <button class="navbar-dataroom-button">
                        <?php if ($len == 'es'): ?>
                            cuarto de datos virtual
                        <?php else: ?>
                            virtual data  room
                        <?php endif; ?>
                    </button>
                </a>
            </li>

            <hr class="navbar-hr">
            <li class="navbar-crumbs-1">
                <a href="<?= $_getLen; ?>/<?= $urlCompuesta; ?>"><?php if ($len == 'en'): ?>Español<?php else: ?>English<?php endif; ?></a>
            </li>
        </ul>
    </div>
</nav>
<?php
if (isset($_GET['sec']) && $_GET['sec'] != ''):

    switch ($_GET['sec']):
        case'fondo-puente':
        case'bridge-fund':
            $sec = 'fondo-puente';
            break;
        case 'noticias':
        case 'news':
            $sec = 'noticias';
            break;
        case 'noticia':
        case 'new':
            $sec = 'detalle';
            break;
        default:
            $sec = $_GET['sec'];
            break;
        case 'cuarto-de-datos-virtual':
        case 'virtual-data-room':
            $sec = 'cuarto-de-datos-virtual';
            break;
        case'ficha-tecnica-melbourne':
        case'prospectus-melbourne':
            $sec = 'ficha-tecnica-melbourne';
            break;
        case'ficha-tecnica-lisboa':
        case'prospectus-lisbon':
            $sec = 'ficha-tecnica-lisbon';
            break;
        case'operaciones':
        case'operations':
            $sec = 'historial-operaciones';
            break;
        case'categoria':
        case'category':
            $sec = 'historial-forum';
            break;
    endswitch;

    if (file_exists('secciones/' . $sec . '.php')):
        include 'secciones/' . $sec . '.php';
    else:
        include 'secciones/404.php';
    endif;

else:
    include 'secciones/home.php';
endif;
?>
<footer>
    <section class="index-section-7">
        <div class="index-section-7-content">
            <div class="index-section-7-a">
                <span class="index-section-7-text">Torre Helicon, Piso 24B, José Clemente Orozco No. 329 Valle Oriente, San Pedro Garza García, Nuevo León, México. C.P. 66278 </span>
                <span
                    class="index-section-7-text"><?php if ($len == 'es'): ?>Teléfono:<?php else: ?>Switchboard<?php endif; ?>
                    +52 (81) 1223 0890 • Email: info@efmcapital.com</span>
                <span
                    class="index-section-7-text">
                    <?php if ($len == 'es'): ?>
                        Horario: Lunes a Viernes, 8:00AM a 6:00PM (Tiempo del centro de México)
                    <?php else: ?>
                        Hours: Monday through Friday from 8:00 am to 6:00 pm (Mexico Central Time)
                    <?php endif; ?>
                </span>
            </div>
            <div class="index-section-7-b">
                <?php if ($len == 'es'): ?>
                    <span class="index-section-7-text">
                <b>
                    Contacto para banqueros, fondos de inversión y clientes registrados:
                </b>
            </span>
                    <span class="index-section-7-text">Everardo Hiarmes Martínez </span>
                    <span class="index-section-7-text">Teléfono de oficina: +52 (81) 1223 0890 </span>
                    <span class="index-section-7-text">Email: info@efmcapital.com</span>
                <?php else: ?>
                    <span class="index-section-7-text">
                <b>
                    Contact for investment funds, banks and registered clients
                </b>
            </span>
                    <span class="index-section-7-text">Everardo Hiarmes Martínez </span>
                    <span class="index-section-7-text">Office phone: +52 (81) 1223 0890 </span>
                    <span class="index-section-7-text">Email: info@efmcapital.com</span>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="index-section-8">
        <?php if ($len == 'es'): ?>
            <span>Todos los derechos reservados 2016</span>
        <?php else: ?>
            <span>All rights reserved 2016</span>
        <?php endif; ?>
    </section>
</footer>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- parallax -->
<script src="js/parallax-js/parallax.min.js"></script>
<!--<script src="js/carousel-js/carousel.js"></script>-->
<script src="js/sweetalert.min.js"></script>
<script>
    var _len = "<?= $len; ?>";
    var _cat = "<?= $_GET['cat']; ?>";

    if ($(window).width() > 766) {
        $('.parallax-window').parallax({imageSrc: 'img/desktop-backgrounds/section-1-back-desktop.jpg'});
        $('.parallax-window-3').parallax({imageSrc: 'img/desktop-backgrounds/section-3-back.jpg'});
    } else {
        $('.parallax-window').parallax({imageSrc: 'img/mobile-backgrounds/section-1-back-mobile.jpg'});
        $('.parallax-window-3').parallax({imageSrc: 'img/mobile-backgrounds/section-3-back-mobile.jpg'});
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4738uIisDOYyffs-UVzfBWYAJ4AAYiC0&callback=initMap">
</script>
<!--Scripts src-->
<script src="js/main.js"></script>
</body>
</html>
