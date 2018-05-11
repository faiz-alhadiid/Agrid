<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--konten-->
    <!--awal produk ...-->
    <div class="container">
        <div class="row">
            <div class="col s12">
                <hr><h5 class="center-align thick">HASIL PENCARIAN PRODUK DENGAN KEYWORD <?= $value ?></h5><hr style="margin-bottom: 40px;">
            </div>
            <?php
            if ($data){  
            foreach ($data as $d){ ?>
            <div class="col l4 m6" style = "padding-top:2%">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="height: 220px;" src="<?php echo base_url(); ?>assets/img/produk/<?=$d->gambar?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?=$d->produkNama?><i class="material-icons right">more_vert</i></span> <!--maksimal 20 karakter-->
                        <div class="card-action">
                            <p class="harga-produk">Rp <?=$d->harga?></p>
                        </div>
                        <a href = "<?= base_url().'beli/'.$d->produkID?>" giclass="waves-effect waves-light btn warna-hijau-gelap" style="width: 100%; margin-top: 20px;">Beli</a>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?=$d->produkNama?><i class="material-icons right">close</i></span>
                        <div class="warna-star">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_border</i>
                        </div>
                        <p><i class="material-icons">location_on</i> <?=$d->lokasi?></p>
                        <p><?= nl2br($d->deskripsiProduk); ?>
                        </p>
                    </div>
                </div>    
            </div>
            <?php } 
            } else {
                echo "<center><h5>Tidak ada hasil yang ditemukan</h5></center>";
            }    ?>  
        </div>
        <ul class="pagination" style="text-align: right;">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
    <!--akhir produk ...-->