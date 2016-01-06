<?php

class input extends CI_Controller 
{

    //nama tabel user
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->model('input_model');
        if ($this->session->userdata('logged_in')) {     
        }else {
            redirect('member/login');
        }
    }
	 function index() {
       
    }
		
	function input_buku() {
				$this->load->model('input_model');
				$input = $this->input->post('buku');
				if (!empty($input)) {
					$this->input_model->input_buku($input);
				}
				$this->load->view("header");
				$this->load->view('buku');
				$this->load->view("footer");
			 }

	function tampilkan (){
        $tampil['tampil']=$this->input_model->tampil();
        $this->load->view("header");
        $this->load->view('viewbuku', $tampil);
        $this->load->view("footer");
    }

}
?>