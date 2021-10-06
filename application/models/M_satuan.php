<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_satuan extends CI_Model {

    function getData(){
        $res = $this->db->get('tb_satuan');
        return $res;
    }

    function addData($nama){
        $res = $this->db->query("INSERT INTO tb_satuan (satuan_nama) values('$nama')");
        return $res;
    }

    function updData($nama, $id){
        $res = $this->db->query("Update tb_satuan set satuan_nama='$nama' where satuan_id='$id' ");
        return $res;
    }

    function delData($id){
        $res = $this->db->query("DELETE FROM tb_satuan WHERE satuan_id='$id'");
        return $res;
    }

}

/* End of file M_satuan.php */


?>