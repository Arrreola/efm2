<?php
include 'admin/api/classSql.php';

if (isset($_GET['len']) && $_GET['len'] != ''):
    $len = $_GET['len'];
else:
    $len = 'es';
endif;

//EXTRAER SOLO LA ULTIMA NOTICIAS DE WTT
$qryWTT = 'SELECT * FROM blog WHERE cate=1 ORDER by id_not DESC LIMIT 1';
$conWTT = new consultar($qryWTT);
$rowWTT = $conWTT->listRtn;

$titWTT = $rowWTT[0]['tit_' . $len];
$excWTT = html_entity_decode($rowWTT[0]['desc_short_' . $len]);
if (file_exists('img/blog/' . $rowWTT[0]['img'])):
    $imgWTT = 'img/blog/' . $rowWTT[0]['img'];
else:
    $imgWTT = '';
endif;

//EXTRAER ECP
if (isset($_POST['lastId']) && $_POST['lastId'] != ''):

     $qryECP = 'SELECT * FROM blog WHERE cate=2 AND id_not >' . $_POST['lastId'] . ' ORDER BY id_not DESC LIMIT 3';
    $conECP = new consultar($qryECP);
    $rowECP = $conECP->listRtn;
    $totECP = count($rowECP);

    for ($e = 0; $e < $totECP; $e++):

        if (file_exists('img/blog/' . $rowECP[$e]['img'])):

            $listArt .= '<li class="wn-section-2-post-area" data-idreg="' . $rowECP[$e]['id_not'] . '">
                            <img src="img/blog/' . $rowECP[$e]['img'] . ' " alt="" class="wn-section-2-post-img">
                            <h3 class="wn-section-2-post-heading">
                                ' . $rowECP[$e]['tit_' . $len . ''] . '
                            </h3>
                            <p class="wn-section-2-post-description">
                                ' . html_entity_decode($rowECP[$e]['desc_short_' . $len . '']) . '
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

$titMIA = $rowMIA[0]['tit_' . $len];
$excMIA = html_entity_decode($rowMIA[0]['desc_short_' . $len]);
if (file_exists('img/blog/' . $rowMIA[0]['img'])):
    $imgMIA = 'img/blog/' . $rowMIA[0]['img'];
else:
    $imgMIA = '';
endif;

//EXTRAER EVENTOS
$qryEvent = "SELECT * FROM blog WHERE cate=4 ORDER BY id_not DESC LIMIT 1";
$conEvent = new consultar($qryEvent);
$rowEvent = $conEvent->listRtn;

$titEvent = $rowEvent[0]['tit_' . $len];
$excEvent = html_entity_decode($rowEvent[0]['desc_short_' . $len]);
if (file_exists('img/blog/' . $rowEvent[0]['img'])):
    $imgEvent = 'img/blog/' . $rowEvent[0]['img'];
else:
    $imgEvent = '';
endif;