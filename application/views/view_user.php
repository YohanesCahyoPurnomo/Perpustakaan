<div id="isi">
    <table border="2" align=center>
    <?php 
    if (empty($list)){
     echo ' Tidak terdapat user';
    }
    else
    {
    echo'
    <center><b><u>Daftar Anggota Perpustakaan</u></b></center><br>
        <tr>
            <td align=center width="150" bgcolor="006633">Nim </td>
            <td align=center width="150" bgcolor="006633">Nama Lengkap</td>
            <td align=center width="150" bgcolor="006633">Alamat</td>
            <td align=center width="150" bgcolor="006633">No.Telepon</td>
           
        </tr>';}?>
        <?php foreach ($list as $data) {
            echo '
    <tr>
        <td align=center>'.$data->nim.'</td>
        <td>'.$data->nama_lengkap.'</td>
        <td>'.$data->alamat.'</td>
        <td align=center>'.$data->notlp.'</td>';
        } ?>
        </tr>
    </table>
</div>
