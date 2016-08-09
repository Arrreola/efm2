<div class="menu-content-area-a">
    <form action="menu/dashboard/" enctype="multipart/form-data" method="post" id="menu-form-style">
        <p class="menu-section-title">Dashboard</p>
        <hr>
        <label>Sección</label>
        <input type="hidden" name="myAction" value="<?= $myAction; ?>">
        <?= $inputIdReg; ?>
        <select class="input-class input-class-category" name="categoria" id="categoria">
            <option value="1">weekly trending topic</option>
            <option value="2">Efm capital's perspective</option>
            <option value="3">Monthly industry perspective</option>
        </select>
        <hr>
        <label for="tit_es">Titulo en español</label>
        <input class="input-class" type="text" name="tit_es" id="tit_esp">
        <hr>
        <label for="tit_en">Titulo en ingles</label>
        <input class="input-class" type="text" name="tit_en" id="tit_en">
        <hr>
        <label for="desc_es">Descripción corta en español</label>
        <textarea  id="myTextarea" name="desc_short_es" id="desc_es" cols="30" rows="10"></textarea>
        <hr>
        <label for="desc_en">Descripción corta en ingles</label>
        <textarea name="desc_short_en" id="desc_es" cols="30" rows="10"></textarea>
        <hr>
        <label for="desc_es">Descripción completa en español</label>
        <textarea name="desc_es" id="desc_es" cols="30" rows="10"></textarea>
        <hr>
        <label for="desc_en">Descripción completa en ingles</label>
        <textarea name="desc_en" id="desc_es" cols="30" rows="10"></textarea>
        <hr>
        <label for="imgNot" class="menu-img-post-button">Imagen del post</label>
        <input type="file" name="imgNot" id="imgNot">
        <hr>
        <input type="checkbox" name="status" id="status" value="1">
        <label name="status" for="status" class="menu-status-checkbox">Status del Post</label>
        <hr>
        <input class="menu-submit-button" type="submit" value="Guardar">
    </form>
</div>