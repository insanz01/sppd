<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Surat Perintah Tugas</h1>
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
              <form action="<?= base_url('pengajuan/do_edit_spt/') . $hash_id ?>" method="post">
                <input type="hidden" name="hash_id" value="<?= $hash_id ?>">
                <div class="form-group">
                  <label for="nomor_SPPD">Nomor SPPD</label>
                  <input type="text" name="nomor_SPPD" class="form-control" id="nomor_SPPD" value="<?= $laporan['nomor_SPPD'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="nip_karyawan">NIP Karyawan (Yang diperintah)</label>
                  <input type="text" name="nip_karyawan" class="form-control" id="nip_karyawan" value="<?= $laporan['nip_karyawan'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="nama_karyawan">Nama Karyawan (Yang diperintah)</label>
                  <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan" value="<?= $laporan['nama_karyawan'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="pangkat">Pangkat</label>
                  <input type="text" name="pangkat" class="form-control" value="<?= $laporan['pangkat'] ?>" id="pangkat" required>
                </div>
                <div class="form-group">
                  <label for="golongan">Golongan</label>
                  <input type="text" name="golongan" class="form-control" id="golongan" value="<?= $laporan['golongan'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?= $laporan['jabatan'] ?>" required>
                </div>

                <div class="form-group">
                  <label for="rangka_acara">Rangka Acara</label>
                  <textarea name="rangka_acara" class="form-control" id="rangka_acara" cols="30" rows="10"><?= $laporan['rangka_acara'] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="tujuan">Tujuan</label>
                  <textarea name="tujuan" class="form-control" id="tujuan" cols="30" rows="10"><?= $laporan['tujuan'] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="tanggal_kegiatan">Tanggal kegiatan</label>
                  <input type="text" name="tanggal_kegiatan" class="form-control" id="tanggal_kegiatan" value="<?= $laporan['tanggal_kegiatan'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="atas_beban">Atas Beban</label>
                  <textarea name="atas_beban" class="form-control" id="atas_beban" required><?= $laporan['atas_beban'] ?></textarea>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">EDIT LAPORAN PERINTAH TUGAS</button>
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