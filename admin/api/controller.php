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
$opt1 = '';
$opt2 = '';
$opt3 = '';
$noImage = '';

if (isset($_GET['action']) && $_GET['action'] == 'delete'):

    $conex = '';
    include 'conexion.php';

    $qryDel = 'SELECT * FROM blog WHERE id_not=' . $_GET['idReg'];
    $conDel = new consultar($qryDel);
    $rowDel = $conDel->listRtn;
    if ($rowDel[0]['img'] != '' && file_exists('img/blog/' . $rowDel[0]['img'])):
        unlink('img/blog/' . $rowDel[0]['img']);
    endif;

    //Una ves borrada la imagen fisica, borrare el registro
    $qryDlt = 'DELETE FROM blog WHERE id_not=?';
    $stmt = $conex->prepare($qryDlt);
    $stmt->bind_param("i", $_GET['idReg']);

    $resp = $stmt->execute();
    if (false === $resp) :
        die('execute() failed: ' . htmlspecialchars($stmt->error));
    endif;

    $stmt->close();
    $conex->close();

endif;

//investigar la variable de tipo file en php
$imgNot = $_FILES['imgNot'];

if (isset($_GET['sec']) && $_GET['sec'] == 'registros'):

    if (isset($_POST['categoria']) && $_POST['categoria'] != ''):

        $xtraQry = ' WHERE cate=' . $_POST['categoria'];

    else:
        $xtraQry = '';
    endif;

    $qryReg = 'SELECT * FROM blog' . $xtraQry;
    $conReg = new consultar($qryReg);
    $rowReg = $conReg->listRtn;
    $totReg = count($rowReg);
    for ($r = 0; $r < $totReg; $r++):

        switch ($rowReg[$r]['cate']):
            case 1:
                $cate = 'weekly trending topic';
                break;
            case 2:
                $cate = 'Efm capital\'s perspective';
                break;
            case 3:
                $cate = 'Monthly industry perspective';
                break;
            case 4:
                $cate = 'Events';
                break;
        endswitch;

        $listReg .= '<hr class="menu-hr">
                    <li>
                        <span class="float">
                        ' . $rowReg[$r]['tit_es'] . ' <br>
                        <cite>' . $cate . '</cite>
                        </span>
                        <div class="menu-float-right">
                            <a href="menu/dashboard/update/' . $rowReg[$r]['id_not'] . '/" class="float menu-editar"><img class="menu-icons" src="../img/icons/icons-03.svg" alt="Agregar"></a>
                            <a href="menu/registros/delete/' . $rowReg[$r]['id_not'] . '/" class="float menu-borrar"><img class="menu-icons" src="../img/icons/icons-02.svg" alt="Eliminar"></a>
                        </div>
                    </li>';

    endfor;

    $qryGetCat = 'SELECT * FROM categorias';
    $conGetCat = new consultar($qryGetCat);
    $rowGetCat = $conGetCat->listRtn;
    $totGetCat = count($rowGetCat);
    for ($f = 0; $f < $totGetCat; $f++):

        if (isset($_POST['categoria']) && $_POST['categoria'] != ''):

            if ($_POST['categoria'] == $rowGetCat[$f]['id_cate']):
                $class = 'selected="selected"';
            else:
                $class = '';
            endif;

        endif;

        $opt .= '<option value="' . $rowGetCat[$f]['id_cate'] . '" ' . $class . '>' . $rowGetCat[$f]['tit_es'] . '</option>';

    endfor;

endif;

if (isset($_GET['sec']) && $_GET['sec'] == 'dashboard'):

    if (isset($_POST['myAction']) && $_POST['myAction'] != ''):
        $tit_es = toolMethods::GetSQLValueString($_POST['tit_es'], 'text', true);
        $tit_en = toolMethods::GetSQLValueString($_POST['tit_en'], 'text', true);
        $desc_short_es = toolMethods::GetSQLValueString($_POST['desc_short_es'], 'text', true);
        $desc_short_en = toolMethods::GetSQLValueString($_POST['desc_short_en'], 'text', true);
        $desc_es = toolMethods::GetSQLValueString($_POST['desc_es'], 'text', true);
        $desc_en = toolMethods::GetSQLValueString($_POST['desc_en'], 'text', true);
        $cate = toolMethods::GetSQLValueString($_POST['categoria'], 'int', true);

        if (isset($_POST['idReg'])):
            $idReg = $_POST['idReg'];
        else:
            $idReg = '';
        endif;

        if (isset($_POST['currentFile'])):
            $cf = $_POST['currentFile'];
        else:
            $cf = '';
        endif;

        if (isset($_POST['status'])):
            $status = $_POST['status'];
        else:
            $status = '';
        endif;
        if (isset($_POST['myAction']) && $_POST['myAction'] != ''):
            $insert = saveNot::crud($tit_es, $tit_en, $desc_short_es, $desc_short_en, $desc_es, $desc_en, $imgNot, $cate, $status, $cf, $idReg, $_POST['myAction']);
            header('location:../../menu/registros/');
        endif;
    endif;

