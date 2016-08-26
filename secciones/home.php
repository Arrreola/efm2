<section class="index-section-1 parallax-window">
    <div class="index-section-1-copy">
        <hr class="index-section-hr"/>
        <div class="index-section-1-copy-container">
            <!-- VERSION EN ESPAÑOL -->
            <?php if ($len == 'es'): ?>
                <p class="index-section-1-text">
                    EFM Capital es un fondo de inversión especializado en empresas familiares. Como fondo puente, opera
                    de
                    forma transaccional, optimizando y revalorizando el modelo de negocio de las empresas y minimizando
                    el
                    costo de oportunidad de los inversionistas en su labor por colocar capital.
                </p>
                <br>
                <p class="index-section-1-text">
                    La finalidad es concretar, a corto plazo, una venta o asociación estratégica con los principales
                    fondos
                    de capital privado nacionales e internacionales, corporativos e independientes.
                </p>
            <?php else: ?>
                <!-- VERSION EN INGLES -->
                <p class="index-section-1-text">
                    EFM Capital is an investment fund specialized in family-owned enterprises. As a bridge fund, it
                    follows a transactional model optimizing and reassessing the enterprises’ business models, as well
                    as minimizing the investor’s opportunity costs in their endeavor to place capital.
                </p>
                <br>
                <p class="index-section-1-text">
                    The goal is to accomplish, in the short term, a sale or strategic partnership with leading national
                    and international, corporate or independent private equity funds.
                </p>
            <?php endif; ?>

        </div>
        <hr class="index-section-hr"/>
    </div>
</section>
<section class="index-section-2-carousel">
    <div class="carousel">
        <div class="index-section-2-slide-header">
            <hr class="index-section-2-slide-hr">
            <a href="<?= $len; ?>/<?php if ($len == 'es'): ?>operaciones<?php else: ?>operations<?php endif; ?>" class="index-section-2-heading"><?php if ($len == 'es'): ?>Operaciones <?php else: ?> Operations <?php endif; ?></a>
            <hr class="index-section-2-slide-hr">
        </div>
        <div class="sliderOperaciones">
            <!-- slide 1 MELBOURNE -->
            <ul class="bxslider">
                <?php
                for ($o = 0; $o < $totOp; $o++):

                    //SELECCIONANDO EL ESTADO
                    $qryChkSt = 'SELECT * FROM statuspro WHERE id_st =' . $rowOp[$o]['edo'];
                    $conChkSt = new consultar($qryChkSt);
                    $rowChkSt = $conChkSt->listRtn;

                    if ($rowOp[$o]['btn_' . $len] != '' && $rowOp[$o]['btn_' . $len] != 'NULL' && $rowOp[$o]['btn_' . $len] != NULL):
                        $btnFT = '<a href="' . $rowOp[$o]['linkBtn_' . $len] . '">' . $rowOp[$o]['btn_' . $len] . '</a>';
                    endif;

                    ?>
                    <li class="slide slide-1"
                        style="background:url('img/operaciones/<?= $rowOp[$o]['img']; ?>') no-repeat center / cover;">
                        <div class="index-section-2-slide" id="slide-1">
                            <div class="op-li-elements">
                                <div class="op-li-side-b"
                                     style="background:url('img/operaciones/<?= $rowOp[$o]['img']; ?>') no-repeat center / cover;"></div>
                                <div class="op-li-side-a">
                                    <div class="op-li-header">
                                        <h2 class="op-heading-project"><?= $rowOp[$o]['tit_' . $len]; ?></h2>
                                        <p class="op-status-project"><?= $rowChkSt[0]['edo_' . $len]; ?></p>
                                    </div>
                                    <div class="op-li-content">
                                        <?= html_entity_decode($rowOp[$o]['desc_short_' . $len]); ?>
                                    </div>

                                    <div class="btnExtra"> <?= $btnFT; ?></div>

                                </div>
                            </div>
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>

        </div>

    </div>
</section>

