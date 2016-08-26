<span class="op-heading">Operaciones</span>

<ul class="op-ul">
    <?php
    for ($op = 0; $op < $totOp; $op++):

        $qrySts = 'SELECT * FROM statuspro WHERE id_st=' . $rowOp[$op]['edo'];
        $conSts = new consultar($qrySts);
        $rowSts = $conSts->listRtn;
        $edoPro = $rowSts[0]['tit_' . $len];

        $nameOp = html_entity_decode($rowOp[$op]['tit_' . $len]);
        $shorOp = html_entity_decode($rowOp[$op]['desc_short_' . $len]);
        $infoOp = html_entity_decode($rowOp[$op]['info_' . $len]);
        $img = $rowOp[$op]['img'];
        $sts = $rowOp[$op]['status'];
        $btnInt = $rowOp[$op]['btn_' . $len];
        $linkBtn = $rowOp[$op]['linkBtn'];

        $btnExtra = '<a href="' . $linkBtn . '">' . $btnInt . '</a>';
        ?>
        <li class="op-li-elements">
            <div class="op-li-side-a">
                <div class="op-li-header">
                    <span class="op-heading-project"><?= $nameOp; ?></span>
                    <span class="op-status-project"><?= $edoPro; ?></span>
                </div>
                <div class="op-li-content">
                    <?= $shorOp; ?>
                </div>

                <div class="btnExtra">
                    <?= $btnExtra; ?>
                </div>

            </div>
            <div class="op-li-side-b">
                <img class="op-img" src="img/operaciones/<?= $img; ?>" alt="">
            </div>
            <div class="op-statement">
                <?= $infoOp; ?>
            </div>
        </li>
    <?php endfor; ?>
</ul>