<html>
    <head>
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="pragma" content="no-cache" />
        <title>Perpustakaan</title>
        <link href="<?= base_url() ?>css/style.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?= base_url() ?>css/menustyles.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
          <div id="panel">			
            <div  id="cssmenu">				
                <ul>
                    <?php
                    $z = $this->session->userdata('foto');
                    $a = $this->session->userdata('username');
                    $x = $this->session->userdata('group');
                    echo '<li><img src='.base_url().'images/'.$z.' height="100" width="80"></li>';
                    if ($x == 'admin') {
                        echo '<li class="has-sub"><a><span>Admin</span></a>
                                   <ul>
                                   <li><a href=' . base_url() . index_page() . '/member/register><span>Registrasi</span></a></li>
								   <li><a href=' . base_url() . index_page() . '/pinjam/transaksi><span>Transaksi Peminjaman</span></a></li>
                                   <li><a href=' . base_url() . index_page() . '/pinjam/tampilkan><span>Daftar Peminjaman</span></a></li>             
                                   <li><a href=' . base_url() . index_page() . '/member/daftar><span>Daftar Anggota</span></a></li>
								   <li><a href=' . base_url() . index_page() . '/input/input_buku><span>Input Buku</span></a></li>
								   <li><a href=' . base_url() . index_page() . '/input/tampilkan><span>Daftar Buku</span></a></li>
                                   </ul>

                              </li>';
                    } else {
                       echo '<li class="has-sub"><a><span>'.$a = ucfirst($a).'</span></a>
                                <ul>
                                <li><a href=' . base_url() . index_page() . '/pinjam/cek><span>Status</span></a></li>
                                <li><a href=' . base_url() . index_page() . '/input/tampilkan><span>Daftar Buku</span></a></li> 
                                </ul>
                             </li>';     
                    }
                    ?>
                  <li class="has-sub"><a href="<?php echo base_url() . index_page(); ?>/member/utama"><span>Beranda</span></a></li>
                    <li class="has-sub"><a><span>Pengaturan</span></a>
                      <ul>
                        <li><a href="<?php echo base_url().index_page();?>/member/edit_akun"><span>Edit Akun</span></a></li>
                            <li><a href="<?php echo base_url().index_page();?>/member/logout"><span>Logout</span></a></li>
                        </ul>
                  </ul>
            </div>
        </div>
   <div id="banner">
       <img src="<?=base_url()?>images/banner.png" height="90" width="600">
    </div>
</body>
</html>