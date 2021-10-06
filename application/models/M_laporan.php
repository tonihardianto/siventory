<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

    function getDataBarang(){
        return $this->db->query(" SELECT * FROM tb_barang a
        INNER JOIN tb_kategori b ON a.barang_kategori_id=b.kategori_id
        INNER JOIN tb_satuan c ON a.barang_satuan_id=c.satuan_id ");
    }

    function getBarangRestok(){
        return $this->db->query(" SELECT * FROM tb_barang a
        INNER JOIN tb_kategori b ON a.barang_kategori_id=b.kategori_id
        INNER JOIN tb_satuan c ON a.barang_satuan_id=c.satuan_id
        WHERE a.barang_stok <= a.barang_min_stok ");
    }

    function getDataBarangMasuk(){
        return $this->db->query("SELECT * FROM tb_barang_in a 
        INNER JOIN tb_detail_in b ON a.produk_nofak=b.d_masuk_faktur
        INNER JOIN tb_barang c ON b.d_masuk_barang_id=c.barang_id
        INNER JOIN tb_kategori d ON c.barang_kategori_id=d.kategori_id
        INNER JOIN tb_satuan e ON c.barang_satuan_id=e.satuan_id");
    }

    function lap_masuk_pertanggal($awal, $ahir){
        return $this->db->query(" SELECT *, DATE_FORMAT(a.produk_tanggal, '%d-%m-%Y') AS tanggal FROM tb_barang_in a 
        INNER JOIN tb_detail_in b ON a.produk_nofak=b.d_masuk_faktur
        INNER JOIN tb_barang c ON b.d_masuk_barang_id=c.barang_id
        INNER JOIN tb_kategori d ON c.barang_kategori_id=d.kategori_id
        INNER JOIN tb_satuan e ON c.barang_satuan_id=e.satuan_id
        WHERE a.produk_tanggal BETWEEN '$awal' AND '$ahir' ");
    }
    function total_lap_masuk_pertanggal($awal, $ahir){
        return $this->db->query(" SELECT *, DATE_FORMAT(a.produk_tanggal, '%d-%m-%Y') AS tanggal,  SUM(b.d_masuk_jumlah) AS total FROM tb_barang_in a 
        INNER JOIN tb_detail_in b ON a.produk_nofak=b.d_masuk_faktur
        INNER JOIN tb_barang c ON b.d_masuk_barang_id=c.barang_id
        INNER JOIN tb_kategori d ON c.barang_kategori_id=d.kategori_id
        INNER JOIN tb_satuan e ON c.barang_satuan_id=e.satuan_id
        WHERE a.produk_tanggal BETWEEN '$awal' AND '$ahir' ");
    }

    function lap_masuk_perbulan($bulan){
        return $this->db->query(" SELECT *, DATE_FORMAT(a.produk_tanggal, '%M-%Y') AS bulan FROM tb_barang_in a 
        INNER JOIN tb_detail_in b ON a.produk_nofak=b.d_masuk_faktur
        INNER JOIN tb_barang c ON b.d_masuk_barang_id=c.barang_id
        INNER JOIN tb_kategori d ON c.barang_kategori_id=d.kategori_id
        INNER JOIN tb_satuan e ON c.barang_satuan_id=e.satuan_id
        WHERE DATE_FORMAT(a.produk_tanggal, '%M %Y')='$bulan' ");
    }

    function total_lap_masuk_perbulan($bulan){
        return $this->db->query(" SELECT *, DATE_FORMAT(a.produk_tanggal, '%M-%Y') AS bulan,  SUM(b.d_masuk_jumlah) AS total FROM tb_barang_in a 
        INNER JOIN tb_detail_in b ON a.produk_nofak=b.d_masuk_faktur
        INNER JOIN tb_barang c ON b.d_masuk_barang_id=c.barang_id
        INNER JOIN tb_kategori d ON c.barang_kategori_id=d.kategori_id
        INNER JOIN tb_satuan e ON c.barang_satuan_id=e.satuan_id
        WHERE DATE_FORMAT(a.produk_tanggal, '%M %Y')='$bulan' ");
    }

    function get_bulan_masuk(){
        return $this->db->query("SELECT DISTINCT DATE_FORMAT(produk_tanggal,'%M %Y') AS bulan FROM tb_barang_in");
    }

    function lap_keluar_pertanggal($awal, $ahir){
        return $this->db->query(" SELECT *, DATE_FORMAT(a.produk_tanggal, '%d-%m-%Y') AS tanggal FROM tb_barang_out a
        INNER JOIN tb_detail_out b ON a.produk_id=b.d_keluar_id
        INNER JOIN tb_barang c ON b.d_keluar_barang_id=c.barang_id
        INNER JOIN tb_satuan d ON c.barang_satuan_id=d.satuan_id
        INNER JOIN tb_kategori e ON c.barang_kategori_id=e.kategori_id
        WHERE a.produk_tanggal BETWEEN '$awal' AND '$ahir' ");
    }

    function total_lap_keluar_pertanggal($awal, $ahir){
        return $this->db->query(" SELECT *, DATE_FORMAT(a.produk_tanggal, '%d-%m-%Y') AS tanggal, SUM(b.d_keluar_jumlah) AS total FROM tb_barang_out a
        INNER JOIN tb_detail_out b ON a.produk_id=b.d_keluar_id
        INNER JOIN tb_barang c ON b.d_keluar_barang_id=c.barang_id
        INNER JOIN tb_satuan d ON c.barang_satuan_id=d.satuan_id
        INNER JOIN tb_kategori e ON c.barang_kategori_id=e.kategori_id
        WHERE a.produk_tanggal BETWEEN '$awal' AND '$ahir' ");
    }

    function lap_keluar_perbulan($bulan){
        return $this->db->query(" SELECT *, DATE_FORMAT(a.produk_tanggal, '%M-%Y') AS bulan FROM tb_barang_out a
        INNER JOIN tb_detail_out b ON a.produk_id=b.d_keluar_id
        INNER JOIN tb_barang c ON b.d_keluar_barang_id=c.barang_id
        INNER JOIN tb_kategori d ON c.barang_kategori_id=d.kategori_id
        INNER JOIN tb_satuan e ON c.barang_satuan_id=e.satuan_id
        WHERE DATE_FORMAT(a.produk_tanggal, '%M %Y')='$bulan' ");
    }

    function total_lap_keluar_perbulan($bulan){
        return $this->db->query(" SELECT *, DATE_FORMAT(a.produk_tanggal, '%M-%Y') AS bulan, SUM(b.d_keluar_jumlah) AS total FROM tb_barang_out a
        INNER JOIN tb_detail_out b ON a.produk_id=b.d_keluar_id
        INNER JOIN tb_barang c ON b.d_keluar_barang_id=c.barang_id
        INNER JOIN tb_kategori d ON c.barang_kategori_id=d.kategori_id
        INNER JOIN tb_satuan e ON c.barang_satuan_id=e.satuan_id
        WHERE DATE_FORMAT(a.produk_tanggal, '%M %Y')='$bulan' ");
    }

}

/* End of file M_laporan.php */

?>