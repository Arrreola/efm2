<?php
include 'admin/api/classSql.php';

if (isset($_GET['len']) && $_GET['len'] != ''):
    $len = $_GET['len'];
else:
    $len = 'en';
endif;

if ($len == 'es'):
    $_getLen = 'en';
else:
    $_getLen = 'es';
endif;

if (!isset($_GET['sec'])):
    //OPERACIONES
    $qryOp = 'SELECT * FROM operaciones WHERE edo=2 OR edo=4';
    $conOp = new consultar($qryOp);
    $rowOp = $conOp->listRtn;
    $totOp = count($rowOp);
endif;

//MELBOURNE
if (isset($_GET['sec']) && $_GET['sec'] == 'melbourne'):
    if ($len == 'en'):
        $getLen = 'es';
    else:
        $getLen = 'en';
    endif;
    $urlCompuesta = $_GET['sec'];
endif;

//LISBON
if (isset($_GET['sec']) && $_GET['sec'] == 'lisbon' || isset($_GET['sec']) && $_GET['sec'] == 'lisboa'):

    if ($len == 'en'):
        $getLen = 'es';
    else:
        $getLen = 'en';
    endif;

    $urlCompuesta = $_GET['sec'];

endif;

//PROSPECTUS MELBOURNE
if (isset($_GET['sec']) && $_GET['sec'] == 'prospectus-melbourne' || isset($_GET['sec']) && $_GET['sec'] == 'ficha-tecnica-melbourne'):

    if ($len == 'en'):
        $getLen = 'es';
    else:
        $getLen = 'en';
    endif;

    $urlCompuesta = $_GET['sec'];

endif;

//PROSPECTUS PUENTE
if (isset($_GET['sec']) && $_GET['sec'] == 'prospectus-lisbon' || isset($_GET['sec']) && $_GET['sec'] == 'ficha-tecnica-lisboa'):

    if ($len == 'en'):
        $getLen = 'es';
    else:
        $getLen = 'en';
    endif;

    $urlCompuesta = $_GET['sec'];

endif;
//FONDO PUENTE
if (isset($_GET['sec']) && $_GET['sec'] == 'fondo-puente' || isset($_GET['sec']) && $_GET['sec'] == 'bridge-fund'):

    if ($len == 'en'):
        $getLen = 'es';
        $urlCompuesta = 'fondo-puente';
    else:
        $getLen = 'en';
        $urlCompuesta = 'bridge-fund';
    endif;

endif;

//OPERACIONES
if (isset($_GET['sec']) && $_GET['sec'] == 'operaciones' || isset($_GET['sec']) && $_GET['sec'] == 'operations'):

    if ($len == 'en'):
        $getLen = 'es';
        $urlCompuesta = 'operaciones';
    else:
        $getLen = 'en';
        $urlCompuesta = 'operations';
    endif;

    $qryOp = 'SELECT * FROM operaciones WHERE edo= 3';
    $conOp = new consultar($qryOp);
    $rowOp = $conOp->listRtn;
    $totOp = count($rowOp);

endif;

