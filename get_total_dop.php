<?php
require_once('core/init.php');
$jumlahDop= $kas->jumlahDop();
$content = "<center>
<h4 class='card-title'>Total Uang DOP</h4><br>
<h1 id='totalDop'>RP$jumlahDop</h1>
<br>
<button type='button' class='btn btn-primary' style='text-align:center' data-toggle='modal' data-target='#ambilDOP'>Ambil Uang</button>
</center>";
echo json_encode($content);
?>