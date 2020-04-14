<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
<!-- Pengecekan Tahap awal covid-19 -->
<div class="container">
<div class="text-center border-bottom">
  <div class="col-12 mt-6 margin-law ">
  <h5 class="title-2 border-bottom col-8 m-auto">Data Penyebaran COVID-19</h5>
  </div>

  <p class="mt-3">Dunia <img class="icon-map" src="<?= base_url()?>asset/picture/world.svg" alt="data-penyebaran-corona"></p>
     <div class="mr-save row mt-3 text-white">
        <div class="data-world title-data  shadow-sm col-12 bg-heal-2 rounded text-center">Sembuh <?= $sembuh['value']?><img class="icon-map" src="<?= base_url()?>asset/picture/sembuh.svg"></div>
        <div class="data-world title-data  shadow-sm col-12 bg-dead-2 rounded text-center">Meninggal <?= $meninggal['value'] ?><img class="icon-map" src="<?= base_url()?>asset/picture/meninggal.svg"></div>
        <div class="data-world title-data  shadow-sm col-12 bg-positif-2 rounded text-center">Positif <?= $positif['value'] ?><img class="icon-map" src="<?= base_url()?>asset/picture/sakit.svg"></div>
</div>
 <p class="mt-3">Indonesia <img class="icon-map" src="<?= base_url()?>asset/picture/indonesia.svg" alt="data-corona-indonesia"></p>
     <div class="mr-save row mt-3 mb-3">
      <?php foreach($indo as $result) {?>
        <p class="title-data  shadow-sm col-5 m-auto pt-3 pb-3 p-init bg-heal rounded">Sembuh <?= $result['sembuh'] ?></p>
        <p class="title-data  shadow-sm col-5 m-auto pt-3 pb-3 p-init bg-dead rounded">Meninggal  <?= $result['meninggal']?></p>
        <div class="col-12 mt-3">
        <p class="title-data  shadow-sm col-6 m-auto p-3 bg-positif rounded">Positif <?= $result['positif']?></p>
      <?php } ?>
  </div>

</div>
</div>
<div class="col-12 text-center">
 <p class="mt-3">Data Di Provinsi <img class="icon-map" src="<?= base_url()?>asset/picture/oceania.svg" alt="data-provinsi-corona"></p>
</div>
<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Provinsi</th>
                <th>ID</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meniggal</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($data_prov as $value) { ?>
            <tr>
                <td><?= $value['attributes']['Provinsi'] ?></td>
                <td><?= $value['attributes']['Kode_Provi'] ?></td>
                <td><?= $value['attributes']['Kasus_Posi'] ?></td>
                <td><?= $value['attributes']['Kasus_Semb'] ?></td>
                <td><?= $value['attributes']['Kasus_Meni'] ?></td>
            </tr>
         <?php }  ?>
        </tbody>
    </table>
  <div class="donation text-center mt-4 mb-4">
    <a href="https://kitabisa.com/campaign/indonesialawancorona/donation-amount?slug=indonesialawancorona" class="btn btn-primary btn-donate shadow">DONASI LAWAN CORONA <img class="icon-map-2 bg-white" src="<?= base_url()?>asset/picture/donation.svg" alt="donasi-corona"></a>
  </div>
  <div class="text-center mt-4 mb-5 border shadow-sm p-4">
    <p>Data Rinci Tiap Negara <img class="icon-map" src="<?= base_url()?>asset/picture/map.svg"></p> 
    <a href="<?= site_url("corona/info_negara") ?>" class="btn btn-success">Kunjungi</a>
  </div>
</div>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
         "language": {
            "sEmptyTable":   "Tidak ada data yang tersedia pada tabel ini",
            "sProcessing":   "Sedang memproses...",
            "sLengthMenu":   "Tampilkan _MENU_ entri",
            "sZeroRecords":  "Tidak ditemukan data yang sesuai",
            "sInfo":         "Data _START_ - _END_ dari _TOTAL_ entri",
            "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
            "sInfoFiltered": "",
            "sInfoPostFix":  "",
            "sSearch":       "Cari:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Pertama",
                "sPrevious": "last",
                "sNext":     "next",
                "sLast":     "Terakhir"
            }
        },
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Rincian Dari '+data[0];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
} );

</script>