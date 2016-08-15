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
    <base href="http://localhost:8888/efm-new/admin/" target="_top">
    <!-- Title is the first phrase you see as a search result. -->
    <title>EFM Capital | Iniciar Sesión</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/style.css">


</head>
<body class="menu-back">
<div class="menu-navbar">
    <ul class="menu-navbar-list">
        <li class="menu-navbar-items menu-navbar-items-logo">
            <img class="menu-logo" alt="Logotipo EFM" src="../img/logos/logo94x495x2.png">
        </li>
        <li class="menu-navbar-items">
            <a href="#">EFM World News</a>
        </li>
    </ul>
</div>
<div class="menu-section">
    <div class="menu-mobile-trigger">
        <img class="menu-icon-trigger" src="../img/icons/icons-07.svg" alt="">
    </div>
    <div class="menu-sidebar">
        <ul class="menu-list">
            <li class="menu-items menu-item-logo">
                <img class="menu-logo" alt="Logotipo EFM" src="../img/logos/logow94x495x2.png">
            </li>
            <hr>
            <li class="menu-items">
                <a href="menu/registros/">
                    <img class="menu-icons-sidebar" src="../img/icons/icons-04.svg" alt="">
                    <span class="menu-item-name">Dashboard</span>
                </a>
            </li>
            <hr>
            <li class="menu-items">
                <a href="menu/seo/">
                    <img class="menu-icons-sidebar" src="../img/icons/icons-05.svg" alt="">
                    <span class="menu-item-name">Seo</span>
                </a>
            </li>
            <hr>
            <li class="menu-items">
                <a href="menu/manual/">
                    <img class="menu-icons-sidebar" src="../img/icons/icons-06.svg" alt="">
                    <span class="menu-item-name">Manual</span>
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
<!-- Scripts src -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>

    var _flagClass = '<?= ($noImage != '') ? 1 : 0;  ?>';

</script>
<script src="js/main.js"></script>
</body>
</html>
