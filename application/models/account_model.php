<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account_model
 *
 * @author root
 */
class account_model extends CI_Model {

    private $table = 'user'; //nama tabel user

    function __construct() {
        parent::__construct();
    }

    function register($data, $insert) {
        $data = array(
            'nama_lengkap' => $data['nama_lengkap'],
            'nim' => $data['nim'],
            'alamat' => $data['alamat'],
            'notlp' => $data['notlp'],
            'foto' => $insert['foto'],
            'username' => $data['username'],
            'password' => $data['password'],
            'group' => $data['group'],
        );
        $this->db->insert('user', $data);
    }

    function login($username, $password) {
        $data = $this->db
                ->where(array('username' => $username, 'password' => md5($password)))
                ->get($this->table);
        //dicek
        if ($data->num_rows() > 0) {
            $user = $data->row();

            //data hasil seleksi dimasukkan ke dalam $session
            $session = array(
                'logged_in' => 1,
                'id_user' => $user->id_user,
                'group' => $user->group,
                'username' => $user->username,
                'foto' => $user->foto,
                'nim' => $user->nim,
            );

            //data dari $session akhirnya dimasukkan ke dalam session (menggunakan library CI)
            $this->session->set_userdata($session);
            return true;
        } else {

            $this->session->set_flashdata('Notification', 'Username dan Password tidak Sesuai');
            return false;
        }
    }
    
    function daftar_siswa(){
        $list = $this->db->query("SELECT * FROM `user` WHERE `group` LIKE 'Mahasiswa(i)' order by nim ");
        return $list->result();
    }

    function logout() {
        $this->session->sess_destroy();
    }
    
    function edit_akun($data, $insert,$ceknim){
         $data = array(
            'nama_lengkap' => $data['nama_lengkap'],
            'alamat' => $data['alamat'],
            'notlp' => $data['notlp'],
            'foto' => $insert['foto'],
            'username' => $data['username'],
            'password' => $data['password'],
        );
         $this->db->where('nim', $ceknim); 
         $this->db->update('user', $data); 
         
    }
    function edit($ceknim){
        $edit=$this->db->query("SELECT * from user where nim='$ceknim'");
        return $edit->result();
    }

}

?>