//CATEGORIA
if (isset($_GET['sec']) && $_GET['sec'] == 'categoria' || isset($_GET['sec']) && $_GET['sec'] == 'category' || isset($_GET['sec']) && $_GET['sec'] == 'tag'):

    if ($len == 'en'):
        $getLen = 'es';
        $urlCompuesta = 'categoria';
        $catName = 'category';
        $secBlog = 'new';
        $_date = 'date';
    else:
        $getLen = 'en';
        $urlCompuesta = 'category';
        $catName = 'categoria';
        $secBlog = 'noticia';
        $_date = 'fecha';
    endif;

    //LISTADO DE LAS CATEGORIAS
    $qryCatList = 'SELECT * FROM categorias';
    $conCatList = new consultar($qryCatList);
    $rowCatList = $conCatList->listRtn;
    $totCatList = count($rowCatList);

    for ($c = 0; $c < $totCatList; $c++):

        $nameCat = html_entity_decode($rowCatList[$c]['tit_' . $len]);
        $cat .= '<li class="hf-content-filter-li-cat">
                    <a href="' . $len . '/' . $catName . '/' . $rowCatList[$c]['url_' . $len] . '">' . $nameCat . '</a>
                 </li>';

    endfor;

    // CONSTRUIMOS EL LISTADO DE LOS TAGS
    $sqlTags = 'SELECT * FROM tags';
    $conTags = new consultar($sqlTags);
    $rowTags = $conTags->listRtn;
    $totTags = count($rowTags);

    for ($t = 0; $t < $totTags; $t++):

        $nameTag = html_entity_decode($rowTags[$t]['tit_' . $len]);

        $tags .= '<li class="hf-content-filter-li-tags">
                    <a href="' . $len . '/tag/' . $rowTags[$t]['url_' . $len] . '">' . $nameTag . '</a>
                 </li>';

    endfor;

    //CONSTRUIREMOS EL LISTADO POR AÑO Y MES
    $sqlRgYr = new consultar('SELECT id_not,YEAR(fecha) as yearNot FROM blog GROUP BY yearNot ORDER BY yearNot DESC');
    $rowRgYr = $sqlRgYr->listRtn;
    $totRgYr = count($rowRgYr);

    for ($y = 0; $y < $totRgYr; $y++) :
        $listFecha .= '<li class="fechasMenu">
                         <a id="fecha_' . $rowRgYr[$y]['id_not'] . '" class="botonYear" href="javascript:void(0)">
                            ' . $rowRgYr[$y]['yearNot'] . '
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                         </a>
                         <ul class="subMenuMes">';
        //FOR QUE AGRUPA LOS REGISTROS POR MES
        $qryMY = 'SELECT id_not,fecha,YEAR(fecha) as yearDetail, MONTH(fecha) as mDetail FROM blog WHERE Year(fecha)="' . $rowRgYr[$y]['yearNot'] . '" GROUP BY mDetail ORDER BY id_not DESC';
        $sqlMY = new consultar($qryMY);
        $rowMY = $sqlMY->listRtn;
        $totalMY = count($rowMY);
        for ($f = 0; $f < $totalMY; $f++) :
            $fecha = $rowMY[$f]['fecha'];
            $formatDate = toolMethods::dia_semana($fecha, 'my', $len);
            $nameFecha = toolMethods::urls_amigables($fecha);

            $listFecha .= '<li>
                                <a href="' . $len . '/' . $secBlog . '/' . $_date . '/' . $fecha . '">' . $formatDate . '</a>
                           </li>';
        endfor;
        $listFecha .= '</ul></li>';
    endfor;

    //LLAMADO AL OBJETO CONTEOPOST PARA TRAER LOS POST MAS VISITADOS
    $moreView = conteoPost::getList($len);
    $totViews = count($moreView);
    for ($v = 0; $v < $totViews; $v++):
        $namePostVisit = html_entity_decode($moreView[$v][1]);
        $moreVisit .= '<li class="catSec hf-content-filter-li-mas-leidos">
                            <a href="' . $len . '/' . $secBlog . '/' . $moreView[$v][2] . '/' . $moreView[$v][0] . '">' . $namePostVisit . '</a>
                        </li>';
    endfor;

    //BUSCAREMOS LOS RESULTADOS CUANDO ESTEN BUSCANDO UNO POR ALGUNA CATEGORIA
    if ($_GET['sec'] == 'category' || $_GET['sec'] == 'categoria'):

        //SACAMOS EL ID DE LA CATEGORIA
        $qryFindCat = 'SELECT *  FROM categorias WHERE url_' . $len . '="' . $_GET['nameReg'] . '"';
        $conFindCat = new consultar($qryFindCat);
        $rowFindCat = $conFindCat->listRtn;

        $qryFindPost = 'SELECT * FROM blog WHERE cate=' . $rowFindCat[0]['id_cate'];
        $conFindPost = new consultar($qryFindPost);
        $rowFindPost = $conFindPost->listRtn;
        $totFindPost = count($rowFindPost);

        if ($len == 'en'):
            $urlCompuesta = 'categoria/' . $rowFindCat[0]['url_es'];
        else:
            $urlCompuesta = 'category/' . $rowFindCat[0]['url_en'];
        endif;
        $nameCatPost = $_GET['nameReg'];

    endif;

    //BUSCAREMOS CUANDO SEA UN TAG
    if ($_GET['sec'] == 'tag'):
        $rowFindPost = [];
        //SACAMOS EL ID DEL TAG
        $qryTag = 'SELECT * FROM tags WHERE url_' . $len . '="' . $_GET['nameReg'] . '"';
        $conTag = new consultar($qryTag);
        $rowTag = $conTag->listRtn;

        //Sacamos la relacion de los tags que tiene cada post
        $qryRlTgs = 'SELECT * FROM rel_tags WHERE id_tag=' . $rowTag[0]['id_tag'];
        $conRlTgs = new consultar($qryRlTgs);
        $rowRlTgs = $conRlTgs->listRtn;
        $totRlTgs = count($rowRlTgs);

        for ($p = 0; $p < $totRlTgs; $p++):
            $qryFindTagPost = 'SELECT * FROM blog WHERE id_not=' . $rowRlTgs[$p]['id_tag'];
            $conFindTagPost = new consultar($qryFindTagPost);
            $rowFindTagPost = $conFindTagPost->listRtn;
            $totFindTagPost = count($rowFindTagPost);
            array_push($rowFindPost, array());
        endfor;

        $nameCatPost = $_GET['nameReg'];

    endif;


