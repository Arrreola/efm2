<div class="menu-content-area-a">
    <div class="menu-content-area-a-extra">
        <a href="menu/operaciones/" class="menu-dashboard-agregar-post">Agregar operación</a>
        <form method="post" class="menu-dashboard-select" action="menu/reg-operaciones/">
            <select onchange="submit(this)" class="input-class input-class-category" name="edoOp" id="edoOp">
                <option value="">Ver todo</option>
                <?= $opt; ?>
            </select>
        </form>
        <ul id="listReg">
            <?= $listReg; ?>
        </ul>
    </div>
</div>