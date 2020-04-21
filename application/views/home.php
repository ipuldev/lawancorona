<!-- Pengecekan Tahap awal covid-19 -->
<div class="col-sm-12 col-xm-12 div-campign">
    <p><b class="indo">Indonesia</b>
      <br>
      <small>Lawan Corona #STAYATHOME</small>
    </p>
</div>
<div class="text-center">
  <div class="col-12 mt-6 margin-law ">
  </div>
     <div class="mr-save row mt-3 p-3">
      <?php foreach($indo as $result) {?>
        <p class="title-data  shadow-sm col-12 bg-positif rounded">Terkonfirmasi 
          <br>
          <small class="text-positif">
            <?= $result['positif']?>
            </small></p>
        <p class="title-data  shadow-sm pt-2 pb-2 p-init bg-heal rounded">Sembuh 
          <br>
          <small class="text-sembuh"><?= $result['sembuh'] ?></small></p>
        <p class="title-data  shadow-sm pt-2 pb-2 p-init bg-dead rounded">Meninggal  
          <br>
          <small class="text-meninggal"><?= $result['meninggal']?></small></p>
      <?php } ?>
  </div>
</div>
</div>
<div class="container">
  <small class="init-item">Fitur</small>
<!-- Info Penyebaran -->
<div class="row-handle row mt-3 mb-3">
  <a href="https://kitabisa.com/campaign/indonesialawancorona/donation-amount?slug=indonesialawancorona" class="col-4 fitur-1">

</a>
  <a href="<?= site_url('corona/doctor') ?>" class="col-4 fitur-2">

</a>
  <a href="<?= site_url("corona/info_data") ?>" class="col-4 fitur-3">

</a>
</div>
<small class="init-item">Pencegahan COVID-19</small>
<div class="col-12 border p-2 mt-3 rounded">
  <img src="<?= base_url()?>asset/picture/asset_new/social_distancing.svg">
  <span class="ml-2">Jaga Jarak <small>minimal 2 meter</small></span>
</div>
<div class="col-12 border p-2 mt-2 rounded">
  <img src="<?= base_url()?>asset/picture/asset_new/washing-hands (1).svg">
  <span class="ml-2">Cuci Tangan <small>dengan sabun & air mengalir</small></span>
</div>
<div class="col-12 border p-2 mt-2 rounded">
  <img src="<?= base_url()?>asset/picture/asset_new/masker.svg">
  <span class="ml-2">Pakai masker</span>
</div>
<div class="col-12 border p-2 mt-2 rounded">
  <img src="<?= base_url()?>asset/picture/olahraga.svg" width=" 35px">
  <span class="ml-2">Olahraga Dengan rutin</span>
</div>
<div class="col-12 border p-2 mt-2 rounded">
  <img src="<?= base_url()?>asset/picture/doctor.svg" width=" 35px">
  <span class="ml-2">Cek Ke Dokter <small>Jika ada gejala</small></span>
</div>
</div>
</div>
