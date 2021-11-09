<?php

class Login{
    private $db = null;
    
    public function __construct($username, $password){
        $this->db = Database::getInstance();
        $this->username = $username;
        $this->password = $password;
    }

    public function Login(){
        $query = "SELECT * from admin where username= ?";
     
        $pstm = $this->db->prepare($query);
        $pstm->execute(array($this->username));
        $hasil = $pstm->rowCount();
        if($hasil > 0){
            $hasil = $pstm->fetch(PDO::FETCH_ASSOC);
            if(password_verify($this->password, $hasil['password'])){
                return $hasil;
            }else{
                echo "<script>alert('Username atau Password Salah!')</script>";
            }   
        }else{
            echo "<script>alert('Username atau Password Salah!')</script>";
        }
    }
}
?>