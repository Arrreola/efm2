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
        <textarea id="myTextarea" name="desc_short_es" id="desc_es" cols="30" rows="10"><?= $desc_short_es; ?></textarea>
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
        <label for="imgNot" class="menu-img-post-button">Imagen del post</label>
        <input type="file" name="imgNot" id="imgNot">
        <span> <?= $img; ?></span>

        <hr>
        <input type="checkbox" name="status" id="status" value="1" <?= $status; ?>>
        <label name="status" for="status" class="menu-status-checkbox">Status del Post</label>
        <hr>
        <input class="menu-submit-button" type="submit" value="Guardar">
    </form>
</div>