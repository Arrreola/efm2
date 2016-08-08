<?php
/**
 * Created by PhpStorm.
 * User: v09
 * Date: 02/08/16
 * Time: 11:25 AM
 */
//funcion que sirve para que las variables de sesion de php puedan ser utilizadas
session_start();
include 'classSql.php';

$tit_es = '';
$tit_en = '';
$desc_short_es = '';
$desc_short_en = '';
$desc_es = '';
$desc_en = '';
$imgNot = '';

$tit_es = toolMethods::GetSQLValueString($_POST['tit_es'], 'text', true);
$tit_en = toolMethods::GetSQLValueString($_POST['tit_en'], 'text', true);
$desc_short_es = toolMethods::GetSQLValueString($_POST['desc_short_es'], 'text', true);
$desc_short_en = toolMethods::GetSQLValueString($_POST['desc_short_en'], 'text', true);
$desc_es = toolMethods::GetSQLValueString($_POST['desc_es'], 'text', true);
$desc_en = toolMethods::GetSQLValueString($_POST['desc_en'], 'text', true);
//investigar la variable de tipo file en php
$imgNot = $_FILES['imgNot'];

if (isset($_POST['myAction']) && $_POST['myAction'] != ''):

    if (isset($_GET['idReg'])):
        $idReg = $_GET['idReg'];
    else:
        $idReg = '';
    endif;

    $insert = saveNot::crud($tit_es, $tit_en, $desc_short_es, $desc_short_en, $desc_es, $desc_en, $imgNot, $idReg, $_POST['myAction']);

endif;