endif;

//CUARTO DE DATOS VIRTUAL
if (isset($_GET['sec']) && $_GET['sec'] == 'virtual-data-room' || isset($_GET['sec']) && $_GET['sec'] == 'cuarto-de-datos-virtual'):
    if ($len == 'en'):
        $getLen = 'es';
        $urlCompuesta = 'cuarto-de-datos-virtual';
    else:
        $getLen = 'en';
        $urlCompuesta = 'virtual-data-room';
    endif;
endif;

//NOTICIAS
if (isset($_GET['sec']) && $_GET['sec'] == 'news' || isset($_GET['sec']) && $_GET['sec'] == 'noticias'):

    if ($len == 'en'):
        $getLen = 'es';
        $urlCompuesta = 'noticias';
        $catName = 'category';
    else:
        $getLen = 'en';
        $urlCompuesta = 'news';
        $catName = 'categoria';
    endif;

    $notLen = '';
    if ($len == "es"):
        $notLen = "noticia";
    else:
        $notLen = "new";
    endif;

    //ESTE FRAGMENTO LO QUE HACE ES TRAER DE LA BASE DE DATOS EL TITUTLO Y LA URL DE LAS CATEGORIAS ALMACENANDOLOS EN UN
    //ARRAY BIDIMENCIONAL O MULTIDIMENSIONAL EN EL CUAL GUARDADOS EL TITULO Y LA URL PARA SER USADAS
    $arrHeader = [];
    $qryHeaderCat = 'SELECT * FROM categorias';
    $conHeaderCat = new consultar($qryHeaderCat);
    $rowHeaderCat = $conHeaderCat->listRtn;
    $totHeaderCat = count($rowHeaderCat);

    for ($hc = 0; $hc < $totHeaderCat; $hc++):
        array_push($arrHeader, array(html_entity_decode($rowHeaderCat[$hc]['tit_' . $len]), $rowHeaderCat[$hc]['url_' . $len]));
    endfor;

    //EXTRAER SOLO LA ULTIMA NOTICIAS DE WTT
    $qryWTT = 'SELECT * FROM blog WHERE cate=1 AND destacar=1 ORDER by fecha DESC LIMIT 1';
    $conWTT = new consultar($qryWTT);
    $rowWTT = $conWTT->listRtn;
    $urlWTT = $rowWTT[0]['url_' . $len];
    $titWTT = $rowWTT[0]['tit_' . $len];
    $excWTT = html_entity_decode($rowWTT[0]['desc_short_' . $len]);
    if (file_exists('img/blog/' . $rowWTT[0]['img'])):
        $imgWTT = 'img/blog/' . $rowWTT[0]['img'];
    else:
        $imgWTT = '';
    endif;
    $idWTT = $rowWTT[0]['id_not'];

    $fechaPost = toolMethods::dia_semana($rowWTT[0]['fecha'], 'my', $len);

    // BUSCAMOS EL NOMBRE DE LA CATEGORIA
    $qrySEM = 'SELECT * FROM categorias WHERE id_cate=1';
    $conSEM = new consultar($qrySEM);
    $rowSEM = $conSEM->listRtn;
    $nameCateSEM = $rowSEM[0]['url_' . $len];
    $linkWTT = $len . "/" . $notLen . "/" . $nameCateSEM . "/" . $urlWTT;

    //IN PERSPECTIVE
    $qryECP = 'SELECT * FROM blog WHERE cate=2 ORDER BY id_not DESC LIMIT 3';
    $conECP = new consultar($qryECP);
    $rowECP = $conECP->listRtn;
    $totECP = count($rowECP);

    //NOMBRE DE LA CATEGORIA 2
    $qryPERS = 'SELECT * FROM categorias WHERE id_cate=2';
    $conPERS = new consultar ($qryPERS);
    $rowPERS = $conPERS->listRtn;
    $nameCatePERS = $rowPERS[0]['url_' . $len];

    $notLen = '';

    if ($_POST['len'] == "es"):
        $notLen = "noticia";
    else:
        $notLen = "new";
    endif;

    for ($e = 0; $e < $totECP; $e++):

        if (file_exists('img/blog/' . $rowECP[$e]['img'])):

            $urlECP = $rowECP[$e]['url_' . $len];

            $linkECP = $len . "/" . $notLen . "/" . $nameCatePERS . "/" . $urlECP;

            $fechaLi = toolMethods::dia_semana($rowECP[$e]['fecha'], 'mdy', $len);

            $listArt .= '<li class="wn-section-2-post-area" data-idreg="' . $rowECP[$e]['id_not'] . '">
                            <a href=" ' . $linkECP . '  ">
                                <img src="img/blog/' . $rowECP[$e]['img'] . ' " alt="" class="wn-section-2-post-img">
                            </a>
                            <p class="wn-section-2-post-date">' . $fechaLi . '</p>
                            <h3 class="wn-section-2-post-heading">
                               <a href=" ' . $linkECP . '"> ' . $rowECP[$e]['tit_' . $len . ''] . ' </a>
                            </h3>
                            <p class="wn-section-2-post-description">
                               <a href=" ' . $linkECP . ' "> ' . html_entity_decode($rowECP[$e]['desc_short_' . $len . '']) . '</a>
                            </p>
                          </li>';

        endif;

    endfor;

    //EXTRAR MIA
    $qryMIA = 'SELECT * FROM blog WHERE cate=3 AND destacar=1 ORDER BY fecha DESC LIMIT 1';
    $conMIA = new consultar($qryMIA);
    $rowMIA = $conMIA->listRtn;
    $urlMIA = $rowMIA[0]['url_' . $len];
    $titMIA = $rowMIA[0]['tit_' . $len];
    $excMIA = html_entity_decode($rowMIA[0]['desc_short_' . $len]);
    if (file_exists('img/blog/' . $rowMIA[0]['img'])):
        $imgMIA = 'img/blog/' . $rowMIA[0]['img'];
    else:
        $imgMIA = '';
    endif;
    $idMIA = $rowMIA[0]['id_not'];
    $pdfLink = $rowMIA[0]['pdf_' . $len];
    $fechaPost = toolMethods::dia_semana($rowMIA[0]['fecha'], 'my', $len);

    $qryMEN = 'SELECT * FROM categorias WHERE id_cate=3';
    $conMEN = new consultar ($qryMEN);
    $rowMEN = $conMEN->listRtn;
    $nameCateMEN = $rowMEN[0]['url_' . $len];

    $linkMIA = $len . "/" . $notLen . "/" . $nameCateMEN . "/" . $urlMIA;


