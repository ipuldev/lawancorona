<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/corona.css">
	<title>Document</title>
</head>
<body>
<ul class="nav justify-content-center nav-bar shadow-corona">
	<li class="nav-item">
		<h4 class="title">COVID-19.</h4>
	</li>
</ul>
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
<!-- iklan masyarakat -->
<!-- <figure class="figure">
  <img src="<?= base_url()?>asset/picture/banner1.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
</figure> -->

<!-- Info Penyebaran -->
<div class="shadow-sm card">
    <img src="<?= base_url()?>asset/picture/banner1.jpg" class="card-img-top" alt="data-penyebaran-covid-19-corona">
    <div class="card-body">
      <h5 class="title card-title">Informasi Penyebaran COVID-19 </h5>
      <p class="content card-text">Lihat Perkembangan Terbaru Dari penyebaran COVID-19. Ketahui Lokasi kita apakah Zona aman atau waspada</p>
	  <p class="time card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	  <button class="btn-card btn btn-success float-right">Kunjungi</button>
    </div>
  </div>
  <!-- Info Pencegahan -->
<div class="shadow-sm card">
    <img src="<?= base_url()?>asset/picture/banner2.jpg" class="card-img-top" alt="cara-pencegahan-covid-19-corona">
    <div class="card-body">
      <h5 class="title card-title">Cara Pencegahan COVID-19 </h5>
      <p class="content card-text">Ketahui Berbagai Cara Pencegahan COVID-19 lewat bantuan aplikasi.</p>
    <p class="time card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    <button class="btn-card btn btn-success float-right">Kunjungi</button>
    </div>
  </div>
<!-- Artikel COVID-19 -->
<div class="shadow-sm card">
    <img src="<?= base_url()?>asset/picture/banner3.jpg" class="card-img-top" alt="cerita-dibalik-covid-19-corona">
    <div class="card-body">
      <h5 class="title card-title">Artikel Tentang COVID-19 </h5>
      <p class="content card-text">Apasih COVID-19 dan bagaimana sih efek dan bentuknya mari kita cari tahu.</p>
	  <p class="time card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	  <button class="btn-card btn btn-success float-right">Kunjungi</button>
    </div>
  </div>
</div>
</div>
<div class="fixed-bottom">
  <div class="bg-wa col-6 ml-2"><img class="icon-map" src="<?= base_url()?>asset/picture/whatsapp.svg">T<p>anya Doker</p></div>
</div>
<!-- FOOTER -->
<div class="footer">
	&copy copyright 2020-2021
</div>
<script src="<?= base_url() ?>asset/js/bootstrap.js"></script>
</body>
</html>