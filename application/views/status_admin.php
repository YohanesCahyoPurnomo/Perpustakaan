<div id="isi">
    <script type=application/javascript>
        $(function(){
            $("#pinjam").submit(function(){
                dataString=$("#pinjam").serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>/pinjam/transaksi",
                    dataType: "json",
                    data : dataString,
                    cache:false,
                    success: function(msg){
                        alert('Registrasi Berhasil!');
                    }
                });
                return false;
            });
        });
    </script>
    <table border="0" align="center">
        <form id="pinjam" method="post" enctype="multipart/form-data">
            <tr>
                <td>Tanggal Peminjaman</td>
                <td><input text="text" name="pinjam[tanggal]" value="<?php $tanggal = date('Y-m-d');
                    echo $tanggal ?>"></td>
            </tr>
			<tr>
                <td>Nim</td>
                <td><select name='pinjam[nim]'>
                        <?php foreach ($nim as $data) {
                            echo
                            '<option value='.$data->nim.'>'.$data->nim.'</option>';} ?>
                    </select>
                </td>
            <tr>
                <td>Judul Buku</td>
                <td><select name='pinjam[judul]'>
                        <?php foreach ($judul as $data) {
                            echo
                            '<option value='.$data->Judul.'>'.$data->Judul.'</option>';} ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="pinjam[jumlah]"></td>
            </tr>
            <tr>
                <td><input type="submit" name="transaksi" value="Simpan"></td>
            </tr>
        </form>
    </table>
</div>