<?php
/*
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

// SECCION CATEGORIAS
if (isset($_GET['sec']) && $_GET['sec'] == 'categorias'):

    if (isset($_GET['action']) && $_GET['action'] == 'delete'):
        $dtl = cateLen::crud(null, null, $_GET['idReg'], 'delete');
    endif;

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

// SECCION REGISTROS
if (isset($_GET['sec']) && $_GET['sec'] == 'registros'):

    if (isset($_GET['action']) && $_GET['action'] == 'delete'):

        $dtl = saveNot::crud(null, null, null, null, null, null, null, null, null, null, null, null, $_GET['idReg'], 'delete');

    endif;

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

        $qryCt = 'SELECT * FROM categorias WHERE id_cate=' . $rowReg[$r]['cate'];
        $conCt = new consultar($qryCt);
        $rowCt = $conCt->listRtn;
        $urlCt = $rowCt[0]['url_es'];

        $listReg .= '<hr class="menu-hr">
                    <li>
                        <span class="float">
                        ' . $rowReg[$r]['tit_es'] . '
                        <cite class="dash-cite">' . $cate . '</cite>
                        </span>
                        <div class="menu-float-right">
                        <a href="http://clientes.v09.mx/efm_4.0/es/noticia/' . $urlCt . '/' . $rowReg[$r]['url_es'] . '" target="_blank" class="float menu-editar">Ver</a>
                            <a href="menu/dashboard/update/' . $rowReg[$r]['id_not'] . '/" class="float menu-editar"><img class="menu-icons" src="../img/icons/icons-03.svg" alt="Agregar"></a>
                            <a href="menu/registros/delete/' . $rowReg[$r]['id_not'] . '/' . $rowReg[$r]['img'] . '/" class="float menu-borrar"><img class="menu-icons" src="../img/icons/icons-02.svg" alt="Eliminar"></a>
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

//DASHBOARD
if (isset($_GET['sec']) && $_GET['sec'] == 'dashboard'):

    //DELETE REGISTRO
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

    if (isset($_POST['myAction']) && $_POST['myAction'] != ''):

        $tit_es = toolMethods::GetSQLValueString($_POST['tit_es'], 'text', true);
        $tit_en = toolMethods::GetSQLValueString($_POST['tit_en'], 'text', true);
        $desc_short_es = toolMethods::GetSQLValueString($_POST['desc_short_es'], 'text', true);
        $desc_short_en = toolMethods::GetSQLValueString($_POST['desc_short_en'], 'text', true);
        $desc_es = toolMethods::GetSQLValueString($_POST['desc_es'], 'text', true);
        $desc_en = toolMethods::GetSQLValueString($_POST['desc_en'], 'text', true);
        $cate = toolMethods::GetSQLValueString($_POST['categoria'], 'int', true);
        $sem = toolMethods::GetSQLValueString($_POST['sem'], 'int', true);

        if (isset($_POST['idReg'])):
            $idReg = $_POST['idReg'];
        else:
            $idReg = '';
        endif;

        if (isset($_POST['status'])):
            $status = $_POST['status'];
        else:
            $status = '';
        endif;

        if (isset($_POST['destacar'])):
            $destacar = $_POST['destacar'];
        else:
            $destacar = '';
        endif;

        if (isset($_POST['myAction']) && $_POST['myAction'] != ''):
            $insert = saveNot::crud($tit_es, $tit_en, $desc_short_es, $desc_short_en, $desc_es, $desc_en, $_FILES, $_POST['selImg'], $cate, $_POST['relTags'], $status, $destacar, $sem, $idReg, $_POST['myAction']);
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

        if ($rowUpd[0]['desc_short_es'] != NULL && $rowUpd[0]['desc_short_es'] != "NULL"):
            $desc_short_es = html_entity_decode($rowUpd[0]['desc_short_es']);
        endif;

        if ($rowUpd[0]['desc_short_en'] != NULL && $rowUpd[0]['desc_short_en'] != "NULL"):
            $desc_short_en = html_entity_decode($rowUpd[0]['desc_short_en']);
        endif;

        if ($rowUpd[0]['info_es'] != NULL && $rowUpd[0]['info_es'] != "NULL"):
            $info_es = html_entity_decode($rowUpd[0]['info_es']);
        endif;

        if ($rowUpd[0]['info_en'] != NULL && $rowUpd[0]['info_en'] != "NULL"):
            $info_en = html_entity_decode($rowUpd[0]['info_en']);
        endif;

        if ($rowUpd[0]['sem'] != NULL && $rowUpd[0]['sem'] != "NULL"):
            $sem = html_entity_decode($rowUpd[0]['sem']);
        endif;

        $status = $rowUpd[0]['status'];
        $destac = $rowUpd[0]['destacar'];

        $currentImage = array($rowUpd[0]['img'], $rowUpd[0]['pdf_es'], $rowUpd[0]['pdf_en']);

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

        if ($destac == 1):
            $destacar = 'checked="checked"';
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

    //OBTENEMOS LOS TAGS GENERADOS
    $qryTag = 'SELECT * FROM tags';
    $conTag = new consultar($qryTag);
    $rowTag = $conTag->listRtn;
    $totTag = count($rowTag);

    for ($t = 0; $t < $totTag; $t++):

        $listTags .= '<li class="float">
                        <input type="checkbox" name="relTags[]" value="' . $rowTag[$t]['id_tag'] . '" />
                        <label>' . $rowTag[$t]['tit_es'] . '</label>
                     </li>';
    endfor;

endif;

// SECCION ESTADOS
if (isset($_GET['sec']) && $_GET['sec'] == 'estados'):

    //DELETE REGISTRO
    if (isset($_GET['action']) && $_GET['action'] == 'delete'):

        $conex = '';
        include 'conexion.php';

        $qryDlt = 'DELETE FROM statuspro WHERE id_st=?';
        $stmt = $conex->prepare($qryDlt);
        $stmt->bind_param("i", $_GET['idReg']);

        $resp = $stmt->execute();
        if (false === $resp) :
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        endif;

        $stmt->close();
        $conex->close();

    endif;

    if (isset($_POST['myAction']) && $_POST['myAction'] != ''):

        $tit_es = toolMethods::GetSQLValueString($_POST['tit_es'], 'text', true);
        $tit_en = toolMethods::GetSQLValueString($_POST['tit_en'], 'text', true);

        if (isset($_POST['idReg'])):
            $idReg = $_POST['idReg'];
        else:
            $idReg = '';
        endif;

        if (isset($_POST['myAction']) && $_POST['myAction'] != ''):
            $insert = edosLen::crud($tit_es, $tit_en, $idReg, $_POST['myAction']);
            header('location:../../menu/estados/');
        endif;

    endif;

    if (isset($_GET['action']) && $_GET['action'] == 'update'):

        $qryUpd = 'SELECT * FROM statuspro WHERE id_st=' . $_GET['idReg'];
        $conUpd = new consultar($qryUpd);
        $rowUpd = $conUpd->listRtn;

        $tit_es = html_entity_decode($rowUpd[0]['edo_es']);
        $tit_en = html_entity_decode($rowUpd[0]['edo_en']);

    endif;

    $qryCat = 'SELECT * FROM statuspro';
    $conCat = new consultar($qryCat);
    $rowCat = $conCat->listRtn;
    $totCat = count($rowCat);

    for ($c = 0; $c < $totCat; $c++):

        $listStPro .= '<hr class="menu-hr">
                     <li>
                        <span class="float">
                            ' . $rowCat[$c]['edo_es'] . '
                        </span>
                        <div class="menu-float-right">
                             <a href="menu/estados/update/' . $rowCat[$c]['id_st'] . '/" class="float menu-editar">
                                <img class="menu-icons" src="../img/icons/icons-03.svg" alt="Agregar">
                             </a>
                             <a href="menu/estados/delete/' . $rowCat[$c]['id_st'] . '/" class="float menu-borrar">
                                <img class="menu-icons" src="../img/icons/icons-02.svg" alt="Eliminar">
                             </a>
                        </div>
                     </li>';

    endfor;

endif;

//OPERACIONES
if (isset($_GET['sec']) && $_GET['sec'] == 'operaciones'):

    if (isset($_POST['myAction']) && $_POST['myAction'] != ''):

        $tit_es = toolMethods::GetSQLValueString($_POST['tit_es'], 'text', true);
        $tit_en = toolMethods::GetSQLValueString($_POST['tit_en'], 'text', true);
        $desc_short_es = toolMethods::GetSQLValueString($_POST['desc_short_es'], 'text', true);
        $desc_short_en = toolMethods::GetSQLValueString($_POST['desc_short_en'], 'text', true);
        $desc_es = toolMethods::GetSQLValueString($_POST['desc_es'], 'text', true);
        $desc_en = toolMethods::GetSQLValueString($_POST['desc_en'], 'text', true);
        $stOp = toolMethods::GetSQLValueString($_POST['statusOp'], 'int', true);
        $btnEs = toolMethods::GetSQLValueString($_POST['nameBtnEs'], 'text', true);
        $btnEn = toolMethods::GetSQLValueString($_POST['nameBtnEn'], 'text', true);
        $linkBtnEs = toolMethods::GetSQLValueString($_POST['linkBtnEs'], 'text', true);
        $linkBtnEn = toolMethods::GetSQLValueString($_POST['linkBtnEn'], 'text', true);

        if (isset($_POST['idReg'])):
            $idReg = $_POST['idReg'];
        else:
            $idReg = '';
        endif;

        if (isset($_POST['status'])):
            $status = $_POST['status'];
        else:
            $status = '';
        endif;

        if (isset($_POST['destacar'])):
            $destacar = $_POST['destacar'];
        else:
            $destacar = '';
        endif;

        if (isset($_POST['cf'])):
            $cf = $_POST['cf'];
        else:
            $cf = '';
        endif;

        if (isset($_POST['myAction']) && $_POST['myAction'] != ''):

            $insert = saveOp::crud($tit_es, $tit_en, $desc_short_es, $desc_short_en, $desc_es, $desc_en, $_FILES, $cf, $stOp, $btnEs, $btnEn, $linkBtnEs, $linkBtnEn, $status, $idReg, $_POST['myAction']);
            header('location:../../menu/reg-operaciones/');

        endif;

    endif;

//ACCION DEL UPDATE
    if (isset($_GET['action']) && $_GET['action'] == 'update'):

        $qryUpd = 'SELECT * FROM operaciones WHERE id_op=' . $_GET['idReg'];
        $conUpd = new consultar($qryUpd);
        $rowUpd = $conUpd->listRtn;

        $tit_es = html_entity_decode($rowUpd[0]['tit_es']);
        $tit_en = html_entity_decode($rowUpd[0]['tit_en']);

        if ($rowUpd[0]['desc_short_es'] != NULL && $rowUpd[0]['desc_short_es'] != "NULL"):
            $desc_short_es = html_entity_decode($rowUpd[0]['desc_short_es']);
        endif;
        if ($rowUpd[0]['desc_short_en'] != NULL && $rowUpd[0]['desc_short_en'] != "NULL"):
            $desc_short_en = html_entity_decode($rowUpd[0]['desc_short_en']);
        endif;
        if ($rowUpd[0]['info_es'] != NULL && $rowUpd[0]['info_es'] != "NULL"):
            $info_es = html_entity_decode($rowUpd[0]['info_es']);
        endif;
        if ($rowUpd[0]['info_en'] != NULL && $rowUpd[0]['info_en'] != "NULL"):
            $info_en = html_entity_decode($rowUpd[0]['info_en']);
        endif;

        $status = $rowUpd[0]['status'];

        $currentImage = array($rowUpd[0]['img'], $rowUpd[0]['pdfEs'], $rowUpd[0]['pdfEn']);

        if ($rowUpd[0]['img'] != ''):
            $img = "<img src='../img/operaciones/{$rowUpd[0]['img']}' width='800' />";
            $cf = $rowUpd[0]['img'];
        else:
            $img = 'Este post no tiene imagen.';
            $cf = '';
        endif;

        if ($status != 0):
            $status = 'checked="checked"';
        endif;

        if ($rowUpd[0]['btn_es'] != NULL && $rowUpd[0]['btn_es'] != 'NULL'):
            $btnEs = html_entity_decode($rowUpd[0]['btn_es']);
        endif;

        if ($rowUpd[0]['btn_en'] != NULL && $rowUpd[0]['btn_en'] != 'NULL'):
            $btnEn = html_entity_decode($rowUpd[0]['btn_en']);
        endif;

        if ($rowUpd[0]['linkBtn_es'] != NULL && $rowUpd[0]['linkBtn_es'] != 'NULL'):
            $linkBtnEs = html_entity_decode($rowUpd[0]['linkBtn_es']);
        endif;

        if ($rowUpd[0]['linkBtn_en'] != NULL && $rowUpd[0]['linkBtn_en'] != 'NULL'):
            $linkBtnEn = html_entity_decode($rowUpd[0]['linkBtn_en']);
        endif;

    endif;

    //OBTENGO LAS OPERACIONES YA INGTESADAS
    $qryGetCat = 'SELECT * FROM statuspro';
    $conGetCat = new consultar($qryGetCat);
    $rowGetCat = $conGetCat->listRtn;
    $totGetCat = count($rowGetCat);
    for ($f = 0; $f < $totGetCat; $f++):

        if (isset($_GET['idReg']) && $_GET['idReg'] != ''):

            if ($rowUpd[0]['edo'] == $rowGetCat[$f]['id_st']):
                $class = 'selected="selected"';
            else:
                $class = '';
            endif;

        endif;

        $opt .= '<option value="' . $rowGetCat[$f]['id_st'] . '" ' . $class . '>' . $rowGetCat[$f]['edo_es'] . '</option>';

    endfor;

endif;

//REGISTRO DE OPERACIONES
if (isset($_GET['sec']) && $_GET['sec'] == 'reg-operaciones'):

    if (isset($_GET['action']) && $_GET['action'] == 'delete'):
        $dtl = saveOp::crud(null, null, null, null, null, null, null, null, null, null, null, null, null, $_GET['idReg'], 'delete');
    endif;

    if (isset($_POST['edoOp']) && $_POST['edoOp'] != ''):

        $xtraQry = ' WHERE edo=' . $_POST['edoOp'];

    else:
        $xtraQry = '';
    endif;

    $qryReg = 'SELECT * FROM operaciones' . $xtraQry;
    $conReg = new consultar($qryReg);
    $rowReg = $conReg->listRtn;
    $totReg = count($rowReg);
    for ($r = 0; $r < $totReg; $r++):

        $listReg .= '<hr class="menu-hr">
                    <li>
                        <span class="float">
                        ' . $rowReg[$r]['tit_es'] . '
                        </span>
                        <div class="menu-float-right">

                            <a href="menu/operaciones/update/' . $rowReg[$r]['id_op'] . '/" class="float menu-editar">
                                <img class="menu-icons" src="../img/icons/icons-03.svg" alt="Actualizar">
                            </a>
                            <a href="menu/reg-operaciones/delete/' . $rowReg[$r]['id_op'] . '/' . $rowReg[$r]['img'] . '/" class="float menu-borrar">
                                <img class="menu-icons" src="../img/icons/icons-02.svg" alt="Eliminar">
                            </a>

                        </div>
                    </li>';

    endfor;

    $qryGetCat = 'SELECT * FROM statuspro';
    $conGetCat = new consultar($qryGetCat);
    $rowGetCat = $conGetCat->listRtn;
    $totGetCat = count($rowGetCat);
    for ($f = 0; $f < $totGetCat; $f++):

        if (isset($_POST['edoOp']) && $_POST['edoOp'] != ''):

            if ($_POST['edoOp'] == $rowGetCat[$f]['id_st']):
                $class = 'selected="selected"';
            else:
                $class = '';
            endif;

        endif;

        $opt .= '<option value="' . $rowGetCat[$f]['id_st'] . '" ' . $class . '>' . $rowGetCat[$f]['edo_es'] . '</option>';

    endfor;

endif;

//REGISTRO DE TAGS
if (isset($_GET['sec']) && $_GET['sec'] == 'tags'):

    if (isset($_GET['action']) && $_GET['action'] == 'delete'):
        $delTag = tagsLen::crud(null, null, $_GET['idReg'], 'delete');
    endif;

    if (isset($_POST['myAction']) && $_POST['myAction'] != ''):

        $tit_es = toolMethods::GetSQLValueString($_POST['tit_es'], 'text', true);
        $tit_en = toolMethods::GetSQLValueString($_POST['tit_en'], 'text', true);

        if (isset($_POST['idReg'])):
            $idReg = $_POST['idReg'];
        else:
            $idReg = '';
        endif;

        if (isset($_POST['myAction']) && $_POST['myAction'] != ''):
            $insert = tagsLen::crud($tit_es, $tit_en, $idReg, $_POST['myAction']);
            header('location:../../menu/tags/');
        endif;

    endif;

    if (isset($_GET['action']) && $_GET['action'] == 'update'):

        $qryUpd = 'SELECT * FROM tags WHERE id_tag=' . $_GET['idReg'];
        $conUpd = new consultar($qryUpd);
        $rowUpd = $conUpd->listRtn;

        $tit_es = html_entity_decode($rowUpd[0]['tit_es']);
        $tit_en = html_entity_decode($rowUpd[0]['tit_en']);

    endif;

    $qryCat = 'SELECT * FROM tags';
    $conCat = new consultar($qryCat);
    $rowCat = $conCat->listRtn;
    $totCat = count($rowCat);

    for ($c = 0; $c < $totCat; $c++):

        $listTag .= '<hr class="menu-hr">
                     <li>
                        <span class="float">
                            ' . $rowCat[$c]['tit_es'] . '
                        </span>
                        <div class="menu-float-right">
                             <a href="menu/tags/update/' . $rowCat[$c]['id_tag'] . '/" class="float menu-editar"><img class="menu-icons" src="../img/icons/icons-03.svg" alt="Actualizar"></a>
                             <a href="menu/tags/delete/' . $rowCat[$c]['id_tag'] . '/" class="float menu-borrar"><img class="menu-icons" src="../img/icons/icons-02.svg" alt="Eliminar"></a>
                        </div>
                     </li>';

    endfor;

endif;