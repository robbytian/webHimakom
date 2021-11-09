<?php
//passwordbendahara
require_once('core/init.php');
$data2 = $proker->selectAll();
$dataEvent = $event->selectEvent();
$dataEvent2 = $event->selectEvent()->fetchAll();
$listDokumentasi = $dokumentasi->selectAll();
$listAnggota = $pengurus->selectAll();
$listJabatan = $departement->selectAll();
$listJabatan2 = $departement->selectAll();
if(isset($_POST['login'])){
    $login = new Login($input->get('username'), $input->get('password'));
    $checklogin = $login->Login();
    if($checklogin){
        $session->setSession("username",$checklogin['username']);
        $session->setSession("level",$checklogin['level']);
        if($checklogin['level'] == 2){
            header("location:bendahara.php#uangKas");
        }
    }
}

if(isset($_POST['tambah_proker'])){
    $proker->tambahProker($input->get("kegiatan"), $input->get("deskripsi"), $input->get("tanggal"));
}
if(isset($_POST['edit_proker'])){
    $proker->editProker($input->get("edit_id"),$input->get("edit_kegiatan"), $input->get("edit_deskripsi"), $input->get("edit_waktu"));
}

if(isset($_POST['delete_proker'])){
    $proker->deleteProker($input->get("delete_id"));
}

if(isset($_POST['tambah_event'])){
    $event->tambahEvent($input->get('tambahEventKegiatan'), $input->get('tambahWaktuKegiatan'), $input->get("tambahWaktuKegiatanSampai"));
}

if(isset($_POST['tambah_dokumentasi'])){
    $dokumentasi->tambahDokumentasi($input->get('tambahJudulDokumentasi'), $input->get('tambahLinkDokumentasi'));
}

if(isset($_POST['edit_dokumentasi'])){
    $dokumentasi->editDokumentasi($input->get('detilDok_id'), $input->get('detilDok_judul'), $input->get('detilDok_link'));
}

if(isset($_POST['delete_dokumentasi'])){
    $dokumentasi->deleteDokumentasi($input->get('detilDok_id'));
}

if(isset($_POST['tambah_anggota'])){
    $pengurus->tambahPengurus($input->get('tambahAnggota_nrp'),$input->get('tambahAnggota_nama'),$input->get('tambahAnggota_jabatan'), $input->get('tambahAnggota_ig'));
}

if(isset($_POST['edit_anggota'])){
    $pengurus->editPengurus($input->get('detilAnggota_id'), $input->get('detilAnggota_nrp'), $input->get('detilAnggota_nama'), $input->get('detilAnggota_jabatan'), $input->get('detilAnggota_ig'));
}

if(isset($_POST['delete_anggota'])){
    $pengurus->deletePengurus($input->get('detilAnggota_id'));
}

if(isset($_POST['delete_event'])){
    $event->deleteEvent($input->get('IDEventKegiatan'));
}

if(isset($_POST['edit_event'])){
    $event->editEvent($input->get('IDEventKegiatan'), $input->get('editEventKegiatan'),  $input->get('editWaktuKegiatan'), $input->get('editWaktuKegiatanSampai'));
}
require_once('view/index.php');

?>