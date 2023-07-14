<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Perjalanan Taxi</h1>
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
              <form action="<?= base_url('biaya/taxi/do_add') ?>" method="post">
                <div class="form-group">
                  <label for="nama_provinsi">Nama Provinsi</label>
                  <input type="text" name="nama_provinsi" class="form-control" id="nama_provinsi" value="Kalimantan Selatan" required>
                </div>
                <div class="form-group">
                  <label for="satuan">Satuan</label>
                  <input type="text" name="satuan" class="form-control" id="satuan" required>
                </div>
                <div class="form-group">
                  <label for="besaran">Besaran (Rp)</label>
                  <input type="number" min="0" name="besaran" class="form-control" id="besaran" required>
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