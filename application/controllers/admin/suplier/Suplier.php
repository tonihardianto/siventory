<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'admin/Login';
            redirect($url);
        }
        $this->load->model('m_suplier');
    }

    public function index(){
        $data['delete'] = $this->m_suplier->getData();
        $data['edit'] = $this->m_suplier->getData();
        $data['data'] = $this->m_suplier->getData();
        $this->load->view('admin/suplier/v_suplier', $data);
        
    }

    function insertData(){
        $nama = $this->input->post('suplier');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telepon');

        $this->m_suplier->simpan($nama,$alamat,$telp);
        redirect('admin/suplier/suplier');
    }

    function editData(){
        $id = $this->input->post('id');
        $nama = $this->input->post('suplier');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telepon');

        $this->m_suplier->update($id,$nama,$alamat,$telp);
        redirect('admin/suplier/suplier');
    }

    function hapusData(){
        $id = $this->input->post('id');

        $this->m_suplier->delete($id);
        redirect('admin/suplier/suplier');
    }


}

/* End of file Suplier.php */


?>