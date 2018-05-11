<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
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

                                <p>Total Pembayaran: <b>Rp. 3.000.000</b></p>

                                <hr>

                                <ul class="collection with-header">
                                    <li class="collection-header"><h4>Tranfer Bank</h4></li>
                                    <li class="collection-item"><div><a href="#modal-byr">Mandiri<span class="secondary-content"><i class="material-icons">send</i></span></a></div></li>
                                    <li class="collection-item"><div>BCA<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                                    <li class="collection-item"><div>BRI<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                                    <li class="collection-item"><div>BNI<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                                </ul>

                                <ul class="collection with-header">
                                    <li class="collection-header"><h4>Gerai Retail</h4></li>
                                    <li class="collection-item"><div>AlfaMart<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                                    <li class="collection-item"><div>IndoMart<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
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

                                                <p><span  class="pembayaran-title">Total Barang</span><span class="pembayaran-isi">:</span><b><?php echo $item['jumlahProduk']?></b></p>

                                                <p><span class="pembayaran-title">Subtotal</span><span class="pembayaran-isi">:</span><b>Rp <?php echo $item['totalHarga'] *$item['jumlahProduk'];?></b></p>

                                                <p><span class="pembayaran-title">Biaya Kirim</span><span class="pembayaran-isi">:</span><b>Rp 15.000</b></p>
                                            </span>
                                        </div>
                                    </li>
                                </ul>

                                <hr>

                                <h4 class="clearfix"><span class="left">Total: </span><span class="right"><?php echo $item['totalHarga'] * $item['jumlahProduk'] + 15000;?></span></h4>
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