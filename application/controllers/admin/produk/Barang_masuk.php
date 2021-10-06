<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_masuk extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'admin/Login';
            redirect($url);
        }
        $this->load->model('m_barang');
        $this->load->model('m_suplier');
    }

    public function index()
    {
        $data['getData'] = $this->m_barang->getData();
        $data['sup'] = $this->m_suplier->getData();
        $data['edit'] = $this->m_barang->getBarangMasuk();
        $data['data'] = $this->m_barang->getBarangMasuk();
        $this->load->view('admin/barang/v_barang_masuk', $data); 
    }

    

    function addBarang(){
        // $user = $this->session->userdata('ses_id');

        $faktur = $this->session->userdata('faktur');
        $tanggal = $this->session->userdata('tgl');
        $suplier = $this->session->userdata('sup');

        foreach ($this->cart->contents() as $i) {
            $id = $i['id'];
        };

        if(!empty($faktur) && !empty($tanggal) && !empty($suplier) && !empty($id)){
			$masuk_kode=$this->m_barang->kode_masuk();
			$order_proses=$this->m_barang->saveBarangMasuk($faktur,$tanggal,$suplier,$masuk_kode);
			if($order_proses){
				$this->cart->destroy();
				$this->session->unset_userdata('faktur');
				$this->session->unset_userdata('tgl');
				$this->session->unset_userdata('sup');
				echo $this->session->set_flashdata('msg','');
				redirect('admin/produk/barang_masuk');	
			}else{
				redirect('admin/produk/barang_masuk');
			}
		}else{
			echo $this->session->set_flashdata('fail','');
			redirect('admin/produk/barang_masuk');
		}

        redirect('admin/produk/barang_masuk');
    }

    function addCart(){
        $user = $this->session->userdata('ses_id');
        $faktur = $this->input->post('faktur');
        $tanggal = $this->input->post('tanggal');
        $suplier = $this->input->post('suplier');

        $this->session->set_userdata('faktur', $faktur);
        $this->session->set_userdata('tgl', $tanggal);
        $this->session->set_userdata('sup', $suplier);

        $id = $this->input->post('kode_brg');
        $satuan = $this->input->post('satuan');
        $kategori = $this->input->post('kategori');
        $jumlah = $this->input->post('jumlah');

        $produk = $this->m_barang->getDataById($id);
        $i = $produk->row_array();

        $data = array(
            'id'      => $i['barang_id'],
            'qty'     => $jumlah,
            'name'    => $i['barang_nama'],
            'satuan'  => $satuan,
            'kat'     => $kategori
        );
    
        $this->cart->insert($data);
    
        redirect('admin/produk/barang_masuk');
    }

    function remove($rowid){
        $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );

        $this->cart->update($data);
		redirect('admin/produk/barang_masuk');
    }

    function getBarang(){
        $id = $this->input->post('kode_brg');
        $data['data'] = $this->m_barang->getBarangById($id);
        $this->load->view('admin/barang/v_masuk_barang',$data);
        
    }

    function detail_masuk(){
        $nofak = $_GET['nofak'];
        $x = $this->m_barang->detail_masuk($nofak);
        $data['data'] = $this->m_barang->detail_masuk($nofak);
        $this->load->view('admin/barang/v_detail_masuk', $data);
    }

}

/* End of file Barang.php */


?>