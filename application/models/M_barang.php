<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	function getData(){
		$this->db->select("*");
		$this->db->from('tb_barang');
		$this->db->join('tb_satuan', 'tb_satuan.satuan_id = tb_barang.barang_satuan_id', 'inner');
		$this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_barang.barang_kategori_id', 'inner');
        $this->db->order_by('tb_barang.barang_id', 'ASC');

		$query = $this->db->get();
		return $query;
	}

    function getDataById($id){
        $query = $this->db->get_where('tb_barang', array('barang_id' => $id));
        return $query;
    }

    function getBarang(){
        $res = $this->db->get('tb_barang');
        return $res;
    }

    function getBarangById($id){
        $this->db->select("*");
		$this->db->from('tb_barang');
		$this->db->join('tb_satuan', 'tb_satuan.satuan_id = tb_barang.barang_satuan_id', 'inner');
		$this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_barang.barang_kategori_id', 'inner');
        $this->db->where('tb_barang.barang_id', $id);
        
		$query = $this->db->get();
		return $query;
    }

    function getBarangMasuk(){
        $res = $this->db->query(" SELECT a.produk_nofak, a.produk_tanggal, b.suplier_nama, COUNT(c.d_masuk_faktur) AS jumlah, SUM(c.d_masuk_jumlah) AS total FROM tb_barang_in a
        INNER JOIN tb_supplier b ON a.produk_suplier=b.suplier_id
        INNER JOIN tb_detail_in c ON a.produk_nofak=c.d_masuk_faktur
        GROUP BY a.produk_nofak ORDER BY a.produk_tanggal DESC "); 

        return $res;
    }

    function getBarangKeluar(){
        $res = $this->db->query(" SELECT *,COUNT(b.d_keluar_barang_id) AS jumlah,SUM(b.d_keluar_jumlah) AS total
        FROM tb_barang_out a
        INNER JOIN tb_detail_out b ON a.produk_kode=b.d_keluar_kode
        INNER JOIN tb_barang c ON b.d_keluar_barang_id=c.barang_id
        GROUP BY a.produk_id ORDER BY a.produk_tanggal
         ");
         return $res;
    }

    function saveBarang($id,$barang,$satuan,$kategori,$minStok){
        $user = $this->session->userdata('ses_id');
        $input = date('Y-m-d h:m:s');
        $res = $this->db->query("INSERT INTO tb_barang(barang_id, barang_nama, barang_satuan_id, barang_kategori_id, barang_min_stok, barang_input, barang_user_id) values('$id','$barang','$satuan','$kategori','$minStok','$input','$user')");
        return $res;
    }

    function editBarang($id,$barang,$satuan,$kategori,$minStok){
        $last_update = date('Y-m-d h:m:s');
        $res = $this->db->query("UPDATE tb_barang set barang_nama='$barang', barang_satuan_id='$satuan', barang_kategori_id='$kategori', barang_min_stok='$minStok', barang_last_update='$last_update' WHERE barang_id='$id' ");
        return $res;
    }

    function delBarang($id){
        $res = $this->db->query("DELETE from tb_barang where barang_id='$id' ");
        return $res;
    }

    function update($kd,$jumlah){
        $res = $this->db->query("UPDATE tb_barang set barang_stok=barang_stok+'$jumlah' where barang_id ='$kd'");
        return $res;
    }

    function saveBarangMasuk($faktur,$tanggal,$suplier,$masuk_kode){
        $user_id = $this->session->userdata('ses_id');
        $res = $this->db->query("INSERT into tb_barang_in(produk_nofak,produk_tanggal,produk_suplier,produk_kode_in,produk_user_id) Values (
            '$faktur','$tanggal','$suplier','$masuk_kode','$user_id')");
        
        foreach ($this->cart->contents() as $i) {
            $data = array(
                'd_masuk_faktur'    => $faktur,
                'd_masuk_barang_id' => $i['id'],
                'd_masuk_jumlah'    => $i['qty'],
                'd_masuk_kode'      => $masuk_kode
            );
            $this->db->insert('tb_detail_in', $data);
            $this->db->query("UPDATE tb_barang set barang_stok=barang_stok+'$i[qty]' WHERE barang_id='$i[id]' ");
        }
        return true;
    }

    function saveBarangKeluar($masuk_id,$tanggal,$kode_trx){
        $sub = 1;
        $user_id = $this->session->userdata('ses_id');
        $res = $this->db->query("INSERT into tb_barang_out(produk_id,produk_tanggal,produk_kode,produk_user_id) Values (
            '$masuk_id','$tanggal','$kode_trx','$user_id')");
        
        foreach ($this->cart->contents() as $i) {
            $data = array(
                'd_keluar_id'        => $masuk_id,
                'd_keluar_barang_id' => $i['id'],
                'd_keluar_jumlah'    => $i['qty'],
                'd_keluar_kode'      => $kode_trx
            );
            $this->db->insert('tb_detail_out', $data);
            $this->db->query("UPDATE tb_barang set barang_stok=barang_stok-'$i[qty]' WHERE barang_id='$i[id]' ");
        }
        return true;
    }

    function today_in(){
        return $this->db->query(" SELECT * FROM tb_barang_in a 
        INNER JOIN tb_detail_in b ON a.produk_nofak=b.d_masuk_faktur
        INNER JOIN tb_barang c ON b.d_masuk_barang_id=c.barang_id
        INNER JOIN tb_kategori d ON c.barang_kategori_id=d.kategori_id
        INNER JOIN tb_satuan e ON c.barang_satuan_id=e.satuan_id
        WHERE a.produk_tanggal=DATE(NOW()) ");
    }

    function today_out(){
        return $this->db->query(" SELECT * FROM tb_barang_out a 
        INNER JOIN tb_detail_out b ON a.produk_kode=b.d_keluar_kode
        INNER JOIN tb_barang c ON b.d_keluar_barang_id=c.barang_id
        INNER JOIN tb_kategori d ON c.barang_kategori_id=d.kategori_id
        INNER JOIN tb_satuan e ON c.barang_satuan_id=e.satuan_id
        WHERE a.produk_tanggal=DATE(NOW()) ");
    }

    function detail_masuk($nofak){
        return $this->db->query(" SELECT *, DATE_FORMAT(a.produk_tanggal, '%d-%m-%Y') AS tanggal FROM tb_barang_in a
        INNER JOIN tb_detail_in	b ON a.produk_nofak=b.d_masuk_faktur
        INNER JOIN tb_barang c ON b.d_masuk_barang_id=c.barang_id
        INNER JOIN tb_satuan d ON c.barang_satuan_id=d.satuan_id
        INNER JOIN tb_supplier e ON a.produk_suplier=e.suplier_id
	    WHERE a.produk_nofak='$nofak' ");
    }

    function detail_keluar($trx){
        return $this->db->query(" SELECT *, DATE_FORMAT(a.produk_tanggal, '%d-%m-%Y') as tanggal FROM tb_barang_out a
        INNER JOIN tb_detail_out b ON a.produk_id=b.d_keluar_id
        INNER JOIN tb_barang c ON b.d_keluar_barang_id=c.barang_id
        INNER JOIN tb_satuan d ON c.barang_satuan_id=d.satuan_id
        WHERE a.produk_id='$trx' ORDER BY a.produk_kode ");
    }


    function barang_id(){
    	$r = random_string('nozero', 10);
		$q = $this->db->query("SELECT MAX(RIGHT(barang_id,6)) AS kd_max FROM tb_barang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "BGID".$kd;
	}

    function masuk_id(){
        $q = $this->db->query("SELECT MAX(RIGHT(produk_id,6)) AS kd_max FROM tb_barang_out");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return date('dmy').$kd;
    }

    function kode_masuk(){
		$q = $this->db->query("SELECT MAX(RIGHT(produk_kode_in,6)) AS kd_max FROM tb_barang_in");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "IN".date('dmy').$kd;
	}

    function kode_keluar(){
		$q = $this->db->query("SELECT MAX(RIGHT(produk_kode,6)) AS kd_max FROM tb_barang_out");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "OUT".date('dmy').$kd;
	}

}

/* End of file M_barang.php */


?>