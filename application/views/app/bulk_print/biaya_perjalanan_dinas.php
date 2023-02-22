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

    <title>Biaya Perjalanan Dinas</title>
  </head>
  <body class="container-fluid">

    <?php foreach($all_surat as $surat): ?>
    <div class="baris-baru">
      <h1 class="text-center py-3">PERINCIAN BIAYA PERJALANAN DINAS</h1>
  
      <div class="row mt-4">
        <div class="col-9 mx-auto">
          <table class="no-border" style="width: 100%">
            <tr>
              <td width="20">Lampiran</td>
              <td width="10">:</td>
              <td width="20"></td>
            </tr>
            <tr>
              <td width="20">Nomor SPPD</td>
              <td width="10">:</td>
              <td width="20"><?= $surat['nomor_SPPD'] ?></td>
            </tr>
            <tr>
              <td width="20">Tanggal</td>
              <td width="10">:</td>
              <td width="20"><?= date("d M Y", strtotime($surat['tanggal'])) ?></td>
            </tr>
          </table>
        </div>
      </div>
  
      <div class="row mt-4">
        <div class="col-9 mx-auto">
          <table class="table table-bordered">
            <thead>
              <th>No</th>
              <th>Perincian Biaya</th>
              <th>Jumlah</th>
              <th>Keterangan</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><?= $surat['perincian_biaya'] ?></td>
                <td>Rp <?= number_format($surat['jumlah_biaya'], 0, ',', '.') ?></td>
                <td><?= $surat['keterangan'] ?></td>
              </tr>
              <tr>
                <td></td>
                <td>Jumlah</td>
                <td>Rp <?= number_format($surat['jumlah_biaya'], 0, ',', '.') ?></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td colspan="3"><?= $surat['jumlah_biaya'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  
      <div class="row mt-5">
        <div class="col-9 mx-auto">
          <table class="no-border" style="width: 100%">
            <tr>
              <td width="30%"></td>
              <td width="40%"></td>
              <td width="30%">Banjarmasin, <?= date("M Y", strtotime($surat['tanggal'])) ?></td>
            </tr>
            <tr>
              <td width="30%">Telah dibayar sejumlah</td>
              <td width="40%"></td>
              <td width="30%">Telah menerima jumlah</td>
            </tr>
            <tr>
              <td width="30%">Rp <?= number_format($surat['jumlah_biaya'], 0, ',', '.') ?></td>
              <td width="40%"></td>
              <td width="30%">Uang Sebesar Rp <?= number_format($surat['jumlah_biaya'], 0, ',', '.') ?></td>
            </tr>
            <tr>
              <td width="30%"></td>
              <td width="40%"></td>
              <td width="30%"></td>
            </tr>
            <tr>
              <td width="30%">Bendaharawan Pengeluaran</td>
              <td width="40%"></td>
              <td width="30%">Yang Menerima,</td>
            </tr>
          </table>
          <table class="no-border mt-5" style="width: 100%">
            <tr>
              <td width="30%"><?= $surat['nama_bendaharawan'] ?></td>
              <td width="40%"></td>
              <td width="30%"><?= $surat['nama_karyawan'] ?></td>
            </tr>
            <tr>
              <td width="30%">NIP. <?= $surat['NIP_bendaharawan'] ?></td>
              <td width="40%"></td>
              <td width="30%">NIP. <?= $surat['NIP_karyawan'] ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

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