<?php
class Dokumentasi{
    public function __construct(){
        $this->db = Database::getInstance();
    }  

    public function selectAll(){
        $query = "SELECT * from dokumentasi";
        $hasil = $this->db->query($query);
        return $hasil;
    }

    public function tambahDokumentasi($kegiatan, $link){
        $query = "INSERT into dokumentasi values(null,?,?)";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($kegiatan,$link));
        if($hasil){
            header("Location:index.php#dokumentasi");   
            return true;
        }else{
            return false;
        }
    }

    public function editDokumentasi($id, $kegiatan, $link){
        $query = "UPDATE dokumentasi set nama=?, link=? where id_dok=?";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($kegiatan, $link, $id));
        if($hasil){
            header("Location:index.php#dokumentasi");   
            return true;
        }else{
            return false;
        }
    }

    public function deleteDokumentasi($id){
        $query = "DELETE from dokumentasi where id_dok=?";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($id));
        if($hasil){
            header("Location:index.php#dokumentasi");   
            return true;
        }else{
            return false;
        }
    }
}
?>