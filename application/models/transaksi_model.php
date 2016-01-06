<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of transaksi_model
 *
 * @author tuxkids
 */
class transaksi_model extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function pinjam($input) {
        $test = array(
            'nim' => $input['nim'],
            'judul' => $input['judul'],
            'jumlah' => $input['jumlah'],
            'tanggal' => $input['tanggal'],
        );
        $this->db->insert('transaksi', $test);
    }

    function cekpinjam($test) {
        $querypinjam = $this->db->query("SELECT judul,jumlah,tanggal from transaksi where nim='$test'");
        return $querypinjam->result();
    }

    function get_Nim() {
        $query = $this->db->query("SELECT * FROM `user` WHERE `group` LIKE 'Mahasiswa(i)' order by nim ");
        return $query->result();
    }
    
    function get_Judul() {
        $query = $this->db->query("SELECT Judul FROM buku order by ID_Buku ");
        return $query->result();
    }
    
    function tampil(){
        $tampil = $this->db->query("SELECT * from transaksi");
        return $tampil->result();
    }

}

?>
