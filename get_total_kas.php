<?php
require_once('core/init.php');
$jumlahKas = $kas->jumlahKas();
$content = "<center>
<h4 class='card-title'>Total Uang Kas</h4><br>
<h1 id='totalKas'>RP$jumlahKas</h1>
<br>
<button type='button' class='btn btn-primary' style='text-align:center' data-toggle='modal' data-target='#ambilKas'>Ambil Uang</button>
</center>";
echo json_encode($content);
?>