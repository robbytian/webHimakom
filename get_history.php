<?php

require_once('core/init.php');
$history = $kas->dataHistory();
$no=1;
while($row = $history->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
    <td style="width:10%"><?=$no++?></td>
    <td style='width:30%'><?=date_format(new DateTime($row['tanggal']), 'd F Y (H:i:s)')?></td>
    <td><?=$row['deskripsi']?></td>
</tr>
<?php } ?>
?>