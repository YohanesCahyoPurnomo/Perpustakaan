
<link href="<?= base_url() ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>css/menustyles.css" rel="stylesheet" type="text/css">
<script type=application/javascript>
    $(function(){
        $("#daftar").submit(function(){
                    
            dataString=$("#daftar").serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>/member/register",
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
<div id="isi">

    <table align="center">
        <center><u><b>Form Registrasi</b></u> </center>
        <form id="daftar" method="post" enctype="multipart/form-data">
            <div class="input">
                <tr>
                    <td>Username</td>
					<td>:</td>
                    <td><input type="text" name="data[username]"></td>
                </tr>
                <tr>
                    <td>Password</td>
					<td>:</td>
                    <td><input type="password" name="data[password]"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
					<td>:</td>
                    <td><input type="text" name="data[nama_lengkap]"></td>
                </tr>
                <tr>
                    <td>Nim</td>
					<td>:</td>
                    <td><input type="text" name="data[nim]"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
					<td>:</td>
                    <td><input type="text" name="data[alamat]"></td>
                </tr>
                <tr>
                    <td>No.Telp</td>
					<td>:</td>
                    <td><input type="text" name="data[notlp]"></td>
                </tr>
                <tr>
                    <td>Tambahkan Foto</td>
					<td>:</td>
                    <td>  
                        <input type="file" name="userfile" size="20" />
                    </td>

                </tr>
                <tr>
                    <td>Hak Akses</td>
					<td>:</td>
                    <td>
                        <select name="data[group]">
                            <option value="admin">Administrator</option>
                            <option value="Mahasiswa(i)">Mahasiswa(i)</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="justify"><input type="submit" id="daftar" value="Daftar" style="background-color:#999900; width:150; height:50">
                    <input type="reset" name="reset" value="Reset" style="background-color:#999900; width:150; height:50"></td>
                </tr>
        </form>
    </table>
</div>

