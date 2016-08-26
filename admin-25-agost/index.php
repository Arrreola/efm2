<?php
session_start();
include 'api/classSql.php';

if (isset($_POST['usuario']) && $_POST['usuario'] != '' && isset($_POST['password']) && $_POST['password'] != ''):

    $login = new loginUser($_POST['usuario'], $_POST['password']);

    if ($login->callback != ''):
        if (!isset($_SESSION['idAdmin'])):
            $_SESSION['idAdmin'] = '';
        endif;
        $_SESSION['idAdmin'] = $login->callback;
        header('Location:menu/registros/');
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
    <!--<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->
    <script src="js/jquery-1.11.3.js"></script>
</head>
<body>
<section class="login-section">
    <div class="login-content-area">
        <div class="login-content-area-a">
            <img class="login-content-area-logo" src="../img/logos/logo94x495x2.png" alt="Logotipo de EFM Capital">
        </div>
        <form enctype="multipart/form-data" name="loginForm" id="loginForm" method="post" action="index.php"
              class="login-content-area-b">
            <input type="text" name="usuario" class="news-required" placeholder="Usuario">
            <input type="password" name="password" class="news-required" placeholder="Contraseña">
            <input class="login-button" type="submit" name="iniciar" id="btnLogin" value="Iniciar Sesión">
        </form>
    </div>
</section>

<script src="js/main.js"></script>
</body>
</html>
