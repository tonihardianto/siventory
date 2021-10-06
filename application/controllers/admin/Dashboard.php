<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'admin/Login';
            redirect($url);
        }
        $this->load->model('m_barang');        
        $this->load->model('m_total');
        
    }

    public function index()
    {
            $data['today_in'] = $this->m_barang->today_in();
            $data['today_out'] = $this->m_barang->today_out();
            $data['total_barang'] = $this->m_total->totalBarang();
            $this->load->view('admin/v_dashboard', $data);
        
    }

}

/* End of file Dashboard.php */


?>