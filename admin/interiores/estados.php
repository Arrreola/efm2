<div class="menu-content-area-a">
    <form action="menu/estados/" method="post" enctype="multipart/form-data" id="menu-form-style">
        <?= $inputIdReg; ?>
        <input type="hidden" name="myAction" value="<?= $myAction; ?>">
        <label>Estados</label>

        <hr>
        <label for="tit_es">Estado del proyecto en español:</label>
        <input class="input-class" type="text" name="tit_es" id="tit_es" value="<?= $tit_es; ?>">
        <hr>
        <label for="tit_en">Estado del proyecto en ingles:</label>
        <input class="input-class" type="text" name="tit_en" id="tit_en" value="<?= $tit_en; ?>">
        <hr>
        <input class="menu-submit-button" type="submit" value="Actualizar">
    </form>

    <ul id="listCat">
        <?= $listStPro; ?>
    </ul>
</div>