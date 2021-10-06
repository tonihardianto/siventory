<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Penginapan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Member/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');

            redirect($url);
        }
        $this->load->model('m_penginapan');
    }
    public function index()
    {
        $id = $this->session->userdata('member_id');
        
        $data['data']=$this->m_penginapan->getDataById($id);
        $data['del'] = $this->m_penginapan->getDataById($id);
        $this->load->view('member/v_inap', $data);
        
    }
    function addInap(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kat = $this->input->post('kategori');
        $fas = $this->input->post('fasilitas');
        $long = $this->input->post('lng');
        $lat = $this->input->post('lat');
        $alamat = $this->input->post('alamat');
        $desc = $this->input->post('desc');

        $this->m_penginapan->saveInapById($nama,$kat,$fas,$long,$lat,$alamat,$desc,$id);
        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Member/Penginapan');
        
    }

    function editInap()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kat = $this->input->post('kategori');
        $fas = $this->input->post('fasilitas');
        $long = $this->input->post('lng');
        $lat = $this->input->post('lat');
        $alamat = $this->input->post('alamat');
        $desc = $this->input->post('desc');

        $this->m_penginapan->editInapById($nama, $kat, $fas, $long, $lat, $alamat, $desc, $id);
        $this->session->set_flashdata('msg', 'Data Berhasil diUbah.');
        redirect('Member/Penginapan');
    }

    function edit(){
        $data['data'] = $this->m_penginapan->getEditById($_GET['id']);
        $this->load->view('member/v_inap_edit', $data);
        
    }

    function add(){
        $data['add']=$this->m_penginapan->getData();
        $this->load->view('member/v_addinap', $data);
        
    }

    function delete(){
        $id = $this->input->post('id');

        $this->m_penginapan->delInap($id);
        $this->session->set_flashdata('msg', 'Data Berhasil diHapus.');
        redirect('Member/penginapan');
    }

}

/* End of file Penginapan.php */
