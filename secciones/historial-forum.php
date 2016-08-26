<!-- ESTE ES EL BANNER DE BIENVENIDA -->
<section class="welcome-banner">
    <div class="welcome-banner-black">
        <?php if ($len == 'es'): ?>
            <a class="text-decoration-none" href="es/noticias">
                <h1 class="wn-h1">Fórum</h1>
                <span class="wn-subheading">Insights de Negocios</span>
            </a>
        <?php else: ?>
            <a class="text-decoration-none" href="en/news">
                <h1 class="wn-h1">Forum</h1>
                <span class="wn-subheading">Business Insights</span>
            </a>
        <?php endif; ?>
    </div>
</section>

<!-- AQUI COMIENZA EL HISTORIAL  -->
<div class="outer-container">
    <h2 class="wn-section-topic">
        <?php if ($len == 'es'): ?>Trending topic semanal<?php else: ?>Weekly Trending Topic<?php endif; ?>
    </h2>
    <hr class="wn-hr">

    <div class="hf-content-news">

        <ul class="hf-news-list">
            <?php
            for ($i = 0; $i < $totFindPost; $i++):

                if ($len == 'en'):
                    $sec = 'new';
                else:
                    $sec = 'noticia';
                endif;

                $titlePost = html_entity_decode($rowFindPost[$i]['tit_' . $len]);
                $excerPost = html_entity_decode($rowFindPost[$i]['desc_short_' . $len]);
                $fecha = toolMethods::dia_semana($rowFindPost[$i]['fecha'], $len);
                $urlPost = html_entity_decode($rowFindPost[$i]['url_' . $len]);
                $imgPost = 'img.php?file=img/blog/' . $rowFindPost[$i]['img'] . '&ancho=219&alto=219&cut';

                //Sacamos la relacion de los tags que tiene cada post
                $qryRlTgs = 'SELECT * FROM rel_tags WHERE id_post=' . $rowFindPost[$i]['id_not'];
                $conRlTgs = new consultar($qryRlTgs);
                $rowRlTgs = $conRlTgs->listRtn;
                $totRlTgs = count($rowRlTgs);

                if ($totRlTgs > 0):
                    //obtenemos el nombre del tag
                    echo $qryNmTag = 'SELECT * FROM tags WHERE id_tag=' . $rowRlTgs[0]['id_tag'];
                    $conNmTag = new consultar($qryNmTag);
                    $rowNmTag = $conNmTag->listRtn;
                    $nameTag = $rowNmTag[0]['tit_' . $len];
                    $urlTag = $rowNmTag[0]['url_' . $len];

                    for ($rl = 0; $rl < $totRlTgs; $rl++):
                        $listTagsPost .= '<li class="hf-news-elements-li-tag"><a href="' . $len . '/tag/' . $urlTag . '"> ' . $nameTag . '</a></li>';
                    endfor;
                endif;

                ?>
                <li class="hf-news-element">
                    <a href="<?= $len ?>/<?= $sec; ?>/<?= $nameCatPost ?>/<?= $urlPost; ?>">
                        <h3 class="hf-news-element-h3">
                            <?= $titlePost; ?>
                        </h3>
                        <div class="hf-news-element-description">
                            <img class="hf-news-element-img" src="<?= $imgPost; ?>" alt="">
                            <p class="hf-news-element-bodytext">
                                <?= $excerPost; ?>
                            </p>
                        </div>
                        <div class="hf-news-element-extra">
                            <span class="hf-news-element-date"><?= $fecha; ?></span>
                            <!--<span class="hf-news-elements-tag-sec-name">Etiquetas:</span>
                            <ul class="hf-news-element-ul-tags">
                                <?= $listTagsPost;?>
                            </ul>-->
                        </div>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>

    </div>
    <!-- <div class="hf-content-filter">
        <form action="" method="get" class="hf-content-news-form">
            <input class="hf-content-filter-search-input" type="text" name="Buscar" placeholder="Buscar">
        </form>
        <ul class="hf-content-filter-ul-cat">
            <?= $cat; ?>
        </ul>


        <div class="hf-content-filter-articulos">
            <p class="hf-content-filter-heading">Articulos mas leidos</p>
            <ul class="hf-content-filter-ul-mas-leidos">
                <?= $moreVisit; ?>
            </ul>
        </div>

        <div class="hf-content-filter-tags">
            <p class="hf-content-filter-heading">Etiquetas</p>
            <div id="contTags">
                <ul id="listTags" class="hf-content-filter-ul-tags">
                    <?= $tags; ?>
                </ul>
                <a href="javascript:void(0)" class="hf-content-filter-li-tags-ver-mas btnVerMas">Ver más</a>
            </div>
        </div>

        <div class="hf-content-filter-archivos">
            <p class="hf-content-filter-heading">Archivos</p>
            <ul id="listArch" class="hf-content-filter-ul-archivos">
                <?= $listFecha; ?>
            </ul>
        </div>
    </div> -->
</div>