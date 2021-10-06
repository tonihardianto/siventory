<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'admin/Login';
            redirect($url);
        }
        $this->load->model('m_laporan');        
        $this->load->model('m_total');
        
    }
    public function index()
    {
        $data['data'] = $this->m_laporan->getBarangRestok();
        $this->load->view('admin/laporan/v_barang_restok', $data);
    }

}

/* End of file Informasi.php */

?>