<div id="isi">
    <table border="2" align=center>
        Hi <?php $a = $this->session->userdata('username');
echo $a = ucfirst($a);
?>,<?php 
    if (empty($result)){
     echo ' <center><b><u>saat ini Anda tidak meminjam buku</u></b></center>';
    }
    else{
    echo'
    <br><center><b><u>Daftar Buku yang Anda Pinjam</u></b></center>
		<br>
        <tr>
            <td align=center width="300" bgcolor="brown">Judul Buku </td>
            <td align=center width="150" bgcolor="brown">Jumlah </td>
            <td align=center width="150" bgcolor="brown"> Tanggal Peminjaman</td>
        </tr>';}?>
        
        <?php foreach ($result as $data) {
            echo '
    <tr>
        <td>' . $data->judul . '</td>
        <td align=center>' . $data->jumlah . '</td>
        <td align=center>' . $data->tanggal . '</td>';
        } ?>
        </tr>
    </table>
</div>
