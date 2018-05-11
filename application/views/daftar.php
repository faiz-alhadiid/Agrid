<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar</title>
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
            <?php echo form_open('register/process'); ?>
                <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 30px;">
                    <input id="nama" type="text" class="validate" name="nama" required>
                    <label for="nama">Nama Lengkap</label>
                </div>
                <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 0px;">
                    <input id="email" type="email" class="validate" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 0px;">
                    <input id="password" type="password" class="validate" name="password" required >
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 30px; margin-bottom: 20px;">
                    <input type="submit" value = "DAFTAR" class="waves-effect waves-light btn warna-hijau-gelap" style="width:100%;">                    
                </div>
            <?php echo form_close() ?>
            <p class="center" style="margin-bottom: 35px;">Sudah punya akun? <a href="#">Masuk</a></p>
        </div>
    </div>
</div>
<!--akhir isi kontent-->

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>