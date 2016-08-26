<span class="op-heading">Operaciones</span>

<ul class="op-ul">
    <?php
    $infoOp = '';
    for ($op = 0; $op < $totOp; $op++):

        $qrySts = 'SELECT * FROM statuspro WHERE id_st=' . $rowOp[$op]['edo'];
        $conSts = new consultar($qrySts);
        $rowSts = $conSts->listRtn;
        $edoPro = $rowSts[0]['tit_' . $len];

        $nameOp = html_entity_decode($rowOp[$op]['tit_' . $len]);
        $shorOp = html_entity_decode($rowOp[$op]['desc_short_' . $len]);

        if ($rowOp[$op]['info_' . $len] != '' && $rowOp[$op]['info_' . $len] != NULL && $rowOp[$op]['info_' . $len] != 'NULL'):
            $infoOp = '<div class="op-statement">' . html_entity_decode($rowOp[$op]['info_' . $len]) . '</div>';
        else:
            $infoOp = '';
        endif;

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
            <div class="op-li-side-b"
                 style="background:url('img/operaciones/<?= $img; ?>') no-repeat center / cover;"></div>

            <?= $infoOp; ?>

        </li>
    <?php endfor; ?>
</ul>