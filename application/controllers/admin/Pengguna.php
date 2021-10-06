<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');
            redirect($url);
        }
        $this->load->model('m_pengguna');
    }
    public function index()
    {
        $data['data'] = $this->m_pengguna->getData();
        $data['edit'] = $this->m_pengguna->getData();
        $data['delete'] = $this->m_pengguna->getData();
        $data['pass'] = $this->m_pengguna->getData();
        $this->load->view('admin/v_pengguna', $data);
    }

    function insert(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $akses = $this->input->post('akses');

        $this->m_pengguna->insert($username,$password,$nama,$akses);
        redirect('admin/pengguna');
    }

    function update(){
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $passwordtext = $this->input->post('password');
        $nama = $this->input->post('nama');
        $akses = $this->input->post('akses');
        $password = md5($passwordtext);
        $is_update = date("Y-m-d h:m:s");

        $cek_pass=$this->m_pengguna->pass_check($id,$username,$password);
        if ($cek_pass->num_rows() > 0) {
            $cek_pass->row_array();
            $this->m_pengguna->update($id,$username,$password,$nama,$akses,$is_update);
            redirect('admin/pengguna');
        }else{
            echo $this->session->set_flashdata('wrong','Password Salah!');
            redirect('admin/pengguna');
        }
    }

    function delete(){
        $id = $this->input->post('id');

        $this->m_pengguna->delete($id);
        redirect('admin/pengguna');
    }

    function ubah_password(){
        $id = $this->input->post('id');
        $username = $this->input->post('user');
        $oldpass = $this->input->post('oldpass');
        $newpass = $this->input->post('password');
        $password = md5($oldpass);

        $cek_pass=$this->m_pengguna->pass_check($id,$username,$password);
        if ($oldpass <> $newpass) {
            echo $this->session->set_flashdata('wrong','Password Tidak Sama !');
            redirect('admin/pengguna');
        }else{
            $this->m_pengguna->update_pass($id,$newpass);
            echo $this->session->set_flashdata('update','');
            redirect('admin/pengguna');
         }

    }

}

/* End of file Pengguna.php */


?>