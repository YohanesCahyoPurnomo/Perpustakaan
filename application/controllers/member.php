<?php

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->model('account_model');
       
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $this->utama();
        } else {
            redirect('member/login');
        }
    }

    function register() {
        $form_data = $this->input->post('data');
        if (!empty($form_data)) {
            $form_data['password'] = md5($form_data['password']);

            $sub_data = array(
                'error' => '',
                'result' => ''
            );


            $config['upload_path'] = 'images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '5000';
            //$config['max_width'] = '1024';
            //$config['max_height'] = '768';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $sub_data['error'] = $this->upload->display_errors();
            } else {
                $sub_data['result'] = $this->upload->data();
                $file_name = $sub_data['result'];
                $nama = $file_name['file_name'];
                $insert_data = array(
                    'foto' => $nama,
                );
            }


            $this->account_model->register($form_data, $insert_data);

            $this->session->set_flashdata('berhasil', 'Pendaftaran berhasil, Anda dapat masuk ke dalam sistem');
        }
        $this->load->view("header");
        $this->load->view('register');
        $this->load->view("footer");
    }
    //fungsi edit
    function edit_akun(){
        $ceknim = $this->session->userdata('nim');
        $form_data = $this->input->post('data');
        if (!empty($form_data)) {
            $form_data['password'] = md5($form_data['password']);

            $sub_data = array(
                'error' => '',
                'result' => ''
            );


            $config['upload_path'] = 'images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '500';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $sub_data['error'] = $this->upload->display_errors();
            } else {
                $sub_data['result'] = $this->upload->data();
                $file_name = $sub_data['result'];
                $nama = $file_name['file_name'];
                $insert_data = array(
                    'foto' => $nama,
                );
            }


            $this->account_model->edit_akun($form_data, $insert_data,$ceknim);
            redirect('member/index');
            echo 'Update Akun Berhasil'; 
            }
            $anu['result']=$this->account_model->edit($ceknim);
            $this->load->view("header");
            $this->load->view('edit_akun',$anu);
            $this->load->view("footer");
    }

    //fungsi ketika login
    function login() {
        $form_data = $this->input->post('data');
        if (!empty($form_data)) {
            if ($this->account_model->login($form_data['username'], $form_data['password'])) {
                redirect('member/index');
            } else {
                redirect('member/login');
            }
        }
        $this->load->view('login');
    }

    //logout
    function logout() {
        $this->account_model->logout();
        redirect('member/login');
    }

    //load halaman utama
    function utama() {
        if ($this->session->userdata('logged_in')) {     
        }else {
            redirect('member/login');
        }
        $this->load->view("header");
        $this->load->view("content");
        $this->load->view("footer");
    }

    function daftar(){
     $daftar['list']=$this->account_model->daftar_siswa();
     $this->load->view("header");
     $this->load->view('view_user', $daftar);
     $this->load->view("footer");
    }
	
	function buku(){
        $this->load->model('input_model');
        $data['result'] = $this->transaksi_model->get_Nim();
        $input = $this->input->post('pinjam');
        if (!empty($input)) {
            $this->transaksi_model->pinjam($input);
        }
        $this->load->view("header");
        $this->load->view('input_model', $data);
        $this->load->view("footer");
    }   
}

?>
