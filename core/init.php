<?php
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    // require_once('function/departement.php');
    // require_once('function/dokumentasi.php');
    // require_once('function/event.php');
    // require_once('function/input.php');
    // require_once('function/db.php');
    // require_once('function/login.php');
    // require_once('function/pengurus.php');
    // require_once('function/proker.php');
    // require_once('function/session.php');

    spl_autoload_register(function($class){
        require_once('function/'.$class.'.php');
    });

    $departement = new Departement();
    $dokumentasi = new Dokumentasi();
    $event = new Event();
    $input = new Input();
    
    $pengurus = new Pengurus();
    $proker = new Proker();
    $session = new Session();
    $kas = new Kas();
?>