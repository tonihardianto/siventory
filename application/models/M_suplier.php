<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_suplier extends CI_Model {

    function getData(){
        $res = $this->db->get('tb_supplier');
        return $res;
    }

    function simpan($nama, $alamat, $telp){
        $data = array(
            'suplier_nama' => $nama,
            'suplier_alamat' => $alamat,
            'suplier_phone' => $telp
            );

        $this->db->set($data);
        $this->db->insert('tb_supplier');
    }

    function update($id, $nama, $alamat, $telp){
        $data = array(
            'suplier_nama' => $nama,
            'suplier_alamat' => $alamat,
            'suplier_phone' => $telp
            );
        
        $this->db->set($data);
        $this->db->where('suplier_id', $id);
        $this->db->update('tb_supplier');
    }

    function delete($id){
        $this->db->where('suplier_id', $id);
        $this->db->delete('tb_supplier');
    }

}

/* End of file M_suplier.php */


?>