<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }
    public function index()
    {
        $this->load->view('admin/v_login');
    }
    function auth(){
        $user=htmlspecialchars($this->input->post('username',true),ENT_QUOTES);
        $password=htmlspecialchars(md5($this->input->post('password',true)),ENT_QUOTES);
        $user=$user;
        $pass=$password;

        $cek_akses=$this->m_login->get_auth($user,$pass);

        if ($cek_akses->num_rows() > 0) {
            $data = $cek_akses->row_array();
            $this->session->set_userdata('loggedin',TRUE);
            $this->session->set_userdata('ses_id', $data['user_id']);
            $this->session->set_userdata('ses_name', $data['user_nama']);
            redirect('user/dashboard');
        }else{
            //$url = base_url();
            echo $this->session->set_flashdata('fail','Username atau password salah!');
            redirect('user/login');
         }
    }
    function logout(){
        $this->session->sess_destroy();
        $url=base_url();
        redirect($url);
    }

}

/* End of file Login.php */


?>