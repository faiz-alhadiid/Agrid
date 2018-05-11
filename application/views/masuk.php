<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
    <!--isi content-->
    <div class="container center">
        <img src="<?php echo base_url(); ?>assets/img/logo-agrid.png" class="logo-form">
        <div class="row center" style="margin-left: -2px;">
            <div class="col offset-m4 z-depth-4 masuk-login" style="width:320px;">
                <?php echo form_open('login/verify') ?>
                    <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 30px;">
                        <input id="email" type="text" class="validate" name="email" >
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 0px;">
                        <input id="password" type="password" class="validate" name="password" >
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 30px; margin-bottom: 20px;">
                        <input type="submit" class = "waves-effect waves-light btn warna-hijau-gelap" style="width:100%;" value = "MASUK">
                    </div>
                    
                <?php echo form_close() ?>
                <p class="center" style="margin-bottom: 35px;">belum memiliki akun? <a href="#">Daftar</a></p>
            </div>
        </div>
    </div>
    <!--akhir isi kontent-->