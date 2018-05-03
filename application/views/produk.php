<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body class="warna-grey-sedikit">
<!--header-->
    <!--awal navigasi-->
    <div class="navbar-fixed">
        <nav class="warna-hijau-gelap">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Logo</a>
                    <a href="#" data-activates="mobile-menu" class="button-collapse">
                        <i class="material-icons">menu</i>
                    </a>

                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-trigger dropdown-button" href="#!" data-activates="dropdown1">Kategori<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li>
                            <div class="center row">
                                <div class="col s12">
                                    <div class="row">
                                        <form>
                                            <div class="input-field col s12 white-text">
                                                <i class="white-text material-icons prefix">search</i>
                                                <input type="text" placeholder="ketik di sini untuk mencari" class="white-text-text">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="waves-effect"><a href="#"><i class="material-icons">shopping_basket</i></a></li>
                        <li class="waves-effect"><a href="#"><i class="material-icons">shopping_cart</i></a></li>
                        <li class="waves-effect"><a href="#">daftar</a></li>
                        <li class="waves-effect"><a href="#">masuk</a></li>
                    </ul>

                    <ul class="side-nav" id="mobile-menu">
                        <li>
                            <div class="center row">
                                <div class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12 white-text">
                                            <i class="white-text material-icons prefix">search</i>
                                            <input type="text" placeholder="search" class="white-text-text" >
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
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">three</a></li>
                    </ul>
                </div>
        </nav>
    </div>
    <!--akhir navigasi-->
<!--akhir dari header-->

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
            <div class="col s12 m4">
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
            </div>

            <div class="col s12 m8 white box-produk">
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
                    <div class="col l4 m6 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo base_url(); ?>assets/img/1.jpeg">
                            </div>

                            <div class="card-content center-align">
                                <p>Pupuk terbaik badas</p>

                                <div class="warna-star">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>

                                <p>Rp 12.000</p>
                            </div>

                            <div class="card-action">
                                <p><i class="material-icons">home</i> Pt. Pupuk Indonesia</p>
                                <p><i class="material-icons">add_location</i> Kota Malang</p>
                            </div>

                            <div class="card-action">
                                <a class="waves-effect waves-light btn warna-kuning-gelap">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col l4 m6 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo base_url(); ?>assets/img/1.jpeg">
                            </div>

                            <div class="card-content center-align">
                                <p>Pupuk terbaik badas</p>

                                <div class="warna-star">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>

                                <p>Rp 12.000</p>
                            </div>

                            <div class="card-action">
                                <p><i class="material-icons">home</i> Pt. Pupuk Indonesia</p>
                                <p><i class="material-icons">add_location</i> Kota Malang</p>
                            </div>

                            <div class="card-action">
                                <a class="waves-effect waves-light btn warna-kuning-gelap">Selengkapnya</a>
                            </div>
                        </div>
                    </div>


                    <div class="col l4 m6 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo base_url(); ?>assets/img/1.jpeg">
                            </div>

                            <div class="card-content center-align">
                                <p>Pupuk terbaik badas</p>

                                <div class="warna-star">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                </div>

                                <p>Rp 12.000</p>
                            </div>

                            <div class="card-action">
                                <p><i class="material-icons">home</i> Pt. Pupuk Indonesia</p>
                                <p><i class="material-icons">add_location</i> Kota Malang</p>
                            </div>

                            <div class="card-action">
                                <a class="waves-effect waves-light btn warna-kuning-gelap">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12">
                        <ul class="pagination center">
                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li class="waves-effect"><a href="#!">2</a></li>
                            <li class="waves-effect"><a href="#!">3</a></li>
                            <li class="waves-effect"><a href="#!">4</a></li>
                            <li class="waves-effect"><a href="#!">5</a></li>
                            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--akhir konten-->

<!--footer-->
    <footer class="page-footer warna-grey-sedikit">

        <div class="black-text white pembatas-agrid z-depth-1">
            <div class="container">
                Agrid adalah
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s4">
                    <h5 class="tulisan-hijau-gelap">Agrid</h5>
                    <p class="black-text">
                        <i class="material-icons">local_phone</i>
                        +62 89 687 837 120
                    </p>

                    <p class="black-text">
                        <i class="material-icons">email</i>
                        agrid@gmail.com
                    </p>

                    <p class="black-text">
                        <i class="material-icons">add_location</i>
                        Lokasinya di rahasiakan dulu ya
                    </p>
                </div>

                <div class="col s4">
                    <h5 class="tulisan-hijau-gelap">Perusahaan</h5>
                    <ul class="perusahaan-list">
                        <li><a class="black-text" href="#!">Tentang Kami</a></li>
                        <li><a class="black-text" href="#!">Karir</a></li>
                        <li><a class="black-text" href="#!">Blog</a></li>
                        <li><a class="black-text" href="#!">Pertanyaan</a></li>
                    </ul>
                </div>

                <div class="col s4">
                    <h5 class="tulisan-hijau-gelap">Ikuti Kami</h5>
                    <ul class="icon-saya">
                        <li><img src="<?php echo base_url(); ?>assets/img/google-plus.svg"></li>
                        <li><img src="<?php echo base_url(); ?>assets/img/linkedin.svg"></li>
                        <li><img src="<?php echo base_url(); ?>assets/img/line.svg"></li>
                        <li><img src="<?php echo base_url(); ?>assets/img/instagram.svg"></li>
                        <li><img src="<?php echo base_url(); ?>assets/img/facebook.svg"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container center-align black-text">
                © 2018 Copyright Text
            </div>
        </div>
    </footer>
<!--akhir footer-->

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>