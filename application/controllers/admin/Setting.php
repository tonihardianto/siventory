<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');

            redirect($url);
        }
        $this->load->helper('download');

        $this->load->model('m_setting');
        // $this->load->model('m_kelas');
        // $this->load->model('m_jurusan');
    }
    public function index()
    {

        $data['data'] = $this->m_setting->get_setting();
        $this->load->view('admin/v_site',$data);
    }
    function setting(){
        
        $desc = $this->input->post('desc');
        $head = $this->input->post('head');
        $text = $this->input->post('headtext');

        $this->m_setting->set_site($desc,$head,$text);
        $this->session->set_flashdata('msg', 'Site Settings Changed Successfully');
        redirect('admin/setting');
    }
    function set_title(){
        $judul = $this->input->post('judul');

        $this->m_setting->set_title($judul);
        $this->session->set_flashdata('msg', 'Site Settings Changed Successfully');
        redirect('admin/setting');
    }
    function set_desc()
    {
        $desc = $this->input->post('desc');

        $this->m_setting->set_desc($desc);
        $this->session->set_flashdata('msg', 'Site Settings Changed Successfully');
        redirect('admin/setting');
    }
    function set_header()
    {
        $header = $this->input->post('head');

        $this->m_setting->set_header($header);
        $this->session->set_flashdata('msg', 'Site Settings Changed Successfully');
        redirect('admin/setting');
    }
    function set_text()
    {
        $text = $this->input->post('headtext');

        $this->m_setting->set_text($text);
        $this->session->set_flashdata('msg', 'Site Settings Changed Successfully');
        redirect('admin/setting');
    }
    function set_content_title()
    {
        $title = $this->input->post('contenttitle');

        $this->m_setting->set_content_title($title);
        $this->session->set_flashdata('msg', 'Site Settings Changed Successfully');
        redirect('admin/setting');
    }
    function set_content_value()
    {
        $value = $this->input->post('contentvalue');

        $this->m_setting->set_content_value($value);
        $this->session->set_flashdata('msg', 'Site Settings Changed Successfully');
        redirect('admin/setting');
    }
    }

/* End of file Setting.php */


?>