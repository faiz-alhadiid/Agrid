
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AGRID</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/lightbox.min.css">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/logo.png">
</head>
<body>
<!--header-->
    <!--awal navigasi-->
    <div class="navbar-fixed">
        <nav class="warna-hijau-gelap">
                <div class="nav-wrapper">
                    <a href="<?php echo base_url();?>" class="brand-logo"><img src="<?php echo base_url(); ?>assets/img/logo-agrid.png" class="item-logo" style="width:90px"></a>
                    <a href="#" data-activates="mobile-menu" class="button-collapse">
                        <i class="material-icons">menu</i>
                    </a>

                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-trigger dropdown-button" href="#!" data-activates="dropdown1">Kategori<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li>
                            <div class="row" style="width: 800px;">
                                <div class="col s12">
                                    <div class="row">
                                        <form action = "<?= base_url()?>search">
                                            <div class="input-field col s12 white-text">
                                                <i class="white-text material-icons prefix">search</i>
                                                <input type="text" placeholder="Ketik disini untuk Pencarian Pupuk" class="white-text-text" name="value">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="waves-effect"><a href="#"><i class="material-icons">shopping_basket</i></a></li>
                        <li class="waves-effect"><a href="<?= base_url()?>pembayaran"><i class="material-icons">shopping_cart</i></a></li>
                        <?php if(isset($_SESSION['nama'])&&isset($_SESSION['email'])) {?>
                        
                        <li class="waves-effect"><a href="<?php echo base_url(); ?>logout">Logout</a></li>
                        <?php } else { ?>
                        <li class="waves-effect"><a href="<?php echo base_url(); ?>register">Daftar</a></li>
                        <li class="waves-effect"><a href="<?php echo base_url(); ?>login">Masuk</a></li>
                        <?php }?>
                    </ul>

                    <ul class="side-nav" id="mobile-menu">
                        <li>
                            <div class="row" style="width: 800px">
                                <div class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12 white-text">
                                            <i class="black-text material-icons prefix">search</i>
                                            <input type="text" placeholder="Cari Pupuk" class="white-text-text" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="waves-effect"><a href="#">toko</a></li>
                        <li class="waves-effect"><a href="#">daftar</a></li>
                        <li class="waves-effect"><a href="#">masuk</a></li>
                    </ul>

                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="#!">Pupuk Organik</a></li>
                        <li><a href="#!">Pupuk Anorganik</a></li>
                    </ul>
                </div>
        </nav>
    </div>