<section class="index-section-3 parallax-window-3">
    <div class="index-section-3-content">
        <div class="index-section-3-header">
            <hr class="index-section-3-slide-hr">
            <span
                class="index-section-3-heading"><?php if ($len == 'es'): ?>Fondo puente<?php else: ?>Bridge fund<?php endif; ?></span>
            <hr class="index-section-3-slide-hr">
        </div>
        <div class="index-section-3-copy-content">

            <p class="index-section-3-copy">
                <?php if ($len == 'es'): ?>
                    Nuestra visión se enfoca en modelo transaccional en el que
                    realizamos inversiones como fondo de capital privado para
                    habilitar prácticas de rendición de cuentas y optimizar
                    el modelo de negocio.
                <?php else: ?>
                    Our vision is focused on a transactional model in which we commit private equity, enable
                    accountability practices and optimize the business culture.
                <?php endif; ?>
            </p>
            <br>
            <p class="index-section-3-copy">
                <?php if ($len == 'es'): ?>
                    Nuestra salida está orientada a la transferencia de la
                    empresa a un fondo de inversión o comprador estratégico.
                <?php else: ?>
                    Our exit is aimed towards facilitating the transfer of the company to a new investment fund or
                    strategic buyer.
                <?php endif; ?>
            </p>
            <a href="<?= $len ?>/<?php if ($len == 'es'): ?>fondo-puente<?php else: ?>bridge-fund<?php endif; ?>"
               class="index-section-3-link"><?php if ($len == 'es'): ?>Ver más<?php else: ?>See more<?php endif; ?></a>
        </div>
    </div>
</section>

