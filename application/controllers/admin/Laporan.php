<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');
            redirect($url);
        }
        $this->load->model('m_laporan');
        $this->load->model('m_barang');
    }
    public function index()
    {
        $data['masuk_bulan'] = $this->m_laporan->get_bulan_masuk();
        $data['keluar_bulan'] = $this->m_laporan->get_bulan_masuk();
        $this->load->view('admin/v_laporan', $data);
        
    }

    function lap_barang(){
        // $data['jml'] = $this->m_barang->getDataBarang();
        $data['data'] = $this->m_laporan->getDataBarang();
        $this->load->view('admin/laporan/v_lap_barang', $data);
    }

    function lap_barang_restok(){
        $data['data'] = $this->m_laporan->getBarangRestok();
        $this->load->view('admin/laporan/v_lap_barang_restok', $data);
    }

    function lap_masuk_pertanggal(){
        $awal = $this->input->post('awal');
        $ahir = $this->input->post('ahir');
        
        $array = array(
            'awal' => $awal,
            'ahir' => $ahir
        );
        $this->session->set_userdata($array);
    
        $data['jml'] = $this->m_laporan->total_lap_masuk_pertanggal($awal,$ahir);
        $data['data'] = $this->m_laporan->lap_masuk_pertanggal($awal,$ahir);
        $this->load->view('admin/laporan/v_lap_masuk_pertanggal', $data);
    }

    function lap_masuk_perbulan(){
        $bulan = $this->input->post('bulan_masuk');

        $this->session->set_userdata('bulan',$bulan);

        $data['jml'] = $this->m_laporan->total_lap_masuk_perbulan($bulan);
        $data['data'] = $this->m_laporan->lap_masuk_perbulan($bulan);
        $this->load->view('admin/laporan/v_lap_masuk_perbulan', $data);
    }

    function lap_keluar_pertanggal(){
        $awal = $this->input->post('awal1');
        $ahir = $this->input->post('ahir1');
        
        $array = array(
            'awal1' => $awal,
            'ahir1' => $ahir
        );
        $this->session->set_userdata($array);
    
        $data['jml'] = $this->m_laporan->total_lap_keluar_pertanggal($awal,$ahir);
        $data['data'] = $this->m_laporan->lap_keluar_pertanggal($awal,$ahir);
        $this->load->view('admin/laporan/v_lap_keluar_pertanggal', $data);
    }

    function lap_keluar_perbulan(){
        $bulan = $this->input->post('bulan_keluar');

        $this->session->set_userdata('bulan',$bulan);

        $data['jml'] = $this->m_laporan->total_lap_keluar_perbulan($bulan);
        $data['data'] = $this->m_laporan->lap_keluar_perbulan($bulan);
        $this->load->view('admin/laporan/v_lap_keluar_perbulan', $data);
    }

}

/* End of file Laporan.php */


?>