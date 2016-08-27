<form class="rqstForm" enctype="multipart/form-data" name="pagerform" id="formOperations">
    <div class="outside">
        <p class="request-data-controles"><span id="slider-prev"></span> | <span id="slider-next"></span></p>
    </div>
    <ul class="sliderRqst">
        <li class="form-slide-1">
            <div class="row-1">
                <div class="my-placeholder">
                <span>
                    <?php if ($len == 'es'): ?>
                        Nombre de la Razón Social(*)
                    <?php else: ?>
                        Name:
                    <?php endif; ?>
                </span>
                </div>
                <input type="text" name="razonEmp" data-namefield="<?php if ($len == 'es'): ?>nombre de la razón social<?php else: ?>name<?php endif; ?>" class="required-2 required">
            </div>
            <div class="row-2">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Dirección:(*)
                    <?php else: ?>
                        Address:(*)
                    <?php endif; ?>
                </span>
                <input type="text" name="direcEmp" data-namefield="<?php if ($len == 'es'): ?>direccion<?php else: ?>address<?php endif; ?>" class="required-2 required email">
            </div>
            <div class="row-3">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Teléfono:(*)
                    <?php else: ?>
                        Phone Number:(*)
                    <?php endif; ?>
                </span>
                <input type="text" name="telEmp" data-namefield="<?php if ($len == 'es'): ?>teléfono<?php else: ?>phone number<?php endif; ?>" class="required-2 required email">
            </div>
            <div class="row-4">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Página web(*)
                    <?php else: ?>
                        Website:(*)
                    <?php endif; ?>
                </span>
                <input type="text" name="webEmp" data-namefield="<?php if ($len == 'es'): ?>página web<?php else: ?>website<?php endif; ?>" class="required-2 required email">
            </div>
            <div class="row-5">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        ¿Pertenece a un corporativo?(*)
                    <?php else: ?>
                        Do you belong to a corporate?(*)
                    <?php endif; ?>
                </span>
                <input type="text" name="corpEmp" data-namefield="<?php if ($len == 'es'): ?>¿pertenece a un corporativo?<?php else: ?>do you belong to a corporate?<?php endif; ?>" class="required-2 required email">
            </div>
        </li>
        <li class="form-slide-2">
            <div class="row-1">
                <div class="my-placeholder">
                <span>
                    <?php if ($len == 'es'): ?>
                        Nombre:(*)
                    <?php else: ?>
                        Name:
                    <?php endif; ?>
                </span>
                </div>
                <input type="text" name="nombreCon" data-namefield="<?php if ($len == 'es'): ?>nombre<?php else: ?>name<?php endif; ?>" class="required-2 required">
            </div>
            <div class="row-2">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Cargo(*)
                    <?php else: ?>
                        Job Title(*)
                    <?php endif; ?>
                </span>
                <input type="text" name="cargCon" data-namefield="<?php if ($len == 'es'): ?>cargo<?php else: ?>job title<?php endif; ?>" class="required-2 required email">
            </div>
            <div class="row-3">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Teléfono(*)
                    <?php else: ?>
                        Phone Number:(*)
                    <?php endif; ?>
                </span>
                <input type="text" name="telCon" data-namefield="<?php if ($len == 'es'): ?>teléfono<?php else: ?>phone number<?php endif; ?>" class="required-2 required email">
            </div>
            <div class="row-4">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Correo electrónico (*)
                    <?php else: ?>
                        E-mail Address(*)
                    <?php endif; ?>
                </span>
                <input type="text" name="correoCon" data-namefield="<?php if ($len == 'es'): ?>correo electrónico<?php else: ?>e-mail address<?php endif; ?>" class="required-2 required email">
            </div>
        </li>
        <li class="form-slide-3">
            <div class="row-1">
                <div class="my-placeholder">
                <span>
                    <?php if ($len == 'es'): ?>
                        Es un(*)
                    <?php else: ?>
                        Are(*)
                    <?php endif; ?>
                </span>
                </div>
                <input type="checkbox" name="checkFoEmp21" class="required">
                <label for="checkFoEmp21">
                    <?php if ($len == 'es'): ?>
                        Fondo de inversión
                    <?php else: ?>
                        Mutual Fund
                    <?php endif; ?>
                </label>
                <input type="checkbox" name="checkOfEmp22" class="">
                <label for="checkOfEmp22">
                    <?php if ($len == 'es'): ?>
                        Oficina familiar
                    <?php else: ?>
                        Family Office
                    <?php endif; ?>
                </label>
                <input type="checkbox" name="checkEmEmp23" class="">
                <label for="checkEmEmp23">
                    <?php if ($len == 'es'): ?>
                        Empresa privada
                    <?php else: ?>
                        Private Enterprise
                    <?php endif; ?>
                </label>
            </div>
            <div class="row-2">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Giro(*)
                    <?php else: ?>
                        Core Business(*)
                    <?php endif; ?>
                </span>
                <input type="text" data-namefield="<?php if ($len == 'es'): ?>giro<?php else: ?>core business<?php endif; ?>" name="girEmp2" class="required-2 required email">
            </div>
            <div class="row-3">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Rango de Ingresos(*)
                    <?php else: ?>
                        Income range(*)
                    <?php endif; ?>
                </span>
                <input type="text" data-namefield="<?php if ($len == 'es'): ?>rango de ingresos<?php else: ?>income range<?php endif; ?>" name="ranEmp2" class="required-2 required email">
            </div>
            <div class="row-4">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Número de Empleados(*)
                    <?php else: ?>
                        Number of Employeers(*)
                    <?php endif; ?>
                </span>
                <input type="text" name="empEmp2" data-namefield="<?php if ($len == 'es'): ?>número de empleados<?php else: ?>number of employeers<?php endif; ?>" class="required-2 required email">
            </div>
            <div class="row-5">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Proceso de fusiones
                    <?php else: ?>
                        Past M&A Processes
                    <?php endif; ?>
                </span>
                <input type="text" name="proEmp2" class="required-2 email">
            </div>
            <div class="row-6">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Interés específico en esta transacción
                    <?php else: ?>
                        Especific interes in this transaction
                    <?php endif; ?>
                </span>
                <input type="text" name="intEmp2" class="required-2 email">
            </div>
            <div class="row-7">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Referencias de Instituciones Financieras
                    <?php else: ?>
                        References by Financial Institution
                    <?php endif; ?>
                </span>
                <input type="text" name="refEmp2" class="required-2 email">
            </div>
        </li>
        <li class="form-slide-4">
            <div class="row-1">
                <div class="my-placeholder">
                <span>
                    <?php if ($len == 'es'): ?>
                        Para persona moral
                    <?php else: ?>
                        Corporation
                    <?php endif; ?>
                </span>
                </div>
                <div class="request-data-checkbox-area">
                    <input type="checkbox" name="checkCor1DocRec" class="">
                    <label for="checkCorDocRec">
                        <?php if ($len == 'es'): ?>
                            Acta constitutiva
                        <?php else: ?>
                            Documents of Incorporation
                        <?php endif; ?>
                    </label>
                </div>

                <div class="request-data-checkbox-area">
                    <input type="checkbox" name="checkCor2DocRec" class="">
                    <label for="checkCor2DocRec">
                        <?php if ($len == 'es'): ?>
                            Poderes representante legal
                        <?php else: ?>
                            Powers Legal Representative
                        <?php endif; ?>
                    </label>
                </div>

                <div class="request-data-checkbox-area">
                    <input type="checkbox" name="checkCor3DocRec" class="">
                    <label for="checkCor3DocRec">
                        <?php if ($len == 'es'): ?>
                            Identificación oficial
                        <?php else: ?>
                            Official identification (Social Security Number)
                        <?php endif; ?>
                    </label>
                </div>

                <div class="request-data-checkbox-area">
                    <input type="checkbox" name="checkCor4DocRec" class="">
                    <label for="checkCor4DocRec">
                        <?php if ($len == 'es'): ?>
                            Comprobante de domicilio fiscal
                        <?php else: ?>
                            Proof offices
                        <?php endif; ?>
                    </label>
                </div>
            </div>
            <div class="row-2">
                <div class="my-placeholder">
                    <span>
                        <?php if ($len == 'es'): ?>
                            Para persona física
                        <?php else: ?>
                            Individual
                        <?php endif; ?>
                    </span>
                </div>
                <div class="request-data-checkbox-area">
                    <input type="checkbox" name="checkCor5DocRec" class="">
                    <label for="checkCor5DocRec">
                        <?php if ($len == 'es'): ?>
                            Identificación oficial
                        <?php else: ?>
                            Official identification (Social Security Number)
                        <?php endif; ?>
                    </label>
                </div>

                <div class="request-data-checkbox-area">
                    <input type="checkbox" name="checkCor6DocRec" class="">
                    <label for="checkCor6DocRec">
                        <?php if ($len == 'es'): ?>
                            CURP
                        <?php else: ?>
                            Govermment Issued ID
                        <?php endif; ?>
                    </label>
                </div>

                <div class="request-data-checkbox-area">
                    <input type="checkbox" name="checkCor7DocRec" class="">
                    <label for="checkCor7DocRec">
                        <?php if ($len == 'es'): ?>
                            Comprobante de domicilio
                        <?php else: ?>
                            Proof Address:
                        <?php endif; ?>
                    </label>
                </div>
            </div>
            <div class="row-3 request-data-aviso">
                <hr class="wn-hr">
                <cite>
                    <?php if ($len == 'es'): ?>
                        EFM Capital se reserva la decisión sobre las autorizaciones de acceso a la plataforma, conforme a sus propios criterios institucionales.
                    <?php else: ?>
                        EFM Capital reserves the decision on the appropriate access to the platform, according to their own institutional criteria.
                    <?php endif; ?>
                </cite>
            </div>
            <div class="row-4">
                <input class="operaciones-form-button" type="button" name="enviar" id="enviar" value="<?php if ($len == 'es'): ?>Enviar<?php else: ?>Send<?php endif; ?>"  onclick="valFormularios('formOperations')">
            </div>
        </li>
    </ul>

</form>