//ACCION DEL UPDATE
    if (isset($_GET['action']) && $_GET['action'] == 'update'):

        $qryUpd = 'SELECT * FROM blog WHERE id_not=' . $_GET['idReg'];
        $conUpd = new consultar($qryUpd);
        $rowUpd = $conUpd->listRtn;

        $tit_es = html_entity_decode($rowUpd[0]['tit_es']);
        $tit_en = html_entity_decode($rowUpd[0]['tit_en']);
        $desc_short_es = html_entity_decode($rowUpd[0]['desc_short_es']);
        $desc_short_en = html_entity_decode($rowUpd[0]['desc_short_en']);
        $info_es = html_entity_decode($rowUpd[0]['info_es']);
        $info_en = html_entity_decode($rowUpd[0]['info_en']);
        $status = html_entity_decode($rowUpd[0]['status']);

        if ($rowUpd[0]['img'] != ''):
            $img = "<img src='../img/blog/{$rowUpd[0]['img']}' />";
            $cf = $rowUpd[0]['img'];
        else:
            $img = 'Este post no tiene imagen.';
            $cf = '';
        endif;

        if ($status != 0):
            $status = 'checked="checked"';
        endif;
    endif;

    //OBTENGO LAS CATEGORIAS YA INGTESADAS
    $qryGetCat = 'SELECT * FROM categorias';
    $conGetCat = new consultar($qryGetCat);
    $rowGetCat = $conGetCat->listRtn;
    $totGetCat = count($rowGetCat);
    for ($f = 0; $f < $totGetCat; $f++):

        if (isset($_GET['idReg']) && $_GET['idReg'] != ''):

            if ($rowUpd[0]['cate'] == $rowGetCat[$f]['id_cate']):
                $class = 'selected="selected"';
            else:
                $class = '';
            endif;

        endif;

        $opt .= '<option value="' . $rowGetCat[$f]['id_cate'] . '" ' . $class . '>' . $rowGetCat[$f]['tit_es'] . '</option>';

    endfor;
endif;


// SECCION CATEGORIAS
if (isset($_GET['sec']) && $_GET['sec'] == 'categorias'):

    if (isset($_POST['myAction']) && $_POST['myAction'] != ''):

        $tit_es = toolMethods::GetSQLValueString($_POST['tit_es'], 'text', true);
        $tit_en = toolMethods::GetSQLValueString($_POST['tit_en'], 'text', true);

        if (isset($_POST['idReg'])):
            $idReg = $_POST['idReg'];
        else:
            $idReg = '';
        endif;

        if (isset($_POST['myAction']) && $_POST['myAction'] != ''):
            $insert = cateLen::crud($tit_es, $tit_en, $idReg, $_POST['myAction']);
            header('location:../../menu/categorias/');
        endif;

    endif;

    if (isset($_GET['action']) && $_GET['action'] == 'update'):
        $qryUpd = 'SELECT * FROM categorias WHERE id_cate=' . $_GET['idReg'];
        $conUpd = new consultar($qryUpd);
        $rowUpd = $conUpd->listRtn;

        $tit_es = html_entity_decode($rowUpd[0]['tit_es']);
        $tit_en = html_entity_decode($rowUpd[0]['tit_en']);

    endif;

    $qryCat = 'SELECT * FROM categorias';
    $conCat = new consultar($qryCat);
    $rowCat = $conCat->listRtn;
    $totCat = count($rowCat);

    for ($c = 0; $c < $totCat; $c++):

        $listCat .= '<hr class="menu-hr">
                     <li>
                        <span class="float">
                            ' . $rowCat[$c]['tit_es'] . '
                        </span>
                        <div class="menu-float-right">
                             <a href="menu/categorias/update/' . $rowCat[$c]['id_cate'] . '/" class="float menu-editar"><img class="menu-icons" src="../img/icons/icons-03.svg" alt="Agregar"></a>
                             <a href="menu/categorias/delete/' . $rowCat[$c]['id_cate'] . '/" class="float menu-borrar"><img class="menu-icons" src="../img/icons/icons-02.svg" alt="Eliminar"></a>
                        </div>
                     </li>';

    endfor;


endif;