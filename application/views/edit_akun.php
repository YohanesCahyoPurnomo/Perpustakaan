
<link href="<?= base_url() ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>css/menustyles.css" rel="stylesheet" type="text/css">
<script type=application/javascript>
    $(function(){
        $("#daftar").submit(function(){
                    
            dataString=$("#daftar").serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>/member/edit_akun",
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
    <?php foreach ($result as $data) {
     echo '<table border=0 align=center>
        <center><h2>Edit Akun</h2></center>
        <form id=daftar method=post enctype=multipart/form-data>
            <div class=input>
                <tr>
                    <td>Username</td>
					<td>:</td>
                    <td><input type=text name=data[username] value='.$data->username.'></td>
                </tr>
                <tr>
                    <td>Password</td>
					<td>:</td>
                    <td><em><strong><input type=text name=data[password] placeholder="Retype Your Password">Important!</em></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
					<td>:</td>
                    <td><input type=text name=data[nama_lengkap] value='.$data->nama_lengkap.'></td>
                </tr>
                <tr>
                    <td>Alamat</td>
					<td>:</td>
                    <td><input type=text name=data[alamat] value='.$data->alamat.'></td>
                </tr>
                <tr>
                    <td>No.Telp</td>
					<td>:</td>
                    <td><input type=text name=data[notlp] value='.$data->notlp.'></td>
                </tr>
                <tr>
                    <td>Tambahkan Foto</td>
					<td>:</td>
                    <td>  
                        <input type=file name=userfile size=20  value='.$data->foto.'/>
                    </td>
                </tr>
                <tr>
                    <td colspan=3 align=justify><input type=submit id=daftar value=Update style="background-color:#999900; width:150; height:50" >
                    <input type=reset name=reset value=Reset style="background-color:#999900; width:150; height:50"></td>
                </tr>
        </form>
    </table>'; }?>
</div>

