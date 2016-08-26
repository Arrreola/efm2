<div class="menu-content-area-a">
    <form action="menu/operaciones/" enctype="multipart/form-data" method="post" id="menu-form-style">
        <input type="hidden" name="currentFile" value="<?= $cf; ?>">
        <?= $inputIdReg; ?>
        <input type="hidden" name="myAction" value="<?= $myAction; ?>">
        <p class="menu-section-title">Operaciones</p>
        <hr>
        <label>Status de la operación</label>
        <select class="input-class input-class-category" name="statusOp" id="statusOp">
            <?= $opt; ?>
        </select>

        <hr>
        <label for="tit_es">Titulo en español</label>
        <input class="input-class" type="text" name="tit_es" id="tit_esp" value="<?= $tit_es; ?>">
        <hr>
        <label for="tit_en">Titulo en ingles</label>
        <input class="input-class" type="text" name="tit_en" id="tit_en" value="<?= $tit_en; ?>">
        <hr>
        <label for="desc_es">Descripción corta en español</label>
        <textarea id="myTextarea" name="desc_short_es" id="desc_es" cols="30"
                  rows="10"><?= $desc_short_es; ?></textarea>
        <hr>
        <label for="desc_en">Descripción corta en ingles</label>
        <textarea name="desc_short_en" id="desc_es" cols="30" rows="10"><?= $desc_short_en; ?></textarea>
        <hr>
        <label for="desc_es">Descripción completa en español</label>
        <textarea name="desc_es" id="desc_es" cols="30" rows="10"><?= $info_es; ?></textarea>
        <hr>
        <label for="desc_en">Descripción completa en ingles</label>
        <textarea name="desc_en" id="desc_es" cols="30" rows="10"><?= $info_en; ?></textarea>

        <hr>
        <cite>Los archivos deben de ir sin caracteres especiales.</cite>
        <label for="imgNot" class="menu-img-post-button">Imagen de la operacion</label>
        <input type="hidden" name="selImg[]" value="<?= $currentImage[0]; ?>"/>
        <input type="file" name="imgNot" id="imgNot">
        <span> <?= $img; ?></span>

        <hr>
        <label for="nameBtn">Nombre del boton en español</label>
        <input class="input-class" type="text" name="nameBtnEs" id="nameBtn" value="<?= $btnEs; ?>">

        <hr>
        <label for="nameBtn">Nombre del boton en ingles</label>
        <input class="input-class" type="text" name="nameBtnEn" id="nameBtn" value="<?= $btnEn; ?>">

        <hr>
        <label for="linkBtn">Link del boton español</label>
        <input class="input-class" type="text" name="linkBtnEs" id="linkBtn" value="<?= $linkBtnEs; ?>">

        <hr>
        <label for="linkBtn">Link del boton ingles</label>
        <input class="input-class" type="text" name="linkBtnEn" id="linkBtn" value="<?= $linkBtnEn; ?>">

        <hr>
        <input type="checkbox" name="status" id="status" value="1" <?= $status; ?>>
        <label name="status" for="status" class="menu-status-checkbox">Status de la Post</label>

        <hr>
        <input class="menu-submit-button" type="submit" value="Guardar">

    </form>
</div>