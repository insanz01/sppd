<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
      .custom-table td {
        border-top: 0 !important;
      }

      .no-border {
        border: none;
      }

      @media print {
        .baris-baru { page-break-after: always; }
      }
    </style>

    <title>Data Penolakan Surat Perintah Perjalanan Dinas</title>
  </head>
  <body class="container-fluid">
    <div class="mt-4">
      <div class="row">
        <div class="col-8 mx-auto">
          <div class="row">
            <div class="col-2">
              <img src="<?= base_url('assets\bahan\icon1.png') ?>" width="220px" alt="gambar">
            </div>
            <div class="col-1"></div>
            <div class="col-9">
              <h3 class="text-center">PEMERINTAH KOTA BANJARMASIN</h3>
              <h4 class="text-center">DINAS KETAHANAN PANGAN, PERTANIAN DAN PERIKANAN</h4>
              <p class="text-center">Jl. Pangeran Hidayatullah/Lingkar Dalam Utara Telp. 0511-3201327 Kel. Benua Anyar Kec. Banjarmasin Timur 70239</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <hr style="border: 2px solid black">
            </div>
          </div>
        </div>
      </div>
    </div>

    <h3 class="text-center mb-2">Data Penolakan Surat Perintah Perjalanan Dinas</h3>

    <table class="table table-bordered">
      <thead>
        <th>#</th>
        <th>Nomor SPPD</th>
        <th>NIP Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Alasan</th>
      </thead>
      <tbody>
        <?php $nomor = 1 ?>
        <?php foreach($all_surat as $surat): ?>
          <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $surat['nomor_SPPD'] ?></td>
            <td><?= $surat['nip_karyawan'] ?></td>
            <td><?= $surat['nama_karyawan'] ?></td>
            <td><?= $surat['alasan'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script>
      window.addEventListener('load', () => {
        window.print();
      });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>