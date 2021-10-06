<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'admin/Login';
            redirect($url);
        }
        $this->load->model('m_barang');
        $this->load->model('m_suplier');
    }

    public function index()
    {
        $items = $this->cart->contents();
        echo '<pre>';
        print_r($items);
        echo '</pre>';
    }

    function cart(){
        $id = $this->input->post('kode_brg');
        $nama = $this->input->post('barang');
        $satuan = $this->input->post('satuan');
        $jumlah = $this->input->post('jumlah');
        $produk = $this->m_barang->getDataById($id);
        $i = $produk->row_array();

        $data = array(
            'id'      => $id,
            'qty'     => $jumlah,
            'name'    => $i['barang_nama'],
            'satuan'  => $satuan
        );
    
    $this->cart->insert($data);
    redirect('admin/produk/test');
    }

}

/* End of file Test.php */

?>