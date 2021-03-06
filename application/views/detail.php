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
            <div class="col s12 breadcrumb-margin">   <!--beacrum-->
                <a href="#!" class="breadcrumb black-text">First</a>
                <a href="#!" class="breadcrumb black-text">Second</a>
                <a href="#!" class="breadcrumb black-text">Third</a>
            </div>  <!--akhir beacrum-->
        </div>

        <div class="row">
            <div class="col s12 m4"> <!--side bar-->
                <div class="white side-bar">
                    <div class="title-sidebar">
                        <h5 class="center">Harga</h5>
                    </div>
                    <div class="kategori-side-bar isi-side-bar center">
                        <p class="orange-text">Rp <?php echo $detail_item[0]->harga; ?></p>

                        <a href="#modal-beli" class="modal-trigger btn btn-block waves-light waves-effect warna-kuning-gelap" style="width: 80%; border-radius: 10px">Beli</a>
                        <!-- Modal Structure -->
                        <div id="modal-beli" class="modal">
                            <div class="modal-content left-align">
                                <h4>Beli</h4>
                                <hr>

                                <div class="row"> <!-- definisi Produk yang mau di beli -->
                                    <div class="col s4">
                                        <img src="<?php echo base_url(); ?>assets/img/frezier3.jpg" class="circle responsive-img">
                                    </div>

                                    <div class="col s8">
                                        <div class="col s12">
                                            Nama Produk:<br>
                                            <span class="tulisan-hijau-gelap"><b><?php echo $detail_item[0]->produkNama?></b></span>
                                        </div>

                                        <div class="col s4 input-field">
                                            <input placeholder="ini di sini" id="num-beli" type="number" class="validate">
                                            <label for="num-beli">Jumlah Barang</label>
                                        </div>

                                        <div class="col s4">
                                            Harga Barang<br>
                                        <?php echo $detail_item[0]->harga; ?>
                                        </div>

                                        <div class="input-field col s4">
                                            <select>
                                                <option value="" disabled selected>Your option</option>
                                                <option value="1">Tidak</option>
                                                <option value="2">Ya</option>
                                            </select>
                                            <label>Asuransi</label>
                                        </div>
                                    </div>
                                </div> <!-- definisi Produk yang mau di beli -->

                                <hr>

                                <div class="row"><!-- awal form pengisina beli-->
                                    <h5>Tambah Alamat</h5>
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                                <label for="first_name">First Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" class="validate">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                                                <label for="disabled">Disabled</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="password" type="password" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="pos" type="number" class="validate">
                                                <label for="pos">pos kode</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <input id="telp" type="number" class="validate">
                                                <label for="telp">no. Telp</label>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- akhir form pengisina beli-->
                            </div> <!-- akhir isi konten-->

                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col s6">
                                        <button class="btn waves-light waves-effect warna-hijau-gelap" style="width: 100%"><span class="white-text">Batal</span></button>
                                    </div>

                                    <div class="col s6">
                                        <button class="btn waves-light waves-effect warna-kuning-gelap" style="width: 100%"><span class="white-text">Simpan</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p><a href="" class="black-text">Tambah ke Wislit</a></p>
                    </div>

                    <div class="title-sidebar">
                        <h5 class="center">Info Penjual</h5>
                    </div>
                    <div class="isi-side-bar center">
                        <i class="material-icons account-size">account_circle</i>

                        <p>Pupuk Sejahtera <br>
                            Mojokerto</p>

                        <div class="left-align" style="margin-left: 15px">
                            <p><b>Online: </b>10 menit yang lalu</p>
                            <p><b>Transaksi: </b>100%</p>
                            <p><b>Produk Terjual: </b>120K</p>
                        </div>
                    </div>

                    <div class="title-sidebar">
                        <h5 class="center">Hitung Pupuk</h5>
                    </div>
                    <div class="isi-side-bar center">
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                <input type="number" class="validate" id = 'luasTanah'>
                                <label>Masukan Luas Lahan perhektar</label>
                            </div>
                            <div class="input-field col s10 offset-s1">
                                <select id = 'statusP'>
<!--                                    --><?php //foreach ($detail_item as $item){ ?>
<!--                                    <option value="1">--><?php //echo $item['namaKategori'];?><!--</option>-->
<!--                                    --><?php //} ?>

                                    <option value="0">Rendah</option>
                                    <option value="1">Sedang</option>
                                    <option value="2">Tinggi</option>
                                </select>
                                <label>Masukkan nilai kandungan unsur Fosfor</label>
                            </div>
                            <div class="input-field col s10 offset-s1">
                                <select id = 'statusK'>
<!--                                    --><?php //foreach ($detail_item as $item){ ?>
<!--                                    <option value="1">--><?php //echo $item['namaKategori'];?><!--</option>-->
<!--                                    --><?php //} ?>

                                    <option value="0">Rendah</option>
                                    <option value="1">Sedang</option>
                                    <option value="2">Tinggi</option>
                                </select>
                                <label>Masukkan nilai kandungan unsur Kalium</label>
                            </div>
                            <div class="input-field col s10 offset-s1">
                                <select id = 'jenis'>
