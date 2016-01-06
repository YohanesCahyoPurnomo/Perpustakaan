<div id="isi">
    <table border="2" bordercolor="000000" align=center>
   <?php 
    if (empty($tampil)){
     echo ' Saat ini tidak ada yang meminjam buku';
    }
    else{
    echo'
	<center><b><u>Daftar peminjam Buku saat ini</u></b></center><br>
        <tr>
            <td align=center width="150" bgcolor="993399">Nim </td>
            <td align=center width="200" bgcolor="993399">Judul Buku </td>
            <td align=center width="100" bgcolor="993399">Jumlah </td>
            <td align=center width="170" bgcolor="993399"> Tanggal Peminjaman</td>
        </tr>';}?>
        
        <?php foreach ($tampil as $data) {
            echo '
		<tr>
			<td align=center>'.$data->nim.'</td>
			<td>'.$data->judul.'</td>
			<td align=center>'.$data->jumlah.'</td>
			<td align=center>'.$data->tanggal .'</td>';
        } ?>
        </tr>
    </table>
</div>
