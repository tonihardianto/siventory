<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Member/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');

            redirect($url);
        }
        $this->load->model('m_kategori');
        $this->load->model('m_wisata');
        $this->load->model('m_member');

    }

    public function index()
    {
        $id = $this->session->userdata('member_id');
        $data['del'] =$this->m_member->getWisata();
        $data['data']=$this->m_member->getByMember($id);
        $this->load->view('member/v_wisata',$data);
        
    }

    function add_wisata(){
        $id = $this->input->post('id');
        $nama = $this->input->post('wisata');
        $katid = $this->input->post('kategori');

        $tiket = $this->input->post('tiket');
        // $parkir = $this->input->post('parkir');
        $lat = $this->input->post('lat');
        $long = $this->input->post('lng');
        $alamat = $this->input->post('alamat');
        $desc = $this->input->post('desc');

        $this->m_member->addWisata($nama,$katid,$tiket,$lat,$long,$alamat,$desc,$id);

        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Member/wisata');
        
    }
    function editWisata(){

        $id = $this->input->post('id');
        $nama = $this->input->post('wisata');
        $katid = $this->input->post('kategori');

        $tiket = $this->input->post('tiket');
        // $parkir = $this->input->post('parkir');
        $lat = $this->input->post('lat');
        $long = $this->input->post('lng');
        $alamat = $this->input->post('alamat');
        $desc = $this->input->post('desc');

        $this->m_member->editWisata($nama, $katid, $tiket, $lat, $long, $alamat, $desc, $id);

        $this->session->set_flashdata('msg', 'Data Berhasil diSimpan.');
        redirect('Member/wisata');
    }
    function delete(){
        $id = $this->input->post('id');
        $this->m_member->delWisata($id);

        $this->session->set_flashdata('msg', 'Data Berhasil dihapus.');
        redirect('Member/wisata');

    }

    function add(){
        $data['kat'] = $this->m_kategori->getKat();
        $this->load->view('member/v_wisata_add',$data);
    }
    function edit(){
        $data['kat'] = $this->m_kategori->getKat();
        $data['data'] = $this->m_member->getEdit($_GET['id']);
        $this->load->view('member/v_wisata_edit', $data);
        
    }

}

/* End of file Wisata.php */
