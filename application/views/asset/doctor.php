<div class="container">
  <h5 class="text-center title-2 border-bottom col-8 m-auto">Jadwal Dokter</h5>
<div class="data-row row justify-content-center">
<?php $no=1;foreach($hari as $value){?>
	<button class="bg-btn col-5 m-2 shadow-sm btn border" onclick="retrieve('<?= $value ?>')" data-toggle="modal" data-target="#exampleModalCenter2"><?= $value ?></button>
<?php } ?>
</div>
<div class="content">
	<h5>
		 Ikatan Dokter Indonesia (IDI) DIY
	</h5>
	<p>
		 secara resmi membuka pelayanan kepada masyarakat berupa konsultasi gratis terkait Covid-19. Layanan via whatsapp (WA) ini secara resmi dimulai Kamis (09/04/2020) dan bisa dimanfaatkan oleh masyarakat untuk bertanya dan berkonsultasi.
	</p>
	<p>Dalam satu hari, pelayanan konsultasi dibagi tiga sesi yaitu pukul 08.00-11.00 WIB, pukul 11.00-17.00 WIB dan 17.00-20.00 WIB. Dalam satu hari ada 3-4 dokter yang siap memberikan konsultasi.</p>
	<p>"
		Layanan konsultasi gratis ini sebagai bentuk tindakan promotif kepada masyarakat umum dalam rangka pencegahan, meminimalkan angka kejadian atau morbiditas dan mortalitas kasus Covid-19. Bersama masyarakat, dokter akan lebih mampu berbuathal yang positif, dengan harapan wabahini segera terkondisikan dan berakhir
		"
	</p>
</div>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" id="role">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title font-weight-bold" id="exampleModalLongTitle" ></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p id="isi"></p>
      </div>
    </div>
  </div>
</div>  

  <div class="donation text-center mt-4 mb-4">
    <a href="https://kitabisa.com/campaign/indonesialawancorona/donation-amount?slug=indonesialawancorona" class="btn btn-primary btn-donate shadow">DONASI LAWAN CORONA <img class="icon-map-2 bg-white" src="<?= base_url()?>asset/picture/donation.svg"></a>
  </div>
 </div>

 <script type="text/javascript">
 		function retrieve(isi){

 			$.ajax({
 				url : "<?= site_url("corona/data_api_hari_click") ?>",
 				method : "post",
 				data : {hari : isi},
 				dataType : 'json',
 				success : function(response){
 					$("#exampleModalLongTitle").html(isi);
 					var len = response.length;
 					console.log(len);
 					if (len == 6) {
 						$("#role").attr('class','modal-dialog')
 						$("#isi").html(
 						"<div class='p-2 mb-1 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[0]['name']+"</p>"+"<small class='text-left'>"+response[0]['time_1']+"</small></div>"+"<div class='mb-1 p-2 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[1]['name']+"</p>"+"<small class='text-left'>"+response[1]['time_1']+"</small></div>"+"<div class='mb-1 p-2 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[2]['name']+"</p>"+"<small class='text-left'>"+response[2]['time_1']+"</small></div>"+"<div class='mb-1 p-2 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[3]['name']+"</p>"+"<small class='text-left'>"+response[3]['time_1']+"</small></div>"+"<div class='mb-1 p-2 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[4]['name']+"</p>"+"<small class='text-left'>"+response[4]['time_1']+"</small></div>"+"<div class='mb-1 p-2 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[5]['name']+"</p>"+"<small class='text-left'>"+response[5]['time_1']+"</small></div>"
 						)
 					}else if (len == 3) {
 						$("#role").attr('class','modal-dialog modal-dialog-centered')
 						$("#isi").html(
 						"<div class='p-2 mb-1 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[0]['name']+"</p>"+"<small class='text-left'>"+response[0]['time_1']+"</small></div>"+"<div class='mb-1 p-2 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[1]['name']+"</p>"+"<small class='text-left'>"+response[1]['time_1']+"</small></div>"+"<div class='mb-1 p-2 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[2]['name']+"</p>"+"<small class='text-left'>"+response[2]['time_1']+"</small></div>"
 						)
 						// console.log(len);
 					}else if (len == 4) {
 						$("#role").attr('class','modal-dialog modal-dialog-centered')
 						$("#isi").html(
 						"<div class='p-2 mb-1 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[0]['name']+"</p>"+"<small class='text-left'>"+response[0]['time_1']+"</small></div>"+"<div class='mb-1 p-2 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[1]['name']+"</p>"+"<small class='text-left'>"+response[1]['time_1']+"</small></div>"+"<div class='mb-1 p-2 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[2]['name']+"</p>"+"<small class='text-left'>"+response[2]['time_1']+"</small></div>"+"<div class='mb-1 p-2 text-left bg-white border rounded shadow-sm'><p class='text-left'>"+response[3]['name']+"</p>"+"<small class='text-left'>"+response[3]['time_1']+"</small></div>"
 						)
 					}
 				}
 			});
 		}
 </script>