<section class="index-section-4">
    <div class="index-section-4-header">
        <hr class="index-section-4-slide-hr">
        <span
            class="index-section-4-heading"><?php if ($len == 'es'): ?>Consejo de administración<?php else: ?>Board of directors<?php endif; ?></span>
        <hr class="index-section-4-slide-hr">
    </div>

    <!-- Desktop -->
    <div class="index-section-4-content carousel-desktop">
        <div class="index-section-4-bottom">
            <div class="index-section-4-directors-module">

                <span class="index-section-4-directors-name">Manuel G. Martínez Gaxiola</span>
                <span class="index-section-4-directors-position">
                    <?php if ($len == 'es'): ?>Socio<?php else: ?>Partner<?php endif; ?>
                </span>
                <span id="manuel-detalles" data-anchor="member-card-manuel-g" class="index-section-4-directors-button"
                      ontouchend="this.onclick=fix">
                    <?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?>
                </span>

            </div>
            <div class="index-section-4-directors-module">

                <span class="index-section-4-directors-name">Carlos J. Martínez de León</span>
                <span class="index-section-4-directors-position">
                        <?php if ($len == 'es'): ?>Socio<?php else: ?>Partner<?php endif; ?>
                </span>
                <span id="carlos-j-detalles" data-anchor="member-card-carlos-j" class="index-section-4-directors-button"
                      ontouchend="this.onclick=fix">
                        <?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?>
                </span>

            </div>
            <div class="index-section-4-directors-module">

                <span class="index-section-4-directors-name">Oscar J. Morales Rodríguez</span>
                <span
                    class="index-section-4-directors-position"><?php if ($len == 'es'): ?>Director general Cienciamed<?php else: ?>Cienciamed CEO<?php endif; ?></span>
                <span id="oscar-detalles" data-anchor="member-card-oscar-j" class="index-section-4-directors-button"
                      ontouchend="this.onclick=fix"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>

            </div>
            <div class="index-section-4-directors-module">

                <span class="index-section-4-directors-name">Carlos E. Martínez Rico</span>

                <span class="index-section-4-directors-position">
                    <?php if ($len == 'es'): ?>Consejero independiente<?php else: ?>Independent advisor<?php endif; ?>
                </span>

                <span id="carlos-e-detalles" data-anchor="member-card-carlos-e"
                      class="index-section-4-directors-button">
                    <?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?>
                </span>

            </div>
            <div class="index-section-4-directors-module">

                <span class="index-section-4-directors-name">Lorenzo Fernández Alonso</span>
                <span class="index-section-4-directors-position">
                        <?php if ($len == 'es'): ?>Consejero independiente<?php else: ?>Independent advisor<?php endif; ?>
                    </span>
                <span id="lorenzo-detalles" data-anchor="member-card-lorenzo-f" class="index-section-4-directors-button"
                      ontouchend="this.onclick=fix">
                        <?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?>
                    </span>
            </div>
        </div>
    </div>

    <!-- Mobile MEMBERS CARDS -->
    <div class="carousel index-section-4-m-carousel carousel-mobile">
        <ul class="sliderMbrMbl" id="index-section-4-m-carousel-loads member-cards">

                <li class="index-section-4-m-slide" id="slide-1">
                    <div class="index-section-4-m-member">
                        <div class="index-section-4-m-text">
                            <span class="index-section-4-m-member-name">Manuel G. Martínez Gaxiola</span>
                            <span class="index-section-4-m-member-position">
                                <?php if ($len == 'es'): ?>Socio<?php else: ?>Partner<?php endif; ?>
                            </span>
                            <span id="manuel-detalles-mobile" data-anchor="member-card-manuel-g"
                                  class="index-section-4-m-member-button">
                                <?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?>
                            </span>

                        </div>
                        <img src="img/consejo/consejo-manuel-g.png" alt="" class="index-section-4-member-image">
                    </div>
                </li>

                <li class="index-section-4-m-slide" id="slide-2">
                    <div class="index-section-4-m-member">
                        <div class="index-section-4-m-text">

                            <span class="index-section-4-m-member-name">Carlos J. Martínez de León</span>
                            <span class="index-section-4-m-member-position">
                                    <?php if ($len == 'es'): ?>Socio<?php else: ?>Partner<?php endif; ?>
                                </span>
                            <span id="carlos-j-detalles-mobile" data-anchor="member-card-carlos-j"
                                  class="index-section-4-m-member-button">
                                    <?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?>
                                </span>

                        </div>
                        <img src="img/consejo/consejo-carlos-m.png" alt="" class="index-section-4-member-image">
                    </div>
                </li>

                <li class="index-section-4-m-slide" id="slide-3">
                    <div class="index-section-4-m-member">
                        <div class="index-section-4-m-text">
                            <span class="index-section-4-m-member-name">Oscar J. Moráles Rodríguez</span>
                            <span
                                class="index-section-4-m-member-position"><?php if ($len == 'es'): ?>Director general Cienciamed<?php else: ?>Cienciamed CEO<?php endif; ?></span>
                            <span id="oscar-detalles-mobile" data-anchor="member-card-oscar-j"
                                  class="index-section-4-m-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                        </div>
                        <img src="img/consejo/consejo-oscar-j.png" alt="" class="index-section-4-member-image">
                    </div>
                </li>

                <li class="index-section-4-m-slide" id="slide-4">
                    <div class="index-section-4-m-member">
                        <div class="index-section-4-m-text">

                            <span class="index-section-4-m-member-name">Carlos E. Martínez Rico</span>
                            <span
                                class="index-section-4-m-member-position"><?php if ($len == 'es'): ?>Consejero independiente<?php else: ?>Independent advisor<?php endif; ?></span>
                            <span id="carlos-e-detalles-mobile" data-anchor="member-card-carlos-e"
                                  class="index-section-4-m-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>

                        </div>
                        <img src="img/consejo/consejo-carlos-e.png" alt="" class="index-section-4-member-image">
                    </div>
                </li>

                <li class="index-section-4-m-slide" id="slide-4-m">
                    <div class="index-section-4-m-member">
                        <div class="index-section-4-m-text">
                            <span class="index-section-4-m-member-name">Lorenzo Fernández Alonso</span>
                            <span
                                class="index-section-4-m-member-position"><?php if ($len == 'es'): ?>Consejero independiente<?php else: ?>Independent advisor<?php endif; ?></span>
                            <span id="lorenzo-detalles-mobile" data-anchor="member-card-lorenzo-f"
                                  class="index-section-4-m-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                        </div>
                        <img src="img/consejo/consejo-lorenzo-f.png" alt="" class="index-section-4-member-image">
                    </div>
                </li>

        </ul>
    </div>
