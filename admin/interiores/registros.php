<div class="menu-content-area-a">
    <div class="menu-content-area-a-extra">
        <a href="menu/dashboard/" class="menu-dashboard-agregar-post">Agregar post</a>
        <form method="post" class="menu-dashboard-select" action="menu/registros/">
            <select onchange="submit(this)" class="input-class input-class-category" name="categoria" id="categoria">
                <option value="">Ver todo</option>
                <option value="1" <?= $opt1 ?>>weekly trending topic</option>
                <option value="2" <?= $opt2 ?>>Efm capital's perspective</option>
                <option value="3" <?= $opt3 ?>>Monthly industry perspective</option>
                <option value="4" <?= $opt4 ?>>Events</option>
            </select>
        </form>
        <ul id="listReg">
            <?= $listReg; ?>
        </ul>
    </div>
</div>