<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

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
                <li class="waves-effect"><a href="#"><i class="material-icons">shopping_cart</i></a></li>
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


<!--konten-->
<div class="warna-grey-sedikit">
    <div class="container">
        <div class="row">
            <div class="col s12 pembayaran-content">
                <div class="row pembayaran-header">
                    <div class="col s6 left-align tulisan-hijau-gelap">
                        <h5><b>Total Pembayaran</b></h5>
                    </div>

                    <div class="col s6 right-align tulisan-hijau-gelap">
                        <h5><b>Rp.<?php echo 1200000;?></b></h5>
                    </div>

                    <div class="col s12">
                        <a class="btn btn-large waves-effect waves-light warna-kuning-gelap modal-trigger" href="#bayar">metode pembayaran</a>

                        <!--ini struktur modal-->
                        <div id="bayar" class="modal">
                            <div class="modal-content">
                                <h4>Metode Pembayaran</h4>

                                <hr>

                                <p>Total Pembayaran: <b>Rp.<?php echo 1200000;?></b></p>

                                <hr>

                                <ul class="collection with-header">
                                    <li class="collection-header"><h4>Tranfer Bank</h4></li>
                                    <li class="collection-item"><div><a id="mandiri" href="#">Mandiri<span class="secondary-content"><i class="material-icons">send</i></span></a></div></li>
                                    <li class="collection-item"><div><a id="BCA" href="#">BCA<span class="secondary-content"><i class="material-icons">send</i></span></a></div></li>
                                    <li class="collection-item"><div><a id="BRI" href="#">BRI<span class="secondary-content"><i class="material-icons">send</i></span></a></div></li>
                                    <li class="collection-item"><div><a id="BNI" href="#">BNI<span class="secondary-content"><i class="material-icons">send</i></span></a></div></li>
                                </ul>

                                <ul class="collection with-header">
                                    <li class="collection-header"><h4>Gerai Retail</h4></li>
                                    <li class="collection-item"><div><a id="alfa" href="#">Alfamart<span class="secondary-content"><i class="material-icons">send</i></span></a></div></li>
                                    <li class="collection-item"><div><a id="indomart" href="#">IndoMart<span class="secondary-content"><i class="material-icons">send</i></span></a></div></li>
                                </ul>

                            </div>
                        </div>
                        <!--akhir ini struktur modal-->
                    </div>
                </div>

                <hr>

                <?php foreach ($keranjang_item as $item) { ?>

                <div class="row pembayaran-daftar">
                    <ul class="collapsible">
                        <li>    <!-- awal daftar pembelian -->
                            <div class="collapsible-header">
                                <?php echo "Toko ".$item['cartID']; ?>
                                <i class="material-icons">arrow_drop_down</i>
                            </div>

                            <div class="collapsible-body">
                                <ul class="collection">
                                    <li class="collection-item avatar">
                                        <img src="img/frezier1.jpg" alt="" class="circle">
                                        <span class="title">Nama Produk: <br> <?php echo $item['produkNama']?></span>
                                        <p>
                                            Deskripsi:<br>
                                            <?php echo $item['deskripsiProduk'];?>
                                            <br>
                                        </p>
                                        <p>
                                            <?php echo $item['harga'];?>
                                        </p>

                                        <a href="#!" class="secondary-content">
                                            <i class="material-icons red-text">delete</i>
                                        </a>
                                    </li>
                                </ul>

                                <hr>

                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            Informasi Detail
                                            <i class="material-icons">arrow_drop_down</i>
                                        </div>

                                        <div class="collapsible-body clearfix">
                                            <span>
                                                <p><span class="pembayaran-title">Penerima</span><span class="pembayaran-isi">:</span><b><?php echo $item['nama']?></b></p>

                                                <p><span class="pembayaran-title">Kurir Pengirim</span><span class="pembayaran-isi">:</span><b>JNE</b></p>

                                                <p><span  class="pembayaran-title">Total Barang</span><span class="pembayaran-isi">:</span><b><?php echo $item['jumlah_produk']?></b></p>

                                                <p><span class="pembayaran-title">Subtotal</span><span class="pembayaran-isi">:</span><b>Rp <?php echo $item['totalHarga'] *$item['jumlah_produk'];?></b></p>

                                                <p><span class="pembayaran-title">Biaya Kirim</span><span class="pembayaran-isi">:</span><b>Rp 15.000</b></p>
                                            </span>
                                        </div>
                                    </li>
                                </ul>

                                <hr>

                                <h4 class="clearfix"><span class="left">Total: </span><span class="right"><?php echo $item['totalHarga'] * $item['jumlah_produk'] + 15000;?></span></h4>
                            </div>
                        </li> <!-- akhir daftar pembelian -->


                    </ul>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>
<!--akhir konten-->



<!--footer-->
<footer class="page-footer warna-grey-sedikit" style="background-image: url(<?php echo base_url(); ?>assets/img/background.jpg);">
    <div class="container green-text" style="text-align: left;">
        <p>AGRID (Agriculture Indonesia) merupakan sebuah wadah bagi para pemilik lahan atau petani untuk
            <br>mendapatkan pupuk yang berkualitas dan dengan harga yang terjangkau.
        </p>
    </div>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col s4">
                <img src="<?php echo base_url(); ?>assets/img/logo-agrid.png" style="width: 100px;">
                <p class="black-text">
                    <i class="material-icons">local_phone</i>
                    +62 89 687 837 120
                </p>

                <p class="black-text">
                    <i class="material-icons">email</i>
                    agrid@gmail.com
                </p>

                <p class="black-text">
                    <i class="material-icons">location_on</i>
                    Jl. Veteran No.8, Malang, 65145, Indonesia
                </p>
            </div>

            <div class="col s4">
                <h5 class="tulisan-hijau-gelap">More Links</h5>
                <ul class="icon-saya">
                    <li><a class="btn-floating btn-small waves-effect waves-light"><img src="<?php echo base_url(); ?>assets/img/instagram.svg"></a></li>
                    <li><a class="btn-floating btn-small waves-effect waves-light"><img src="<?php echo base_url(); ?>assets/img/facebook.svg"></a></li>
                    <li><a class="btn-floating btn-small waves-effect waves-light"><img src="<?php echo base_url(); ?>assets/img/line.svg"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container center-align black-text">
            © 2018 Agrid, All rights reserved.
        </div>
    </div>
</footer>
<!--akhir footer-->

<script src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>