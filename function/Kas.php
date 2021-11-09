<?php
class Kas{
    private $db = null;
    public function __construct(){
        $this->db = Database::getInstance();
    } 
    public function getBulan(){
        $query = "SELECT * from waktu_kas";
        $hasil = $this->db->query($query);
        return $hasil;
    }

    public function getMinggu(){
        $query = "SELECT * from detail_waktu order by id_waktu,minggu_ke";
        $hasil = $this->db->query($query)->fetchAll();
        return $hasil;
    }

    public function dataPembayar(){
        $query = "SELECT anggota.* from anggota,divisi where anggota.id_divisi = divisi.id_divisi and divisi.nama !='Anggota' order by anggota.nama";
        $hasil = $this->db->query($query);
        return $hasil;
    }

    public function checkBayar($anggota, $waktu){
       $query = "SELECT * from data_pembayaran where id_anggota=? and id_detail_waktu=?";
       $pstm = $this->db->prepare($query);
       $pstm->execute(array($anggota,$waktu));
       $hasil = $pstm->fetch(PDO::FETCH_ASSOC);
       if($pstm->rowCount() < 1){
           $data['status'] = "0";
           
       }else{
        $data['hasil'] = $hasil['id_pembayaran'];
           $data['status'] = "1";
       }
       return $data;
       
    }

    public function jumlahKas(){
        $query = "SELECT count(id_pembayaran) as jumlah from data_pembayaran";
        $hasil = $this->db->query($query)->fetch(PDO::FETCH_ASSOC);
        $jumlahAmbil = "SELECT sum(jumlah) as jumlah from pengambilan_uang where jenis='kas'";
        $hasil2 = $this->db->query($jumlahAmbil)->fetch(PDO::FETCH_ASSOC);
        $jumlah = ($hasil['jumlah'] * 5000) - $hasil2['jumlah'];
        return number_format($jumlah,2,',','.');
    }

    public function jumlahDop(){
        $query = "SELECT count(id) as jumlah from dop where status=1";
        $hasil = $this->db->query($query)->fetch(PDO::FETCH_ASSOC);
        $jumlahAmbil = "SELECT sum(jumlah) as jumlah from pengambilan_uang where jenis='dop'";
        $hasil2 = $this->db->query($jumlahAmbil)->fetch(PDO::FETCH_ASSOC);
        $jumlah = ($hasil['jumlah'] * 100000) - $hasil2['jumlah'];
        return number_format($jumlah,2,',','.');
    }

    public function ambilUang($uang, $keperluan,$tanggal, $jenis){
        if($jenis == 'kas'){
            $query = "SELECT count(id_pembayaran) as jumlah from data_pembayaran";
            $hasil = $this->db->query($query)->fetch(PDO::FETCH_ASSOC);
            $jumlah = ($hasil['jumlah'] * 5000); 
        }else if($jenis == 'dop'){
            $query = "SELECT count(id) as jumlah from dop where status=1";
            $hasil = $this->db->query($query)->fetch(PDO::FETCH_ASSOC);
            $jumlah = ($hasil['jumlah'] * 100000); 
        }
       
        if($uang <= $jumlah){
            $query = "INSERT into pengambilan_uang(keperluan,jumlah,tanggal,jenis) values(?,?,?,?)";
            $pstm = $this->db->prepare($query);
            $hasil = $pstm->execute(array($keperluan,$uang,$tanggal,$jenis));
            if($hasil){
                header('location:bendahara.php#');
            }else{
                die("gagal menginput");
            }
        }else{
            echo "<script>alert('Jumlah Uang Tidak Mencukupi!')</script>";
        }
    
    }

    public function dataPengambilan(){
        $query = "SELECT * from pengambilan_uang order by tanggal desc";
        $hasil = $this->db->query($query);
        return $hasil;
    }

    public function batalkanAmbil($id){
        $query = "DELETE from pengambilan_uang where id_pengambilan=?";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($id));
        if($hasil){
            header('location:bendahara.php#');
        }else{
            echo "<script>alert('Terjadi Kesalahan')</script>";
        }
    }

    public function historyPembayaran($anggota,$waktu,$status){
        $queryNama = "SELECT anggota.nama,waktu_kas.bulan_tahun,detail_waktu.minggu_ke from anggota,waktu_kas,detail_waktu,
        data_pembayaran where waktu_kas.id_waktu = detail_waktu.id_waktu and detail_waktu.id_detail_waktu = data_pembayaran.id_detail_waktu 
        and data_pembayaran.id_anggota = anggota.id_anggota and data_pembayaran.id_anggota=? and data_pembayaran.id_detail_waktu=?;";
        $pstmNama = $this->db->prepare($queryNama);
        $pstmNama->execute(array($anggota,$waktu));
        $data = $pstmNama->fetch(PDO::FETCH_ASSOC);
        if($status == "bayar"){
            $histori = $data['nama'] ." Membayar Kas bulan ".$data['bulan_tahun']." Minggu ke-".$data['minggu_ke'];
        }
        else if($status == "batal"){
            $histori = $data['nama'] ." Membatalkan Pembayaran Kas bulan ".$data['bulan_tahun']." Minggu ke-".$data['minggu_ke'];
        }
       
        $insertHistori = "INSERT into history_pembayaran(deskripsi) values('$histori')";
        if($this->db->query($insertHistori)){
            return true;
        }else{
            return false;
        }
    }

    public function bayarKas($anggota,$waktu){
        if($this->checkBayar($anggota, $waktu)['status']==0){
            $query="INSERT into data_pembayaran(id_anggota,id_detail_waktu) values(?,?)";
            $pstm = $this->db->prepare($query);
            $hasil = $pstm->execute(array($anggota,$waktu));
            $this->historyPembayaran($anggota,$waktu,"bayar");
            if(!$hasil){
                echo "<script>alert('Terjadi Kesalahan')</script>";
            }
        }
    }

    public function batalKas($id,$anggota,$waktu){
        $this->historyPembayaran($anggota,$waktu,"batal");
        $query = "DELETE from data_pembayaran where id_pembayaran=?";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($id));
        if($hasil){
            header('location:bendahara.php#uangKas');
        }else{
            echo "<script>alert('Terjadi Kesalahan')</script>";
        }
    }

    public function dataHistory(){
        $query = "SELECT * from history_pembayaran order by tanggal desc";
        $hasil = $this->db->query($query);
        if($hasil){
            return $hasil;
        }
    }

    public function dataDOP(){
        $query = "SELECT * from dop";
        $hasil = $this->db->query($query);
        if($hasil){
            return $hasil;
        }
    }

    public function bayarDop($id){
        $query = "UPDATE dop set status=1 where id=?";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($id));
        if($hasil){
            return true;
        }else{
            echo "<script>alert('Terjadi Kesalahan')</script>";
        }
    }

    public function batalDop($id){
        $query = "UPDATE dop set status=0 where id=?";
        $pstm = $this->db->prepare($query);
        $hasil = $pstm->execute(array($id));
        if($hasil){
            return true;
        }else{
            echo "<script>alert('Terjadi Kesalahan')</script>";
        }
    }


}