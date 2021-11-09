<?php
    class Input{
        public function get($nama)
        {
            if(isset($_POST[$nama]) ){
                return $_POST[$nama];
            }
            else if(isset($_GET[$nama])){
                return $_GET[$nama];
            }
            return false;
        }
    }
?>