<?php
session_start();
include 'api/controller.php';
if (!isset($_SESSION['idAdmin'])):
    //echo 'no existe';
    header('Location:login.php');
else:
    echo $_SESSION['idAdmin'];
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
            <li class="menu-items">Dashboard</li>
            <hr>
            <li class="menu-items">Seo</li>
            <hr>
            <li class="menu-items">Manual</li>
            <hr>
        </ul>
    </div>
    <div class="menu-content-area-a">
        <form action="menu" enctype="multipart/form-data" method="post" id="menu-form-style">
            <p class="menu-section-title">Dashboard</p>
            <hr>
            <label>Sección</label>
            <input type="hidden" name="myAction" value="<?= $myAction; ?>">
            <?= $inputIdReg; ?>
            <select class="input-class input-class-category" name="categoria" id="categoria">
                <option value="1">weekly trending topic</option>
                <option value="2">Efm capital's perspective</option>
                <option value="3">Monthly industry perspective</option>
            </select>
            <hr>
            <label for="tit_es">Titulo en español</label>
            <input class="input-class" type="text" name="tit_es" id="tit_esp">
            <hr>
            <label for="tit_en">Titulo en ingles</label>
            <input class="input-class" type="text" name="tit_en" id="tit_en">
            <hr>
            <label for="desc_es">Descripción corta en español</label>
            <textarea  id="myTextarea" name="desc_short_es" id="desc_es" cols="30" rows="10"></textarea>
            <hr>
            <label for="desc_en">Descripción corta en ingles</label>
            <textarea name="desc_short_en" id="desc_es" cols="30" rows="10"></textarea>
            <hr>
            <label for="desc_es">Descripción completa en español</label>
            <textarea name="desc_es" id="desc_es" cols="30" rows="10"></textarea>
            <hr>
            <label for="desc_en">Descripción completa en ingles</label>
            <textarea name="desc_en" id="desc_es" cols="30" rows="10"></textarea>
            <hr>
            <label for="imgNot" class="menu-img-post-button">Imagen del post</label>
            <hr>
            <input type="file" name="imgNot" id="imgNot">

            <input class="menu-submit-button" type="submit" value="Guardar">
        </form>
    </div>
</div>
</body>
</html>
