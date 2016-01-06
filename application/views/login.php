<html>
    <head>
        <title>Login</title>
        <link href="<?= base_url() ?>css/style.css" rel="stylesheet" type="text/css">
        <script type=application/javascript>
            $(function(){
                $("#login").submit(function(){
                    
                    dataString=$("#login").serialize();
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>/member/login",
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
    </head>
    <body>
        <div id="login">
            <center><img src="<?= base_url() ?>images/login,.png"></center>
            <table border="0" align="center">
                <form id="login" method="post" >

                    <div class="input">
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><input type="text" name="data[username]" placeholder="Masukkan Username"></td>
							<td rowspan="2"><input type="submit" name="login" value="Login" style="background-color:#996600; width:100; height:50"</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="data[password]" placeholder="Masukkan Password"></td>
                        </tr>
						<tr height="20"></tr>
                    </div>
            </table> 
        </form>
    </div>    
</body>
</html>