
<link href="<?= base_url() ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>css/menustyles.css" rel="stylesheet" type="text/css">
<script type=application/javascript>
    $(function(){
        $("#daftar").submit(function(){
                    
            dataString=$("#daftar").serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>/member/buku",
                dataType: "json",
                data : dataString,
                cache:false,
                success: function(msg){
                    alert('Buku berhasil diinput!');
                }
            });
            return false;
        });
    });
</script>
<div id="isi">

    <table border="0" align=center>
        <h2><center><b><u>Form Input Buku</u></b></center></h2>
        <form id="buku" method="post" enctype="multipart/form-data">
            <div class="input">
                <tr>
                    <td>ID Buku</td>
                    <td><input type="text" name="buku[ID_Buku]"></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="buku[Judul]"></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td><input type="text" name="buku[Pengarang]"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td><input type="text" name="buku[Penerbit]"></td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td><input type="text" name="buku[Tahun_Terbit]"></td>
                </tr>
                <tr>
                    <td>Tempat Terbit</td>
                    <td><input type="text" name="buku[Tempat_Terbit]"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" id="input_buku" value="Simpan" style="background-color:#CC6600;" >
                    <input type="reset" name="reset" value="Hapus" style="background-color:#CC6600;" ></td>
                </tr>
        </form>
    </table>
</div>

