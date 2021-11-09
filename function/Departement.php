<?php
class Departement{
    public function __construct(){
        $this->db = Database::getInstance();
    } 

    public function selectAll(){
        $query = "SELECT * from divisi";
        $hasil = $this->db->query($query);
        return $hasil;
    }
}
?>