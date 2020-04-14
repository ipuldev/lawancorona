<!-- Pengecekan Tahap awal covid-19 -->
<div class="text-center border-bottom">
  <div class="col-12 mt-6 margin-law ">
  <h5 class="title-2 border-bottom col-8 m-auto">Data Penyebaran COVID-19 <img class="icon-map" src="<?= base_url()?>asset/picture/indonesia.svg"></h5>
  </div>
     <div class="mr-save row mt-3 ">
      <?php foreach($indo as $result) {?>
        <p class="title-data  shadow-sm col-5 m-auto pt-3 pb-3 p-init bg-heal rounded">Sembuh <?= $result['sembuh'] ?><img class="icon-map" src="<?= base_url()?>asset/picture/sembuh.svg"></p>
        <p class="title-data  shadow-sm col-5 m-auto pt-3 pb-3 p-init bg-dead rounded">Meninggal  <?= $result['meninggal']?><img class="icon-map" src="<?= base_url()?>asset/picture/meninggal.svg"></p>
        <div class="col-12 mt-3">
        <p class="title-data  shadow-sm col-6 m-auto p-3 bg-positif rounded">Positif <?= $result['positif']?><img class="icon-map" src="<?= base_url()?>asset/picture/sakit.svg"></p>
      <?php } ?>
  </div>
</div>
<div class="col-12 mt-2">
<!-- <small class="mt-4">Data from @officialhacker</small> -->
</div>
</div>
<div class="container">
  <div class="donation text-center mt-4 mb-4">
    <a href="https://kitabisa.com/campaign/indonesialawancorona/donation-amount?slug=indonesialawancorona" class="btn btn-primary btn-donate shadow">DONASI LAWAN CORONA <img class="icon-map-2 bg-white" src="<?= base_url()?>asset/picture/donation.svg"></a>
  </div>
<!-- Info Penyebaran -->
<div class="shadow-sm card">
    <img src="<?= base_url()?>asset/picture/banner1.jpg" class="card-img-top" alt="data-penyebaran-covid-19-corona">
    <div class="card-body">
      <h5 class="title card-title">Informasi Penyebaran COVID-19 </h5>
      <p class="content card-text">Ketahui Lebih Rinci Perkembangan Terbaru Dari penyebaran COVID-19.</p>
	  <p class="time card-text"><small class="text-muted">Data from kawalcorona.com</small></p>
	  <a href="<?= site_url("corona/info_data") ?>" class="btn-card btn btn-success float-right">Kunjungi</a>
    </div>
  </div>
  <div class="donation text-center mt-4 mb-4">
    <a href="<?= site_url('corona/doctor') ?>" class="col-11 btn btn-success btn-donate shadow">Jadwal Tanya Dokter <img class="map-4 ml-3" src="<?= base_url()?>asset/picture/doctor.svg"></a>
  </div>
  <!-- Info Pencegahan -->
<div class="shadow-sm card">
    <img src="<?= base_url()?>asset/picture/banner2.jpg" class="proccess card-img-top" alt="cara-pencegahan-covid-19-corona">
    <div class="card-body">
      <h5 class="title card-title text-secondary">Cara Pencegahan COVID-19 </h5>
      <p class="content card-text  text-secondary">Ketahui Berbagai Cara Pencegahan COVID-19 lewat bantuan aplikasi.</p>
    <p class="time card-text"><small class="text-danger">Proses Pengembangan ..!</small></p>
    <button class="btn-card btn btn-secondary float-right" disabled>Kunjungi</button>
    </div>
  </div>
</div>
</div>
