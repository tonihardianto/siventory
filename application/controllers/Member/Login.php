<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }
    public function index()
    {
        $this->load->view('member/v_login');
    }
    function auth(){
        $email=htmlspecialchars($this->input->post('email',true),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',true),ENT_QUOTES);
        $email=$email;
        $pass=$password;

        $cek_akses=$this->m_login->get_auth($email,$pass);
        // echo $email, $pass;

        if ($cek_akses->num_rows() > 0) {
            $data = $cek_akses->row();

            $params = array(
                'member_id' => $data->member_id,
                'member_user' => $data->member_username,
                'member_name' => $data->member_fullname
            );
            $this->session->set_userdata('loggedin',TRUE);
            $this->session->set_userdata($params);

            redirect('Member/Member');
        }else{
            echo $this->session->set_flashdata('fail','Email atau password salah!');
            redirect('Member/Login');
         }
    }
    function logout(){
        $this->session->sess_destroy();
        $url=base_url();
        redirect($url);
    }

}

/* End of file Login.php */
