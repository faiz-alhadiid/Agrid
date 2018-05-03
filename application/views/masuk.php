<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Masuk</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/logo.png">
</head>
<body style="background-image: url(<?php echo base_url(); ?>assets/img/background-form.jpg)">
    <!--isi content-->
    <div class="container center">
        <img src="<?php echo base_url(); ?>assets/img/logo-agrid.png" class="logo-form">
        <div class="row center" style="margin-left: -2px;">
            <div class="col offset-m4 z-depth-4 masuk-login" style="width:320px;">
                <form id="form-daftar" name="form-daftar" method="post" action="">
                    <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 30px;">
                        <input id="email" type="text" class="validate" >
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 0px;">
                        <input id="password" type="password" class="validate" >
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 30px; margin-bottom: 20px;">
                        <a class="waves-effect waves-light btn warna-hijau-gelap" style="width:100%;">MASUK</a>
                    </div>
                </form>
                <p class="center" style="margin-bottom: 35px;">belum memiliki akun? <a href="#">Daftar</a></p>
            </div>
        </div>
    </div>
    <!--akhir isi kontent-->

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>