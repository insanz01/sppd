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
    </style>

    <title>Surat Perintah Tugas</title>
  </head>
  <body class="container-fluid">
    
    <h1 class="text-center">SURAT PERINTAH TUGAS</h1>
    <h4 class="text-center">SPPD NOMOR : <?= $surat['nomor_sppd']; ?></h4>

    <div class="row mt-4">
      <div class="col-9 mx-auto">
        <p>Kepala Dinas Pertanian dan Perikanan Kota Banjarmasin memerintahkan kepada :</p>
      </div>
    </div>

    <div class="row">
      <div class="col-9 mx-auto">
        <table class="table custom-table" style="width: 100%">
          <tr>
            <td width="30%">Nama  / NIP</td>
            <td width="70%"><?= $surat['nama_karyawan']; ?> / <?= $surat['nip_karyawan']; ?></td>
          </tr>
          <tr>
            <td width="30%">Pangkat / Gol</td>
            <td width="70%"><?= $surat['pangkat']; ?>  (<?= $surat['golongan']; ?>)</td>
          </tr>
          <tr>
            <td width="30%">Jabatan</td>
            <td width="70%"><?= $surat['jabatan']; ?></td>
          </tr>
        </table>
      </div>

      <div class="col-9 mx-auto">
        <p>Untuk melaksanakan perjalanan dinas :</p>
        <table class="table custom-table" style="width: 100%">
          <tr>
            <td width="30%">Dalam Rangka</td>
            <td width="70%"><?= $surat['rangka_acara']; ?></td>
          </tr>
          <tr>
            <td width="30%">Tujuan</td>
            <td width="70%"><?= $surat['tujuan'] ?></td>
          </tr>
          <tr>
            <td width="30%">Pada tanggal</td>
            <td width="70%"><?= $surat['tanggal_kegiatan'] ?></td>
          </tr>
          <tr>
            <td width="30%">Atas Beban</td>
            <td width="70%"><?= $surat['atas_beban'] ?></td>
          </tr>
        </table>
      </div>

      <div class="col-9 mx-auto">
        <p>Demikian Surat Perintah Tugas ini diberikan untuk dilaksanakan dengan penuh tanggung jawab.</p>
      </div>
    </div>

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