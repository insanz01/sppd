<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Surat Pengganti</h1>
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
              <form action="<?= base_url('pengganti/do_add') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nomor_SPPD">Nomor SPPD</label>
                  <select name="nomor_SPPD" class="form-control" id="nomor_SPPD" required>
                    <option value="">- PILIH -</option>
                    <?php foreach($SPPD as $sppd): ?>
                      <option value="<?= $sppd['nomor_SPPD'] ?>"><?= $sppd['nomor_SPPD'] ?> | [ <?= $sppd['maksud_perjalanan_dinas'] ?> ]</option>
                    <?php endforeach; ?>
                  </select>
                  <!-- <input type="text" name="nomor_SPPD" class="form-control" id="nomor_SPPD" required> -->
                </div>
                <div class="form-group">
                  <label for="nip_karyawan">NIP Karyawan</label>
                  <input type="text" name="nip_karyawan" id="nip_karyawan" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="nama_karyawan">Nama Karyawan</label>
                  <input type="text" name="nama_karyawan" id="nama_karyawan" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="nip_karyawan_pengganti">NIP Karyawan Pengganti</label>
                  <input type="text" name="nip_karyawan_pengganti" id="nip_karyawan_pengganti" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="nama_karyawan_pengganti">Nama Karyawan Pengganti</label>
                  <input type="text" name="nama_karyawan_pengganti" id="nama_karyawan_pengganti" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="file_dokumen">Upload Surat Penolakan / Pembatalan</label>
                  <input type="file" name="file_dokumen" id="file_dokumen" class="form-control" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">BUAT PENGGANTI SPPD</button>
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