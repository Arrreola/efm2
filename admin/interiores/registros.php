<div class="menu-content-area-a">
    <div class="menu-content-area-a-extra">
        <a href="menu/dashboard/" class="menu-dashboard-agregar-post">Agregar post</a>
        <form method="post" class="menu-dashboard-select" action="menu/registros/">
            <select onchange="submit(this)" class="input-class input-class-category" name="categoria" id="categoria">
                <option value="">Ver todo</option>
                <?= $opt; ?>
            </select>
        </form>
        <ul id="listReg">
            <?= $listReg; ?>
        </ul>
    </div>
</div>