<!--                                    --><?php //foreach ($detail_item as $item){ ?>
<!--                                    <option value="1">--><?php //echo $item['namaKategori'];?><!--</option>-->
<!--                                    --><?php //} ?>

                                    <option value="0">Pupuk NPK15-15-15</option>
                                    <option value="1">Pupuk NPK10-10-10</option>
                                    <option value="2">Pupuk NPK30-6-8</option>
                                </select>
                                <label>Pilih Jenis Pupuk</label>
                            </div>
                        </div>

                        <button class="btn btn-block waves-effect waves-light warna-kuning-gelap beli-btn">Hitung</button>
                    </div>

                </div>
            </div> <!-- akhir side bar-->

            <div class="col s12 m8 white box-produk"> <!-- pilih gambar dan share -->
                <div class="row">
                    <div class="col s12">
                        <h5><b><?php echo $detail_item[0]->produkNama; ?></b></h5>
                    </div>
                </div>

                <div class="row bagi-select">
                    <div class="col s12">
                        <div class="left">
                            <ul class="icon-saya">
                                <li class="tambah">Bagikan:</li>
                                <li><img src="<?php echo base_url(); ?>assets/img/google-plus.svg"></li>
                                <li><img src="<?php echo base_url(); ?>assets/img/linkedin.svg"></li>
                                <li><img src="<?php echo base_url(); ?>assets/img/line.svg"></li>
                                <li><img src="<?php echo base_url(); ?>assets/img/instagram.svg"></li>
                                <li><img src="<?php echo base_url(); ?>assets/img/facebook.svg"></li>
                            </ul>
                        </div>
                    </div>

<!--                    <div class="input-field col s6">-->
<!--                        <select>-->
<!--                            <option value="" disabled selected>Choose your option</option>-->
<!--                            <option value="1">Option 1</option>-->
<!--                            <option value="2">Option 2</option>-->
<!--                            <option value="3">Option 3</option>-->
<!--                        </select>-->
<!--                        <label>Pilih Urutant</label>-->
<!--                    </div>-->
<!--                </div>-->

                <hr>

                <div class="row">
                    <div class="col s12">
                        <div class="carousel pilih-gambar-detail-produk">
                            <a class="carousel-item" href="<?php echo base_url(); ?>assets/img/frezier2.jpg" data-lightbox="datail-produk"><img src="<?php echo base_url(); ?>assets/img/frezier2.jpg"></a>
                            <a class="carousel-item" href="<?php echo base_url(); ?>assets/img/frezier1.jpg" data-lightbox="datail-produk"><img src="<?php echo base_url(); ?>assets/img/frezier1.jpg"></a>
                            <a class="carousel-item" href="<?php echo base_url(); ?>assets/img/frezier4.jpg" data-lightbox="datail-produk"><img src="<?php echo base_url(); ?>assets/img/frezier4.jpg"></a>
                            <a class="carousel-item" href="<?php echo base_url(); ?>assets/img/frezier3.jpg" data-lightbox="datail-produk"><img src="<?php echo base_url(); ?>assets/img/frezier3.jpg"></a>
                            <a class="carousel-item" href="<?php echo base_url(); ?>assets/img/frezier2.jpg" data-lightbox="datail-produk"><img src="<?php echo base_url(); ?>assets/img/frezier2.jpg"></a>
                        </div>
                    </div>
                </div>
            </div> <!-- akhir pilih gambar dan share-->

            <div class="col s12 m8 white box-produk" style="margin-top: 20px"> <!-- detail produk -->
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s4"><a class="active waves-effect" href="#test1">Detail Barang</a></li>
                            <li class="tab col s4"><a class="waves-effect" href="#test2">Ulasan</a></li>
                            <li class="tab col s4"><a class="waves-effect" href="#test3">Diskusi Produk</a></li>
                        </ul>
                    </div>

                    <div id="test1" class="col s12 deskripsi-produk">
                        <div class="row deskripsi-produk-indikator">
                            <div class="col s6">
                                <ul class="collection">
                                    <li class="collection-item"><div>Lihat<a href="#!" class="secondary-content"><i class="material-icons">pageview</i></a>: 35</div></li>
                                    <li class="collection-item"><div>Terjual<a href="#!" class="secondary-content"><i class="material-icons">add_shopping_cart</i></a>: 5</div></li>
                                    <li class="collection-item"><div>Kondisi<a href="#!" class="secondary-content"><i class="material-icons">label</i></a>: Baru</div></li>
                                </ul>
                            </div>

                            <div class="col s6">
                                <ul class="collection">
                                    <li class="collection-item"><div>Berat<a href="#!" class="secondary-content"><i class="material-icons">call_to_action</i></a>: 15 kg</div></li>
                                    <li class="collection-item"><div>Asuransi<a href="#!" class="secondary-content"><i class="material-icons">opacity</i></a>: Opsional</div></li>
                                    <li class="collection-item"><div>Min. Beli<a href="#!" class="secondary-content"><i class="material-icons">shopping_cart</i></a>: 1</div></li>
                                </ul>
                            </div>
                        </div>

                        <div class="deskripsi-produk-detail">
                            <div class="deskripsi-produk-detail-header">
                                <h5><?php echo $detail_item[0]->produkNama; ?></h5>
                            </div>

                            <div class="deskripsi-produk-detail-teks">
                                <?php echo $detail_item[0]->deskripsiProduk;?>
                            </div>
                        </div>
                    </div>

                    <div id="test2" class="col s12">Test 2</div>

                    <div id="test3" class="col s12">Test 3</div>
                </div>
            </div> <!-- akhir detail produk -->

        </div> <!-- akhir konten-->
    </div>
</div>
<!--akhir konten-->



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