<?php
require_once('core/init.php');
if($session->check('username')){
    session_destroy();
    header('Location:index.php');
}else{
    die("Anda Belum Login");
}


?>