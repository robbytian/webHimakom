<?php

class Proker{
    private $db = null;
    
    public function __construct(){
        $this->db = Database::getInstance();
    }    

    public function selectAll(){
        $query = "SELECT * from proker order by deadline";
        $hasil = $this->db->query($query);
        return $hasil;
    }  
    
    public function tambahProker($kegiatan, $deskripsi, $waktu){
        $query = "INSERT into proker values(null,?,?,?)";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($kegiatan,$deskripsi,$waktu));
        if($hasil){
            header("Location:index.php#proker");
            return true;
        }else{
            return false;
        }
    }

    public function editProker($id, $kegiatan, $deskripsi, $waktu){
        $query = "UPDATE proker set nama=?,deskripsi=?,deadline=? where id_proker=?";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($kegiatan,$deskripsi,$waktu,$id));
        if($hasil){
            header("Location:index.php#proker");
            return true;
        }else{
            return false;
        }
    }

    public function deleteProker($id){
        $query = "DELETE from proker where id_proker=?";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($id));
        if($hasil){
            header("Location:index.php#proker");
            return true;
        }else{
            return false;
        }
    }
}
?>