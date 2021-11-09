<?php
require_once('core/init.php');
$i = 1;
$a = 1;
$dataAnggota = $kas->dataPembayar();
$dataMinggu = $kas->getMinggu();
$dataBulan = $kas->getBulan();
while ($row = $dataAnggota->fetch(PDO::FETCH_ASSOC)) {
?>
    <tr class="tableKas">
        <td><?= $row['nama'] ?></td>
        <?php

        foreach ($dataMinggu as $result) {
            $cek = $kas->checkBayar($row['id_anggota'], $result['id_detail_waktu']);
        ?>
            <td>
                <form method="post" id="batalKas<?= $i . $a ?>">
                    <?php if ($cek['status'] == 1) : ?>
                        <input type="hidden" id="id_anggota_batal<?= $i . $a ?>" value="<?= $row['id_anggota'] ?>" />
                        <input type="hidden" id="id_waktu_batal<?= $i . $a ?>" value="<?= $result['id_detail_waktu'] ?>" />
                        <input type="hidden" id="id_pembayaran_batal<?= $i . $a ?>" value="<?= $cek['hasil'] ?>" />
                        <input type="hidden" id="batal<?= $i . $a ?>" value="batal" />
                        <a href="bendahara.php#uangKas" id-pertama="<?= $i ?>" id-kedua="<?= $a ?>" id="submitBatal<?= $i . $a ?>" class="submit submitBatal"><i class="text-success mdi mdi-check" style="font-size:18px;"></i></a>
                </form>
            <?php else : ?>
                <form method="post" id="bayarKas<?= $i . $a ?>">
                    <input type="hidden" id="id_anggota<?= $i . $a ?>" value="<?= $row['id_anggota'] ?>" />
                    <input type="hidden" id="id_waktu<?= $i . $a ?>" value="<?= $result['id_detail_waktu'] ?>" />
                    <input type="hidden" id="bayar<?= $i . $a ?>" value="bayar" />
                    <a href="bendahara.php#uangKas" id-pertama="<?= $i ?>" id-kedua="<?= $a ?>" class="submit submitBayar"><i class="text-danger mdi mdi-close" style="font-size:18px;"></i></a>
                <?php endif; ?>
                </form>
            </td>
        <?php $a++;
        } ?>
    </tr>
<?php $i++;
} ?>
<script>
    
    $(document).ready(function() {
        $('#table_id').DataTable({
            retrieve: true,
                scrollY: "400px",
                scrollX: true,
                paging: false,
                ordering: false,
                searching: false,
                fixedColumns: true
            });
        $('.submitBayar').on('click', function(e) {
            e.preventDefault();
            var pertama = $(this).attr('id-pertama');
            var kedua = $(this).attr("id-kedua");
            var id_anggota = $('#id_anggota' + pertama + kedua).val();
            var id_waktu = $('#id_waktu' + pertama + kedua).val();
            var bayar = $('#bayar' + pertama + kedua).val();
            console.log('#bayar' + pertama + kedua);
            $.ajax({
                type: "POST",
                url: "bendahara.php#table_id",
                data: {
                    "id_anggota": id_anggota,
                    "id_waktu": id_waktu,
                    "bayar": bayar
                },
                success: function(data) {
                    console.log("aa");
                    get_total();
                    get_history();
                    get_kas();
                }
            });
        });
    });

    $(document).ready(function() {
        $('.submitBatal').on('click', function(e) {
            e.preventDefault();
            var pertama = $(this).attr('id-pertama');
            var kedua = $(this).attr("id-kedua");
            var id_anggota = $('#id_anggota_batal' + pertama + kedua).val();
            var id_waktu = $('#id_waktu_batal' + pertama + kedua).val();
            var id_pembayaran = $('#id_pembayaran_batal' + pertama + kedua).val();
            var batal = $('#batal' + pertama + kedua).val();
            console.log('#batal' + pertama + kedua);
            $.ajax({
                type: "POST",
                url: "bendahara.php",
                data: {
                    "id_pembayaran" : id_pembayaran,
                    "id_anggota": id_anggota,
                    "id_waktu": id_waktu,
                    "batal": batal
                },
                success: function(data) {
                    get_total();
                    get_history();
                    get_kas();
                }
            });
        });
    });
</script>