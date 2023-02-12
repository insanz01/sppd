<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pengajuan Laporan Perjalanan Dinas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active"></li>
          </ol> -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="<?= base_url('pengajuan/add_lpd') ?>" method="post">
                <div class="form-group">
                  <label for="penerima_surat">Tujuan (Penerima Surat)</label>
                  <input type="text" name="penerima_surat" class="form-control" id="penerima_surat" required>
                </div>
                <div class="form-group">
                  <label for="pengirim_surat">Pengirim Surat</label>
                  <input type="text" name="pengirim_surat" class="form-control" id="pengirim_surat" required>
                </div>
                <div class="form-group">
                  <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
                  <input type="date" name="tanggal_kegiatan" class="form-control" id="tanggal_kegiatan" required>
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal</label>
                  <input type="text" name="perihal" class="form-control" id="perihal" required>
                </div>

                <div class="form-group">
                  <label for="kegiatan">Nama Kegiatan</label>
                  <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
                </div>
                <div class="form-group">
                  <label for="waktu_pelaksanaan">Waktu Pelaksanaan Kegiatan</label>
                  <input type="text" class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" required>
                </div>
                <div class="form-group">
                  <label for="tempat_pelaksanaan">Tempat Pelaksanaan Kegiatan</label>
                  <input type="text" class="form-control" id="tempat_pelaksanaan" name="tempat_pelaksanaan" required>
                </div>

                <div class="form-group">
                  <label for="poin_dasar">Poin Dasar</label>
                  <textarea name="poin_dasar" id="poin_dasar" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="poin_hasil_kegiatan">Poin Hasil Kegiatan</label>
                  <textarea type="text" name="poin_hasil_kegiatan" class="form-control" id="poin_hasil_kegiatan" required></textarea>
                </div>
                <div class="form-group">
                  <label for="poin_kesimpulan_saran">Poin Kesimpulan dan Saran</label>
                  <input type="poin_kesimpulan_saran" name="poin_kesimpulan_saran" class="form-control" id="poin_kesimpulan_saran" required>
                </div>

                <div class="form-group">
                  <label for="nama_petugas">Nama Petugas</label>
                  <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" required>
                </div>
                <div class="form-group">
                  <label for="NIP_petugas">NIP Petugas</label>
                  <input type="text" class="form-control" id="NIP_petugas" name="NIP_petugas" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">BUAT LAPORAN PERJALANAN DINAS</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  // const getNameOfMember = () => {

  // }
</script>