<div class="welcome-banner">
    <div class="welcome-banner-black">
        <?php if ($len == 'es'): ?>
            <a href="es/noticias">
                <h1 class="wn-h1">Fórum</h1>
                <span class="wn-subheading">Insights de Negocios</span>
            </a>
        <?php else: ?>
            <a href="en/news">
                <h1 class="wn-h1">Forum</h1>
                <span class="wn-subheading">Business Insights</span>
            </a>
        <?php endif; ?>
    </div>
</div>

<!-- SECTION 1 -->
<div class="outer-container">
    <section class="wn-section-1">
        <h2 class="wn-section-topic">
            <a href="<?= $len; ?>/<?= $catSec; ?>/<?= $urlCateMEN; ?>"><?= $nameCateMEN; ?></a>
        </h2>
        <hr class="wn-hr">
        <div class="wn-nt-include-module">
            <h3 class="wn-nt-section-1-topic-heading">
                <?= $titNOT; ?>
            </h3>
            <span class="wn-nt-date">
                <?= $fecha; ?>
            </span>
            <ul class="wn-nt-social-list">
                <li class="wn-nt-social-icon facebook">
                    <a href="http://www.facebook.com/sharer.php?u=http://www.efmcapital.com/es/noticias"
                       target="_blank">
                        <i class="icon-face socicon-facebook"></i>
                        <span class="wn-nt-social-icon-text">Share on Facebook</span>
                    </a>
                </li>
                <li class="wn-nt-social-icon twitter">
                    <a href="https://twitter.com/share?url=https://efmcapital.com/es/noticias&amp;text=EFM%20Capital&amp;hashtags=efmcapital">
                        <i class="icon-twitter socicon-twitter"></i>
                        <span class="wn-nt-social-icon-text">Share on Twitter</span>
                    </a>
                </li>
                <li class="wn-nt-social-icon google"><a
                        href="https://plus.google.com/share?url=http://www.efmcapital.com/es/noticias"><i
                            class="icon-google socicon-google"></i></a></li>
                <li class="wn-nt-social-icon linked"><a
                        href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://efmcapital.com/es/noticias"
                        target="_blank"><i class="icon-linked socicon-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="tiny-style">
            <img src="img/blog/<?= $imgNOT; ?> " alt="" class="wn-nt-img">
            <?= $infNOT; ?>
        </div>

    </section>

    <section class="wn-section-2">
        <hr class="wn-hr">
        <h2 class="wn-section-topic">
            <?php if ($len == 'es'): ?>
                <?= "OTROS " . $titleSubPost; ?>
            <?php else: ?>
                <?= "OTHER " . $titleSubPost; ?>
            <?php endif; ?>
        </h2>
        <hr class="wn-hr">
        <ul id="lastPost" class="wn-extra-post-container">

        </ul>
    </section>

</div>

<div class="index-section-7-a-a">
    <p class="index-section-7-a-a-legal">
        <?php if ($len == 'es'): ?>El presente documento es únicamente para fines informativos y su contenido está sujeto a cambios sin previo aviso. El receptor de esta información debe tomar decisiones conforme a sus intereses y bajo su única responsabilidad. EFM Capital, S.A. de C.V. no realiza manifestación de garantía, expresa ni tácita, sobre la exactitud, exhaustividad u omisión de los datos contenidos. El interesado deberá realizar una auditoría con el personal que estime conveniente para estar en condiciones de elaborar una propuesta de negocio. Este escrito es de carácter privado, la información contenida no podrá ser reproducida de ninguna manera, publicada, fraccionada, ni podrá hacerse referencia pública del mismo, sin previo consentimiento por escrito del representante legal de EFM Capital, S.A. de C.V. debidamente autorizado para tal efecto. Todas las imágenes y logos usados son de carácter ilustrativo.
        <?php else: ?>
            This document is for informational purposes only and its contents are subject to change without notice. The recipient of this information must make decisions according to their interests and under their sole responsibility. EFM Capital S.A. de C.V. makes no representation of warranty, expressed or implied, regarding the accuracy, completeness or omission of the data contained hereof. The recipient must conduct an audit with the persons it deems appropriate to be able to develop a business proposal. This writing is private and the information contained herein may not be reproduced in any form, be published even in any of its fraction, or make a public reference thereof without prior written consent of a duly authorized representative for this purpose by EFM Capital S.A. de C.V. All images and logos used are for illustrative purposes.

        <?php endif; ?>
    </p>
</div>