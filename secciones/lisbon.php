<section class="operaciones-section-1">
    <div class="operaciones-section-1-text-box">
        <?php if ($len == 'es'): ?>
            <span class="operaciones-section-1-heading">Aviso de Privacidad de EFM CAPITAL, S.A. de C.V.</span>
            <p class="operaciones-section-1-text">
                Domicilio: José Clemente Orozco 329, Valle Oriente, San Pedro Garza García, Nuevo León, México. C.P.
                66278
            </p>
            <p class="operaciones-section-1-text">
                La información que contiene datos personales que recibe EFM CAPITAL, S.A. de C.V., es protegida conforme
                a
                la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y su Reglamento.
            </p>
            <p class="operaciones-section-1-text">
                La finalidad del uso de los datos personales que recaba EFM CAPITAL, S.A. de C.V., es únicamente para
                uso
                interno, ya sea para fines comerciales, industriales, estadísticos o para fines generales de EFM
                CAPITAL,
                S.A. de C.V., y por ningún motivo será transferida o compartida a terceros salvo lo previsto bajo la ley
                aplicable.
            </p>
            <p class="operaciones-section-1-text">
                Si el titular de los datos personales desea limitar de cualquier forma el uso de los mismos, puede
                enviar un
                correo electrónico a privacidad@efmcapital.com, o bien, puede dirigirse por escrito con acuse de recibo
                a la
                siguiente dirección: José Clemente Orozco 329, Valle Oriente, San Pedro Garza García, Nuevo León,
                México.
                C.P. 66278.
            </p>
            <p class="operaciones-section-1-text">
                De igual manera, los derechos de acceso, rectificación, cancelación y oposición que desee ejercer el
                titular
                serán solicitados mediante los medios descritos en el párrafo anterior.
            </p>
            <p class="operaciones-section-1-text">
                EFM CAPITAL, S.A. de C.V., comunicará por este medio cualquier cambio al presente Aviso de Privacidad.
                Se
                recomienda al titular de los datos personales que visite regularmente este sitio para actualizarse en
                caso
                de cualquier cambio a dicho Aviso.
            </p>
        <?php else: ?>
            <span class="operaciones-section-1-heading">Privacy Statement by EFM CAPITAL, S.A. DE C.V.</span>
            <p class="operaciones-section-1-text">
                Address: José Clemente Orozco 329, Valle Oriente, San Pedro Garza García, Nuevo León, México. C.P. 66278
            </p>
            <p class="operaciones-section-1-text">
                The information received by EFM CAPITAL, S.A. de C.V., that contains private and personal data is
                protected under the Federal Statute for the Protection of Personal Data in Possession of Particulars
                (“Ley Federal de Protección de Datos Personales en Posesión de los Particulares”) and its Regulation
                (“Reglamento de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares”).
            </p>
            <p class="operaciones-section-1-text">
                EFM CAPITAL, S.A. de C.V., uses personal information and data only for its own internal use, either
                commercial, industrial, statistical or for other general purposes and under no circumstance shall it be
                shared or transferred to third parties except as provided for under applicable law.
            </p>
            <p class="operaciones-section-1-text">
                If the owner of any personal information wishes to limit access and the use of such information, feel
                free to send a written statement to the following address: privacidad@efmcapital.com; or send a written
                statement to the following address: José Clemente Orozco 329, Valle Oriente, San Pedro Garza García,
                Nuevo León, México. C.P. 66278.
            </p>
            <p class="operaciones-section-1-text">
                The rights to access, clarify, cancel and oppose the use of personal information may be exercised by its
                legal owner as specified above.
            </p>
            <p class="operaciones-section-1-text">
                EFM CAPITAL, S.A. de C.V., will provide notice of all amendments to this Privacy Statement through this
                website. We recommend to visit this website from time to time for any updates to this Privacy Statement.
            </p>
        <?php endif; ?>
    </div>
    <div class="operaciones-section-1-form">
        <form enctype="multipart/form-data" name="pagerform" id="formLisbon">
            <div class="row-1">
                <div class="my-placeholder">
                    <span class=""><?php if ($len == 'es'): ?>Nombre:<?php else: ?>Name:<?php endif; ?></span>
                </div>
                <input type="text" name="nombre" class="required-2">
            </div>
            <div class="row-2">
                <span class="my-placeholder"><?php if ($len == 'es'): ?>Correo:<?php else: ?>Email:<?php endif; ?></span>
                <input type="text" name="correo" class="required-2 email">
            </div>
            <div class="row-3">
                <div class="my-placeholder operaciones-checkbox">
                    <input type="checkbox" name="checkbox" class="checkbox">
                    <span class="">
                        <?php if ($len == 'es'): ?>
                            He leído y acepto las condiciones generales(*)
                        <?php else: ?>
                            I have read and I accept the terms and conditions(*)
                        <?php endif; ?>
                    </span>
                </div>
            </div>
            <div class="row-4">
                <!--<input class="form-button" type="submit" name="enviar" id="enviar" value="Enviar">-->
                <input class="operaciones-form-button" type="button" name="enviar" id="enviar"
                       value="<?php if ($len == 'es'): ?>Ver ficha técnica<?php else: ?>See data sheet<?php endif; ?>" onclick="validateForm('formLisbon')">
            </div>
        </form>
    </div>
</section>