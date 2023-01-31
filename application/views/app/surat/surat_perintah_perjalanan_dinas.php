<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td>1.</td>
          <td>Pejabat yang berwenang Memberi Perintah</td>
          <td><?= $surat['author'] ?></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Nama / NIP Pegawai yang diperintahkan</td>
          <td><?= $surat['nama_karyawan'] ?> / <?= $surat['nip_karyawan'] ?></td>
        </tr>
        <tr>
          <td rowspan="3">3.</td>
          <td>
            a. Pangkat dan Golongan Ruang Gaji menurut PP. NO. 11 Tahun 2003
          </td>
          <td><?= $surat['pangkat'] ?>(<?= $surat['golongan'] ?>)</td>
        </tr>
        <tr>
          <!-- <td></td> -->
          <td>
            b. Jabatan / Instansi
          </td>
          <td><?= $surat['jabatan'] ?></td>
        </tr>
        <tr>
          <td>
            c. Tingkat menurut peraturan perjalanan Dinas
          </td>
          <td><?= $surat['tingkat_perjalanan_dinas'] ?></td>
        </tr>
        <tr>
          <td>4.</td>
          <td>
            Maksud Perjalanan Dinas
          </td>
          <td><?= $surat['maksud_perjalanan_dinas'] ?></td>
        </tr>
        <tr>
          <td>5.</td>
          <td>
            Alat angkutan yang diperlukan
          </td>
          <td><?= $surat['alat_angkutan'] ?></td>
        </tr>
        <tr>
          <td rowspan="2">6.</td>
          <td>
            a. Tempat Berangkat
          </td>
          <td><?= $surat['tempat_berangkat'] ?></td>
        </tr>
        <tr>
          <td>
            b. Tempat Tujuan
          </td>
          <td><?= $surat['tempat_tujuan'] ?></td>
        </tr>
        <tr>
          <td rowspan="3">7.</td>
          <td>
            a. Lamanya Perjalanan Dinas
          </td>
          <td><?= $surat['lama_dinas'] ?></td>
        </tr>
        <tr>
          <td>
            b. Tanggal Berangkat
          </td>
          <td><?= $surat['tanggal_berangkat'] ?></td>
        </tr>
        <tr>
          <td>
            c. Tanggal harus kembali / tiba di tempat baru
          </td>
          <td><?= $surat['tanggal_kembali'] ?></td>
        </tr>
        <tr>
          <td>8.</td>
          <td colspan="2">
            <table class="table" style="width: 100%">
              <thead>
                <tr>
                  <th width="10%">Pengikut</th>
                  <th width="30%">Nama</th>
                  <th width="10%">Tanggal Lahir</th>
                  <th width="50%">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomor = 1; ?>
                <?php if($surat['pengikut']): ?>
                  <?php foreach ($surat['pengikut'] as $p):?>
                    <tr>
                      <td><?= $nomor++ ?></td>
                      <td><?= $p['nama'] ?></td>
                      <td><?= $p['tanggal_lahir'] ?></td>
                      <td><?= $p['keterangan'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td rowspan="3">9.</td>
          <td>Pembebanan Anggaran</td>
        </tr>
        <tr>
          <td>a. Instansi</td>
          <td><?= $surat['beban_anggaran_instansi'] ?></td>
        </tr>
        <tr>
          <td>b. Mata Anggaran</td>
          <td><?= $surat['beban_anggaran_mata_anggaran'] ?></td>
        </tr>
        <tr>
          <td>10.</td>
          <td>Keterangan Lain-lain</td>
          <td><?= $surat['keterangan_lainnya'] ?></td>
        </tr>
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