<?php
class input_model extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function input_buku($input) {
        $test = array(
            'ID_Buku' => $input['ID_Buku'],
            'Judul' => $input['Judul'],
            'Pengarang' => $input['Pengarang'],
            'Penerbit' => $input['Penerbit'],
            'Tahun_Terbit' => $input['Tahun_Terbit'],
            'Tempat_Terbit' => $input['Tempat_Terbit'],
        );
        $this->db->insert('buku', $test);
    }

    /*function cekobat($test) {
        $querypenjualan = $this->db->query("SELECT nama_obat,stock,jenis_obat from transaksi where id_pelanggan='$test'");
        return $querypenjualan->result();
    }*/


    function tampil(){
        $tampil = $this->db->query("SELECT * from buku");
        return $tampil->result();
    }

}


?>