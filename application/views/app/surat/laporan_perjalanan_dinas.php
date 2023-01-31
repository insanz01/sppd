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

    <title>Surat Perintah Perjalanan Dinas</title>
  </head>
  <body class="container-fluid">

    <div class="container mt-4">
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
    
    <h4 class="text-center my-4">LAPORAN PERJALANAN DINAS</h4>

    <div class="row">
      <div class="col-9 mx-auto">
        <table class="table custom-table" style="width: 100%">
          <tr>
            <td width="30%">Kepada Yth</td>
            <td width="70%"><?= $surat['penerima_surat'] ?></td>
          </tr>
          <tr>
            <td width="30%">Dari</td>
            <td width="70%"><?= $surat['pengirim_surat'] ?></td>
          </tr>
          <tr>
            <td width="30%">Tanggal</td>
            <td width="70%"><?= date('d M Y', strtotime($surat['tanggal_kegiatan'])) ?></td>
          </tr>
          <tr>
            <td width="30%">Hal</td>
            <td width="70%"><?= $surat['perihal'] ?></td>
          </tr>
        </table>
      </div>

      <div class="col-9 mx-auto my-3">
        <h5>A. DASAR</h5>
        <div class="pl-4">
          <?= $surat['poin_dasar'] ?>
        </div>
      </div>

      <div class="col-9 mx-auto my-3">
        <h5>B. NAMA KEGIATAN WAKTU DAN TEMPAT KEGIATAN</h5>
        <div class="pl-4">
          <table class="table custom-table" style="width: 100%">
            <tbody>
              <tr>
                <td width="30%">Kegiatan</td>
                <td width="70%"><?= $surat['kegiatan'] ?></td>
              </tr>
              <tr>
                <td width="30%">Waktu Pelaksanaan</td>
                <td width="70%"><?= $surat['waktu_pelaksanaan'] ?></td>
              </tr>
              <tr>
                <td width="30%">Tempat Pelaksanaan</td>
                <td width="70%"><?= $surat['tempat_pelaksanaan'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="col-9 mx-auto my-3">
        <h5>C. HASIL KEGIATAN</h5>
        <div class="pl-4">
        <?= $surat['poin_hasil_kegiatan'] ?>
        </div>
      </div>

      <div class="col-9 mx-auto my-3">
        <h5>D. KESIMPULAN DAN SARAN</h5>
        <div class="pl-4">
          <?= $surat['poin_kesimpulan_saran'] ?>
        </div>
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