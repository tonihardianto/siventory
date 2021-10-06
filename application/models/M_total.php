<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_total extends CI_Model {

    function totalBarang(){
        $q = $this->db->get('tb_barang');
        $total = $q->num_rows();
        return $total;    
    }

    function totalBarangRestok(){
        $q = $this->db->query(" SELECT * FROM tb_barang a
        INNER JOIN tb_kategori b ON a.barang_kategori_id=b.kategori_id
        INNER JOIN tb_satuan c ON a.barang_satuan_id=c.satuan_id
        WHERE a.barang_stok <= a.barang_min_stok ");
        $total = $q->num_rows();
        return $total;    
    }

}

/* End of file M_total.php */


?>