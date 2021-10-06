<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

    function getKategori(){
        $res = $this->db->get('tb_kategori');
        return $res;
    }

    function addKat($nama){
        $res = $this->db->query("INSERT INTO tb_kategori (kategori_nama) values('$nama')");
        return $res;
    }
    function delKat($id){
        $res = $this->db->query("DELETE FROM tb_kategori WHERE kategori_id='$id'");
        return $res;
    }
    function getData(){
        $res = $this->db->query("Select * from tb_kat_wisata");
        return $res;
    }
    function updKat($kat, $id){
        $res = $this->db->query("Update tb_kategori set kategori_nama='$kat' where kategori_id='$id' ");
        return $res;
    }

}

/* End of file M_kategori.php */


?>