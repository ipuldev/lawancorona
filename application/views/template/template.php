<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="lawanCorona.com | Cegah dan ketahui INformasi terbaru mengenai COVID-19">
  <meta name="keywords" content="covid-10,corona,update corona,positif corona">
  <meta name="author" content="wedangcode">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/corona.css">
    <script src="<?= base_url() ?>asset/js/jquery/jquery.min.js"></script> 
  <link rel="shortcut icon" href="<?= base_url()?>asset/picture/virus.svg">
	<title>Lawan-Corona || Update covid-19</title>
</head>
<body>
<ul id="navbar" class="nav justify-content-center nav-bar fixed-top shadow">
	<li class="nav-item">
		<h4 class="title"><img class="icon-map-1" src="<?= base_url()?>asset/picture/virus.svg" alt="logo-lawan-corona"> Lawan Corona</h4>
	</li>
</ul>
<div class="pager"></div>
<section id="content">
  <?= $_content ?>
</section>




<div class="fixed-bottom">
<?php if ($rows == 1) {?>
  <a class="text-decoration-none" href="https://api.whatsapp.com/send?phone=62<?= $api['number'] ?>&text=Hallo%20Dokter%20<?= $api['name']?>%20saya%20ingin%20bertanya%20tentang%20COVID-19.
"><div class="tanya bg-wa col-6 ml-2 p-2 mb-2 rounded shadow-sm"><img class="icon-map-1" src="<?= base_url()?>asset/picture/whatsapp.svg" alt="tanya-dokter"><small class="ml-2 chat-text">Tanya Dokter</small></div></a>
</div>
<?php } elseif ($rows == 0) {?>
  <a data-toggle="modal" data-target="#exampleModalCenter2"><div class="tanya bg-wa col-6 ml-2 p-2 mb-2 rounded shadow-sm"><img class="icon-map-1" src="<?= base_url()?>asset/picture/whatsapp.svg" alt="tanya-dokter"><small class="ml-2 chat-text">Tanya Dokter</small></div></a>

<?php } else { ?>
  <a data-toggle="modal" data-target="#exampleModalCenter"><div class="tanya bg-wa col-6 ml-2 p-2 mb-2 rounded shadow-sm"><img class="icon-map-1" src="<?= base_url()?>asset/picture/whatsapp.svg" alt="tanya-dokter"><small class="ml-2 chat-text">Tanya Dokter</small></div></a>

<?php }?>
</div>

<!-- Modal 2 -->

<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title font-weight-bold" id="exampleModalLongTitle">Notofication!</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        Waktu pelayanan tidak tersedia
        <p class="notif-jam">Pelayanan 08:00 - 20:00</p>
         <div class="donation text-center mt-4 mb-4">
    <a href="<?= site_url('corona/doctor') ?>" class="col-11 btn btn-success btn-donate shadow">Jadwal Tanya Dokter <img class="map-4 ml-3" src="<?= base_url()?>asset/picture/doctor.svg"></a>
  </div>
      </div>
    </div>
  </div>
</div>  
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pilih Dokter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if ($rows > 1){?>
           <?php foreach ($api as $value) {?>
        <a class="text-decoration-none" href="https://api.whatsapp.com/send?phone=62<?= $value['number'] ?>&text=Hallo%20Dokter%20<?= $value['name']?>%20saya%20ingin%20bertanya%20tentang%20COVID-19.
"><div class="rounded choose bg-choose shadow-sm p-3 mb-2 "><?= $value['name']?> <img class="icon-map-1" src="<?= base_url()?>asset/picture/whatsapp.svg" alt="tanya-dokter"></div></a>
        <?php } } ?> 

      </div>
    </div>
  </div>
</div>  
<!-- FOOTER -->
<div class="footer">
	&copy copyright 2020-2021
</div>


<script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script> 

</body>
</html>