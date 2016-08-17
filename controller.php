<?php
include 'admin/api/classSql.php';

if (isset($_GET['len']) && $_GET['len'] != ''):
    $len = $_GET['len'];
else:
    $len = 'es';
endif;

if (isset($_GET['sec']) && $_GET['sec'] == 'news' || isset($_GET['sec']) && $_GET['sec'] == 'noticias'):
    $notLen = '';
    if ($len == "es"):
        $notLen = "noticia";
    else:
        $notLen = "new";
    endif;
//EXTRAER SOLO LA ULTIMA NOTICIAS DE WTT
    $qryWTT = 'SELECT * FROM blog WHERE cate=1 ORDER by id_not DESC LIMIT 1';
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


// BUSCAMOS EL NOMBRE DE LA CATEGORIA
    $qrySEM = 'SELECT * FROM categorias WHERE id_cate=1';
    $conSEM = new consultar($qrySEM);
    $rowSEM = $conSEM->listRtn;
    $nameCateSEM = $rowSEM[0]['url_' . $len];
// LINK WTT
    $linkWTT = $len . "/" . $notLen . "/" . $nameCateSEM . "/" . $urlWTT;


//EXTRAER ECP
    if (isset($_POST['lastId']) && $_POST['lastId'] != ''):

        if (isset($_POST['_flagClick']) && $_POST['_flagClick'] != ''):
            $xtraQry = ' AND id_not <' . $_POST['lastId'];
        else:
            $xtraQry = '';
        endif;

        $qryECP = 'SELECT * FROM blog WHERE cate=2 ' . $xtraQry . ' ORDER BY id_not DESC LIMIT 3';
        $conECP = new consultar($qryECP);
        $rowECP = $conECP->listRtn;
        $totECP = count($rowECP);


        $qryPERS = 'SELECT * FROM categorias WHERE id_cate=2';
        $conPERS = new consultar ($qryPERS);
        $rowPERS = $conPERS->listRtn;
        $nameCatePERS = $rowPERS[0]['url_' . $len];

        for ($e = 0; $e < $totECP; $e++):

            if (file_exists('img/blog/' . $rowECP[$e]['img'])):

                $urlECP = $rowECP[$e]['url_' . $len];

                $linkECP = $len . "/" . $notLen . "/" . $nameCatePERS . "/" . $urlECP;

                $listArt .= '<li class="wn-section-2-post-area" data-idreg="' . $rowECP[$e]['id_not'] . '">
                        <a href=" ' . $linkECP . '  ">
                            <img src="img/blog/' . $rowECP[$e]['img'] . ' " alt="" class="wn-section-2-post-img">
                        </a>
                            <h3 class="wn-section-2-post-heading">
                               <a href=" ' . $linkECP . '"> ' . $rowECP[$e]['tit_' . $len . ''] . ' </a>
                            </h3>
                            <p class="wn-section-2-post-description">
                               <a href=" ' . $linkECP . ' "> ' . html_entity_decode($rowECP[$e]['desc_short_' . $len . '']) . ' </a>
                            </p>
                         </li>';

            endif;

        endfor;

        echo $listArt;

    endif;

//EXTRAR MIA
    $qryMIA = 'SELECT * FROM blog WHERE cate=3 ORDER BY id_not DESC LIMIT 1';
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

    $qryMEN = 'SELECT * FROM categorias WHERE id_cate=3';
    $conMEN = new consultar ($qryMEN);
    $rowMEN = $conMEN->listRtn;
    $nameCateMEN = $rowMEN[0]['url_' . $len];

    $linkMIA = $len . "/" . $notLen . "/" . $nameCateMEN . "/" . $urlMIA;


//EXTRAER EVENTOS
    $qryEvent = "SELECT * FROM blog WHERE cate=4 ORDER BY id_not DESC LIMIT 1";
    $conEvent = new consultar($qryEvent);
    $rowEvent = $conEvent->listRtn;
    $urlEvent = $rowEventπ[0]['url_' . $len];

    $titEvent = $rowEvent[0]['tit_' . $len];
    $excEvent = html_entity_decode($rowEvent[0]['desc_short_' . $len]);
    if (file_exists('img/blog/' . $rowEvent[0]['img'])):
        $imgEvent = 'img/blog/' . $rowEvent[0]['img'];
    else:
        $imgEvent = '';
    endif;

    $qryEVN = "SELECT * FROM categorias WHERE id_cate=4";
    $conEVN = new consultar ($qryEVN);
    $rowEVN = $conEVN->listRtn;
    $nameCateEVN = $rowEVN[0]['tit_' . $len];
    $linkEvent = $len . "/" . $notLen . "/" . $nameCateEVN . "/" . $urlMIA;
endif;

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


endif;