<?php
class Event{

        public function __construct(){
            $this->db = Database::getInstance();
        }    

        public function selectEvent(){
            $query = "SELECT * from event order by waktu desc";
            $hasil = $this->db->query($query);
            return $hasil;
        }

        public function tambahEvent($kegiatan, $waktu, $sampai){
            if($sampai >= $waktu){
                $query = "INSERT into event values(null,?,?,?)";
                $pstm = $this->db->prepare($query);
                $hasil = $pstm->execute(array($kegiatan,$waktu,$sampai));
                if($hasil){
                    header("Location:index.php#event");
                    return true;
                }else{
                    return false;
                }
            }else{
                echo '<script>alert("Tanggal Mulai tidak boleh lebih dari Tanggal Akhir!")</script>';
            }
        }

        public function editEvent($id, $title, $mulai, $akhir){
            if($akhir >= $mulai){
                $query = "UPDATE event set kegiatan=?, waktu=?, sampai=? where id_event=?";
                $pstm = $this->db->prepare($query);
                $hasil = $pstm->execute(array($title,$mulai,$akhir,$id));
                if($hasil){
                    header("Location:index.php#event");
                    return true;
                }else{
                    return false;   
                }
            }else{
                echo '<script>alert("Tanggal Mulai tidak boleh lebih dari Tanggal Akhir!")</script>';
            }
        }

        public function deleteEvent($id){
            $query = "DELETE from event where id_event = ?";
            $pstm = $this->db->prepare($query);
            $hasil = $pstm->execute(array($id));
            if($hasil){
                header("Location:index.php#event");
                return true;
            }else{
                return false;
            }
        }

        public function checkStatus($tanggal){
            $deadline = date_create(date_format(new DateTime($tanggal), 'Y-m-d')); 
            $now = date_create(date("Y-m-d"));
            $diff = date_diff($now,$deadline);
            if($diff->format('%R')=='-'){
                $check['overdue'] = true;
            }else{
                $check['overdue'] = false;
            }
            return $check;
        }
}
?>