<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar extends CI_Controller {

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
        $data['data'] = $this->m_barang->getBarangKeluar();
        $data['update'] = $this->m_barang->getBarangKeluar();
        $data['delete'] = $this->m_barang->getBarangKeluar();

        $this->load->view('admin/barang/v_barang_keluar', $data);
    }

    function addBarang(){

        $tanggal = $this->session->userdata('tgl');

        foreach ($this->cart->contents() as $i) {
            $id = $i['id'];
            $jumlah = $i['qty'];
        };

        if(!empty($tanggal) && !empty($id)){
            $masuk_id = $this->m_barang->masuk_id();
			$kode_trx=$this->m_barang->kode_keluar();
			$order_proses=$this->m_barang->saveBarangKeluar($masuk_id,$tanggal,$kode_trx);
            $this->db->query(" update tb_barang set barang_stok=barang_stok+'$jumlah' where barang_id='$id' ");
			if($order_proses){
				$this->cart->destroy();
				$this->session->unset_userdata('tgl');
				echo $this->session->set_flashdata('msg','');
				redirect('admin/produk/barang_keluar');	
			}else{
				redirect('admin/produk/barang_keluar');
			}
		}else{
			echo $this->session->set_flashdata('fail','');
			redirect('admin/produk/barang_keluar');
		}

        redirect('admin/produk/barang_keluar');
    }

    function addCart(){
        $user = $this->session->userdata('ses_id');
        $tanggal = $this->input->post('tanggal');

        $this->session->set_userdata('tgl', $tanggal);

        $id = $this->input->post('kode_brg');
        $satuan = $this->input->post('satuan');
        $stok = $this->input->post('kategori');
        $jumlah = $this->input->post('jumlah');

        $produk = $this->m_barang->getDataById($id);
        $i = $produk->row_array();
        if(($jumlah)>($stok)){
            echo $this->session->set_flashdata('fail',' Ket :<b>Stok Tidak Cukup !</b>');
			redirect('admin/produk/barang_keluar');
        }else{
            $data = array(
                'id'      => $i['barang_id'],
                'qty'     => $jumlah,
                'name'    => $i['barang_nama'],
                'satuan'  => $satuan,
                'kat'     => $stok
            );
            $this->cart->insert($data);

            $this->db->query(" update tb_barang set barang_stok=barang_stok-'$jumlah' where barang_id='$id' ");
            
            redirect('admin/produk/barang_keluar');
        }
            redirect('admin/produk/barang_keluar');
    }

    function remove($rowid){
        
        foreach ($this->cart->contents() as $i) {
            $this->db->query("update tb_barang set barang_stok=barang_stok+'$i[qty]' where barang_id='$i[id]' ");
        }

        $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );

        $this->cart->update($data);
        

		redirect('admin/produk/barang_keluar');
    }

    function getBarang(){
        $id = $this->input->post('kode_brg');
        $data['data'] = $this->m_barang->getBarangById($id);
        $this->load->view('admin/barang/v_keluar_barang',$data);
        
    }

    function detail_keluar(){
        $trx = $_GET['trx_id'];
        $x = $this->m_barang->detail_keluar($trx);
        $data['data'] = $this->m_barang->detail_keluar($trx);
        $this->load->view('admin/barang/v_detail_keluar', $data);
    }

}

/* End of file Barang_keluar.php */


?>