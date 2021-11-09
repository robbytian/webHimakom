<?php
require_once('core/init.php');
if($session->check('username') && $session->checkValue('level',2)){
    $dataBulan = $kas->getBulan();
    $dataMinggu = $kas->getMinggu();
    $dataAnggota = $kas->dataPembayar();
    $dataPengambilan = $kas->dataPengambilan();
    $dop = $kas->dataDOP();
    if(isset($_POST['ambil_uang_kas'])){
        $kas->ambilUang($input->get('jumlah'),$input->get('keperluan'),$input->get('tanggal'),'kas');
    }

    if(isset($_POST['ambil_uang_dop'])){
        $kas->ambilUang($input->get('jumlah_dop'),$input->get('keperluan_dop'),$input->get('tanggal_dop'),'dop');
    }

    if(isset($_POST['batalkan_ambil'])){
        $kas->batalkanAmbil($input->get('id_pengambilan'));
    }

    if(isset($_POST['bayar'])){

        $kas->bayarKas($input->get('id_anggota'),$input->get('id_waktu'));
    }
    
    if(isset($_POST['batal'])){
        $kas->batalKas($input->get('id_pembayaran'),$input->get('id_anggota'),$input->get('id_waktu'));
    }

    if(isset($_POST['bayarDop'])){  
        $kas->bayarDop($input->get('id_dop'));
    }

    if(isset($_POST['batalDop'])){  
        $kas->batalDop($input->get('id_dop'));
    }
}else{
    die("Access denied");
}
require_once('view/bendahara.php');
?>