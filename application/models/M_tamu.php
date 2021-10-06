<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_tamu extends CI_Model {

    function getTamu(){
        $res = $this->db->query("select * from tb_buku_tamu");
        return $res;
    }

    function simpan($nama,$email,$pesan,$date){
        $res = $this->db->query(" INSERT into tb_buku_tamu (tamu_nama,tamu_email,tamu_pesan,tamu_date_visit) values('$nama','$email','$pesan','$date') ");
        return $res;
    }

    function delTamu($id){
        $res = $this->db->query("delete from tb_buku_tamu where tamu_id='$id'");
        return $res;
    }

}

/* End of file M_tamu.php */


?>