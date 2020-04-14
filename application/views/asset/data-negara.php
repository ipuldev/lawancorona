<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
<style type="text/css">
  .dataTables_paginate{
    display: none;
    font-size: 12px;
}
</style>
<!-- Pengecekan Tahap awal covid-19 -->
<div class="container">
<div class="text-center border-bottom">
  <div class="col-12 mt-6 margin-law ">
  <h5 class="title-2 border-bottom col-8 m-auto">Data Penyebaran COVID-19</h5>
  </div>

<div class="col-12 text-center">
 <p class="mt-3">Data setiap Negara <img class="icon-map" src="<?= base_url()?>asset/picture/map.svg" alt="data-negara-corona"></p>
</div>
</div>
<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Negara</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meniggal</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($negara as $value) { ?>
            <tr>
                <td class="text-left"><?= $value['attributes']['Country_Region'] ?></td>
                <td class="text-left"><?= $value['attributes']['Confirmed'] ?></td>
                <td><?= $value['attributes']['Recovered'] ?></td>
                <td><?= $value['attributes']['Deaths'] ?></td>
            </tr>
         <?php }  ?>
        </tbody>
    </table>
  <div class="donation text-center mt-4 mb-4">
    <a href="https://kitabisa.com/campaign/indonesialawancorona/donation-amount?slug=indonesialawancorona" class="btn btn-primary btn-donate shadow">DONASI LAWAN CORONA <img class="icon-map-2 bg-white" src="<?= base_url()?>asset/picture/donation.svg" alt="donasi-corona"></a>
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
                        return data[0];
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