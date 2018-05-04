<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body class="warna-grey-sedikit">
<!--header-->

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
                        <h5 class="center">Kategori</h5>
                    </div>
                    <div class="kategori-side-bar isi-side-bar">
                        <ul>
                            <li><a href="!#">Pupuk Organik</a></li>
                            <li><a href="!#">Pupuk Irigasi</a></li>
                            <li><a href="!#">Pupuk Lezat</a></li>
                            <li><a href="!#">Pupuk Apik</a></li>
                            <ul class="kategori-child">
                                <b>Pupuk Jos</b>
                                <li><a href="!#">Pupuk Best</a></li>
                            </ul>
                        </ul>
                    </div>

                    <div class="title-sidebar">
                        <h5 class="center">Harga</h5>
                    </div>
                    <div class="isi-side-bar">
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                <input type="number" class="validate">
                                <label>Rp. Maksimum</label>
                            </div>

                            <div class="input-field col s10 offset-s1">
                                <input type="number" class="validate">
                                <label>Rp. Maksimum</label>
                            </div>
                        </div>
                    </div>

                    <div class="title-sidebar">
                        <h5 class="center">Lokasi</h5>
                    </div>
                    <div class="isi-side-bar">
                        <form action="#" class="side-bar-margin">
                            <p>
                                <input type="checkbox" id="mojokerto">
                                <label for="mojokerto">Mojokerto</label>
                            </p>

                            <p>
                                <input type="checkbox" id="malang">
                                <label for="malang">Malang</label>
                            </p>

                            <p>
                                <input type="checkbox" id="jombang">
                                <label for="jombang">Jombang</label>
                            </p>

                            <p>
                                <input type="checkbox" id="jember">
                                <label for="jember">Jember</label>
                            </p>

                            <p>
                                <input type="checkbox" id="madiun">
                                <label for="madiun">Madiun</label>
                            </p>
                        </form>
                    </div>

                    <div class="title-sidebar">
                        <h5 class="center">Rating</h5>
                    </div>
                    <div class="isi-side-bar">
                        <form action="#" class="side-bar-margin">
                            <p>
                                <input type="checkbox" id="bintang-0">
                                <label for="bintang-0">
                                    <span class="warna-star">
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                    </span>
                                </label>
                            </p>

                            <p>
                                <input type="checkbox" id="bintang-1">
                                <label for="bintang-1">
                                    <span class="warna-star">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                    </span>
                                </label>
                            </p>

                            <p>
                                <input type="checkbox" id="bintang-2">
                                <label for="bintang-2">
                                    <span class="warna-star">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                    </span>
                                </label>
                            </p>

                            <p>
                                <input type="checkbox" id="bintang-3">
                                <label for="bintang-3">
                                    <span class="warna-star">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                    </span>
                                </label>
                            </p>

                            <p>
                                <input type="checkbox" id="bintang-4">
                                <label for="bintang-4">
                                    <span class="warna-star">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_border</i>
                                    </span>
                                </label>
                            </p>

                            <p>
                                <input type="checkbox" id="bintang-5">
                                <label for="bintang-5">
                                    <span class="warna-star">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                    </span>
                                </label>
                            </p>
                        </form>

                        <div class="title-sidebar">
                            <h5 class="center">Lainya</h5>
                        </div>
                        <div class="isi-side-bar">
                            <form action="#" class="side-bar-margin">
                                <p>
                                    <input type="checkbox" id="diskon">
                                    <label for="diskon">Diskon</label>
                                </p>

                                <p>
                                    <input type="checkbox" id="cicilan">
                                    <label for="cicilan">Cicilan</label>
                                </p>

                                <p>
                                    <input type="checkbox" id="grosir">
                                    <label for="grosir">Grosir</label>
                                </p>

                                <p>
                                    <input type="checkbox" id="top-seller">
                                    <label for="top-seller">Top Seller</label>
                                </p>

                                <p>
                                    <input type="checkbox" id="premium">
                                    <label for="premium">Premium Seller</label>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- akhir side bar-->

            <div class="col s12 m8 white box-produk"> <!-- pilih gambar dan share -->
                <div class="row">
                    <div class="col s12">
                        <h5><b>Daftar Produk Kacang Pupuk Bagus</b></h5>
                    </div>
                </div>

                <div class="row bagi-select">
                    <div class="col s6">
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

                    <div class="input-field col s6">
                        <select>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Pilih Urutant</label>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col s12">
                        <div class="carousel pilih-gambar-detail-produk">
                            <a class="carousel-item" href="<?php echo base_url(); ?>assets/img/frezier2.jpg" data-lightbox="datail-produk"><img src="img/frezier2.jpg"></a>
                            <a class="carousel-item" href="<?php echo base_url(); ?>assets/img/frezier1.jpg" data-lightbox="datail-produk"><img src="img/frezier1.jpg"></a>
                            <a class="carousel-item" href="<?php echo base_url(); ?>assets/img/frezier4.jpg" data-lightbox="datail-produk"><img src="img/frezier4.jpg"></a>
                            <a class="carousel-item" href="<?php echo base_url(); ?>assets/img/frezier3.jpg" data-lightbox="datail-produk"><img src="img/frezier3.jpg"></a>
                            <a class="carousel-item" href="<?php echo base_url(); ?>assets/img/frezier2.jpg" data-lightbox="datail-produk"><img src="img/frezier2.jpg"></a>
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
                                    <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                                    <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                                    <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                                </ul>
                            </div>

                            <div class="col s6">
                                <ul class="collection">
                                    <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                                    <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                                    <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                                </ul>
                            </div>
                        </div>

                        <div class="deskripsi-produk-detail">
                            <div class="deskripsi-produk-detail-header">
                                <h5>header</h5>
                            </div>

                            <div class="deskripsi-produk-detail-teks">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut corporis delectus,
                                est ex harum illum laborum modi odio odit pariatur perspiciatis praesentium rem sit
                                tempore veritatis vitae voluptas! Ad adipisci aliquid animi cumque delectus eius
                                explicabo id illum iure laborum laudantium, possimus quaerat reiciendis repudiandae
                                soluta temporibus unde voluptates?
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

<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>