<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Perjalanan Pesawat</h1>
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
              <form action="<?= base_url('biaya/pesawat/do_add') ?>" method="post">
                <div class="form-group">
                  <label for="kota_asal">Kota Asal</label>
                  <input type="text" name="kota_asal" class="form-control" id="kota_asal" value="KOTA BANJARMASIN" required>
                </div>
                <div class="form-group">
                  <label for="kota_tujuan">Kota Tujuan</label>
                  <input type="text" class="form-control" id="kota_tujuan" name="kota_tujuan" list="kabupatenOptions">

                  <datalist id="kabupatenOptions">
                    <?php foreach($kabupaten as $k): ?>
                      <option value="<?= $k['name'] ?>">
                    <?php endforeach; ?>
                  </datalist>
                  
                  <!-- <input type="text" name="kota_tujuan" class="form-control" id="kota_tujuan" required> -->
                </div>

                <div class="form-group">
                  <label for="kelas_bisnis">Biaya Kelas Bisnis</label>
                  <input type="number" value="0" min="0" name="kelas_bisnis" class="form-control" id="kelas_bisnis" required>
                </div>
                <div class="form-group">
                  <label for="kelas_ekonomi">Biaya Kelas Ekonomi</label>
                  <input type="number" value="0" min="0" name="kelas_ekonomi" class="form-control" id="kelas_ekonomi" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">SIMPAN DATA PERJALANAN</button>
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