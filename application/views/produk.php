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

<!--konten-->
<div class="warna-grey-sedikit">
        <div class="container">
            <div class="row" style="margin-top: 50px;">
                <div class="col s12 m4">
                    <!--side bar-->
                    <div class="white side-bar">
                        <div style="background-color: rgba(192, 185, 185, 0.911);">
                            <p class="tulisan-hijau-gelap" style="font-weight: bold; text-align: center; font-size: 20px;">Hitung Pupuk</p>
                        </div>
                        <div class="row">
                            <div class="input-field col s10" style="margin-left: 30px;">
                                <select>
                                    <option value="" disabled selected>Komoditas</option>
                                    <option value="1">Padi</option>
                                </select>
                            </div>
                            <div class="input-field col s10" style="margin-left: 30px;">
                                <select>
                                    <option value="" disabled selected>Jenis Pupuk</option>
                                    <option value="1">Pupuk NPK 15-15-15</option>
                                    <option value="2">Pupuk NPK 10-10-10</option>
                                    <option value="3">Pupuk NPK 30-6-8</option>
                                </select>
                            </div>
                            <div class="input-field col s10 offset-s1">
                                <input type="number" class="validate">
                                <label>Luas Lahan (meter persegi)</label>
                            </div>
                            <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 30px; margin-bottom: 20px;">
                                <a class="waves-effect waves-light btn warna-hijau-gelap" style="width:100%;">HITUNG</a>
                            </div>
                        </div>
                        <div style="background-color: rgba(192, 185, 185, 0.911);">
                            <p class="tulisan-hijau-gelap" style="font-weight: bold; text-align: center; font-size: 20px;">Filter</p>
                        </div>
                        <div class="title-sidebar">
                            <p style="font-size: 15px; font-weight: bold; margin-left: 20px;">Kategori</p>
                        </div>
                        <div class="isi-side-bar">
                            <div class="row">
                                <div class="input-field col s10" style="margin-left: 30px;">
                                    <select>
                                        <option value="" disabled selected>Pupuk Organik</option>
                                        <option value="1">Pupuk Hijau</option>
                                        <option value="2">Pupuk Kandang</option>
                                        <option value="3">Pupuk Kompos</option>
                                        <option value="4">Pupuk Hayati Organik</option>
                                    </select>
                                    <select>
                                        <option value="" disabled selected>Pupuk Anorganik</option>
                                        <option value="1">Pupuk Urea</option>
                                        <option value="2">Pupuk ZA</option>
                                        <option value="3">Pupuk Ponska</option>
                                        <option value="4">Pupuk TSP</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="title-sidebar">
                            <p style="font-size: 15px; font-weight: bold; margin-left: 20px;">Harga</p>
                        </div>
                        <div class="isi-side-bar">
                            <div class="row">
                                <div class="input-field col s10 offset-s1">
                                    <input type="number" class="validate">
                                    <label>Rp. Minimum</label>
                                </div>

                                <div class="input-field col s10 offset-s1">
                                    <input type="number" class="validate">
                                    <label>Rp. Maksimum</label>
                                </div>
                            </div>
                        </div>

                        <div class="title-sidebar">
                            <p style="font-size: 15px; font-weight: bold; margin-left: 20px;">Lokasi</p>
                        </div>
                        <div class="isi-side-bar">
                            <form action="#" class="side-bar-margin">
                                <p>
                                    <input type="checkbox" id="mojokerto">
                                    <label for="mojokerto">Jabodetabek</label>
                                </p>

                                <p>
                                    <input type="checkbox" id="malang">
                                    <label for="malang">Kota Bandung</label>
                                </p>

                                <p>
                                    <input type="checkbox" id="jombang">
                                    <label for="jombang">Kota Malang</label>
                                </p>

                                <p>
                                    <input type="checkbox" id="jember">
                                    <label for="jember">Kota Surabaya</label>
                                </p>

                                <p>
                                    <input type="checkbox" id="madiun">
                                    <label for="madiun">Kota Yogyakarta</label>
                                </p>
                            </form>
                            <div class="input-field col s11 center" style="margin-left: 13px; margin-top: 30px; margin-bottom: 20px;">
                                <a class="waves-effect waves-light btn warna-hijau-gelap" style="width:100%;">TERAPKAN</a>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>

                <!-- akhir side bar-->

                <div class="col s12 m8 white box-produk">
                    <br>
                    <div class="row bagi-select" style="padding-left: 70%;">
                        <div class="input-field col s6" style="width: 90%;">
                            <select>
                                <option value="" disabled selected>Urutkan</option>
                                <option value="1">Penjualan</option>
                                <option value="2">Rating</option>
                                <option value="3">Harga Terendah</option>
                                <option value="4">Harga Tertinggi</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l4 m6">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" style="height: 160px;" src="<?php echo base_url(); ?>assets/img/logo-agrid.png">
                                </div>
                                <div class="card-content" style="padding: 5%;">
                                    <span class="card-title activator grey-text text-darken-4" style="font-size: 15px; font-weight: 500;">Pupuk NPK Mutiara 16
                                        <p class="harga-produk" style="font-size: 13px;">Rp 17.000</p>
                                    </span>
                                    <!--maksimal 20 karakter-->
                                </div>
                            </div>
                        </div>
                        <div class="col l4 m6">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" style="height: 160px;" src="<?php echo base_url(); ?>assets/img/logo-agrid.png">
                                </div>
                                <div class="card-content" style="padding: 5%;">
                                    <span class="card-title activator grey-text text-darken-4" style="font-size: 15px; font-weight: 500;">Pupuk NPK Mutiara 16
                                        <p class="harga-produk" style="font-size: 13px;">Rp 17.000</p>
                                    </span>
                                    <!--maksimal 20 karakter-->
                                </div>
                            </div>
                        </div>

                        <div class="col l4 m6">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" style="height: 160px;" src="<?php echo base_url(); ?>assets/img/logo-agrid.png">
                                </div>
                                <div class="card-content" style="padding: 5%;">
                                    <span class="card-title activator grey-text text-darken-4" style="font-size: 15px; font-weight: 500;">Pupuk NPK Mutiara 16
                                        <p class="harga-produk" style="font-size: 13px;">Rp 17.000</p>
                                    </span>
                                    <!--maksimal 20 karakter-->
                                </div>
                            </div>
                        </div>
                        <ul class="pagination" style="text-align: right;">
                            <li class="disabled">
                                <a href="#!">
                                    <i class="material-icons">chevron_left</i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#!">1</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!">2</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!">3</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!">4</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!">5</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!">
                                    <i class="material-icons">chevron_right</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--akhir konten-->

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>