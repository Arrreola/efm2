<!-- WELCOME BANNER -->

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

<!-- OUTER CONTAINER -->
<div class="outer-container">
    <!--    SECTION 1 WTT-->
    <section class="wn-section-1">

        <h2 class="wn-section-topic">
            <?= $arrHeader[0][0]; ?>
        </h2>

        <hr class="wn-hr">

        <a href="<?= $linkWTT; ?>">
            <div class="wn-section-1-topic-container image-blackshadow">
                <div class="floatContent">
                    <h3 class="wn-section-1-topic-heading">
                        <?= $titWTT; ?>
                    </h3>

                    <div class="wn-section-1-topic-description">
                        <p><?= $fechaPostWTT; ?></p>
                        <?= $excWTT; ?>
                    </div>
                </div>
                <img src="<?= $imgWTT; ?>" class="blackout-img"/>
            </div>
        </a>
        <!-- MORE ARTICLES BUTTON -->
        <div class="wn-section-3-more-post">
            <a href="<?= $len; ?>/<?= $catName; ?>/<?= $arrHeader[0][1]; ?>">
                <div class="wn-section-3-more-post-icon-box">
                    <img src="img/icons/icons-m-08.png" alt="" class="wn-section-3-more-post-icon">
                </div>
                <span class="wn-section-3-more-post-text">
                    <?php if ($len == 'es'): ?>
                        Más trending topics
                    <?php else: ?>
                        More trending topics
                    <?php endif; ?>
                </span>
            </a>
        </div>
        <div class="clearFloat"></div>

    </section>
    <!-- SECTION 2 IN PERSPECTIVE -->
    <section class="wn-section-2">

        <h2 class="wn-section-topic">
            <?= $arrHeader[1][0]; ?>
        </h2>

        <hr class="wn-hr">
        <div class="wn-section-2-perspective-container">
            <ul id="cat_2" class="wn-section-2-post-contain-1">
                <?= $listArt; ?>
                <li class="clearFloat"></li>
            </ul>
        </div>
        <!-- MORE ARTICLES BUTTON -->
        <div class="wn-section-3-more-post">
            <a href="<?= $len; ?>/<?= $catName; ?>/<?= $arrHeader[1][1]; ?>">
                <div class="wn-section-3-more-post-icon-box">
                    <img src="img/icons/icons-m-08.png" alt="" class="wn-section-3-more-post-icon">
                </div>

                <span class="wn-section-3-more-post-text">
                    <?php if ($len == 'es'): ?>
                        Más artículos
                    <?php else: ?>
                        More articles
                    <?php endif; ?>
                </span>
            </a>
        </div>
        <div class="clearFloat"></div>

    </section>
    <!-- SECTION 3 MONTHLY -->
    <section class="wn-section-3">

        <h2 class="wn-section-topic">
            <?= $arrHeader[2][0]; ?>
        </h2>

        <hr class="wn-hr">
        <div class="wn-section-3-container">
            <div class="wn-section-3-side-a">
                <div class="floatContent">
                    <div class="wn-section-3-heading">
                        <span> <?= $titMIA; ?> </span>
                    </div>
                    <div class="wn-section-3-date">
                        <?= $fechaPostMIA; ?>
                    </div>
                </div>
                <img src="<?= $imgMIA; ?>" class="blackout-img"/>
            </div>
            <div class="wn-section-3-side-b">

                <div class="">
                    <?= $excMIA; ?>
                </div>

                <!-- VER PDF BOTTON -->
                <div class="wn-section-3-download">
                    <a href="<?= $urlPDF ?>">
                        <img src="img/icons/icons-08.svg" alt="" class="wn-section-3-download-icon">
                        <div class="download-section-3-contain">
                        <span class="wn-section-3-download-text">
                              <?php if ($len == 'es'): ?>Ver pdf<?php else: ?>Read pdf<?php endif; ?>
                        </span>
                            <hr class="wn-hr-download">
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </section>
    <!-- SECTION 4 EVENTOS -->
    <section class="wn-section-4">

        <h2 class="wn-section-topic">
            <?= $arrHeader[3][0]; ?>
        </h2>

        <hr class="wn-hr">
        <div class="wn-section-4-topic-container image-blackshadow">
            <div class="floatContent">
                <h3 class="wn-section-4-topic-heading">
                    <a href="<?= $linkEvent ?>"><?= $titEvent; ?></a>
                </h3>

                <div class="wn-section-4-topic-description">
                    <p><?= $fechaPostEvent; ?></p>
                    <a href="<?= $linkEvent ?>"><?= $excEvent; ?></a>
                </div>
            </div>
            <img src="<?= $imgEvent; ?>" class="blackout-img"/>

        </div>
        <!--MORE ARTICLES BUTTON-->
        <div class="wn-section-3-more-post">
            <a href="<?= $len; ?>/<?= $catName; ?>/<?= $arrHeader[3][1]; ?>">
                <div class="wn-section-3-more-post-icon-box">
                    <img src="img/icons/icons-m-08.png" alt="" class="wn-section-3-more-post-icon">
                </div>
                <span class="wn-section-3-more-post-text">
                    <?php if ($len == 'es'): ?>
                        Más eventos
                    <?php else: ?>
                        More events
                    <?php endif; ?>
                </span>
            </a>
        </div>

        <div class="clearFloat"></div>

    </section>
</div>
<div class="index-section-7-a-a">
    <p class="index-section-7-a-a-legal">
        <?php if ($len == 'es'): ?>Los presentes documentos son únicamente para fines informativos y su contenido está sujeto a cambios sin previo aviso. El receptor de esta información debe tomar decisiones conforme a sus intereses y bajo su única responsabilidad. EFM Capital, S.A. de C.V. no realiza manifestación de garantía, expresa ni tácita, sobre la exactitud, exhaustividad u omisión de los datos contenidos. Estos escritos son de carácter privado, la información contenida no podrá ser reproducida de ninguna manera, publicada, fraccionada, ni podrá hacerse referencia pública de los mismos, sin previo consentimiento por escrito del representante legal de EFM Capital, S.A. de C.V. debidamente autorizado para tal efecto. Todas las imágenes y logos usados son de carácter ilustrativo.
        <?php else: ?>
            This documents are for informational purposes only and all contents are subject to change without notice. The recipient of this information must make decisions according to their interests and under their sole responsibility. EFM Capital S.A. de C.V. makes no representation of warranty, expressed or implied, regarding the accuracy, completeness or omission of the data contained hereof. These writings are private and the information they contain may not be reproduced in any form, be published even in any of its fraction, or make a public reference thereof without prior written consent of a duly authorized representative for this purpose by EFM Capital S.A. de C.V. All images and logos used are for illustrative purposes.

        <?php endif; ?>
    </p>
</div>

