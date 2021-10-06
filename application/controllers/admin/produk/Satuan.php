<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'admin/Login';
            redirect($url);
        }
        $this->load->model('m_satuan');
        
    }

    public function index()
    {
        $data['data'] = $this->m_satuan->getData();
        $data['edit'] = $this->m_satuan->getData();
        $data['delete'] = $this->m_satuan->getData();
        $this->load->view('admin/barang/v_satuan', $data); 
    }

    function add(){
        $nama = $this->input->post('satuan');

        $this->m_satuan->addData($nama);
        redirect('admin/produk/satuan');
    }

    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('satuan');

        $this->m_satuan->updData($nama, $id);
        redirect('admin/produk/satuan');
    }

    function delete(){
        $id = $this->input->post('id');

        $this->m_satuan->delData($id);
        redirect('admin/produk/satuan');
    }

}

/* End of file Barang.php */


?>