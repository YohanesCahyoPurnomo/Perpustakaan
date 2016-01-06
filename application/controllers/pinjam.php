<?php
class pinjam extends CI_Controller {

    //nama tabel user
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->model('transaksi_model');
        if ($this->session->userdata('logged_in')) {     
        }else {
            redirect('member/login');
        }
    }

    function index() {
       
    }

    function transaksi() {
        $this->load->model('transaksi_model');
        $data['nim'] = $this->transaksi_model->get_Nim();
        $data['judul'] = $this->transaksi_model->get_Judul();
        $input = $this->input->post('pinjam');
        if (!empty($input)) {
            $this->transaksi_model->pinjam($input);
        }
        $this->load->view("header");
        $this->load->view('status_admin', $data);
        $this->load->view("footer");
    }

    function cek() {
        $ceknim = $this->session->userdata('nim');
        $cek['result'] = $this->transaksi_model->cekpinjam($ceknim);
        $this->load->view("header");
        $this->load->view('status_siswa', $cek);
        $this->load->view("footer");
    }
    
    function tampilkan (){
        $tampil['tampil']=$this->transaksi_model->tampil();
        $this->load->view("header");
        $this->load->view('view_pinjam', $tampil);
        $this->load->view("footer");
    }

}

?>