//EXTRAER EVENTOS
    $qryEvent = "SELECT * FROM blog WHERE cate=4 AND destacar=1 ORDER BY fecha DESC LIMIT 1";
    $conEvent = new consultar($qryEvent);
    $rowEvent = $conEvent->listRtn;
    $urlEvent = $rowEvent[0]['url_' . $len];
    $titEvent = $rowEvent[0]['tit_' . $len];
    $excEvent = html_entity_decode($rowEvent[0]['desc_short_' . $len]);
    if (file_exists('img/blog/' . $rowEvent[0]['img'])):
        $imgEvent = 'img/blog/' . $rowEvent[0]['img'];
    else:
        $imgEvent = '';
    endif;
    $fechaPost = toolMethods::dia_semana($rowEvent[0]['fecha'], 'my', $len);
    $qryEVN = "SELECT * FROM categorias WHERE id_cate=4";
    $conEVN = new consultar ($qryEVN);
    $rowEVN = $conEVN->listRtn;
    $nameCateEVN = $rowEVN[0]['tit_' . $len];
    $linkEvent = $len . "/" . $notLen . "/" . $nameCateEVN . "/" . $urlEvent;
    $idEVN = $rowEVN[0]['id_not'];
endif;

//DETALLE DE LA NOTICIA
if (isset($_GET['sec']) && $_GET['sec'] == 'new' || isset($_GET['sec']) && $_GET['sec'] == 'noticia'):

    $qryNOT = "SELECT * FROM blog WHERE url_{$len}='{$_GET['url']}'";
    $conNOT = new consultar ($qryNOT);
    $rowNOT = $conNOT->listRtn;
    $imgNOT = $rowNOT[0]['img'];
    $titNOT = html_entity_decode($rowNOT[0]['tit_' . $len]);
    $infNOT = html_entity_decode($rowNOT[0]['info_' . $len]);

    $qryMEN = 'SELECT * FROM categorias WHERE id_cate=' . $rowNOT[0]['cate'];
    $conMEN = new consultar ($qryMEN);
    $rowMEN = $conMEN->listRtn;
    $nameCateMEN = html_entity_decode($rowMEN[0]['tit_' . $len]);

    //$conteoPost = conteoPost::countVisit($rowNOT[0]['id_not'], $rowMEN[0]['id_cate']);

    $fecha = toolMethods::dia_semana($rowNOT[0]['fecha'], 'mdy', $len);

    // COMPOSICION DE LA URL PARA INGLES O ESPAÑOL

    if ($len == 'en'):
        //CONSTRUIMOS EL URL DEL DETALLE DE LA NOTICIA EN ESPAÑOL
        $sec = 'noticia/';
        $getLen = 'es';
    else:
        $sec = 'new/';
        $getLen = 'en';
    endif;

    $qryCatEs = 'SELECT * FROM categorias WHERE url_' . $len . '="' . $_GET['cat'] . '"';
    $conCatEs = new consultar($qryCatEs);
    $rowCatEs = $conCatEs->listRtn;
    $nameCatEs = $rowCatEs[0]['url_' . $getLen] . '/';

    $qryNamPost = 'SELECT * FROM blog WHERE url_' . $len . '="' . $_GET['url'] . '"';
    $conNamPost = new consultar($qryNamPost);
    $rowNamPost = $conNamPost->listRtn;
    $nameUrlEs = $rowNamPost[0]['url_' . $getLen];

    $urlCompuesta = $sec . $nameCatEs . $nameUrlEs;

    switch ($rowCatEs[0]['id_cate']):
        case 1:
            if ($len == 'es'):
                $titleSubPost = 'trending topics';
            else:
                $titleSubPost = 'trending topics';
            endif;

            break;
        case 2:

            if ($len == 'es'):
                $titleSubPost = 'Artículos';
            else:
                $titleSubPost = 'articles';
            endif;

            break;
        case 3:

            if ($len == 'es'):
                $titleSubPost = 'Análisis de industria';
            else:
                $titleSubPost = 'Industry analysis';
            endif;

            break;
        case 4:

            if ($len == 'es'):
                $titleSubPost = 'Eventos';
            else:
                $titleSubPost = 'Events';
            endif;

            break;

    endswitch;

