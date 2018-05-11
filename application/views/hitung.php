<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--konten-->
<script>
    function hitungPupuk(){
            let data = 
                [
                    [
                        [
                            {'npk' : 250, 'urea' : 150, 'sp36':0, 'kcl' :50 },
                            {'npk' : 350, 'urea' : 150, 'sp36':0, 'kcl' :50 },
                            {'npk' : 350, 'urea' : 0, 'sp36':50, 'kcl' :50 }
                        ],
                        [
                            {'npk' : 250, 'urea' : 150, 'sp36':0, 'kcl' :0 },
                            {'npk' : 350, 'urea' : 150, 'sp36':0, 'kcl' :0 },
                            {'npk' : 350, 'urea' : 0, 'sp36':50, 'kcl' :0 }
                        ],
                        [
                            {'npk' : 250, 'urea' : 150, 'sp36':0, 'kcl' :0 },
                            {'npk' : 350, 'urea' : 150, 'sp36':0, 'kcl' :0 },
                            {'npk' : 350, 'urea' : 0, 'sp36':50, 'kcl' :0 }
                        ]                        
                    ],
                    [
                        [
                            {'npk' : 200, 'urea' : 175, 'sp36':0, 'kcl' :50 },
                            {'npk' : 250, 'urea' : 175, 'sp36':0, 'kcl' :50 },
                            {'npk' : 300, 'urea' : 25, 'sp36':25, 'kcl' :50 }
                        ],
                        [
                            {'npk' : 200, 'urea' : 175, 'sp36':0, 'kcl' :0 },
                            {'npk' : 250, 'urea' : 175, 'sp36':0, 'kcl' :0 },
                            {'npk' : 300, 'urea' : 25, 'sp36':25, 'kcl' :0 }
                        ],
                        [
                            {'npk' : 200, 'urea' : 175, 'sp36':0, 'kcl' :0 },
                            {'npk' : 250, 'urea' : 175, 'sp36':0, 'kcl' :0 },
                            {'npk' : 300, 'urea' : 25, 'sp36':25, 'kcl' :0 }
                        ]
                    ],
                    [ 
                        [
                            {'npk' : 150, 'urea' : 200, 'sp36':0, 'kcl' :75 },
                            {'npk' : 200, 'urea' : 200, 'sp36':0, 'kcl' :75 },
                            {'npk' : 300, 'urea' : 25, 'sp36':0, 'kcl' :50 }
                        ],
                        [
                            {'npk' : 150, 'urea' : 200, 'sp36':0, 'kcl' :25 },
                            {'npk' : 200, 'urea' : 200, 'sp36':0, 'kcl' :25 },
                            {'npk' : 300, 'urea' : 25, 'sp36':0, 'kcl' :0 }
                        ],
                        [
                            {'npk' : 150, 'urea' : 200, 'sp36':0, 'kcl' :25 },
                            {'npk' : 200, 'urea' : 200, 'sp36':0, 'kcl' :25 },
                            {'npk' : 300, 'urea' : 25, 'sp36':0, 'kcl' :0 }
                        ]
                    ]
                ]
            let luasTanah = Number(document.getElementById('luasTanah').value);
            let selectorP = document.getElementById('statusP');
            let p = Number(selectorP[selectorP.selectedIndex].value);
            let selectorK = document.getElementById('statusK');
            let k = Number(selectorK[selectorK.selectedIndex].value);
            let selectorJenis = document.getElementById('jenis');
            let jenis = Number(selectorJenis[selectorJenis.selectedIndex].value);
            let pil = data[p][k][jenis];
            let stringJenis = "";
                            
            switch (jenis){
                case 0 : stringJenis = 'NPK 15-15-15';break;
                case 1 : stringJenis = 'NPK 10-10-10';break;
                case 2 : stringJenis = 'NPK 30-6-8';break;
            }
            
            document.getElementById('namaPupuk').innerHTML = stringJenis;
            document.getElementById('npk').innerHTML = "Berat "+(pil.npk * luasTanah)+" kg";
            document.getElementById('urea').innerHTML = "Urea : "+(pil.urea * luasTanah);
            document.getElementById('sp36').innerHTML = "SP-36 : "+(pil.sp36 * luasTanah);
            document.getElementById('kcl').innerHTML = "KCl : "+(pil.kcl * luasTanah);

            

        }
</script>
<div class="warna-grey-sedikit">
    <div class="container">

        <div class="row">
            <div class="col s12 m6"> <!--side bar-->

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

                        <button class="btn btn-block waves-effect waves-light warna-kuning-gelap beli-btn" onclick= "hitungPupuk()">Hitung</button>
                    </div>

                </div>
             <!-- akhir side bar-->

            <div class="col s12 m6"> <!--side bar-->

                    <div class="title-sidebar">
                        <h5 class="center">Hasil Perhitungan</h5>
                    </div>
                    <div class="left" style="width:100%;">
                        <ul class="collection with-header">
                            <li class="collection-header"><h5 id = 'namaPupuk'>Pupuk NPK 15-15-15</h5></li>
                            <li class="collection-item"><div id ='npk'>Berat 350 kg</div></li>
                            <li class="collection-item"><div>Tambahan : </div></li>
                            <li class="collection-item"><div id = 'urea'>Urea : 50kg</div></li>
                            <li class="collection-item"><div id = 'sp36'>SP-36 : 0 Kg</div></li>
                            <li class="collection-item"><div id = 'kcl'>KCl : 75 Kg</div></li>
                        </ul>
                    </div>
            </div> <!-- akhir side bar-->

        </div> <!-- akhir konten-->
    </div>
</div>
<!--akhir konten-->
