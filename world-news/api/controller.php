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
$cate = '';
$status = '';

$tit_es = toolMethods::GetSQLValueString($_POST['tit_es'], 'text', true);
$tit_en = toolMethods::GetSQLValueString($_POST['tit_en'], 'text', true);
$desc_short_es = toolMethods::GetSQLValueString($_POST['desc_short_es'], 'text', true);
$desc_short_en = toolMethods::GetSQLValueString($_POST['desc_short_en'], 'text', true);
$desc_es = toolMethods::GetSQLValueString($_POST['desc_es'], 'text', true);
$desc_en = toolMethods::GetSQLValueString($_POST['desc_en'], 'text', true);
$cate = toolMethods::GetSQLValueString($_POST['categoria'], 'int', true);

//investigar la variable de tipo file en php
$imgNot = $_FILES['imgNot'];
if (isset($_GET['sec']) && $_GET['sec'] == 'registros'):

    $qryReg = 'SELECT * FROM blog';
    $conReg = new consultar($qryReg);
    $rowReg = $conReg->listRtn;
    $totReg = count($rowReg);
    for ($r = 0; $r < $totReg; $r++):

        $listReg .= '<hr class="menu-hr">
                    <li>
                        <span class="float">' . $rowReg[$r]['tit_es'] . '</span>
                        <div class="menu-float-right">
                            <a href="menu/dashboard/' . $rowReg[$r]['id_not'] . '/" class="float menu-editar"><img class="menu-icons" src="../img/icons/icons-03.svg" alt="Agregar"></a>
                            <a href="menu/dashboard/delete/' . $rowReg[$r]['id_not'] . '/" class="float menu-borrar"><img class="menu-icons" src="../img/icons/icons-02.svg" alt="Eliminar"></a>
                        </div>
                    </li>';

    endfor;
endif;
if (isset($_GET['sec']) && $_GET['sec'] == 'dashboard'):
    if (isset($_GET['idReg'])):
        $idReg = $_GET['idReg'];
    else:
        $idReg = '';
    endif;
    if (isset($_POST['status'])):
        $status = $_POST['status'];
    else:
        $status = '';
    endif;
    if (isset($_POST['myAction']) && $_POST['myAction'] != ''):
        $insert = saveNot::crud($tit_es, $tit_en, $desc_short_es, $desc_short_en, $desc_es, $desc_en, $imgNot, $cate, $status, $idReg, $_POST['myAction']);
    endif;
endif;