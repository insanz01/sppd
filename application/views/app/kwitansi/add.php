<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Penyerahan BPD</h1>
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
              <form action="<?= base_url('kwitansi/do_add') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="user_id">Karyawan</label>
                  <select name="user_id" id="user_id" class="form-control">
                    <option value="">- PILIH -</option>
                    <?php foreach($karyawan as $k): ?>
                      <option value="<?= $k['id'] ?>">
                        <span class="font-weight-bold"><?= $k['nomor_SPPD'] ?></span> | <?= $k['nama'] ?> (<?= $k['NIP'] ?>)
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="file_kwitansi">File Bukti</label>
                  <input type="file" name="file_kwitansi" class="form-control" id="file_kwitansi" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">SIMPAN DATA PENYERAHAN BPD</button>
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