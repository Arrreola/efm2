<div class="menu-content-area-a">
    <form action="menu/dashboard/" enctype="multipart/form-data" method="post" id="menu-form-style">
        <input type="hidden" name="currentFile" value="<?= $cf; ?>">
        <?= $inputIdReg; ?>
        <input type="hidden" name="myAction" value="<?= $myAction; ?>">
        <p class="menu-section-title">Dashboard</p>
        <hr>
        <label>Sección</label>
        <select class="input-class input-class-category" name="categoria" id="categoria">
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

        <h2>Listado de tags</h2>
        <ul id="listTags">
            <?= $listTags; ?>
        </ul>

        <hr>
        <cite>Los archivos deben de ir sin caracteres especiales.</cite>
        <label for="imgNot" class="menu-img-post-button">Imagen del post</label>
        <input type="hidden" name="selImg[]" value="<?= $currentImage[0]; ?>"/>
        <input type="file" name="imgNot" id="imgNot">
        <span> <?= $img; ?></span>

        <hr>
        <cite>Los archivos deben de ir sin caracteres especiales.</cite>
        <label for="pdfEs" class="menu-img-post-button">Pdf del post Ingles</label>
        <input type="hidden" name="selImg[]" value="<?= $currentImage[1]; ?>"/>
        <input type="file" name="pdfEs" id="pdfEs">

        <hr>
        <cite>Los archivos deben de ir sin caracteres especiales.</cite>
        <label for="pdfEn" class="menu-img-post-button">Pdf del post Español</label>
        <input type="hidden" name="selImg[]" value="<?= $currentImage[2]; ?>"/>
        <input type="file" name="pdfEn" id="pdfEn">

        <hr>
        <input type="checkbox" name="status" id="status" value="1" <?= $status; ?>>
        <label name="status" for="status" class="menu-status-checkbox">Status del Post</label>
        <hr>
        <input type="checkbox" name="destacar" id="desta" value="1" <?= $destacar; ?>>
        <label name="status" for="desta" class="menu-status-checkbox">Destacar Post</label>
        <hr>
        <input class="menu-submit-button" type="submit" value="Guardar">

    </form>
</div>