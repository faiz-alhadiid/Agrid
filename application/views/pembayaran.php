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
        <div class="row">
            <div class="col s12 pembayaran-content">
                <div class="row pembayaran-header">
                    <div class="col s6 left-align tulisan-hijau-gelap">
                        <h5><b>Total Pembayaran</b></h5>
                    </div>

                    <div class="col s6 right-align tulisan-hijau-gelap">
                        <h5><b>Rp 185.000</b></h5>
                    </div>

                    <div class="col s12">
                        <button class="btn btn-large waves-effect warna-kuning-gelap">metode pembayaran</button>
                    </div>
                </div>

                <hr>

                <div class="row pembayaran-daftar">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                                Toko 1
                                <i class="material-icons">arrow_drop_down</i>
                            </div>

                            <div class="collapsible-body">
                                <ul class="collection">
                                    <li class="collection-item avatar">
                                        <img src="<?php echo base_url(); ?>assets/img/frezier1.jpg" alt="" class="circle">
                                        <span class="title">Nama Produk</span>
                                        <p>
                                            Pupuk kok baik sih
                                        </p>
                                        <p>
                                            Rp. 41.99x3
                                        </p>

                                        <a href="#!" class="secondary-content">
                                            <i class="material-icons red-text">delete</i>
                                        </a>
                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="material-icons circle">folder</i>
                                        <span class="title">Title</span>
                                        <p>First Line <br>
                                            Second Line
                                        </p>
                                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="material-icons circle green">insert_chart</i>
                                        <span class="title">Title</span>
                                        <p>First Line <br>
                                            Second Line
                                        </p>
                                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="material-icons circle red">play_arrow</i>
                                        <span class="title">Title</span>
                                        <p>First Line <br>
                                            Second Line
                                        </p>
                                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
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
                                                <p><span class="pembayaran-title">Penerima</span><span class="pembayaran-isi">:</span><b>Dwiki Nuridhuna</b></p>

                                                <p><span class="pembayaran-title">Kurir Pengirim</span><span class="pembayaran-isi">:</span><b>JNE</b></p>

                                                <p><span  class="pembayaran-title">Total Barang</span><span class="pembayaran-isi">:</span><b>5 Kg</b></p>

                                                <p><span class="pembayaran-title">Subtotal</span><span class="pembayaran-isi">:</span><b>Rp 50.000</b></p>

                                                <p><span class="pembayaran-title">Biaya Kirim</span><span class="pembayaran-isi">:</span><b>Rp 100.000</b></p>
                                            </span>
                                        </div>
                                    </li>
                                </ul>

                                <hr>

                                <h4 class="clearfix"><span class="left">Total: </span><span class="right">Rp 125.000</span></h4>
                            </div>
                        </li>

                        <li>
                            <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>

                        <li>
                            <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
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