</section>
<!-- EQUIPO -->
<section class="index-section-5">
    <div class="index-section-5-header">
        <hr class="index-section-5-slide-hr">
        <span class="index-section-5-heading"> <?php if ($len == 'es'): ?>Equipo<?php else: ?>Team<?php endif; ?></span>
        <hr class="index-section-5-slide-hr">
    </div>

    <!-- Carousel Desktop -->

    <div class="carousel index-section-5-carousel carousel-desktop">

        <ul class="sliderTmDsktp" id="index-section-5-carousel-loads">

            <!-- slide 1 -->

            <li class="index-section-5-slide" id="slide-1">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-everardo-h.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Everardo Hiarmes Martínez</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estrategia de inversión <?php else: ?>Investment strategy<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Evaluación de alternativas de inversión <?php else: ?>Evaluation of investment strategies<?php endif; ?></span>
                    <span id="everardo-detalles" data-anchor="team-card-everardo"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>

                </div>
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-roberto-l.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Roberto López Sánchez</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Órganos de gobierno <?php else: ?>Governing bodies<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Abogado corporativo <?php else: ?>Corporate lawyer<?php endif; ?></span>
                    <span id="roberto-l-detalles" data-anchor="team-card-roberto"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-ricardo-d.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Ricardo Díaz Salinas</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estructura y transformación<?php else: ?>Structure and transformation<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Operaciones<?php else: ?>Operations<?php endif; ?></span>
                    <span id="ricardo-d-detalles" data-anchor="team-card-ricardo"
                          class="index-section-5-member-button"> <?php if ($len == 'es'): ?>Detalles <?php else: ?>Details<?php endif; ?></span>
                </div>
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-carlos-a.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Carlos A. Tamez Nevárez</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Desarrollo organizacional<?php else: ?>Organization development<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Recursos humanos<?php else: ?>Human resources<?php endif; ?></span>
                    <span id="carlos-a-detalles" data-anchor="team-card-carlos"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <li class="index-section-5-slide" id="slide-2">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-luis-m.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Luis M. de Villa Zabroky</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estrategia de inversión<?php else: ?>Investment strategy<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Análisis financiero<?php else: ?>Financial analysis<?php endif; ?></span>
                    <span id="luis-m-detalles" data-anchor="team-card-luis"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-oscar-l.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Oscar López Macal</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estructura y transformación<?php else: ?>Structure and transformation<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Contraloría e información financiera<?php else: ?>Controller and financial information<?php endif; ?></span>
                    <span id="oscar-l-detalles" data-anchor="team-card-oscar"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-rafael-b.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Rafael Brambila López</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Órganos de gobierno<?php else: ?>Governing bodies<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Abogado corporativo<?php else: ?>Corporate lawyer<?php endif; ?></span>
                    <span id="rafael-b-detalles" data-anchor="team-card-rafael"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-alonso-m.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">J. Alonso Muñoz Fernández</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Desarrollo organizacional<?php else: ?>Organization development<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Diseño e imagen corporativa<?php else: ?>Design and corporate image<?php endif; ?></span>
                    <span id="alonso-m-detalles" data-anchor="team-card-alonso"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <li class="index-section-5-slide" id="slide-3">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-manuel-a.png" alt="" class="index-section-5-member-image">

                    <span class="index-section-5-member-name">Manuel A. Meza Cañedo</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estructura y transformación <?php else: ?>Structure and transformation<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Auditoría y soporte contable <?php else: ?>Audit and accounting support<?php endif; ?></span>
                    <span id="manuel-a-detalles" data-anchor="team-card-manuel"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles <?php else: ?>Details<?php endif; ?></span>

                </div>
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-ana-s.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Ana M. Soto Valenzuela</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estructura y transformación<?php else: ?>Structure and transformation<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Auditoría y soporte administrativo<?php else: ?>Audit and management support<?php endif; ?></span>
                    <span id="ana-m-detalles" data-anchor="team-card-ana"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-nora-e.png" alt="" class="index-section-5-member-image">

                    <span class="index-section-5-member-name">Nora A. Echeverría Estrada</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estructura y transformación<?php else: ?>Structure and transformation<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Auditoría y soporte contable<?php else: ?>Audit and accounting support<?php endif; ?></span>
                    <span id="nora-e-detalles" data-anchor="team-card-nora"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

        </ul>
    </div>

    <!-- Mobile -->
    <div id="team-cards-mobile"></div>
    <div class="carousel index-section-5-carousel carousel-mobile">
        <ul class="sliderTmMbl" id="index-section-5-carousel-loads">
            <!-- slide 1 -->

            <li class="index-section-5-slide" id="slide-1">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-everardo-h.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Everardo Hiarmes Martínez</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estrategia de inversión<?php else: ?>Investment strategy<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Evaluación de alternativas de inversión<?php else: ?>Evaluation of investment strategies<?php endif; ?></span>
                    <span id="everardo-detalles-mobile" data-anchor="team-card-everardo"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <!-- slide 2 -->

            <li class="index-section-5-slide" id="slide-2">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-roberto-l.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Roberto López Sánchez</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Órganos de gobierno<?php else: ?>Governing bodies<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Abogado corporativo<?php else: ?>Corporate lawyer<?php endif; ?></span>
                    <span id="roberto-l-detalles-mobile" data-anchor="team-card-roberto"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <!-- slide 3 -->

            <li class="index-section-5-slide" id="slide-3">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-ricardo-d.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Ricardo Díaz Salinas</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estructura y transformación<?php else: ?>Structure and transformation<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Operaciones<?php else: ?><?php endif; ?>
                        Operations</span>
                    <span id="ricardo-d-detalles-mobile" data-anchor="team-card-ricardo"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <!-- slide 4 -->

            <li class="index-section-5-slide" id="slide-4">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-carlos-a.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Carlos A. Tamez Nevárez</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Desarrollo organizacional<?php else: ?>Organization development<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Recursos humanos<?php else: ?>Human resources<?php endif; ?></span>
                    <span id="carlos-a-detalles-mobile" data-anchor="team-card-carlos"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <!-- slide 5 -->

            <li class="index-section-5-slide" id="slide-5">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-luis-m.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Luis M. de Villa Zabroky</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estrategia de inversión<?php else: ?>Investment strategy<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Análisis financiero<?php else: ?>Financial analysis<?php endif; ?></span>
                    <span id="luis-m-detalles-mobile" data-anchor="team-card-luis"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <!-- slide 6 -->

            <li class="index-section-5-slide" id="slide-6">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-oscar-l.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Oscar López Macal</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estructura y transformación<?php else: ?>Structure and transformation<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Contraloría e información financiera<?php else: ?>Controller and financial information<?php endif; ?></span>
                    <span id="oscar-l-detalles-mobile" data-anchor="team-card-oscar"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <!-- slide 7 -->

            <li class="index-section-5-slide" id="slide-7">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-rafael-b.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Rafael Brambila López</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Auditoría y soporte contable<?php else: ?>Governing bodies<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Abogado corporativo<?php else: ?><?php endif; ?>
                        Corporate lawyer</span>
                    <span id="rafael-b-detalles-mobile" data-anchor="team-card-rafael"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <!-- slide 8 -->

            <li class="index-section-5-slide" id="slide-8">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-alonso-m.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">J. Alonso Muñoz Fernández</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Desarrollo organizacional<?php else: ?>Organization development<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Diseño gráfico<?php else: ?>Design and corporate image<?php endif; ?></span>
                    <span id="alonso-m-detalles-mobile" data-anchor="team-card-alonso"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <!-- slide 9 -->

            <li class="index-section-5-slide" id="slide-9">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-manuel-a.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Manuel A. Meza Cañedo</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estructura y transformación<?php else: ?>Structure and transformation<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Auditoría y soporte contable<?php else: ?>Audit and accounting support<?php endif; ?></span>
                    <span id="manuel-a-detalles-mobile" data-anchor="team-card-manuel"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <!-- slide 10 -->

            <li class="index-section-5-slide" id="slide-10">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-ana-s.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Ana M. Soto Valenzuela</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estructura y transformación<?php else: ?>Structure and transformation<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Auditoría y soporte administrativo<?php else: ?>Audit and management support<?php endif; ?></span>
                    <span id="ana-m-detalles-mobile" data-anchor="team-card-ana"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

            <!-- slide 11 -->

            <li class="index-section-5-slide" id="slide-11">
                <div class="index-section-5-member">
                    <img src="img/escudos/escudo-nora-e.png" alt="" class="index-section-5-member-image">
                    <span class="index-section-5-member-name">Nora A. Echeverría Estrada</span>
                    <span
                        class="index-section-5-member-position"><?php if ($len == 'es'): ?>Estructura y transformación<?php else: ?>Structure and transformation<?php endif; ?></span>
                    <span
                        class="index-section-5-member-area"><?php if ($len == 'es'): ?>Auditoría y soporte contable<?php else: ?>Audit and accounting support<?php endif; ?></span>
                    <span id="nora-e-detalles-mobile" data-anchor="team-card-nora"
                          class="index-section-5-member-button"><?php if ($len == 'es'): ?>Detalles<?php else: ?>Details<?php endif; ?></span>
                </div>
            </li>

        </ul>
    </div>
