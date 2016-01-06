<div id="isi">
    <table border="2" align=center>
    <?php 
    if (empty($tampil)){
     echo ' Daftar Buku Tidak Tersedia';
    }
    else{
    echo'
    <center><b><u>Daftar Buku  saat ini</u></b></center><br>
        <tr>
            <td align=center width="80" bgcolor="a36012">ID Buku</td>
            <td align=center width="200" bgcolor="a36012">Judul</td>
            <td align=center width="150" bgcolor="a36012">Pengarang</td>
            <td align=center width="80" bgcolor="a36012">Penerbit</td>
            <td align=center width="100" bgcolor="a36012">Tahun Terbit</td>
            <td align=center width="100" bgcolor="a36012">Tempat Terbit</td>
            
           
        </tr>';}?>
        <?php foreach ($tampil as $data) {
            echo '
    <tr>
        <td align=center>'.$data->ID_Buku.'</td>
        <td>'.$data->Judul.'</td>
        <td>'.$data->Pengarang.'</td>
        <td>'.$data->Penerbit.'</td>
        <td align=center>'.$data->Tahun_Terbit.'</td>
        <td align=center>'.$data->Tempat_Terbit.'</td>';
        } ?>
        </tr>
    </table>
</div>
