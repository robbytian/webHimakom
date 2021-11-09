<?php
require_once('core/init.php');
$i = 1;
$a = 1;
$dataDop = $kas->dataDOP(); ?>
    <tr class="tableDop">
        <?php

        foreach ($dataDop as $result) {
        ?>
            <td class="text-center">
                <form method="post" id="batalDop<?= $a ?>">
                    <?php if ($result['status'] == 1) : ?>
                        <input type="hidden" id="id_dop_batal<?= $a ?>" value="<?= $result['id'] ?>" />
                        <input type="hidden" id="batalDop<?= $a ?>" value="bayar" />
                        <a href="bendahara.php#uangDop" id="<?= $a ?>" class="submit submitBatalDop"><i class="text-success mdi mdi-check" style="font-size:18px;"></i></a>
                </form>
            <?php else : ?>
                <form method="post" id="bayarDop<?= $a ?>">
                    <input type="hidden" id="id_dop_bayar<?= $a ?>" value="<?= $result['id'] ?>" />
                    <input type="hidden" id="bayarDop<?= $a ?>" value="batal" />
                    <a href="bendahara.php#uangDop" id="<?= $a ?>" class="submitBayarDop"><i class="text-danger mdi mdi-close" style="font-size:18px;"></i></a>
                <?php endif; ?>
                </form>
            </td>
        <?php $a++;
        } ?>
    </tr>
<script>
    
    $(document).ready(function() {
        $('.submitBayarDop').on('click', function(e) {
            e.preventDefault();
            var id = $(this).attr('id');
            var id_dop = $('#id_dop_bayar' + id).val();
            var bayar = $('#bayarDop' + id).val();
            $.ajax({
                type: "POST",
                url: "bendahara.php",
                data: {
                    "id_dop": id_dop,
                    "bayarDop": bayar
                },
                success: function(data) {
                    get_total_dop();
                    get_dop();
                }
            });
        });

        $('.submitBatalDop').on('click', function(e) {
            e.preventDefault();
            var id = $(this).attr('id');
            var id_dop = $('#id_dop_batal' + id).val();
            var batal = $('#batalDop' + id).val();
            $.ajax({
                type: "POST",
                url: "bendahara.php",
                data: {
                    "id_dop": id_dop,
                    "batalDop": batal
                },
                success: function(data) {
                    get_total_dop();
                    get_dop();
                }
            });
        });
    });

   
</script>