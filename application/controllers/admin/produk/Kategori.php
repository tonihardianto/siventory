<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'admin/Login';
            redirect($url);
        }
        $this->load->model('m_kategori');
        
    }

    public function index()
    {
        $data['data'] = $this->m_kategori->getKategori();
        $data['edit'] = $this->m_kategori->getKategori();
        $data['delete'] = $this->m_kategori->getKategori();
        $this->load->view('admin/barang/v_kategori', $data); 
    }

    function add(){
        $nama = $this->input->post('kategori');

        $this->m_kategori->addKat($nama);
        redirect('admin/produk/kategori');
    }

    function update(){
        $id = $this->input->post('id');
        $kat = $this->input->post('kategori');

        $this->m_kategori->updKat($kat, $id);
        redirect('admin/produk/kategori');
    }

    function delete(){
        $id = $this->input->post('id');

        $this->m_kategori->delKat($id);
        redirect('admin/produk/kategori');
    }

}

/* End of file Barang.php */


?>