</section>
<section class="index-section-6">
    <div class="index-section-6-header">
        <hr class="index-section-6-slide-hr">
        <span
            class="index-section-6-heading"><?php if ($len == 'es'): ?>Miembros de<?php else: ?>Affiliations<?php endif; ?></span>
        <hr class="index-section-6-slide-hr">
    </div>
    <div class="index-section-6-content">
        <a href="https://amexcap.com/"><img src="img/logos/logo-amexcap.png" class="index-section-6-images" alt=""></a>
        <a href="https://lavca.org/"><img src="img/logos/logo-laca.png" alt=""
                                          class="index-section-6-images image-2"></a>
        <a href="https://www.icgn.org/"><img src="img/logos/logo-icgn.png" class="index-section-6-images image-3"
                                             alt=""></a>
    </div>
</section>

<section class="index-section-7-1">
    <!--Form-->

    <div class="index-section-7-1-a">
        <div class="index-section-7-header">
            <hr class="index-section-7-slide-hr">
            <span
                class="index-section-7-heading"><?php if ($len == 'es'): ?>Contacto<?php else: ?>Contact<?php endif; ?></span>
            <hr class="index-section-7-slide-hr">
        </div>
        <form enctype="multipart/form-data" name="pagerform" id="pageForm">
            <div class="row-1">
                <div class="my-placeholder">
                    <span class=""><?php if ($len == 'es'): ?>Nombre:<?php else: ?>Name:<?php endif; ?></span>
                </div>
                <input type="text" name="nombre" class="required">
            </div>
            <div class="row-2">
                <span class="my-placeholder"><?php if ($len == 'es'): ?>Correo:<?php else: ?>Email<?php endif; ?></span>
                <input type="text" name="correo" class="required email">
            </div>
            <div class="row-2">
                <span
                    class="my-placeholder"><?php if ($len == 'es'): ?>Móvil:<?php else: ?>Mobile:<?php endif; ?></span>
                <input type="text" name="movil" class="required movil">
            </div>
            <div class="row-3">
                <span
                    class="my-placeholder"><?php if ($len == 'es'): ?>Mensaje:<?php else: ?>Message:<?php endif; ?></span>
                <textarea class="textarea" name="comentarios" class="required"></textarea>
            </div>
            <div class="row-4">
                <!--<input class="form-button" type="submit" name="enviar" id="enviar" value="Enviar">-->
                <input class="form-button" type="button" name="enviar" id="enviar"
                       value="<?php if ($len == 'es'): ?>Enviar<?php else: ?>Send<?php endif; ?>"
                       onclick="validateForm('pageForm')">
            </div>

            <div class="msg">

            </div>

        </form>
    </div>


    <div class="index-section-7-1-b">
        <div id="map" class="index-section-7-1-b"></div>
    </div>
</section>