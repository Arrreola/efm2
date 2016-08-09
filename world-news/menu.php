<?php
session_start();
include 'api/controller.php';
if (!isset($_SESSION['idAdmin'])):
    //echo 'no existe';
    header('Location:index.php');
else:
    //echo $_SESSION['idAdmin'];
endif;

if (!isset($_GET['action'])):
    $myAction = 'insert';
else:
    if ($_GET['action'] == 'update'):
        $myAction = $_GET['action'];
        $inputIdReg = '<input type="hidden" name="idReg" value="' . $_GET['idReg'] . '">';
    else:
        $inputIdReg = '';
    endif;
endif;
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Iso -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- INVESTIGAR EL USO DE LA ETIQUETA BASE CON HTACCESS -->
    <base href="http://localhost:8888/efm-new/world-news/" target="_top">
    <!-- Title is the first phrase you see as a search result. -->
    <title>EFM Capital | Iniciar Sesión</title>

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

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Scripts src -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            theme: 'modern',
            height: 150,
            plugins: [
                'code advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'save table contextmenu directionality emoticons template paste textcolor'
            ],
            toolbar: 'code insertfile undo redo | styleselect fontsizeselect fontselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor'
        });
    </script>
    <script src="js/main.js"></script>
</head>
<body class="menu-back">
<div class="menu-navbar">
    <ul class="menu-navbar-list">
        <li class="menu-navbar-items">
            <img class="menu-logo" alt="Logotipo EFM" src="../img/logos/logo94x495x2.png">
        </li>
    </ul>
</div>
<div class="menu-section">
    <div class="menu-sidebar">
        <ul class="menu-list">
            <li class="menu-items">
                <a href="menu/dashboard/">
                    Dashboard
                </a>
            </li>
            <hr>
            <li class="menu-items">
                <a href="menu/seo/">
                    Seo
                </a>
            </li>
            <hr>
            <li class="menu-items">
                <a href="menu/manual/">
                    Manual
                </a>
            </li>
            <hr>
        </ul>
    </div>
    <?php

    echo 'valor de sec = ' . $_GET['sec'];

    if (isset($_GET['sec']) && $_GET['sec'] != ''):
        include 'interiores/' . $_GET['sec'] . '.php';
    else:
        include 'interiores/dashboard.php';
    endif;
    ?>
</div>
</body>
</html>
