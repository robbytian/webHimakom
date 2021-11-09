<?php
class Pengurus{
    public function __construct(){
        $this->db = Database::getInstance();
    } 

    public function selectAll(){
        $query = "SELECT anggota.*, divisi.nama as jabatan from anggota, divisi  where anggota.id_divisi = divisi.id_divisi order by id_divisi";
        $hasil = $this->db->query($query);
        return $hasil;
    }

    public function tambahPengurus($nrp, $nama, $jabatan, $ig){
        $real_nama = ucwords($nama);
        $query = "INSERT into anggota values(null,?,?,?,null,?)";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($nrp, $real_nama, $jabatan, $ig));
        if($hasil){
            header('Location:index.php#pengurusDepartement');
            return true;
        }else{
            return false;
        }
    }

    public function editPengurus($id, $nrp, $nama, $jabatan, $ig){
        $real_nama = ucwords($nama);
        $query = "UPDATE anggota set nrp=?, nama=?, id_divisi=?, instagram=? where id_anggota=?";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($nrp,$real_nama,$jabatan,$ig,$id));
        if($hasil){
            header("Location:index.php#pengurusDepartement");   
            return true;
        }else{
            return false;
        }
    }

    public function deletePengurus($id){
        $query = "DELETE from anggota where id_anggota=?";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($id));
        if($hasil){
            header("Location:index.php#pengurusDepartement");   
            return true;
        }else{
            return false;
        }
    }
}
?>