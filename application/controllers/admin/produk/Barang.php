<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'admin/Login';
            redirect($url);
        }
        $this->load->model('m_suplier');
        $this->load->model('m_kategori');
        $this->load->model('m_satuan');
        $this->load->model('m_barang');
        
    }

    public function index()
    {
        $data['sat'] = $this->m_satuan->getData();
        $data['kat'] = $this->m_kategori->getKategori();
        $data['sat1'] = $this->m_satuan->getData();
        $data['kat1'] = $this->m_kategori->getKategori();
        $data['delete'] = $this->m_barang->getData();
        $data['update'] = $this->m_barang->getData();
        $data['data'] = $this->m_barang->getData();
        $this->load->view('admin/barang/v_barang', $data); 
    }

    function simpanData(){
        $id = $this->m_barang->barang_id();
        $barang = $this->input->post('namaBarang');
        $satuan = $this->input->post('satuan');
        $kategori = $this->input->post('kategori');
        $minStok = $this->input->post('minStok');

        $this->m_barang->saveBarang($id,$barang,$satuan,$kategori,$minStok);
        redirect('admin/produk/barang');
    }

    function editData(){
        $id = $this->input->post('id');
        $barang = $this->input->post('namaBarang');
        $satuan = $this->input->post('satuan1');
        $kategori = $this->input->post('kategori1');
        $minStok = $this->input->post('minStok');

        $this->m_barang->editBarang($id,$barang,$satuan,$kategori,$minStok);
        redirect('admin/produk/barang');
    }

    function hapusData(){
        $id = $this->input->post('id');
         $this->m_barang->delBarang($id);
         redirect('admin/produk/barang');
    }

    function edit(){
        $id = $_GET['id'];
        $data['edit'] = $this->m_barang->getDataById($id);
        $data['sat'] = $this->m_satuan->getData();
        $data['kat'] = $this->m_kategori->getKategori();
        $data['sup'] = $this->m_suplier->getData();

        $this->load->view('admin/barang/v_barang_edit',$data);  
    }

}

/* End of file Barang.php */


?>