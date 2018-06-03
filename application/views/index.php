<!-- Modal Structure -->
                        <div id="modal-beli" class="modal">
                            <div class="modal-content left-align">
                                <h4>Beli</h4>
                                <hr>

                                <div class="row"> <!-- definisi Produk yang mau di beli -->
                                    <div class="col s4">
                                        <img src="img/frezier3.jpg" class="circle responsive-img">
                                    </div>

                                    <div class="col s8">
                                        <div class="col s12">
                                            Nama Produk:<br>
                                            <span class="tulisan-hijau-gelap"><b>Pupuk sib bangit dah</b></span>
                                        </div>

                                        <div class="col s4 input-field">
                                            <input placeholder="ini di sini" id="num-beli" type="number" class="validate">
                                            <label for="num-beli">Jumlah Barang</label>
                                        </div>

                                        <div class="col s4">
                                            Harga Barang<br>
                                            Rp.<?php echo "4.000.000" ?>
                                        </div>

                                        <div class="input-field col s4">
                                            <select>
                                                <option value="" disabled selected>Your option</option>
                                                <option value="1">Tidak</option>
                                                <option value="2">Ya</option>
                                            </select>
                                            <label>Materialize Select</label>
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
						<!-- akhir dari modal di index -->


<!--konten-->
    <!--awal produk ...-->
    <div class="container">
        <div class="row">
            <div class="col s12">
                <hr><h5 class="center-align thick">PUPUK REKOMENDASI</h5><hr style="margin-bottom: 40px;">
            </div>

            <?php
            if ($data){ 
            foreach ($data as $d){ ?>
            <div class="col l4 m6">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="height: 220px;" src="<?php echo base_url(); ?>assets/img/produk/<?=$d->gambar?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?=$d->produkNama?><i class="material-icons right">more_vert</i></span> <!--maksimal 20 karakter-->
                        <div class="card-action">
                            <p class="harga-produk">Rp <?=$d->harga?></p>
                        </div>
                        <!-- <a href = "<?= base_url().'beli/'.$d->produkID?>"class="waves-effect waves-light btn warna-hijau-gelap" style="width: 100%; margin-top: 20px;">Beli</a> -->
						<a href="#modal-beli" class="modal-trigger waves-effect waves-light btn warna-hijau-gelap" style="width: 100%; margin-top: 20px;">Beli</a>

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
            }?>  
        </div>

        <?php 
            $data = ['waves-effect' ,'waves-effect', 'waves-effect', 'waves-effect', 'waves-effect'];
            if (isset($_SESSION['page'])){
                $t = $_SESSION['page'];
                $data[$t-1] = "active";
            } else {
                $data[0] = "active";
            }
        ?>
        <ul class="pagination" style="text-align: right;">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="<?= $data[0] ?>"><a href="<?=base_url()."page/1"?>">1</a></li>
            <li class="<?= $data[1] ?>"><a href="<?=base_url()."page/2"?>">2</a></li>
            <li class="<?= $data[2] ?>"><a href="<?=base_url()."page/3"?>">3</a></li>
            <li class="<?= $data[3] ?>"><a href="<?=base_url()."page/4"?>">4</a></li>
            <li class="<?= $data[4] ?>"><a href="<?=base_url()."page/5"?>">5</a></li>
            <li class="waves-effect"><a href="#"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
    <!--akhir produk ...-->

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>
