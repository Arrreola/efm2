<div class="request-data-form-container">
    <form class="request-data-form" enctype="multipart/form-data" name="pagerform" id="formOperations">
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
            <input type="text" name="nombre" class="required-2 required">
        </div>
        <div class="row-2">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Dirección(*)
                    <?php else: ?>
                        Address:(*)
                    <?php endif; ?>
                </span>
            <input type="text" name="correo" class="required-2 required email">
        </div>
        <div class="row-3">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Teléfono(*)
                    <?php else: ?>
                        Phone Number:(*)
                    <?php endif; ?>
                </span>
            <input type="text" name="correo" class="required-2 required email">
        </div>
        <div class="row-4">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        Página web(*)
                    <?php else: ?>
                        Website:(*)
                    <?php endif; ?>
                </span>
            <input type="text" name="correo" class="required-2 required email">
        </div>
        <div class="row-5">
            <span class="my-placeholder">
                    <?php if ($len == 'es'): ?>
                        ¿Pertenece a un corporativo?(*)
                    <?php else: ?>
                        Do you belong to a corporate?(*)
                    <?php endif; ?>
                </span>
            <input type="text" name="correo" class="required-2 required email">
        </div>
        <div class="row-6">
            <!--<input class="form-button" type="submit" name="enviar" id="enviar" value="Enviar">-->
            <input class="operaciones-form-button" type="button" name="enviar" id="enviar"
                   value="<?php if ($len == 'es'): ?>Siguiente<?php else: ?>Next step<?php endif; ?>"
                   onclick="valFormularios('formOperations')">
        </div>
    </form>
</div>