else:
    //$urlCompuesta = $sec;
endif;

//EXTRAER 3 ECP
if (isset($_POST['lastId']) && $_POST['lastId'] != ''):

    if (isset($_POST['_flagClick']) && $_POST['_flagClick'] != ''):
        $xtraQry = ' AND id_not <' . $_POST['lastId'];
    else:
        $xtraQry = '';
    endif;

    if (isset($_POST['cat']) && $_POST['cat'] != ""):
        $qryCat = 'SELECT * FROM categorias WHERE url_' . $_POST['len'] . '="' . $_POST['cat'] . '"';
        $conCat = new consultar($qryCat);
        $rowCat = $conCat->listRtn;
        $idCat = $rowCat[0]['id_cate'];
    else:
        $idCat = 2;
    endif;
    $qryECP = 'SELECT * FROM blog WHERE cate=' . $idCat . ' ' . $xtraQry . ' ORDER BY id_not DESC LIMIT 3';
    $conECP = new consultar($qryECP);
    $rowECP = $conECP->listRtn;
    $totECP = count($rowECP);

    $qryPERS = 'SELECT * FROM categorias WHERE id_cate=2';
    $conPERS = new consultar ($qryPERS);
    $rowPERS = $conPERS->listRtn;
    $nameCatePERS = $rowPERS[0]['url_' . $_POST['len']];
    $notLen = '';
    if ($_POST['len'] == "es"):
        $notLen = "noticia";
    else:
        $notLen = "new";
    endif;

    for ($e = 0; $e < $totECP; $e++):

        $fecha = toolMethods::dia_semana($rowECP[$e]['fecha'], 'mdy', $_POST['len']);

        if (file_exists('img/blog/' . $rowECP[$e]['img'])):

            $urlECP = $rowECP[$e]['url_' . $_POST['len']];

            $linkECP = $_POST['len'] . "/" . $notLen . "/" . $nameCatePERS . "/" . $urlECP;

            $listArt .= '<li class="wn-section-2-post-area" data-idreg="' . $rowECP[$e]['id_not'] . '">
                            <a href=" ' . $linkECP . '  ">
                                <img src="img/blog/' . $rowECP[$e]['img'] . '" alt="" class="wn-section-2-post-img">
                            </a>
                            <p>' . $fecha . '</p>
                            <h3 class="wn-section-2-post-heading">
                               <a href=" ' . $linkECP . '"> ' . $rowECP[$e]['tit_' . $_POST['len'] . ''] . ' </a>
                            </h3>
                            
                            <p class="wn-section-2-post-description">
                               <a href=" ' . $linkECP . ' "> ' . html_entity_decode($rowECP[$e]['desc_short_' . $_POST['len'] . '']) . '</a>
                            </p>
                         </li>';

        endif;

    endfor;

    echo $listArt;

endif;