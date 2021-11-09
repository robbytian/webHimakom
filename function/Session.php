<?php
class Session{
    public function setSession($nama,$value){
        return $_SESSION[$nama] = $value;
    }
    public function getSession($nama){
        return $_SESSION[$nama];
    }
    public function check($nama){
        return (isset($_SESSION[$nama]) ? true : false);
    }
    public function checkValue($nama, $value){
        return ($_SESSION[$nama] == $value ? true : false );
    }
}
?>